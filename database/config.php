<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASS','' );
DEFINE ('DB_NAME', 'blog');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection){
    die('connection error').mysqli_connect_error();
}else{
    //echo "connected";
}



?>