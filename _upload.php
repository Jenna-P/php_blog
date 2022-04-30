<?php
   define("DOC_ROOT", $_SERVER['DOCUMENT_ROOT']."/");


   $title = $_POST['title'];
   $content = $_POST['content'];
   
   // $img_file = $_FILES['img_file'];
   $img_size = $_FILES['img_file']['size'];
   
   $filename = $_FILES["img_file"]["name"];
   $tempname = $_FILES["img_file"]["tmp_name"];    
   $folder = "/Applications/XAMPP/htdocs/php/uploads/";
   
   echo "<script>console.log('Debug Objects: " . $filename . "');</script>";   
   
    
?>