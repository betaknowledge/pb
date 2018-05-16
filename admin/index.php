
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Presidency University Transportation System</title>

    <!-- Bootstrap core CSS --
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template --
    <link href="cover.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap-reboot.css" rel="stylesheet">
    <link href="bootstrap-grid.min.css" rel="stylesheet">
    <link href="bootstrap-reboot.min.css" rel="stylesheet">-->

<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
 <style>
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("../pexels-photo-579353.jpeg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: repeat;
    background-size: cover;
}
   
</style>

    
  </head>

  <body class="text-center">
 
<div class="bg">

   
         <!-- <h3 style="text-align:left" >Presidency University</h3>-->
         <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Presidency Bus</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
    <!--
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>-->
    <ul class="nav navbar-nav navbar-right">
     
     <!-- <li><a href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> NOT LOGGGED</a></li>
          
        </ul>
        
  </div>
</nav>
<br><br><br><br><br>
<?php 
if(isset($_GET['m'])){
  echo '
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Invalid!</strong> Please Input Valid Password.
</div>';}
?>
    <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
          <h1  class="cover-heading">Presidency University</h1>
        <p class="lead"><i>Bus Transportation System.</i></p>
        <p class="lead">
          <!--<a href="#" class="btn btn-lg btn-secondary">Sign in (For Students)</a>-->
          <h4 align="center">Admin Login</h4>
  <form autocomplete="off" action="login.php" method="POST">
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" class="form-control" id="id" pattern="admin" title="Only Admins are allowed here!" value="admin" name="id">
    
  </div>
  <?php 
  if(isset($_GET['m'])){
    echo '
     <div class="form-group has-error has-feedback">
      <label for="inputError">Password</label>
      
        <input type="password" name="psw" class="form-control" id="inputError">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
     
    </div>
  ';}
  else{
    echo '

  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Password" name="psw">
  </div>';}?>

  <button type="submit" class="btn btn-success">Login</button>
</form>
                        


     



<hr>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Student Login <a href="../index.php">Click Here</a>.</p>
        </div>
      </footer>
    </div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

    
  </body>
</html>
