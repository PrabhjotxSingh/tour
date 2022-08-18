
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<meta name="author" content="Prabhjot Singh">
<title>Music</title>
</head>
<body>
<div class="nomusicfound">
<div class="musiccentercard">
<h1>No Music Found</h1>
<p>Place music in the music folder located in the file manager.</p>
<br />
<a href="start_Music.php" class="refreshapp">Refresh</a>
</div>
</div>

<style>
ul{
padding: 0;
}

body{
	background-color: #F1F3F4;
}

body{
	font-family: 'Open Sans', sans-serif;
	margin: 0px;
}

h1{
	font-weight: 300;
}

h2{
	font-weight: 300;
}

h3{
	font-weight: 300;
}

.bottomplayer{
	position: fixed;
	bottom: 0;
	padding-bottom: 25px;
	left: 50%;
	transform: translate(-50%, 0%);
	background-color: #F1F3F4;
	width: 100%;
}

#playlist {
  list-style: none;
}
#playlist li a {
  color: black;
  text-decoration: none;
}
#playlist .current-song a {
  -webkit-transition: all 1s;
  transition: all 1s;
  background-color: black;
  color: white;
  padding: 2px;
}

.nomusicfound{
	display: block;
	position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom right, #000, #000);
    opacity: 1;
    z-index: 1;
}

.musiccentercard{
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: white;
	text-align: center;
}

.musicholder{
	height: 80%;
	width: 100%;
	position: absolute;
	background-color: #F1F3F4;
	overflow-y: scroll;
	padding-bottom: 5px;
}

.refreshapp {
  padding: 10px 20px;
  background-color: rgba(236, 240, 241, 1.0);
  color: black;
  border: 1px solid #ecf0f1;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.refreshapp:hover {
  background-color: transparent;
  color: white;
  border: 1px solid #fff;
}

/* APPS Skin END*/





</style>

<div class="bottomplayer">
<center>
    <audio src="" controls id="audioPlayer">
        Error
    </audio>
	</center>
	</div>
	<div class="musicholder">
<center>
    <ul id="playlist">
<?php
$dir = '../Files/main/myfiles/music/*.mp3';

foreach(glob($dir) as $mp3)
{
    $k = pathinfo($mp3);
    $m = $k['basename'];
    $v = explode(".",$k['basename']);
	echo '<style>.nomusicfound{display: none;}</style>';
    echo "<li><a href='../Files/main/myfiles/music/$m'>".$v[0]."</a></li>";

}
?>

    </ul>
	</center>
	</div>
    <script src="files/audioPlayer.js"></script>
    <script>
        // loads the audio player
        audioPlayer();
    </script>


</body>
</html>
