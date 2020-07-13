<?php

return [
    // 菜单类型
    'menu_type'  => 'admin',
    'guard_name'    => 'admin',

    'navigation_type' => [
        'admin' => '后台系统'
    ],

    'guard_names' => [
        'admin' => '后台守卫',
    ],

    'system_name' => env("ADMIN_SYSTEM_NAME", "后台管理系统"),
];