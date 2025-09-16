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

namespace Google\Service;

use Google\Exception as GoogleException;

class Exception extends GoogleException
{
    /**
     * Optional list of errors returned in a JSON body of an HTTP error response.
     */
    protected $errors = [];

    /**
     * Override default constructor to add the ability to set $errors and a retry
     * map.
     *
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     * @param array<array<string,string>>|null $errors List of errors returned in an HTTP
     * response or null.  Defaults to [].
     */
    public function __construct(
        $message,
        $code = 0,
        Exception $previous = null,
        $errors = []
    ) {
        if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
            parent::__construct($message, $code, $previous);
        } else {
            parent::__construct($message, $code);
        }

        $this->errors = $errors;
    }

    /**
     * An example of the possible errors returned.
     *
     * [
     *   {
     *     "domain": "global",
     *     "reason": "authError",
     *     "message": "Invalid Credentials",
     *     "locationType": "header",
     *     "location": "Authorization",
     *   }
     * ]
     *
     * @return array<array<string,string>>|null List of errors returned in an HTTP response or null.
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
