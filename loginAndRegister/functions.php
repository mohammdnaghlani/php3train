<?php
//public functions

function set_base_url(string $uri) : string 
{
    return BASE_URL . $uri ;
}

function select_data(string $db , int $data_type = 0)
{
    $select = file_get_contents(BASE_PACH . $db );
    $result = json_decode($select , $data_type);
    return $result ;
}
function insert_data(array $data , string $db)
{
    $data = json_encode($data);
    $insert = file_put_contents(BASE_PACH . $db , $data);
    if($insert){
        return true ;
    }
    return false ;
}
// find users

function find_user(string $email ,string $password) 
{
    $all_users = select_data(USER_TBL_PACH) ;
    $find_user = false ;
    foreach($all_users as $uid=> $user){
        if($user->email == $email && $user->password == $password ){
            $find_user = $user ;
            break;
        }
    }

    return $find_user ;
}

//user login
function do_login(string $email ,string $password) : bool
{
    $find_user = find_user( $email , $password) ;
    $do_login = false ;
    if(!$find_user){
        return false ;
    }
    $do_login = (array) $find_user;
    $_SESSION['login'] = [
        'is_login' => true ,
        'email' => $do_login['email'],
        'username' => $do_login['username'],
    ];
    return true ;
}

//user logout

function logout(){
    if(isset($_GET['logout']) && $_GET['logout'] == 'logout'){
        session_destroy();
        header('location:' . BASE_URL );
    }
    
    return true ;
}

//check login 
function user_is_login(){
    if(isset($_SESSION['login']) && $_SESSION['login']['is_login'] == true) {
        return true ;
    }
    return false ;
}
//check email 
function get_user_info(string $email , string $username) : bool
{
    $all_users = select_data(USER_TBL_PACH) ;
    $find_user = false ;
    foreach($all_users as $uid=> $user){
        if($user->email == $email || $user->username == $username){
            $find_user = true ;
            break;
        }
    }

    return $find_user ;
}
//add user
function add_user(array $user_info)
{
    $data = select_data( USER_TBL_PACH , 1) ;
    $data[] = $user_info ;
    $result = insert_data( $data , USER_TBL_PACH) ;
    if($result){
        return 'true' ;
    }
    return false ;
}
// register user
function register($username , $email , $password)  
{
    $find_info = get_user_info($email , $username) ;
    if($find_info){
        return 'user_is_there' ;
    }
   
    $user_info = [
        'username' => $username,
        'password' => $password,
        'email' => $email,
    ] ;
    $add_user = add_user($user_info);
    if($add_user){
        return 'user_register' ;
    }
    return false ;

}