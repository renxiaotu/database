<?php
/**
 * User: www.renxiaotu.com
 * Date: 2020/05/01
 * Time: 16:55
 */

namespace Renxiaotu\database;

use Redis;

class RedisServer extends Redis{

    private static function redis(){
        static $redis;
        if(!$redis)$redis=new RedisServer();
        return $redis;
    }

    public static function __callStatic($method, $params){
        return call_user_func_array([self::redis(), $method], $params);
    }
}
