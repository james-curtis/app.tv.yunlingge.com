<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019~2025 http://yshy.mingdi.xyz All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( 官方QQ:927857669 客服VX：927857669 )
// +----------------------------------------------------------------------
// | Author: 明帝网络传媒 创始人明帝 
// +----------------------------------------------------------------------


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
