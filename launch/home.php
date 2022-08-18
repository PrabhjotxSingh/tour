<!DOCTYPE html>
<html>
<head>

<!--
 _____   _____        ___   _____   _   _        _____   _   __   _   _____   _   _
|  _  \ |  _  \      /   | |  _  \ | | | |      /  ___/ | | |  \ | | /  ___| | | | |
| |_| | | |_| |     / /| | | |_| | | |_| |      | |___  | | |   \| | | |     | |_| |
|  ___/ |  _  /    / / | | |  _  { |  _  |      \___  \ | | | |\   | | |  _  |  _  |
| |     | | \ \   / /  | | | |_| | | | | |       ___| | | | | | \  | | |_| | | | | |
|_|     |_|  \_\ /_/   |_| |_____/ |_| |_|      /_____/ |_| |_|  \_| \_____/ |_| |_|

Tour: The version of GlassPiOS meant for developers.
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,700i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/alerts.css">
<link rel="icon" type="image/x-icon" href="../assets/fav.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The version of GlassPiOS meant for developers.">
<meta name="author" content="Prabhjot Singh">
<title>Tour</title>

<script type="text/javascript">
function logout() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
          xmlhttp = new XMLHttpRequest();
    }
    // code for IE
    else if (window.ActiveXObject) {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    if (window.ActiveXObject) {
      // IE clear HTTP Authentication
      document.execCommand("ClearAuthenticationCache");
      window.location.href='../index.php';
    } else {
        xmlhttp.open("GET", 'home.php', true, "logout", "logout");
        xmlhttp.send("");
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4) {window.location.href='../index.php';}
        }


    }


    return false;
}
</script>

</head>
<body style="background-color: black; color: white;">

<div id="load_screen"><div id="loading"><div class="loadingspin"></div></div></div>
<div class="bg-sizehome">
  <div class="color-overlayhome"></div>
</div>

<!-- First Setup -->
<?php $setupvisible = file_get_contents('apps/Files/main/system/user/showtoursetup.txt'); ?>
<style type="text/css">
.checkfsdata{
  display: <?php echo "$setupvisible" ?>;
}
</style>
<div class="checkfsdata">
<div class="containfs">

  <div class="fs-alert">
    <div class="overlay-alert"></div>
    <div class="alert snormal afade-aslide">
      <h2>Begin setup?</h2>
      <p>Looks like it's your first time using Tour.</p>
      <br />
      <a onclick="changefsiframe('apps/Files/main/system/systemprograms/firstsetup/index.php')" id="hide-fs-alert" class="alertbtn cwhite">START SETUP</a>
    </div>
  </div>
  <iframe id="iframefsid" class="iframefs" src="about:blank"></iframe>
</div>
</div>
<!-- First Setup End -->

<!-- Get User Data -->
<?php $usercolor = file_get_contents('apps/Files/main/system/user/usercolor.txt'); ?>
<?php $wallpaper = file_get_contents('apps/Files/main/system/user/wallpaper.txt'); ?>
<?php $blurpref = file_get_contents('apps/Files/main/system/user/blurpref.txt'); ?>
<?php $homebarpref = file_get_contents('apps/Files/main/system/user/homebarpref.txt'); ?>
<link rel="stylesheet" type="text/css" href="../css/blur/<?php echo "$blurpref" ?>.css">
<link rel="stylesheet" type="text/css" href="../css/homebar/<?php echo "$homebarpref" ?>.css">
<style type="text/css">
.color-overlaymenu {
  background-color: <?php echo "$usercolor" ?>;
}
.bg-sizehome {
	background-image: url('<?php echo "$wallpaper" ?>');
}
</style>
<!-- Get User Data End -->

<!-- User Menu -->
<?php $firstname = file_get_contents('apps/Files/main/system/user/firstname.txt'); ?>
<?php $lastname = file_get_contents('apps/Files/main/system/user/lastname.txt'); ?>

<div class="usermenuall">
<div class="usermenucontainer">
  <a class="usermenubtn" id="usermenutoggle"><?php echo "$firstname" ?> <?php echo "$lastname" ?></a>
</div>

<div class="usermenudisplay">
<div class="usermenucontent">
  <center>
  <a href="home.php" class="usermenuoptions">Refresh</a>
  <br /><br />
  <a href="#" onclick="logout();" class="usermenuoptions">Logout</a>
  <br /><br />
  <p id="batterlevelid"></p>
  </center>
</div>
</div>
</div>
<!--User menu end -->

<!-- Recent Apps -->
<div id="showrecent" class="hamburgercontain">
<div class="hambbar"></div>
<div class="hambbar"></div>
<div class="hambbar"></div>
</div>

<div class="recentall">
<div class="overlayrecentbox hiderecent"></div>
<div class="recentbox">
<div class="closeico hiderecent"></div>
<center>
<br /><br />
<h2>Open Apps</h2>
<!-- Show apps recent-->
        <?php
