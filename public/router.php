<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019~2025 http://yshy.mingdi.xyz All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( 客服QQ:481844984 客服VX：927857669 )
// +----------------------------------------------------------------------
// | Author: 明帝网络传媒 创始人明帝 
// +----------------------------------------------------------------------
// $Id$

if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    require __DIR__ . "/index.php";
}