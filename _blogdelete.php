<?php 
    require('_conn.php');    
    $no = $_GET['no'];

   $sql = "UPDATE `blog_table` SET `del_flg`=1 WHERE `no`=$no";

    // Delete db
   // $sql = "DELETE FROM `blog1` WHERE `no`=$no";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Deleted Post!');location.href='blog.php'</script>";
    }
?>