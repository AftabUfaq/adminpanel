<?php 
SESSION_START();
  if(isset($_POST['submit'])){  
     $email =$_POST['email'];
     $password = $_POST['password'];  

  if($email == "admin@gmail.com" && $password == 'admin' )
    {
        $_SESSION['admin'] = $_POST['email'];
        header('Location:index.php');
    }
  else
    {
        header('Location:login.php');
    }      
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>pink-desh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/morris-0.4.3.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/modernizr.js"></script>
    </head>
    <body class="fixed-left">
<div class="container">
            <div class="row">
                <div class="locksreen-col text-center">
                    <h3>Pleae Login </h3>
                    <form class="m-t" role="form" action="login.php" method="POST">
                         <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Passowrd" required="">
                        </div>
                        <button type="submit" name="submit" class="btn btn-theme btn-lg btn-block ">Login</button><br>
                        
                    </form>
                </div>
            </div>
        </div>
        <!-- Plugins  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/metisMenu.js"></script>
         <script src="js/core.js"></script>
        <script src="js/mediaquery.js"></script>
        <script src="js/equalize.js"></script>
        <script src="js/app.js"></script>

    </body>
</html>
