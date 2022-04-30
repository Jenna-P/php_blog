<?php
    require('_conn.php');
    

    $no = $_POST['no'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    echo "<script>console.log('Debug Objects: " . $title . "');</script>";  
    
    require('_upload.php');

    if($result) {
        // 파일이 있을 경우
        $sql = "UPDATE `blog_table` SET  `title`='$title', `content`='$content' `img_file`='$filename', `img_size=$img_size`  WHERE `no`=$no";
    } else {
        // 파일이 없을 경우
        $sql = "UPDATE `blog_table` SET  `title`='$title', `content`='$content'  WHERE `no`=$no";
    }

   // Now let's move the uploaded image into the folder: image
 if (move_uploaded_file($tempname, $folder . basename($filename)))  {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
  
   

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Edited blog post successfully!');location.href='blog.php'</script>";
    }
?>