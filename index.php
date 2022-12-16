<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <script src="js/mobile.js"></script>
    <title>ultimate media</title>
</head>
<body>
    <div class="links">
<div class="links-item"><h3><?php echo date("D. M d,Y");?></h3></div>
<div class="links-item"><h3 id="demo"><script>
    var myVar = setInterval(myTimer, 1000);
    function myTimer() {
        var d = new Date();
        document.getElementById("demo").innerHTML = d.toLocaleTimeString('en-US', { timeZone: 'Africa/Lagos'});
    }
    </script></h3></div>
<div class="links-item"><a href="#"><img src="img/facebook.png"/></a>
<a href="#"><img src="img/twitter.png"/></a>
<a href="#"><img src="img/twitter.png"/></a></div>
</div>
<header>

<div class="header"><img class="utm"src="img/ult.jpg" alt=""></div> 
<div class="header"><nav><ul>
<li><a href="#"> About Us</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</nav>
</div>
<div class="header" id="btn"><img class="btn" src="img/btn2.png" alt="" onclick="shownav()"></div>
<!-- <img clas="btn" src="img/btn2.png" alt=""> -->

</header>
<div id="mobile"></div>
<!-- <div class="notice"><div class="notice"><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, iusto suscipit. Qui, quidem itaque assumenda accusantium suscipit est voluptas quo tempora sit tenetur facere, nisi illum nulla repellendus maiores? Commodi?</div></p></div> -->

<?php include ('select.php');
while($row = mysqli_fetch_array($select2)){?>


<div class="content">
<div class="content-menu"><img src="img/<?php echo $row['img'];?>" height="200" width="200" alt=""></div>
<div class="content-menu">
  <a  class="newsup-categories category-color-1" href="">ART</a>
   <a  class="newsup-categories category-color-1" href="">CREATIVE</a>
   <h4 class="entry-title title"><a href="https://marychuks.com/married-couple-used-art-to-create-beautiful-forest-creatures/"><?php echo $row['title'];?>.</a></h4>
   <!-- <h5><?php //echo $row['content'];?></h5> -->
</div>


</div>
<?php }

?>
<!-- <div class="content">
<div class="content-menu"><img src="img/smoking.png" alt=""></div>
<div class="content-menu">
  <a  class="newsup-categories category-color-1" href="">ART</a>
   <a  class="newsup-categories category-color-1" href="">CREATIVE</a>
   <h4 class="entry-title title"><a href="https://marychuks.com/married-couple-used-art-to-create-beautiful-forest-creatures/">Married Couple used Art to Create Beautiful Forest Creatures.</a></h4>
</div>


</div> -->


</body>
</html>