
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Prabhjot Singh">
<title>Notepad</title>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  <div class="content_contain">
  <br />
  <h2>Notepad</h2>

  <?php
  if(isset($_POST['loadbtn']))
  {
   //exists
   $loadfileraw = $_POST['load_location'];
   $loadfile = "../Files/main/" . $loadfileraw;
       if(file_exists($loadfile)){
       $loadfilecontent = file_get_contents($loadfile);
       echo '<textarea id="notepadtour" placeholder="Type anything here..." name="sh_content" class="textspace">' .htmlspecialchars($loadfilecontent). '</textarea>';
      }
      else{
        echo '<textarea id="notepadtour" placeholder="Type anything here..." name="sh_content" class="textspace">The location [FILE MANAGER > ' .htmlspecialchars($loadfileraw). '] does not contain any such file.</textarea>';
      }
  }
  else{
    echo '<textarea id="notepadtour" placeholder="Type anything here..." name="sh_content" class="textspace"></textarea>';
  }
  ?>

  <br /><br />
  <a title="Content is saved to local storage as well." id="save" class="btn showsave">SAVE</a>
  <a class="btn showload">LOAD</a>
  <a id="clear" title="Clears local storage and contents of textarea." class="btn">CLEAR</a>
  <br />
</div>

<div class="savecontain">
  <div class="centermod">
    <a class="btn hidesave">NEVERMIND</a>
    <h2>SAVE TEXT FILE</h2>
    <label>FILE NAME:</label>
    <br />
    <input name="sh_name" placeholder="Add extension as well" class="inputst" type="text"><br><br>
    <label>LOCATION:</label>
    <br />
    <input name="sh_location" value="myfiles/documents" placeholder="Path after file manager root.." class="inputst" type="text"><br><br>
    <input class="btn" type="submit" name="savebtn" value="SAVE">
  </div>
</div>

</form>

<div class="loadcontain">
  <div class="centermod">
    <a class="btn hideload">NEVERMIND</a>
    <h2>LOAD TEXT FILE</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label>PATH:</label>
      <br />
    <input value="myfiles/documents/file.txt" class="inputst" type="text" name="load_location" placeholder="Path..">
    <br /><br />
    <input class="btn hideload" name="loadbtn" type="submit" value="LOAD">
    </form>
  </div>
</div>

<?php

if(isset($_POST['savebtn'])){


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
  $location = "../Files/main/" . $locationraw;
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

echo'

<div class="savestatcontain">
  <div class="centermod">
    <a class="btn hidesavestat">CLOSE</a>

    <h1>'. $statusmsg .'</h1>
  	<p>'. $helpmsg .'</p>
    <p>Location of file: FILE MANAGER > '. $locationraw .'</p>


  </div>
</div>

';

}

 ?>
<script src="js/main.js"></script>
</body>

</html>
