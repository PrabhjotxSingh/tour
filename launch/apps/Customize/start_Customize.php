
<!DOCTYPE html>
<html>
<head>
<title>Customize</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,700i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

<center>

<div class="banner">
  <h1>Customize Tour</h1>
  <p>Adjust Tour to the way you like it!</p>
</div>


<br />
<br />

<h1>My System</h1>
<p>View information about your system.</p>
<a id="showviewsystem" class="customize_btn">View System</a>
<div class="alert-viewsystem">
<div class="overlay-alert-viewsystem"></div>
<div class="alert">
<div id="hideviewsystem" class="alert-close">Close</div>
<h1>Tour</h1>

<p><b>Version:</b></p>
<?php
$version = file_get_contents('../Files/main/system/tourdata/version.txt');
echo "$version";
?>
<p><b>Contact me:</b></p>
<p>Instagram: @_p.gill_</p>
<p>Twitter: @PrabhSingh_</p>

<p><b>Made in OH</b></p>
</div>
</div>

<br />
<br />

<h1>Change Color</h1>
<p>Edit your favorite color.</p>
<form method="post" action="edit/changecolor.php">
<input type="color" name="favcolor" value="#ecf0f1"><br><br>
<input value="Change" class="customize_btn" type="submit" />
</form>

<br />
<br />

<h1>Edit Name</h1>
<p>Change the first and last name shown in Tour.</p>
<form method="post" action="edit/changename.php">
<input name="fnamep" type="text" class="fname" placeholder="First name" /><input name="lnamep" type="text" class="lname" placeholder="Last name" />
<br />
<input type="submit" value="Change" class="customize_btn" />
</form>

<br />
<br />

<h1>Change Wallpaper</h1>
<p>Change the image that shows on the Tour homepage.</p>
<form method="post" action="edit/changewallpaper.php">
<input name="wallpaper" type="text" class="fname" placeholder="URL of image" />
<br />
<input type="submit" value="Change" class="customize_btn" />
</form>

<br />
<br />

<h1>Change Start Screen</h1>
<p>Change the screen that logs into Tour.</p>
<div class="sscontain">
  <!-- Show start screens -->
  <form method='post'>
          <?php
  $dir = '../../../startscreens/*';

  foreach(glob($dir) as $mp3)
  {
      $k = pathinfo($mp3);
      $m = $k['basename'];
      $v = explode(".",$k['basename']);

      if(isset($_POST[$v[0]])) {
           $file = '../../../startpage.txt';
           file_put_contents($file, $m);
           header("Location: edit/changestartscreen.php");
       }

      echo "<input class='customize_btn' type='submit' name='".$v[0]."'";
      echo "value='".$v[0]."'/>";
  }
  ?>
  </form>
  </div>
  <!--End of show start screens-->

<br />
<br />

  <h1>Blur Settings</h1>
  <p>Tour uses heavy blur effects, disabling them may increase performance.</p>

  <?php
    if(isset($_POST['enableblur'])) {
      $file = '../Files/main/system/user/blurpref.txt';
      file_put_contents($file, "enableblur");
      header("Location: edit/changeblur.php");
    }
    if(isset($_POST['disableblur'])) {
      $file = '../Files/main/system/user/blurpref.txt';
      file_put_contents($file, "disableblur");
      header("Location: edit/changeblur.php");
    }
  ?>

  <form method='post'>
    <input class="customize_btn" type="submit" name="enableblur" value="Enable Blur"/>
    <input class="customize_btn" type="submit" name="disableblur" value="Disable Blur"/>
  </form>

<br />
<br />

<h1>Home Bar</h1>
<p>Pick between the slide or click only home bar.</p>
<?php
  if(isset($_POST['slidehomebar'])) {
    $file = '../Files/main/system/user/homebarpref.txt';
    file_put_contents($file, "slidehomebar");
    header("Location: edit/changehomebar.php");
  }
  if(isset($_POST['clickhomebar'])) {
    $file = '../Files/main/system/user/homebarpref.txt';
    file_put_contents($file, "clickhomebar");
    header("Location: edit/changehomebar.php");
  }
?>

<form method='post'>
  <input class="customize_btn" type="submit" name="slidehomebar" value="Use Slide Home Bar"/>
  <input class="customize_btn" type="submit" name="clickhomebar" value="Use Click Home Bar"/>
</form>


</center>
<br /><br /><br /><br />

<script type="text/javascript" src="assets/script.js"></script>
</body>
</html>
