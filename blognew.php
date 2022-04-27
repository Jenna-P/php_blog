
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog - new</title>
    <link rel="stylesheet" href="css/newpost/style.css">

</head>
<body>
<?php require('lib/header.php'); ?>
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('img/newpost.jpg'); ">
        <div class="bradcumbContent">
            <h2>New post</h2>
        </div>
    </section>
    <!-- ##### form Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                       
                        <!--  Form -->
                        <div class="login-form">
                            <form action="_login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input name="username" type="text" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New post</label>
                                    <textarea name="content" class="form-control" style="height: 500px"></textarea>                                
                                </div>
                                <div class="form-group">
                                    <input name="img_file" type="file">
                                </div>
                                <div class="buttonWrapper">
                                <button type="submit" class="btn">Submit</button>
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
    <!-- ##### form Area End ##### -->
</body>
</html>






