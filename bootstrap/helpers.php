<?php

// 辅助函数测试
function test_helper() {
    return 'OK';
}

//
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
