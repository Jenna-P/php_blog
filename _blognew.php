<?php

  require('_conn.php');
  $sql = "INSERT INTO `blog_table` (`username`, `title`, `category`, `content`, `img_file`, `img_size`) VALUES ('$name', '$title', '$category', '$content', '$id', '$file_name', '$img_size')";
  mysqli_query($conn, $sql);
?>