<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Presidency University Transportation System</title>

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    
  </head>

  <body class="text-center">
 


    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
         <!-- <h3 style="text-align:left" >Presidency University</h3>-->
         <nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Presidency Bus</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <!--<li class="glyphicon glyphicon-notification"><select class="">
        <option>test</option>
      </select>
      </li>-->

    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 
      	$user=$_SESSION['admin'];
      	?>
      	  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $user ?>
        <span class="caret"></span></a>        <ul class="dropdown-menu">
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          
        </ul>
        </li>
        <!--<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sample Toggle-->
         

   </ul>
  </div>
</nav>

        </div>
      </header>
      <div class="col-sm-12" style="text-align:center;">
      <div class="row">
      		<div class="col-md-8">
      <!--Simple table-->
      <!--Table-->
<table class="table table-hover">


    <!--Table head-->
    <thead>
        <tr>
            <th>Roles</th>
            <th>Links</th>
            
        </tr>
    </thead>
  <!--Table head
<input type="button" class="btn btn-info" value="Input Button" onclick="location.href = 'routes.php';">
  -->

    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">Routes</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'route.php';"></td>
            
        </tr>
        <tr>
            <th scope="row">Add Route</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'ar.php';"></td>
           
        </tr>
        <tr>
        <th scope="row">Update Route</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'ur.php';"></td>
            </tr>
        <tr>
        <th scope="row">Add Student</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'ads.php';"></td>
            </tr>
            <tr>
        <th scope="row">Update Student</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'uds.php';"></td>
            </tr>
             <th scope="row">Add Buses using CSV</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = '../csv2sql/csv2sql.php';"></td>
            </tr>
    </tbody>
    <!--Table body-->

</table>
</div>
            </div>            
</div>

       
<hr>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Student Login <a href="../index.php">Click Here</a>.</p>
        </div>
      </footer>
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
