<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Min form Resultat</title>
    <link rel="stylesheet" href="css/login/style.css">

</head>
<body>
<?php require('lib/header.php'); ?>
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('img/banner/banner.png');">
        <div class="bradcumbContent">
        <p>Edit user informations</p>
            <h2><?php echo $_SESSION['username'];?></h2>
           
        </div>
    </section>
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                       
                        <!-- Sign up Form -->
                        <div class="login-form">
                            <form action="_update.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input name="username"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['username'];?>" value="<?php echo $_SESSION['username'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['email'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Check Password</label>
                                    <input name="checkPassword" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <button type="submit" class="btn">Edit</button>
                            </form>
                                <button class="btn" onClick="location.href='_resign.php'">Resign</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>






