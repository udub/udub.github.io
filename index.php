<!DOCTYPE html>
<html>
  <head>
    <link href="main.css" rel="stylesheet">
    <script src="main.js" type="text/javascript"></script>
  </head>  
  <body>
   <!-- <div class="sky">
      <h1>U D U B M E</h1>
      <h3 id="demo"></h3>
    </div>
    <p id="comment"></p>
    <input type="text" id="textbox"></input>-->
    
    <video id="video" controls="controls" width="800" height="420">
      <source src="url.mp4" type="video/mp4">
    </video>
    <br>
    <div id="timepoints">
      <button type="button" onclick="myFunction();">Second Typing</button>
      <br>
      <button type="button" onclick="myFunction1();">"So Inconvenient"</button>
      <br>
      
      <form method="POST" action="index.php" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <input type="submit" name="submit_image" value="Upload">
      </form>
      <?php
        $host = 'localhost';
        $user = 'root';
        $pass = ' ';

        mysql_connect($host, $user, $pass);

        mysql_select_db('demo');
      ?>
      <?php

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

?>
      
    </div>
  </body>
</html>
