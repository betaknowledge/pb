<?php 
//login.php
include 'db.php';
session_start();
?>
<?php
$id=$_POST['id'];
$psw=$_POST['psw'];
$res=$mysqli->query("select id from account where sid='$id' and pass='$psw'") or die("Error");
$c=$res->num_rows;
if($c==1){
	$_SESSION['user']=$id;
	header("Location:home.php");
}
else{
	header("Location:index.php?m=invalid");
}


?>