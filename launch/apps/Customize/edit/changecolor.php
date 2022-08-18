
<!DOCTYPE html>
<html>
<head>
<title>Customize</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,700i&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>

<div class="centerchange">
<h2>Tour requires a refresh.</h2>
<p>In order for this setting to take affect, Tour must refresh.</p>
<br>
<a target="_parent" href="../../../home.php" class="btnchange">Refresh Now</a>
<br /><br /><br />
<a href="../start_Customize.php" class="btnchange">Back to Customize</a>
</div>

<?php
$txt = "../../Files/main/system/user/usercolor.txt";
file_put_contents("../../Files/main/system/user/usercolor.txt", "");
if (isset($_POST['favcolor'])) { // check if both fields are set
    $fh = fopen($txt, 'a');
    $txt=$_POST['favcolor'];
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>

<script type="text/javascript" src="../assets/script.js"></script>
</body>
</html>
