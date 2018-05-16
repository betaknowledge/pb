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
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("https://4.bp.blogspot.com/-mGE964zIyBs/U3jBl4swQ4I/AAAAAAAAGM0/86KbB-Y30Uw/s1600/aged-paper-background.jpg");

    /* Full height */
    height: 100%; 
    margin: 0;
    /* Center and scale the image nicely */
   
    background-repeat: repeat;
    
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
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          
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
          <h3>Old Data</h3>
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



<div class="col-md-8">
<table class="table table-hover">

    <!--Table head-->
    

<?php 
//session_start();
if(isset($_GET['q'])){
  if($_GET['q']=="yes"){

echo '
<h3>New Data</h3>
        <tr>
    <form action="udb2.php">
<th><label for="rno">Route No:</label></th>
<th><input type="text" name="rno" id="rno" value="'.$rno.'"></th>
</tr>

<tr><th><label for="point">Point:</label></th>
<th><input type="text" name="point" id="point" value="'.$point.'"></th>
</tr>
<tr><th><label for="at">Arrival Time:</label></th>
<th><input type="text" name="at" id="at" value="'.$at.'"></th>
</tr>
<tr><th>
<label for="rt">Return Time:</label></th>
<th><input type="text" name="rt" id="rt" value="'.$rt.'"></th>
</tr>
<tr><th><label for="fee">Fee:</label></th>
<th><input type="text" name="fee" id="fee" value="'.$fee.'"></th>
</tr>
<tr><th><input type="hidden" name="id" value="'.$id.'"></th></tr>
<tr><th><input type="hidden" name="q" value="yes"></th></tr>
<tr><th><input class="btn btn-success" type="submit" name="submit" value="Submit"></th>
<th><input class="btn btn-danger" type="submit" name="cancel" value="Cancel"></th></tr>
</form>
</table>
';

  }
}
?>
</div>

<?php if(!isset($_GET['q']))
{ echo '
<h4>Is this the data you want to Update? <br>
<a href="udb.php?id='.$id.'&q=yes"><button type="button" class="btn btn-success">YES</button></a>

<a href="route.php?q=no"><button type="button" class="btn btn-danger">NO</button></a>
';
}
?>


        </div>
    </div>



<hr>
    
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
