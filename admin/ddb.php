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
<style>
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    /* The image used */
    background-image: url("https://images.pexels.com/photos/579353/pexels-photo-579353.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
   
</style>
  </head>

  <body class="text-center">
 <div class="bg">


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
      <li class="active"><a href="home.php">Home</a></li>
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
      
      <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
          <h3> Data</h3>
<table class="table table-hover">

    <!--Table head-->
    <thead>
        <tr>
            <th>Route Number</th>
            <th>Points</th>
            <th>Arrival Time</th>
            <th>Return Time</th>
            <th>Fee</th>
            
            
            <!--<th><button></button></th>-->
        </tr>
    </thead>

      <?php 
      if(isset($_GET['id'])){

      //echo "GET variable is SET";
      $id=$_GET['id'];
      //echo $id;
      $q=$mysqli->query("select * from bus where id='$id'");
      while($r=mysqli_fetch_array($q))
          {
            $rno=$r['rno'];
            $point=$r['point'];
            $at=$r['at'];
            $rt=$r['rt'];
            $fee=$r['fee'];
            echo '<tbody>
        <tr>
            <th scope="row">'.$r['rno'].'</th>
            <td scope="row">'.$r['point'].'</td>
            <td>'.$r['at'].'</td>
            <td>'.$r['rt'].'</td>
            <td>'.$r['fee'].'</td>

        </tr>';
      }
      }
      ?>


</table>




<h4>Are you sure you want to Delete? <br>
<a href="ddb2.php?id=<?php echo $id; ?>&q=yes"><button type="button" class="btn btn-danger">DELETE</button></a>

<a href="route.php?q=no"><button type="button" class="btn btn-success">GO BACK</button></a>



        </div>
    </div>


<br>
<br>
<br>

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
