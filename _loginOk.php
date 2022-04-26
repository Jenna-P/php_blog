<?php
    require('_conn.php');

    $sql = "SELECT * FROM `user` WHERE username='$user'";
    $result = mysqli_query($conn, $sql);
    foreach($result as $users) {
        $_SESSION['id'] = $users['id'];
        $_SESSION['username'] = $users['username'];
        $_SESSION['email'] = $users['email'];
        
    }
?>