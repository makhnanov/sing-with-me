<?php

declare(strict_types=1);

// echo phpinfo();die;
// include 'youtube.html';die;

use app\components\Request;
use app\components\Response;

require_once __DIR__ . '/vendor/autoload.php';

Response::allowCors();

if (Request::OPTIONS === Request::method()) {
    return;
}

$defaultUri = Request::uri();


if (substr($defaultUri, 0, 7) === '/panel/') {
    require_once __DIR__ . '/panel/app/web/index.php';
    die;
}

$uri = ucfirst(
    ltrim(
        substr($defaultUri, 0, 5) === '/api/'
            ? substr($defaultUri, 5)
            : $defaultUri,
        '/'
    )
);

echo class_exists('app\controllers\\' . $uri)
    ? call_user_func_array(['app\controllers\\' . $uri, 'response'], [])
    : 404;
