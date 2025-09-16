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

namespace Google\AuthHandler;

use Exception;
use GuzzleHttp\ClientInterface;

class AuthHandlerFactory
{
    /**
     * Builds out a default http handler for the installed version of guzzle.
     *
     * @return Guzzle6AuthHandler|Guzzle7AuthHandler
     * @throws Exception
     */
    public static function build($cache = null, array $cacheConfig = [])
    {
        $guzzleVersion = null;
        if (defined('\GuzzleHttp\ClientInterface::MAJOR_VERSION')) {
            $guzzleVersion = ClientInterface::MAJOR_VERSION;
        } elseif (defined('\GuzzleHttp\ClientInterface::VERSION')) {
            $guzzleVersion = (int) substr(ClientInterface::VERSION, 0, 1);
        }

        switch ($guzzleVersion) {
            case 6:
                return new Guzzle6AuthHandler($cache, $cacheConfig);
            case 7:
                return new Guzzle7AuthHandler($cache, $cacheConfig);
            default:
                throw new Exception('Version not supported');
        }
    }
}
