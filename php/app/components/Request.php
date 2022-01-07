<?php

namespace app\components;

class Request
{
    const GET = 'GET';
    const OPTIONS = 'OPTIONS';

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function uri(bool $decode = true)
    {
        if ($decode) {
            return urldecode($_SERVER['REQUEST_URI']);
        }
        return $_SERVER['REQUEST_URI'];
    }
//
//    public static function scheme()
//    {
//        return $_SERVER['REQUEST_SCHEME'];
//    }
//
//    public static function urI(bool $decode = true)
//    {
//        if ($decode) {
//            return urldecode($_SERVER['QUERY_STRING']);
//        }
//        return $_SERVER['QUERY_STRING'];
//    }
//
//    public static function urL(bool $decode = true)
//    {
//        if ($decode) {
//            return urldecode($_SERVER['QUERY_STRING']);
//        }
//        return $_SERVER['QUERY_STRING'];
//    }
//
//    public static function urN(bool $decode = true)
//    {
//        if ($decode) {
//            return urldecode($_SERVER['QUERY_STRING']);
//        }
//        return $_SERVER['QUERY_STRING'];
//    }
//
//    public static function queryParams(bool $decode = true)
//    {
//        if ($decode) {
//            return urldecode($_SERVER['QUERY_STRING']);
//        }
//        return $_SERVER['REQUEST_URI'];
//    }
//
//    public static function host(bool $decode = true)
//    {
//        if ($decode) {
//            return urldecode($_SERVER['SERVER_NAME']);
//        }
//        return $_SERVER['HTTP_HOST'];
//    }
//
//    public static function port()
//    {
//        return $_SERVER['SERVER_PORT'];
//    }
}
