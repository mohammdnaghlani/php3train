<?php
if(!session_id()){
    session_start() ;
}

//const var 
const BASE_URL = 'http://naghlani.mn/';
const BASE_PACH = 'C:\\xampp\\htdocs\\naghlani.local\\';

// table names

const USER_TBL_PACH = 'db\\users.json' ;

//include page
require_once ('functions.php'); 
require_once ('all_alert.php'); 


//uese function 
logout() ;