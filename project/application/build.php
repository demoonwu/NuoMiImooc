<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用(application文件夹)公共文件
    '__file__' => ['common.php', 'config.php', 'database.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
    // 'demo'     => [
    //     '__file__'   => ['common.php'],
    //     '__dir__'    => ['behavior', 'controller', 'model', 'view'],
    //     'controller' => ['Index', 'Test', 'UserType'],//对应上面一行的controller
    //     'model'      => ['User', 'UserType'],
    //     'view'       => ['index/index'],
    // ],
        'demotest'     => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['behavior', 'controller', 'model', 'view'],
        'controller' => ['Index', 'Test', 'UserType'],//对应上面一行的controller
        'model'      => ['User', 'UserType'],
        'view'       => ['index/index'],
    ],
        'index'     => [
        //'__file__'   => ['common.php'],
        '__dir__'    => ['controller', 'view'],
        'controller' => ['Index',  'User'],//对应上面一行的controller
        // 'model'      => ['User', 'UserType'],
        'view'       => ['index/index','public/nav','public/head',"user/login","user/register"],
    ],
        'admin'     => [
        //'__file__'   => ['common.php'],
        '__dir__'    => ['controller', 'view'],
        'controller' => ['Index','Category'],//对应上面一行的controller
        // 'model'      => ['User', 'UserType'],
        'view'       => ['index/index','category/index','category/add','public/menu','public/header','public/footer'],
    ],
       

    // 其他更多的模块定义
];
