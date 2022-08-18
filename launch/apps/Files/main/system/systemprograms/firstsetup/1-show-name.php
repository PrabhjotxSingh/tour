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
  <h1>Hello, <?php echo $_POST["fnamep"]; ?> <?php echo $_POST["lnamep"]; ?>.</h1>
  <p>Nice to meet you!</p>
  <br />
  <a href="2-color.php" class="btn noselect">Hi!</a>
  <br />
  <br />
</div>


<?php
$txt = "../../user/firstname.txt";
file_put_contents("../../user/firstname.txt", "");
if (isset($_POST['fnamep'])) { // check if both fields are set
    $fh = fopen($txt, 'a');
    $txt=$_POST['fnamep'];
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>

<?php
$txt = "../../user/lastname.txt";
file_put_contents("../../user/lastname.txt", "");
if (isset($_POST['fnamep'])) { // check if both fields are set
    $fh = fopen($txt, 'a');
    $txt=$_POST['lnamep'];
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>

<script src="js/main.js"></script>
</body>

</html>
