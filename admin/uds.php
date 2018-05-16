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
         <nav class="navbar navbar-inverse navbar-fixed-top">
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
        
<?php if(!isset($_GET['sid'])){ ?>

        <h3>Update Student Details</h3>

        <table class="table table-hover">
       <tr> 
       <th>Select Student</th>
       <th>
       <select name="student" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
      
      <option value="">Select Student ID</option>';
  <?php 
      //echo "GET variable is SET";
      if(!isset($_GET['sid'])){
      $year=$_GET['year'];
      $branch=$_GET['branch'];
      $q=$mysqli->query("select * from account where year='$year' and branch='$branch'");
      while($r=mysqli_fetch_array($q)){
        echo '
        <option value="uds.php?sid='.$r['id'].'">'.$r['sid'].'</option>
        
        ';
        }
        
        }?>

        </select>
</th>

<th></th><th></th><th><a href="home.php"><button class="btn btn-info">Go Back</button></a></th></tr>
</table>

          <?php //DevMark
          } ?>
      
      <?php if(isset($_GET['sid'])){
        ?>
       <h3>Old Data</h3>
      

<table class="table table-hover">     


    <!--Table head-->
    <thead>
        <tr>
            <th>Student ID:</th>
            <th>Point:</th>
            <th>Year:</th>
            <th>Branch:</th>
            
            
            
            <!--<th><button></button></th>-->
        </tr>
    </thead>

      <?php 
      $id=$_GET['sid'];
      $qu=$mysqli->query("select * from account where id='$id'");
      while($r=mysqli_fetch_array($qu))
      //echo $id;
      
          {
            $sid=$r['sid'];
            $b_id=$r['b_id'];
            $year=$r['year'];
            $branch=$r['branch'];
            //$fee=$r['fee'];
            $qu=$mysqli->query("select * from bus where id='$b_id'");
            $r=mysqli_fetch_array($qu);
              $point=$r['point'];
            }
            
            echo '<tbody>
        <tr>
            <th scope="row">'.$sid.'</th>
            <td scope="row">'.$point.'</td>
            <td>'.$year.'</td>
            <td>'.$branch.'</td>
            

        </tr>';
      
      
      ?>



</table>



<div class="col-md-8">
<table class="table table-hover">

    <!--Table head-->
    <?php } ?>
    

<?php 
//session_start();
if(isset($_GET['q'])){
  if($_GET['q']=="yes"){

echo '
<h3>New Data</h3>
        <tr>
    <form action="uds2.php" method="post">
<th><label for="Student ID">Student ID:</label></th>
<th><input disabled type="text" name="sid" id="disabledInput" value="'.$sid.'"></th>
</tr>';?>

<tr><th><label for="point">Point:</label></th>
<th><select name="point">
<option value="<?php echo $point;?>"><?php echo $point;?></option>
<option disabled>---------------</option>
<?php $qu=$mysqli->query("select * from bus");
  while($r=mysqli_fetch_array($qu)){
    echo '<option value="'.$r['id'].'">'.$r['point'].'</option>';
  }
  ?>
  </select>
  <?php echo '
</th>
</tr>
<th><label for="year">Year:</label></th>
<th><select disabled name="year" id="year" title="Can`t Update YEAR" required>
<option value="'.$year.'">'.$year.'</option>
<option disabled>---------------</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
</select>
</th>
</tr>
<tr>

<th><label for="branch">Branch:</label></th>
<th><select disabled name="branch" id="branch" title="Can`t Update Branch" required>
<option value="'.$branch.'">Computer Science</option>
<option disabled>---------------</option>
<option value="cse">Computer Science</option>
<option value="mech">Mechanical</option>
<option value="pet">Petroleum</option>
<option value="ece">Electronics and Communications</option>
<option value="eee">Electronics and Engineering</option>
</select>
</th>
</tr>

<tr><th></th></tr>

<tr><th><input class="btn btn-success" type="submit" name="submit" value="Submit"></th>
<th><input class="btn btn-danger" type="submit" name="cancel" value="Cancel"></th></tr>
</form>
<th><a href="uds.php?sid='.$id.'"><button class="btn btn-info">Go Back</button></a></th>
</table>
';
//<tr><th><input type="hidden" name="q" value="yes"></th></tr>
//<tr><th><input type="hidden" name="q" value="yes"></th></tr>
  }
}
else{

 if(isset($_GET['sid']))
{ echo '
<h4>Is this the data you want to Update? <br>
<a href="uds.php?sid='.$id.'&q=yes&bus='.$b_id.'"><button type="button" class="btn btn-success">YES</button></a>

<a href="uds.php?year='.$year.'&branch='.$branch.'"><button type="button" class="btn btn-danger">NO</button></a>
';
}
}
?>
</div>




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
