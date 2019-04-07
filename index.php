<?php
    include("include/config.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $myusername=mysqli_real_escape_string($db,$_POST['username']);
        $mypassword=mysqli_real_escape_string($db,$_POST['password']);
    
        $sql="SELECT id FROM admin WHERE username='$myusername' AND passcode='$mypassword'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        // $active=$row['active'];
        $count=mysqli_num_rows($result);

        if($count == 1){
            // session_register("myusername");
            $SESSION['login_user']=$myusername;
            header("location:include/signup.php");
        }
        else{
            $error = "Your login name or password is invlaid";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>HealTrail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/assets/css?family=Inconsolata" rel="stylesheet"> -->
    <style type="text/css">
        .main-login>h3{
            margin:-15px 0;
            margin-bottom: 20px
        }
        .main-login>div>.login>ul{
            padding-left: 0px;
        }
        .login{
            padding:22px;
            background-color: #fff;
            border:1px solid #eee;
            box-shadow:0px 0px 10px #eee;
        }
        .linked-login{
            padding:10px 20px;
            height:240px;
            border-right:1px solid #aaa;
        }
    </style>
</head>
<body>



    <section class="main-login container text-center">
        <img src="assets/img/logo4.png" width="180"/>
        <h3><small style="letter-spacing:1px">Doctors | Patients | Diagnostics</small></h3>
        <div class="text-center row">
            <div class="col-lg-2">
            </div>
            <div class="login col-lg-8 container" style="margin-top:5px; margin-bottom:25px;">
                <!-- <h3 style="margin:0;margin-bottom:10px">Login to Healtrail</h3> -->
                <div class="col-md-6 hidden-xs linked-login">
                </div>
                <div class="col-md-6 pull-right manual-login" >
                    <h2 style="margin-top:10px;letter-spacing:1px;"><small>Sign In</small></h2>
                    <form action="" class="form" method="post">
                        <span class="alert alert-danger hide" role="alert">Invalid Username</span>
                        <div class="form-group">
                            <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control input-" name="username" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="#" class="pull-right" style="margin-top:-12px; margin-bottom:10px;">Forgot Password?</a>
                        </div>       
                        <br>
                        <input type="submit" value="Login" class="btn btn-primary col-md-10 col-md-offset-1"/>
                        <div class="col-md-7" style="padding-right:0px;padding-left:5px">
                        </div>
                        <br>
                        <br>
                    </form>
                    
                    <a href="include/signup-main.php">Create an account</a>
                </div>

            </div>
        <div class="col-lg-2">
        </div>
    </section>

    <?php include 'include/footer.php';?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>	