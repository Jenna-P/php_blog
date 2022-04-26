
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Min form Resultat</title>
    <link rel="stylesheet" href="css/login/style.css">

</head>
<body>
<?php require('lib/header.php'); ?>
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('img/banner/banner.png'); ">
        <div class="bradcumbContent">
            <h2>Login</h2>
        </div>
    </section>
    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                       
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="buttonWrapper">
                                <button type="submit" class="btn">Login</button>
                                </div>
                            </form>
                            <div>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="signUp.php">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->
</body>
</html>






