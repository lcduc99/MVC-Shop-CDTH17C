<?php

$ROUTES= [
    [
        "method"   => "get",
        "path"     => "/",
        "process"  => "Controller/Home.controller(HomeController)"
    ],

    [
        "method"   => "get",
        "path"     => "/login",
        "process"  => "Controller/Login.controller(LoginController)"
    ],


    [
        "method"   => "get",
        "path"     => "/logout",
        "process"  => "Controller/Login.controller(LoginController)->Logout"
    ],

    [
        "method"   => "post",
        "path"     => "/login/submit",
        "process"  => "Controller/Login.controller(LoginController)->Submit"
    ],
    
    //trang thống kê
    [
        "method"   => "get",
        "path"     => "/statistical",
        "process"  => "Controller/Statistical.controller(StatisticalController)"
    ],
    //trang khach hang
    [
        "method"   => "get",
        "path"     => "/user_management",
        "process"  => "Controller/User.controller(UserController)"
    ],
    //trang quan li don hang
    
    [
        "method"   => "get",
        "path"     => "/order_management",
        "process"  => "Controller/Order.controller(OrderController)"
    ],
     //trang quan li don hang
    
     [
        "method"   => "get",
        "path"     => "/product_management",
        "process"  => "Controller/Product.controller(ProductController)"
    ],
     //trang quan li binh luan

     [
        "method"   => "get",
        "path"     => "/comment_management",
        "process"  => "Controller/Comment.controller(CommentController)"
     ],

     //duyet binh luan
     [
        "method"   => "get",
        "path"     => "/comment_management/confirm/[id]",
        "process"  => "Controller/Comment.controller(CommentController)->comment_confirmed",
        "constraint" => [
            "id" => "[\d]*"
        ]
     ],
     //xoa binh luan

     [
        "method"   => "get",
        "path"     => "/comment_management/remove/[id]",
        "process"  => "Controller/Comment.controller(CommentController)->comment_remove",
        "constraint" => [
            "id" => "[\d]*"
        ]
     ],

     //show du lieu khach hang
    //  [
    //     "method"   => "get",
    //     "path"     => "/user_management/profile/[id]",
    //     "process"  => "Controller/User.controller(UserController)->profile",
    //     "constraint" => [
    //         "id" => "[\d]*"
    //     ]
    //  ],

     //xoa du lieu khach hang
     [
        "method"   => "get",
        "path"     => "/user_management/remove/[id]",
        "process"  => "Controller/User.controller(UserController)->user_remove",
        "constraint" => [
            "id" => "[\d]*"
        ]
     ],
];


?>