$dir = 'apps/*';

foreach(glob($dir) as $mp3)
{
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);

    $appname = file_get_contents('apps/'.$v[0].'/tourapp/name.txt');
    $appabout = file_get_contents('apps/'.$v[0].'/tourapp/about.txt');

    echo "<style>.appboxrecentdisplay".$v[0]."{display: none;}</style>";
    echo "<div class='appboxrecentdisplay".$v[0]."'><div title='$appabout' id='openbubble".$v[0]."' class='appboxrecent'><br /><img draggable='false' src='apps/".$v[0]."/tourapp/icon.png' class='appicon' /><br /><br />$appname<br /><br /></div></div>";

}
?>
<!--End of show apps recent-->
<br />
<br />
</center>
</div>
</div>
<!-- Recent apps End -->

<div class="centerdateandtime">
  <h1 class="timestyle" id="currentTime"></h1>
  <p class="datestyle" id="date"></p>
</div>

<div id="showmenu" class="menubar"></div>

<!-- Menu End -->

<div class="menuall">
  <div class="color-overlaymenu hidemenu"></div>
  <div class="menubarclose hidemenu"></div>
  <div class="menuhead">Apps</div>
  <div class="menucontainer">
    <div class="contentcontainmenu">
      <center>
<br>
<!-- Show apps -->
        <?php
$dir = 'apps/*';

foreach(glob($dir) as $mp3)
{
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);

    $appname = file_get_contents('apps/'.$v[0].'/tourapp/name.txt');
    $appabout = file_get_contents('apps/'.$v[0].'/tourapp/about.txt');

    echo "<div class='inlineapp appboxdisplay".$v[0]."'><div title='$appabout' onclick=\"openAPP".$v[0]."('apps/".$v[0]."/start_".$v[0].".php')\" id='open".$v[0]."' class='appbox'><br /><img draggable='false' src='apps/".$v[0]."/tourapp/icon.png' class='appicon' /><br /><br />$appname<br /><br /></div></div>";

}
?>
<!--End of show apps-->
      </center>
    </div>
  </div>
</div>
<!-- Menu End -->


<!--Window display-->
<?php
$dir = 'apps/*';

foreach(glob($dir) as $mp3)
{
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);
  $appname = file_get_contents('apps/'.$v[0].'/tourapp/name.txt');
	echo "<style type='text/css'>.".$v[0]."{display: none;};</style>";
	echo '<div class="'.$v[0].'"><div class="glasswindow"><div class="topbar"> <div class="topbartext">'.$appname.'</div></div> <div class="windowcontent"> <div class="menubarappcontainer"><div onclick="closeAPP'.$v[0].'(\'about:blank\')" id="closefully'.$v[0].'" class="closewindowfullybtn"></div> <div id="closebubble'.$v[0].'" class="bubblewindowbtn"></div> </div> <iframe class="appiframe" id="'.$v[0].'frameid" src="about:blank"></iframe></div></div></div>';
}
?>
<!-- Window display end-->


</body>

<script src="../js/frame.js"></script>
<!-- Load app js -->
<?php
$dir = 'apps/*';
foreach(glob($dir) as $mp3)
{
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);
	echo '
  <script>
  $(document).ready(function(){
      $("#closefully'.$v[0].'").click(function(){
          $(".'.$v[0].'").hide();
          $(".appboxrecentdisplay'.$v[0].'").hide();
      });

      $("#open'.$v[0].'").click(function(){
          $(".'.$v[0].'").show();
      });
  });

  $(document).ready(function(){
      $("#closebubble'.$v[0].'").click(function(){
          $(".'.$v[0].'").hide();
          $(".appboxrecentdisplay'.$v[0].'").show();
      });

      $("#openbubble'.$v[0].'").click(function(){
          $(".'.$v[0].'").show();
      });
  });


  function openAPP'.$v[0].'(url){
    document.getElementById("'.$v[0].'frameid").src = url;
  }

  function closeAPP'.$v[0].'(url){
    document.getElementById("'.$v[0].'frameid").src = url;
  }

  $("#closebubble'.$v[0].'").click(function () {
  $("body").append("<style>.appboxdisplay'.$v[0].'{display: none;}</style>")
  });

  $("#closefully'.$v[0].'").click(function () {
  $("body").append("<style>.appboxdisplay'.$v[0].'{display: inline-block;}</style>")
  });

  console.log("App Located: '.$v[0].'");
  </script>
  ';
}
?>
<!-- Load app js END-->

<!-- Plugins -->
<?php
$dir = 'apps/Files/main/system/plugins/*.txt';

foreach(glob($dir) as $mp3)
{
$k = pathinfo($mp3);
$m = $k['basename'];
$v = explode(".",$k['basename']);

$plugincode = file_get_contents('apps/Files/main/system/plugins/'.$v[0].'.txt');

echo "$plugincode";

}
?>

<!-- Plugins end -->

</html>
