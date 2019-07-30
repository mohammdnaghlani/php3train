<?php

$get_methods = [
    'logout',
    'message',
    'regMsg',
];
$get_val = false ;
foreach($get_methods as $key => $val){
    if(isset($_GET[$val]) && !empty($_GET[$val])){
        $get_val = trim($_GET[$val]);
        break;
    }
}
$errors = [
    'login' => [
        'title' => 'موفقیت' ,
        'type' => 'success' ,
        'text' => 'شما با موفقیت به سیستم وارد شدید !' ,
    ] ,
    'user_register' => [
        'title' => 'موفقیت' ,
        'type' => 'success' ,
        'text' => 'شما با موفقیت در سیستم ثبت نام کردید  !' ,
    ],
    'empty_info' =>[
        'title' => 'خطا' ,
        'type' => 'warning' ,
        'text' => 'اطلاعات نمی تواند خالی ارسال شود !' ,
    ],
    'user_not_found' => [
        'title' => 'خطا' ,
        'type' => 'error' ,
        'text' => 'پست الکترونیک ویا کلمه عبور صحیح نمی باشد !' ,
    ] , 
    'access_denide' => [
        'title' => 'اووووخ' ,
        'type' => 'question' ,
        'text' => 'دقیقا دنبال چی میگردی  !' ,
    ],
    'try_again' => [
        'title' => 'اووووه' ,
        'type' => 'warning' ,
        'text' => 'مشکلی در سیستم رخداده است مجددا تلاش کنید !' ,
    ] ,
    'user_is_there' =>[
        'title' => 'خطا' ,
        'type' => 'error' ,
        'text' => 'نام کاربری و یا پست الکترونیک قبلا در سیستم ثبت شده است !' ,
    ]

] ;