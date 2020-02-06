<?php

namespace app\index\model;

use think\Model;

class Base extends Model
{
    public static $mydb = null, $cm = [];

    public static function init()
    {
        // self::$bcLength = config('base.bcLength');
        self::$cm = config("common");
        bcscale(self::$cm['bcLength']);

        // 暂时不使用数据库
        // self::$mydb = Db::connect([
        //    // 数据库类型
        //    'type'        => 'mysql',
        //    // 数据库连接DSN配置
        //    'dsn'         => '',
        //    // 服务器地址
        //    'hostname'    => '127.0.0.1',
        //    // 数据库名
        //    'database'    => 'thinkphp',
        //    // 数据库用户名
        //    'username'    => 'root',
        //    // 数据库密码
        //    'password'    => '',
        //    // 数据库连接端口
        //    'hostport'    => '',
        //    // 数据库连接参数
        //    'params'      => [],
        //    // 数据库编码默认采用utf8
        //    'charset'     => 'utf8',
        //    // 数据库表前缀
        //    'prefix'      => 'think_',
        //]);

    }


}