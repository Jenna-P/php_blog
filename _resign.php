<?php
    require('_conn.php');

    $id = $_SESSION['id'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pwc = $_POST['checkPassword'];
    
   //still in DB
    $sql = "UPDATE `user` SET `del_flg` = 1  WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);

  // Delete DB
    // $sql = "DELETE FROM `user` WHERE `id`=$id ";

    if ($result) {
        $sql = "SELECT * FROM `user` WHERE id='$id'";
       // $result = mysqli_query($conn, $sql);
        session_unset();
        session_destroy();
        session_start();
        echo "<script>alert(':( Bye Bye!');location.href='index.php'</script>";
    }
?>
