<?php session_start(); /* Starts the session */
    

        session_start();
        if(!isset($_SESSION['seen'])){
            echo 'A message';
        }
        $_SESSION['seen'] = true;
    /* Check Login form submitted */    
    if(isset($_POST['Submit'])){
        /* Define username and associated password array */
        $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
        
        /* Check and assign submitted Username and Password to new variable */
        $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
        
        /* Check Username and Password existence in defined array */        
        if (isset($logins[$Username]) && $logins[$Username] == $Password){
            /* Success: Set session variables and redirect to Protected page  */
            $_SESSION['UserData']['Username']=$logins[$Username];
            header("location:../index.php");
            exit;
        } else {
            /*Unsuccessful attempt: Set error message */
            $msg="<div class=\" col-md-8 col-md-offset-2 text-center alert alert-danger\" role=\"alert\">Incorrect Username or password</div>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>HealTrail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <script>
    </script>
</head>
<body>
<?php include 'header.php'; ?>

<section class="col-md-8 col-md-offset-2 container jumbotron">
<h2 class="text-center" style="margin-bottom:10px">Welcome to Healtrail</h2>
<hr class="col-md-6 col-md-offset-3" style="background-color:#bbb;">
<h3 class="text-center col-md-12"  style="margin-top:10px"><small>Login as Administrator</small></h3>
    
    <?php 
    if(isset($msg)){
      echo $msg;
      unset($msg);
    } 
    ?>

    <form action="" class="col-md-4 col-md-offset-4 form" method="post">
        <span class="alert alert-danger hide" role="alert">Invalid Username</span>
        <div class="form-group">
            <label class="sr-only" for="email">Email address</label>
            <input type="text" class="form-control input-" name="Username" placeholder="Email">
        </div>
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input type="password" class="form-control" name="Password" placeholder="Password">
        </div>
        <div class="form-group">
            <a href="#" class="pull-right" style="margin-top:-12px">Forgot Password?</a>
        </div>       
        <br>
        <input type="submit" name="Submit" value="Submit" onclick="" class="btn btn-primary col-md-10 col-md-offset-1"/>
        <div class="col-md-7" style="padding-right:0px;padding-left:5px">
        </div>
        <br>
        <br>
    </form>

</section>



                    

<?php include 'footer.php'; ?>
</body>
</html>