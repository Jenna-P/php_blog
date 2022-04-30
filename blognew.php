
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
                            <form action="_blognew.php" enctype="multipart/form-data"  method="POST" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input name="title" type="text" class="form-control" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Article</label>
                                    <textarea name="content" class="form-control" style="height: 500px"></textarea>                                
                                </div>
                                <div class="form-group">
                                    <input name="img_file" type="file" class="form-control">
                                </div>
                                <div class="buttonWrapper">
                                <button type="submit" class="btn" name="submit">Submit</button>
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






