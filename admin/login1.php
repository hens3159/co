<?php require_once '../database/db.php';?>
<?php require_once '../function/user.php';?>
<?php require_once '../core/session.php';?>
<?php require_once '../function/blog.php';?>


<?php
$error= '';
global $link;


if (isset($_POST['submit'])) {
  $nama= $_POST['username'];
  $password = $_POST['password'];
  //
  // $t= "SELECT password FROM user WHERE username='$name'";
  // $k=mysqli_query($link,$k);
  // $z=

  $ina='$2y$10$l3.djQ4Ws5r25qypyGtDiOaQLDZGjV.4a2TJAYJDlYWzkdWeisV6i';
  // $query = "SELECT password FROM user WHERE username='$nama'";
  // $result=mysqli_query($link,$query);
  // $row= mysqli_fetch_assoc($result);
  // $ina= $row['password'];
  // //print_r($ina);
  $ina=password_verify($password, $ina);
  if ($ina){
    print_r ($ina);
} else {
  echo"anda gagal";
}


  // $query = "SELECT password FROM user WHERE username='$nama'";
  // if ($result=mysqli_query($link,$query)) {
  //   if(mysqli_num_rows ($result)!=0){
  //     $row= mysqli_fetch_assoc($result);
  //     $koko = $row['password'];
  //
  //      if (password_verify($password, $hash)){
  //        echo "koko";
  //      }else {echo "tidak";}
  //
  //
  //     // if (password_verify($password,$koko)) {
  //     // echo $koko;
  //     // }else {
  //     //   echo"gagal";
  //     // }
  //
  //   } else {echo 'masih aja gagal';
  //   }
  //

} else {
  $error = 'user dan password wajib di isi';
}

// }


?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php $siteurl ="http://localhost/cod" ?>

        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo $siteurl;?>/view/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo $siteurl;?>/view/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo $siteurl;?>/view/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                        <?php echo $error ?>
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" name="submit" class="btn bg-olive btn-block">Sign me in</button>

                    <p><a href="#">I forgot my password</a></p>

                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $siteurl;?>/view/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
