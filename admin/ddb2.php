<?php 
session_start();
include 'db.php';
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$qu=$mysqli->query("delete from bus where id='$id'");
if($qu==1){
	header("Location:route.php?m=del");
	
}
else{
	header("Location:route.php?ndel");
}
	}
	?>