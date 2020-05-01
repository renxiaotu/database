<?php
/**
 * User: www.renxiaotu.com
 * Date: 2020/05/01
 * Time: 16:55
 */

namespace Renxiaotu\database;

class RedisServer extends \Redis{
    public static function __callStatic($method, $params){
        return call_user_func_array([$this, $method], $params);
    }
}
