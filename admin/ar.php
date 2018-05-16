<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php 
session_start();
include 'db.php';
if(isset($_POST['cancel'])){
  header("Refresh:0;url=home.php");
  echo '
   <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">';
  echo '<img src="https://www.cpnusa.com/wp-content/uploads/2013/07/credit-card-redirection.jpg">';
  echo 'Redirecting back.! User Terminated the process!';
  echo "</div></div></div>";
}


else{
if(isset($_POST)){
  $rno=$_POST['rno'];
  $point=$_POST['point'];
  $fee=$_POST['fee'];
  $at=$_POST['at'];
  $rt=$_POST['rt'];
  $to=$_POST['total'];
  $id=$to+1;
  
  $qu=$mysqli->query("insert into bus (`id`,`rno`,`point`,`at`,`rt`,`fee`) values('$id','$rno','$point','$at','$rt','$fee')");
    if($qu==1){
      header("Location:home.php?m=sadr");
      
    }
    else{
      echo "Error Inserting.!";
    }

}
}
?>

