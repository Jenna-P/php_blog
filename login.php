<?php

$user = $_POST["username"];
$pass = $_POST["password"];
$res = "forkert";
$login_result="Hello! You are logged in";
$btn = "Logout";

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "logindb";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// $conn = OpenCon();
$msg = "Connected Successfully";
echo "<script type='text/javascript'>console.log('$msg');</script>";

if($user == "test" && $pass == "1234") {
    $res = "rigtigt";
 }
 
 $sql = "SELECT username, password FROM bruger_tabel WHERE username='$user'";
 $result = $conn->query($sql);
 if($result->num_rows == 1) {
     $row = mysqli_fetch_array($result);
     if($row['password'] == $pass) {
         $res = "Success";
     } else {
         $login_result = "Please Try again";
         $res = "User found, password is incorrect!";
         $btn = "Login";
     }
 } else {
    $login_result = "Please Try again";
     $res = "User not found";
     $btn = "Login";
 }

 $conn -> close();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Min form Resultat</title>
    <link rel="stylesheet" href="css/login/style.css">

</head>
<body>
<?php require('lib/header.php'); ?>
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(https://storage.needpix.com/rsynced_images/countryside-2371480_1280.jpg);">
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
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Login</button>
                            </form>
                            <div>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
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






