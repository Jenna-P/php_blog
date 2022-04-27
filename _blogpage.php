<?php
  //pagenation


  // blog search from DB
   require('_conn.php');

    $sql = "SELECT * FROM `blog_table` WHERE `del_flg`= 0";
    $result = mysqli_query($conn, $sql);

?>