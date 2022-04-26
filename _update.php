<?php
    require('_conn.php');

    $id = $_SESSION['id'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pwc = $_POST['checkPassword'];
    
   
    if ($pass != $pwc) {
        echo "<script>alert('Check password!');location.href='user.php'</script>";
    }    

    $sql = "UPDATE `user` SET `username`='$user', `email`='$email', `pw`='$pass' WHERE `id`=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $sql = "SELECT * FROM `user` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        foreach($result as $users) {
            $_SESSION['id'] = $users['id'];
            $_SESSION['username'] = $users['username'];
            $_SESSION['email'] = $users['email'];
        }
        echo "<script>alert('Changed your informations');location.href='user.php'</script>";
    }
?>