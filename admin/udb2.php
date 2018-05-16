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
if(isset($_GET['cancel'])){
	header("Refresh:0;url=route.php");
	echo '
	 <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">';
	echo '<img src="https://www.cpnusa.com/wp-content/uploads/2013/07/credit-card-redirection.jpg">';
	echo 'Redirecting back.! User Terminated the process!';
	echo "</div></div></div>";
}

else{
	$rno=$_GET['rno'];
	$point=$_GET['point'];
	$fee=$_GET['fee'];
	$at=$_GET['at'];
	$rt=$_GET['rt'];
	$id=$_GET['id'];
	$q=$_GET['q'];
	$qu=$mysqli->query("update bus set rno='$rno' where id=$id");
	$qu=$mysqli->query("update bus set point='$point' where id=$id");
	$qu=$mysqli->query("update bus set fee='$fee' where id=$id");
	$qu=$mysqli->query("update bus set at='$at' where id=$id");
	$qu=$mysqli->query("update bus set rt='$rt' where id=$id");
	if($qu==1){
		header("Location:route.php?m=sub");
	}
	else{
		header("Location:route.php?m=nub");
	}
	
}
?>
</html>
