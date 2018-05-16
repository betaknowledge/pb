<?php

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
<script type="text/javascript">
  togAsc(){}
</script>
<style>
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("ep_naturalwhite.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
   
    background-repeat: repeat;
    
}

.table-fixed{
  width: 100%;
 
  tbody{
    height:200px;
    overflow-y:auto;
    width: 100%;
    }
  thead,tbody,tr,td,th{
    display:block;
  }
  tbody{
    td{
      float:left;
    }
  }
  thead {
    tr{
      th{
        float:left;
       background-color: #f39c12;
       border-color:#e67e22;
      }
    }
  }
}

   
</style>

    
  </head>

  <body class="text-center">
  <div class="bg">
<br>
<br>
<br>
<br>



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
      
    </ul>

    <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 

      	$user=$_SESSION['admin'];
      	?>
      	  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user ?>
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

      <div class="container">
      <?php

      if(isset($_GET['m'])){
      if($_GET['m']=='sel'){
        echo '
<div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Select Route!</strong> Select Route to Proceed!.
</div>';
        
      }
      if($_GET['m']=='sub'){
        
        echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Successfully Updated Route.
</div>';
      }
        if($_GET['m']=='nub'){
        
        echo '
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Something went Wrong!</strong> Dear Admin <mark>I AM NOT AI</mark> . So, Find the BUG yourself!.
</div>';
      }
      if($_GET['m']=='sde'){
        
        echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Deleted Route Successfully.
</div>';
      }
      if($_GET['m']=='del'){
        
        echo '
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Successfully <b>DELETED</b> Route!.
</div>';
      }
    }
      ?>

      <!--Simple table-->
      <!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead>
        <tr>
            <th>Route Number <button onclick="togAsc();"><!--<span class="glyphicon glyphicon-collapse-down"></span>--></button></th>
            <th>Points</th>
            <th>Arrival Time</th>
            <th>Return Time</th>
            <th>Fee</th>
            <th>Update</th>
            <th>Delete</th>
            <!--<th><button></button></th>-->
        </tr>
    </thead>
  <!--Table head-->
  <?php 
  include 'db.php';
  /*$rno=array();
  $points=array();
  $at=array();
  $rt=array();
  $fee=array();*/

  $q=$mysqli->query("select * from bus");
  while($r=mysqli_fetch_array($q)){
    $id=$r['id'];
    $u='udb.php?id=$id';
    echo '<tbody>
        <tr>
            <td scope="row">'.$r['rno'].'</td>
            <td scope="row">'.$r['point'].'</td>
            <td>'.$r['at'].'</td>
            <td>'.$r['rt'].'</td>
            <td>'.$r['fee'].'</td>
            
            
            
            <td><a href="udb.php?id='.$id.'"><button class="btn btn-primary">UPDATE</button></a></td>
            
            
            <td><a href="ddb.php?id='.$id.'"><button class="btn btn-danger">DELETE</button></a></td>
            


        </tr>';


    /*
     <td><a class="btn" href="udb.php?id='.$id.'">Update</a></td>
            <td><a class="btn" href="del.php?q='.$id.'">Delete</a></td>
    $id[]=$r['id'];
    $rno[]=$r['rno'];
    echo '<pre>' . print_r( $rno, TRUE ) . '</pre>';
    $points[]=$r['point'];
    $at[]=$r['at'];
    $rt[]=$r['rt'];
    $fee[]=$r['fee'];
    $total=$q->num_rows;
    for($i=0;$i<count($id);$i++){
      //<!--Table body-->
      //echo $i.'<br';
      $id=$i+1;
      echo '
   
      
';
      
    }*/

  }
  /*for($j=0;$j<4;$j++){
    echo '<br>';
      echo $j+1;
    }*/
  ?>

 
    
        
    </tbody>
    <!--Table body-->

</table>

                        
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
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

    
  </body>
</html>
