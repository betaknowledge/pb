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
	header("Location:home.php?m=nuds");
	
	
}

else{
	$sid=$_POST['sid'];
	$point=$_POST['point'];
	
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$qu=$mysqli->query("update account set b_id='$point' where sid='$sid'");
	$qu=$mysqli->query("update account set year='$year' where sid='$sid'");
	$qu=$mysqli->query("update account set branch='$branch' where sid='$sid'");
	if($qu==1){
		header("Location:home.php?m=suds");	}
		else{
			header("Location:home.php?m=nuds");
		}
	
}
?>
</html>
