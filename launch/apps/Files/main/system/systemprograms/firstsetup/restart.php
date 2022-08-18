<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<div class="center noselect">
  <h1>Tour requires a restart.</h1>
  <br />
  <a target="_parent" id="finishsetup" href="../../../../../../../index.php" class="btn noselect">Restart</a>
  <br />
  <br />
</div>

<?php
$txt = "../../user/showtoursetup.txt";
file_put_contents("../../user/showtoursetup.txt", "");
if (isset($_POST['showsetupdata'])) { // check if both fields are set
    $fh = fopen($txt, 'a');
    $txt=$_POST['showsetupdata'];
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>

<script src="js/main.js"></script>
</body>

</html>
