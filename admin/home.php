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

<link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="../bootstrap-3.3.7/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>


     <!--   <!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library --
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript --
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
<style>
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("../background.jpg");

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
         <nav class="navbar navbar-inverse navbar-fixed-top">
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
    <!--<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>-->
    <ul class="nav navbar-nav navbar-right">
      <?php 
        $q=$mysqli->query("select * from req where done='p'");
        $qi=mysqli_fetch_array($q);
        $count=$q->num_rows;
        /*
        if($count>0){
          while($qi=mysqli_fetch_array($q)){
          
          echo '<li><a href="req.php?id='.$qi['id'].'"> '.$qi['sid'].'Route Update</a></li>';
        }}
        else{
          
            echo '<li><a href="#"> No Notification yet</a></li>';
          }
        */
        ?>
     
     <li><a href="req.php"><span class="glyphicon glyphicon-bell"></span>  Requests [<?php echo $count; ?>]</a>        <ul class="dropdown-menu">
      
          
          
        </ul>
        </li>
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
      <br><br><br><br><br>
      
      <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
          <table class="table table-hover">

<?php 
if(isset($_GET['m'])){
  if($_GET['m']=='sads'){
     echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Successfully added Student.
</div>';
  }
  if($_GET['m']=='nsads'){
    echo '
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>UnSuccessful!</strong> Please verify Inputs.
</div>';
  }
  if($_GET['m']=='nuds'){
     echo '
<div class="alert alert-warning alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Details Not Updated!</strong> Details of Students not Updated.!
</div>';
  }
   if($_GET['m']=='suds'){
     echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Details of Student Updated.!
</div>';
  }
     if($_GET['m']=='sadr'){
     echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Successfully Added Route.!
</div>';
  }
 }
?>
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
            <!--<td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'ar.php';"></td>-->
           <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addRoute">GO</button></td>
        </tr>
        <tr>
        <th scope="row">Update Route</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'route.php?m=sel';"></td>
            </tr>
            <tr>
        <th scope="row">Delete Route</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = 'route.php?m=sel';"></td>
            </tr>
        <tr>
        <th scope="row">Add Student</th>
            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addStu">GO</button></td>
            </tr>
            <tr>
        <th scope="row">Update Student</th>
            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#upStu">GO</button></td>
            </tr>

            <tr> <th scope="row">Add using CSV</th>
            <td><input type="button" class="btn btn-info" value="Go" onclick="location.href = '../csv2sql/csv2sql.php';"></td>
            </tr>
    </tbody>
    <!--Table body-->

</table>
<!--Modal for Add Route-->
<div class="container">
 <div class="modal fade" id="addRoute" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Route</h4>
        </div>

        <div class="modal-body">
          
          <form class="form-horizontal" action="ar.php" method="post">
  <div class="form-group">
  <?php 
  include 'db.php';
  $qu=$mysqli->query("select * from bus");
  $to=$qu->num_rows;
  
  ?>
  <table class="table table-hover">
    <tr>
    <form action="ar.php">
<th><label for="rno">Route No:</label></th>
<th><input type="text" name="rno" id="rno" pattern="R+." value="R" required></th>
</tr>

<tr><th><label for="point">Point:</label></th>
<th><input type="text" name="point" pattern="[a-zA-Z ]{1,}" title="Please give valid Point" id="point" required></th>
</tr>

<tr><th><label for="at">Arrival Time:</label></th>
<th><input type="text" name="at" pattern="[0-9]+[:]+[0-9]+[:]+[0-9]{2,}" title="Please give Pickup time as [00:00:00]" id="at" required></th>
</tr>

<tr><th>
<label for="rt">Return Time:</label></th>
<th><input type="text" name="rt" id="rt" pattern="[0-9]+[:]+[0-9]+[:]+[0-9]{2,}" title="Please give Pickup time as [00:00:00]" required></th>
</tr>

<tr><th><label for="fee">Fee:</label></th>
<th><input type="text" name="fee" id="fee" pattern="[0-9]{4,}" title="Please give valid Price" min="999" max="50000" required></th>
</tr>
<input type="hidden" value="<?php echo $to;?>" name="total">
<tr><th></th>
<th><input class="btn btn-success" type="submit" name="submit" value="Submit">
<a href="home.php"><button class="btn btn-danger">Cancel</button></a></th>
<th></th></tr>

</form>
</table>
    
      </div>
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


      <!--Modal for Add Student-->

<div class="container">
 <div class="modal fade" id="addStu" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Student</h4>
        </div>

        <div class="modal-body">
          
          <form class="form-horizontal" action="ads.php" method="post">
  <div class="form-group">
  <?php 
  include 'db.php';
  $qu=$mysqli->query("select * from account");
  $to=$qu->num_rows;
  $id=$to+1;
  $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
  $qu=$mysqli->query("select * from bus");

  ?>
  <table class="table table-hover">
    <tr>
   <input type="hidden" name="id" value="<?php echo $id;?>">
<th><label for="rno">Student ID:</label></th>
<th><input type="text" name="sid" id="sid" pattern="201+.+[a-z].+[0-9]{3,4}$" title="Please Enter Student ID (Eg:2015CSE159)" required></th>
</tr>

<tr><th><label for="point">Password:</label></th>
<th><input type="text" name="psw" id="point" value="<?php echo $s;?>"></th>
</tr>

<tr><th><label for="at">Point:</label></th>
<th><select name="b_id">
<?php while($po=mysqli_fetch_array($qu)){
  echo '
  <option value="'.$po['id'].'">'.$po['point'].'</option>';
}
?>
</select></th>
</tr>
<tr><th><label for="point">Year:</label></th>
<th><select name="year">
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
</select> </th>
</tr>
<tr><th><label for="point">Branch:</label></th>
<th><select name="branch">
  <option value="cse">CSE</option>
  <option value="mech">MECH</option>
  <option value="pet">PET</option>
  <option value="ece">ECE</option>
  <option value="eee">EEE</option>
  
</select> </th>
</tr>
<th><input class="btn btn-success" type="submit" name="submit" value="Submit">
<input class="btn btn-danger" type="submit" name="cancel" value="Cancel"></th>
<th></th></tr>


</table>
    
      </div>
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


  <!--End add-->

       <!--Modal for Update Student-->

<div class="container">
 <div class="modal fade" id="upStu" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Student</h4>
        </div>

        <div class="modal-body">
          
          <form class="form-horizontal" action="uds.php" method="get">
  <div class="form-group">
  <?php 
  include 'db.php';
  $qua=$mysqli->query("select * from account");
  //$to=$qu->num_rows;
  //$id=$to+1;
  //$s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
  $qub=$mysqli->query("select * from bus");

  ?>
  <table class="table table-hover">
    <tr>
   
<th><label for="year">Year:</label></th>
<th><select name="year" id="year" required>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</th>
</tr>

  <tr>

<th><label for="branch">Branch:</label></th>
<th><select name="branch" id="branch" required>
<option value="cse">Computer Science</option>
<option value="mech">Mechanical</option>
<option value="pet">Petroleum</option>
<option value="ece">Electronics and Communications</option>
<option value="eee">Electronics and Engineering</option>
</select>
</th>
</tr>

<th><input class="btn btn-success" type="submit" name="submit" value="Submit">
<input class="btn btn-danger" type="submit" name="cancel" value="Cancel"></th>
<th></th></tr>


</table>
    
      </div>
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


  <!--End Update-->



        </div>
    </div>



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
    <!-- Placed at the end of the document so the pages load faster --
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

    -->
  </body>
</html>
