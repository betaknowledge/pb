<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 

        $user=$_SESSION['admin'];
        ?>
          <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user ?>
        <span class="caret"></span></a>        <ul class="dropdown-menu">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          
        </ul>
        </li>
        <!--<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sample Toggle-->
         

   </ul>
        </div>
      </div>
    </nav>
    <h1  class="cover-heading">Presidency University</h1>
        <p class="lead"><i>Bus Transportation System.</i></p>
        <h4 align="center">Admin Login</h4>

<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Login</h4>
        </div>
        <div class="modal-body">
          
          <form class="form-horizontal" action="login.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="ID">ID:</label>
    <br>
    <br>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="ID" placeholder="Enter id" name="id">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <br>
    <br>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="psw">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <div class="checkbox">
      
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
       

      
        
       
          <!--<a href="#" class="btn btn-lg btn-secondary">Sign in (For Students)</a>-->
          
         <!-- <div align="center">
  <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-4"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-4">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>-->
                     
    

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Student Login <a href="../index.php">Click Here</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Page Content -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
