<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("torrent");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a Torrent File.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Storage/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
 <link rel="stylesheet" href="style.css">
<title>Tenix Torrent Share</title>
<html>
   <body>
      <center><h1>Upload A Torrent To Our Storage To Host</h1> <br>
      <a href='https://kimbatt.github.io/torrent-creator/'>we recomend using an online torrent maker for longer hosting </a>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
      </form>
      </center>
   </body>
</html>
<center>
<h3>list of Torrents</h3> <br>
<iframe src="/Home/list.php" height="1000" width="700" title="Our List Of Torrents"></iframe>
</center>
