
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
html,
body{
	height: 100%;
}

body{
  font-family: 'Montserrat', sans-serif;
  margin: 0px;
}

.bar{
	position: fixed;
  height: 5%;
  width: 100%;
  background-color: #000;
}

.containfiles{
	position: fixed;
  height: 95%;
  width: 100%;
	top: 5%;
  background-color: white;
}


.topbarbutton{
	top: 2.5%;
	left: 2%;
	position: fixed;
	color: white;
	transform: translate(-50%, -50%);
}

iframe{
 border: none;
}

</style>

<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<title>Files Container</title>
</head>
<body>


<div class="bar">
	<div style="margin-left: 100px; cursor: pointer;" class="topbarbutton">
		<i onclick="window.history.back();" class="fa fa-lg fa-arrow-left control-icon"></i>
		<i id="home" style="margin-left: 50px; cursor: pointer;" onclick="setURL('main/files.php')" class="fa fa-lg fa-home control-icon"></i>
		<i style="margin-left: 50px; cursor: pointer;" onclick="window.history.forward();" class="fa fa-lg fa-arrow-right control-icon"></i>
	</div>
</div>

<div class="containfiles">

<iframe id="framefiles" height="100%" width="100%" src="main/files.php"></iframe>

</div>

<script type="text/javascript">

$("#home").click(function(){$("#framefiles").attr("src", "main/files.php")});

var h = document.getElementById("iframe").contentWindow.history
</script>

</body>

</html>
