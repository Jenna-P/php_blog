<?php
  //after log out restart session 

    session_unset();
    session_destroy();
    session_start();
    echo "<script>alert('Logged out!');location.href='login.php'</script>";
?>