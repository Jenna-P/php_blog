<?php
   
    $no = $_POST['no'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    require('_upload.php');

    if($result) {
        // with file
        $sql = "UPDATE `blog_table` SET  `title`='$title', `content`='$content' `img_file`='$filename', `img_size=$img_size`  WHERE `no`=$no";
    } else {
        // without file
        $sql = "UPDATE `blog_table` SET  `title`='$title', `content`='$content'  WHERE `no`=$no";
    }

   // Now let's move the uploaded image into the folder: image
 if (move_uploaded_file($tempname, $folder . basename($filename)))  {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
  
   
    require('_conn.php');
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Edited blog post successfully!');location.href='blog.php'</script>";
    }

    $conn -> close();
?>