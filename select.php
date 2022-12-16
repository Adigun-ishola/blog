<?php
include ('database/config.php');
$select2 = mysqli_query($connection, "SELECT * FROM post WHERE img !=''");
if(!$select2){
echo "error";

}


?>