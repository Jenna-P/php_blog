<?php
    require('_conn.php');

    $no = $_POST['no'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    echo "<script>console.log('Debug Objects: " . $title . "');</script>";    

   

    $sql = "UPDATE `blog_table` SET  `title`='$title', `content`='$content' WHERE `no`=$no";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Edited blog post successfully!');location.href='blog.php'</script>";
    }
?>