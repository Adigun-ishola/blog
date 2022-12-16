<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <?php include ('../database/config.php');?>
    <title>ultimate -post</title>
</head>
<body>
<div id="container">
    <form method="POST" action="config.php" enctype="multipart/form-data">
        <div class="input">
            <label for="title">Title</label>
            <input type="text" name="title" id="">
        </div>
        <div class="input">
            <label for="title">Date</label>
            <input type="text" name="date"  value="<?php date_default_timezone_set('Africa/Lagos'); echo date('M d, Y');?>" readonly="">
        </div>
        <div class="input">
            <label for="title">Time</label>
            <input type="text" name="time" id="" value="<?php date_default_timezone_set('Africa/Lagos'); echo date('h:i:s a');?>" readonly="">
        </div>
        <div class="input">
            <label for="title">Image</label>
            <input type="file" name="image" id="">
        </div>
        <div class="input">
            <!-- <label for="title">Title</label> -->
            <textarea name="content" id="" cols="30" rows="10" placeholder="content"></textarea>
        </div>
        <input type="submit" value="UPLOAD" name="upload">
    </form>

</div>

<!-- <div class="input">
            <label for="title">Title</label>
            <textarea name="" id="" cols="30" rows="10" placeholder="content"></textarea>
        </div> -->
</body>
</html>