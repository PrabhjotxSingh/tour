<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="trix.css">
<script type="text/javascript" src="trix.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rich Text Editor</title>

</head>
<body>
<div id="load_screen"><div id="loading"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>


<style>
	trix-editor {
		height: 500px !important;
		max-height: 500px !important;
	  	overflow-y: auto !important;
	}
</style>

<div class="pagecontent">

<br />

<h2>Rich Text Editor</h1>


	<?php
  if(isset($_POST['loadbtn']))
  {
   //exists
   $loadfileraw = $_POST['load_location'];
   $loadfile = "../Files/main/" . $loadfileraw;
       if(file_exists($loadfile)){
       $loadfilecontent = file_get_contents($loadfile);
       echo '
			 <form method="post" action="../Files/savehandler.php">
		   <input id="x" type="hidden" name="sh_content">
		   <trix-editor input="x" id="rtetour">'.$loadfilecontent.'</trix-editor>
			 ';
      }
      else{
        echo '
			<form method="post" action="../Files/savehandler.php">
 		   <input id="x" type="hidden" name="sh_content">
 		   <trix-editor input="x" id="rtetour">The location [FILE MANAGER > ' .htmlspecialchars($loadfileraw). '] does not contain any such file.</trix-editor>

				';
      }
  }
  else{
    echo '
		<form method="post" action="../Files/savehandler.php">
		<input id="x" type="hidden" name="sh_content">
		<trix-editor input="x" id="rtetour"></trix-editor>
		';
  }
  ?>

	<br />

	<div class="savepopup">
	<div class="popupcontain">
		  <div class="centermod">
		    <a class="btn hidesavepopup">NEVERMIND</a>
		    <h2>SAVE TEXT FILE</h2>
		    <label>FILE NAME (REC .HTML):</label>
		    <br />
		    <input name="sh_name" placeholder="Add extension as well" class="inputst" type="text"><br><br>
		    <label>LOCATION:</label>
		    <br />
		    <input name="sh_location" value="myfiles/documents" placeholder="Path after file manager root.." class="inputst" type="text"><br><br>
		    <input class="btn" type="submit" name="savebtn" value="SAVE">
		  </div>
	</div>
</div>


  <a title="Content is saved to local storage as well." id="save" class="btn showsavepopup">SAVE</a>
	<a class="btn showloadpopup">LOAD</a>
  <a id="clear" title="Clears local storage and contents of textarea." class="btn">CLEAR</a>
</form>


</div>

<div class="loadpopup">
<div class="popupcontain">
  <div class="centermod">
    <a class="btn hideloadpopup">NEVERMIND</a>
    <h2>LOAD TEXT FILE</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label>PATH:</label>
      <br />
    <input value="myfiles/documents/file.txt" class="inputst" type="text" name="load_location" placeholder="Path..">
    <br /><br />
    <input class="btn" name="loadbtn" type="submit" value="LOAD">
    </form>
  </div>
</div>
</div>

<script src="js/main.js"></script>
</body>

</html>
