<?php

require('_conn.php');

$user = $_SESSION['username'];
$title = $_POST['title'];
$content = $_POST['content'];

$img_file = $_FILES['img_file'];
$img_size = $_FILES['img_file']['size'];

  
  $sql = "INSERT INTO `blog_table` (`no`,`title`,`content`, `img_file`, `img_size`) VALUE (NULL, '$title', '$content', NULL, NULL)";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('Posted successfully!');location.href='blog.php'</script>";
}

$conn -> close();

?>


