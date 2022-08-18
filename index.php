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
<?php $selectedpage = file_get_contents('startpage.txt'); ?>
<meta http-equiv = "refresh" content = "4; url = <?php echo "startscreens/" . "$selectedpage" ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,700i&display=swap" rel="stylesheet">
<link rel="manifest" href="manifest.webmanifest">
<link rel="stylesheet" type="text/css" href="css/login-frame.css">
<link rel="icon" type="image/x-icon" href="assets/fav.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="assets/ios-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="The version of GlassPiOS meant for developers.">
<meta name="author" content="Prabhjot Singh">
<title>Tour</title>
</head>
<body style="background-color: black; color: white;">
<div id="load_screen"><div id="loading"><div class="loadingspin"></div></div></div>

<div class="colorsplash">
  <img draggable="false" width="1023px" src="assets/login/color-splash.png" />
</div>

<div class="centerstart">
  <center>
    <p style="font-weight: 700; font-size: 3em; font-style: italic;">TOUR</p>
</center>
</div>

</body>
<script src="js/login-frame.js"></script>
<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('sw.js');
}
</script>
</html>
