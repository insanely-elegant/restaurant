<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Code for User login
if(isset($_POST['login']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
$query=mysqli_query($con,"SELECT * FROM host WHERE hostname='$username' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="guestlist.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(unitno,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="index.php";
$unitno=$_POST['unitno'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(unitno,userip,status) values('$unitno','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid Username or Password";
exit();
}
}


?>
<!doctype html>
<html lang="en">
 
<head>
    <?php
    include('header.php');
       ?>
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
     
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.php"><h1>Silver Glen</h1></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="post">
                    <span style="color:red;">
							<?php echo htmlentities($_SESSION['errmsg']); 	?>
							<?php echo htmlentities($_SESSION['errmsg']=""); ?>
						</span>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="../chef/index.php" class="footer-link">Chef Login</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="../admin/index.php" class="footer-link">Admin Login</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
