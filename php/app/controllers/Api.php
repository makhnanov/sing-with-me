<?php

namespace app\controllers;

use app\components\Response;

abstract class Api
{
    abstract protected function execute(): array;

    final public static function response()
    {
        Response::setJson();
        return json_encode(
//            return
            (new static())->execute()
        );
//    ;
    }

}
