function shownav() {
    var nav = document.getElementById('mobile');
    var btn =document.getElementById('btn');
    var navs = "<nav2  style='background:red; display:flex; flex-direction:column;align-items: center;justify-content: space-between;'><ul style='display:flex; flex-direction:column;list-style-type: none;'><li style='padding:15px;color:white;'><a href='#'  style='text-decoration:none; color:white;'>About Us</a></li><li style='padding:15px;color:white;'><a href='#'  style='text-decoration:none; color:white;'>Blog</a></li> <li style='padding:15px;color:white;'><a href='#'  style='text-decoration:none; color:white;'>Contact us</a></li> </ul> </nav>";
    nav.innerHTML = navs;
    btn.innerHTML = "<button class='btn' style='background:none; border:none; font-size:30px;font-weight:bolder;' onclick='closenav()'>x</button>";

  
}

function closenav() {
    var nav = document.getElementById('mobile');
    var btn = document.getElementById('btn');
    nav.innerHTML = "";
    btn.innerHTML = '<img class="btn" src="img/btn2.png" alt="" onclick="shownav()"></div>';
}