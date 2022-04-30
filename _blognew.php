<?php

require('_upload.php');

$sql = "INSERT INTO `blog_table` (`title`, `content`, `img_file`, `img_size`) VALUES ('$title', '$content', '$filename', '$img_size')";

 // Now let's move the uploaded image into the folder: image
 if (move_uploaded_file($tempname, $folder . basename($filename)))  {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}

echo "<script>console.log('upload: " . $msg . "');</script>";   

require('_conn.php');
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('Posted successfully!');location.href='blog.php'</script>";
}

$conn -> close();

?>


