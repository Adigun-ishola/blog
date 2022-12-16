<?php 
include '../database/config.php';
if (isset($_POST['upload'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $img = $_FILES["image"]["name"];
    $content = $_POST['content'];
    $folder = '../img/'.$img;
// echo $date;
// echo $title;
// echo $time;
// echo $content;
    $insert = mysqli_query($connection, "INSERT INTO post(title, date, time, img, content) 
             VALUES ('$title','$date', '$time', '$img', '$content' )");
             if($insert){
                 if(move_uploaded_file($_FILES["image"]["tmp_name"], $folder)){
                     echo "<script> alert ('posted successfully')
                     location.href='index.php'</script>";
                 }else{
                     echo "There is a problem while uploading file(s)";
                 }
             }
}

?>