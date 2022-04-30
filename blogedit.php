<?php
    $no = $_GET['no'];
    require('_conn.php');
    $sql = "SELECT * FROM `blog_table` WHERE `no` = $no";
    $result = mysqli_query($conn, $sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog - edit</title>
    <link rel="stylesheet" href="css/newpost/style.css">

</head>
<body>
<?php require('lib/header.php'); ?>
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('img/newpost.jpg'); ">
        <div class="bradcumbContent">
            <h2>Edit post</h2>
        </div>
    </section>
    <!-- ##### form Area Start ##### -->
    <?php foreach($result as $edit) { ?>
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <!--  Form -->
                        <div class="login-form">
                            <form action="_blogedit.php" method="post">

                                <input name="no" type="hidden" value="<?=$no;?>">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input name="title" type="text" class="form-control" aria-describedby="emailHelp" value="<?=$edit['title'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Article</label>
                                    <textarea name="content" class="form-control" style="height: 500px"><?=$edit['content'];?></textarea>                                
                                </div>
                                <div class="form-group">
                                    <input name="img_file" type="file">
                                </div>
                                <div class="buttonWrapper">
                                <button type="submit" class="btn">Edit</button>
                                </div>
                            </form>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!-- ##### form Area End ##### -->
</body>
</html>






