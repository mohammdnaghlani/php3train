<?php
require_once ('../init.php');
$inputs = [
    'username' , 
    'email',
    'password',
];
$msg = false;
$success = false;


if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['HTTP_ORIGIN'] == substr(BASE_URL , 0 ,-1)){
    foreach($inputs as $key => $input){    
        if(!isset($_POST[$input]) || empty(trim($_POST[$input]))){
                $msg = 'empty_info';                   
        }else{
            $success[$input] = $_POST[$input] ; 
        }
    }

        if(!$msg){
            $msg  = register($success['username'] , $success['email'] , $success['password']) ;
        }
}else{
    $msg = 'access_denide';
}

header('location:' . BASE_URL .'?regMsg=' . $msg) ;
exit();

