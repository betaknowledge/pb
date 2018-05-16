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
  $id=$_POST['id'];
  $sid=$_POST['sid'];
  $psw=$_POST['psw'];
  $b_id=$_POST['b_id'];
  $year=$_POST['year'];
  $branch=$_POST['branch'];
  
  $qu=$mysqli->query("insert into account (`id`,`sid`,`pass`,`b_id`,`year`,`branch`) values('$id','$sid','$psw','$b_id','$year','$branch')");
    if($qu==1){
      header("Location:home.php?m=sads");
      //echo "Successfully Inserted..! Redirecting to Home Page Soon!";
    }
    else{
      header("Location:home.php?m=nsads");
    }

}
}
?>