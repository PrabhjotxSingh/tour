<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
.showcolor{
  height: 100px;
  width: 400px;
  border-bottom: 1px solid rgba(255,255,255, 1);
  background-color: <?php echo $_POST["favcolor"]; ?>;
}
@media screen and (max-width: 1000px) {
  .showcolor{
    height: 50px;
    width: 200px;
    border-bottom: 1px solid rgba(255,255,255, 1);
    background-color: <?php echo $_POST["favcolor"]; ?>;
  }
}

</style>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<div class="center noselect">
  <h1>Wow, nice choice!</h1>
  <center>
  <div class="showcolor"></div>
</center>
  <br /><br />
  <a href="3-homebutton.php" class="btn noselect">It looks awesome!</a>
  <br />
  <br />
</div>


<?php
$txt = "../../user/usercolor.txt";
file_put_contents("../../user/usercolor.txt", "");
if (isset($_POST['favcolor'])) { // check if both fields are set
    $fh = fopen($txt, 'a');
    $txt=$_POST['favcolor'];
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>

<script src="js/main.js"></script>
</body>

</html>
