<?php
/**
 * 2007-2015 Leotheme
 *
 * NOTICE OF LICENSE
 *
 * Leo Quick Login And Social Login
 *
 * DISCLAIMER
 *
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2015 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}
class OAuthRequest
{

    private $parameters;
    private $http_method;
    private $http_url;
    // for debug purposes
    public $base_string;
    public static $version = '1.0';
    public static $POST_INPUT = 'php://input';

    public function __construct($http_method, $http_url, $parameters = null)
    {
        @$parameters or $parameters = array();
        $parameters = array_merge(OAuthUtil::parseParameters(parse_url($http_url, PHP_URL_QUERY)), $parameters);
        $this->parameters = $parameters;
        $this->http_method = $http_method;
        $this->http_url = $http_url;
    }

    /**
     * attempt to build up a request from what was passed to the server
     */
    public static function fromRequest($http_method = null, $http_url = null, $parameters = null)
    {
        $scheme = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") ? 'http' : 'https';
        @$http_url or $http_url = $scheme .
                '://' . $_SERVER['HTTP_HOST'] .
                ':' .
                $_SERVER['SERVER_PORT'] .
                $_SERVER['REQUEST_URI'];
        @$http_method or $http_method = $_SERVER['REQUEST_METHOD'];

        // We weren't handed any parameters, so let's find the ones relevant to
        // this request.
        // If you run XML-RPC or similar you should use this to provide your own
        // parsed parameter-list
        if (!$parameters) {
            // Find request headers
            $request_headers = OAuthUtil::getHeaders();

            // Parse the query-string to find GET parameters
            $parameters = OAuthUtil::parseParameters($_SERVER['QUERY_STRING']);

            // It's a POST request of the proper content-type, so parse POST
            // parameters and add those overriding any duplicates from GET
            if ($http_method == "POST" && @strstr($request_headers["Content-Type"], "application/x-www-form-urlencoded")) {
                $post_data = OAuthUtil::parseParameters(Tools::file_get_contents(self::$POST_INPUT));
                $parameters = array_merge($parameters, $post_data);
            }

            // We have a Authorization-header with OAuth data. Parse the header
            // and add those overriding any duplicates from GET or POST
            if (@Tools::substr($request_headers['Authorization'], 0, 6) == "OAuth ") {
                $header_parameters = OAuthUtil::splitHeader($request_headers['Authorization']);
                $parameters = array_merge($parameters, $header_parameters);
            }
        }

        return new OAuthRequest($http_method, $http_url, $parameters);
    }

    /**
     * pretty much a helper function to set up the request
     */
    public static function fromConsumerAndToken($consumer, $token, $http_method, $http_url, $parameters = null)
    {
        @$parameters or $parameters = array();
        $defaults = array("oauth_version" => OAuthRequest::$version,
            "oauth_nonce" => OAuthRequest::generateNonce(),
            "oauth_timestamp" => OAuthRequest::generateTimestamp(),
            "oauth_consumer_key" => $consumer->key);
        if ($token) {
            $defaults['oauth_token'] = $token->key;
        }

        $parameters = array_merge($defaults, $parameters);

        return new OAuthRequest($http_method, $http_url, $parameters);
    }

    public function setParameter($name, $value, $allow_duplicates = true)
    {
        if ($allow_duplicates && isset($this->parameters[$name])) {
            // We have already added parameter(s) with this name, so add to the list
            if (is_scalar($this->parameters[$name])) {
                // This is the first duplicate, so transform scalar (string)
                // into an array so we can add the duplicates
                $this->parameters[$name] = array($this->parameters[$name]);
            }

            $this->parameters[$name][] = $value;
        } else {
            $this->parameters[$name] = $value;
        }
    }

    public function getParameter($name)
    {
        return isset($this->parameters[$name]) ? $this->parameters[$name] : null;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function unsetParameter($name)
    {
        unset($this->parameters[$name]);
    }

    /**
     * The request parameters, sorted and concatenated into a normalized string.
     * @return string
     */
    public function getSignableParameters()
    {
        // Grab all parameters
        $params = $this->parameters;

        // Remove oauth_signature if present
        // Ref: Spec: 9.1.1 ("The oauth_signature parameter MUST be excluded.")
        if (isset($params['oauth_signature'])) {
            unset($params['oauth_signature']);
        }

        return OAuthUtil::buildHttpQuery($params);
    }

    /**
     * Returns the base string of this request
     *
     * The base string defined as the method, the url
     * and the parameters (normalized), each urlencoded
     * and the concated with &.
     */
    public function getSignatureBaseString()
    {
        $parts = array(
            $this->getNormalizedHttpMethod(),
            $this->getNormalizedHttpUrl(),
            $this->getSignableParameters()
        );

        $parts = OAuthUtil::urlencodeRfc3986($parts);

        return implode('&', $parts);
    }

    /**
     * just uppercases the http method
     */
    public function getNormalizedHttpMethod()
    {
        return Tools::strtoupper($this->http_method);
    }

    /**
     * parses the url and rebuilds it to be
     * scheme://host/path
     */
    public function getNormalizedHttpUrl()
    {
        $parts = parse_url($this->http_url);

        $port = @$parts['port'];
        $scheme = $parts['scheme'];
        $host = $parts['host'];
        $path = @$parts['path'];

        $port or $port = ($scheme == 'https') ? '443' : '80';

        if (($scheme == 'https' && $port != '443') || ($scheme == 'http' && $port != '80')) {
            $host = "$host:$port";
        }
        return "$scheme://$host$path";
    }

    /**
     * builds a url usable for a GET request
     */
    public function toUrl()
    {
        $post_data = $this->toPostdata();
        $out = $this->getNormalizedHttpUrl();
        if ($post_data) {
            $out .= '?' . $post_data;
        }
        return $out;
    }

    /**
     * builds the data one would send in a POST request
     */
    public function toPostdata()
    {
        return OAuthUtil::buildHttpQuery($this->parameters);
    }

    /**
     * builds the Authorization: header
     */
    public function toHeader($realm = null)
    {
        $first = true;
        if ($realm) {
            $out = 'Authorization: OAuth realm="' . OAuthUtil::urlencodeRfc3986($realm) . '"';
            $first = false;
        } else {
            $out = 'Authorization: OAuth';
        }

        $total = array();
        foreach ($this->parameters as $k => $v) {
            if (Tools::substr($k, 0, 5) != "oauth") {
                continue;
            }
            if (is_array($v)) {
                throw new OAuthException('Arrays not supported in headers');
            }
            $out .= ($first) ? ' ' : ',';
            $out .= OAuthUtil::urlencodeRfc3986($k) .
                    '="' .
                    OAuthUtil::urlencodeRfc3986($v) .
                    '"';
            $first = false;
        }
        return $out;
    }

    public function __toString()
    {
        return $this->toUrl();
    }

    public function signRequest($signature_method, $consumer, $token)
    {
        $this->setParameter("oauth_signature_method", $signature_method->getName(), false);
        $signature = $this->buildSignature($signature_method, $consumer, $token);
        $this->setParameter("oauth_signature", $signature, false);
    }

    public function buildSignature($signature_method, $consumer, $token)
    {
        $signature = $signature_method->buildSignature($this, $consumer, $token);
        return $signature;
    }

    /**
     * util function: current timestamp
     */
    private static function generateTimestamp()
    {
        return time();
    }

    /**
     * util function: current nonce
     */
    private static function generateNonce()
    {
        $mt = microtime();
        $rand = mt_rand();

        return md5($mt . $rand); // md5s look nicer than numbers
    }
}
