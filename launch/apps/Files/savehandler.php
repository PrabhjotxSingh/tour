
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
  background-color: black;
  color: white;
}

h1{
  font-weight: 300;
}

.center{
  top: 50%;
  left: 50%;
  position: fixed;
  text-align: center;
  transform: translate(-50%, -50%);
}

.sh_btn {
  padding: 5px 10px;
  background-color: rgba(236, 240, 241, 1.0);
  color: black;
	margin: 10px;
  border: 1px solid #ecf0f1;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.sh_btn:hover {
  background-color: transparent;
  color: white;
}
</style>

<meta charset="utf-8"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,700i&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<title>Save Handler</title>
</head>
<body>

  <?php
	$name = $_POST['sh_name'];
	if (empty($name) OR ctype_space($name) OR preg_match('/\s/',$name)){
		$statusmsg = "File name error!";
		$helpmsg = "Make sure you entered a file name and there are no blank spaces.";
		$fadr = "None!";
		$locationraw = "[NO FILE STORED]";
	}
	else{
	$helpmsg = "You can view your file from the file manager app.";
	$locationraw = $_POST['sh_location'];
	$location = "main/" . $locationraw;
	$locationraw = $locationraw . '/' . $name;
	$statusmsg = "File has been saved!";
  $fadr = $location . "/" . $name;
  if (!file_exists($location)) {
    mkdir($location, 0777, true);
  }
  $txt = $fadr;
  file_put_contents($fadr, "");
  if (isset($_POST['sh_content'])) {
      $fh = fopen($txt, 'a');
      $txt=$_POST['sh_content'];
      fwrite($fh,$txt);
      fclose($fh);
  }
}
  ?>

<div class="center">
  <h1><?php echo $statusmsg; ?></h1>
	<p><?php echo $helpmsg; ?></p>
  <?php echo "Location of file: FILE MANAGER > " . $locationraw; ?>
  <br />
  <br />
  <br />
  <a onclick="history.back()" class="sh_btn">Back</a>
</div>

</body>

</html>
