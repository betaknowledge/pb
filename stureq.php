<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['user'])){
  header("Location:index.php");
}
?>
<?php 
if(isset($_POST['point'])){
  $sid=$_SESSION['user'];
  $point=$_SESSION['npoint'];
  $bid=$_SESSION['nbid'];
  $fee=$_SESSION['fee'];
  $qu=$mysqli->query("select * from account where sid='$sid'");
  $qui=mysqli_fetch_array($qu);
  $o_bid=$qui['b_id'];
  $qu=$mysqli->query("select * from bus where id='$o_bid'");
  $qui=mysqli_fetch_array($qu);
  $o_p=$qui['point'];
  $o_fee=$qui['fee'];
  $q=$mysqli->query("insert into req(`sid`,`bid`,`n_p`,`o_bid`,`o_p`,`n_fee`,`o_fee`) values('$sid','$bid','$point','$o_bid','$o_p','$fee','$o_fee')") or die("Error Inserting into Requests");
  if($q==1){
    header("Location:home.php?q=nsreq");
  }
  else{
    header("Location:home.php?q=nnreq");
  }
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

 <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="bootstrap-3.3.7/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<style>
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("aged-paper-background.jpg");

    /* Full height */
    height: 100%; 
    margin: 0;
    /* Center and scale the image nicely */
   
    background-repeat: repeat;
    
}
   
</style>
<script type="text/javascript">
function feeDet(){
  var feestat=document.getElementById('point').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("feedet").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "paystatus.php?point="+feestat, true);
  xhttp.send();
}
</script>
 
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

    <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 
        $user=$_SESSION['user'];
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
        


        <h3>Update Student Details</h3>
        <form action="stureq.php" method="POST">

        <table class="table table-hover">

       <tr> 
       <th>ID</th>
       <th>
       
      <input disabled type="text" value="<?php echo $user; ?>">
      <input type="hidden" name="sid" value="<?php echo $user; ?>">

</th>
</tr>
<tr>
  <th>Point</th>
  <th>
  <select id="point" name="point" onchange="feeDet();">
  <option disabled selected>Select Point</option>
<?php $qu=$mysqli->query("select * from bus");
  while($r=mysqli_fetch_array($qu)){
    echo '<option value="'.$r['id'].'">'.$r['point'].'</option>';
  }
  ?>
  </select>
 </th>
</tr>
<tr>
  <th>Fee</th>
  <th>

  <p id="feedet">Select Route for Fee</p></th>
</tr>

<th></th><th><input type="submit" name="submit" class="btn btn-success"></th>
</form>
<th><a href="home.php" class="btn btn-primary">Go Back</a></th></tr>
</table>
</div></div></div>
<hr></div></div>



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
