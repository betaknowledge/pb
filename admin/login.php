<?php 
//login.php
include 'db.php';
session_start();
?>
<?php
if(isset($_POST)){
$id=$_POST['id'];
$psw=$_POST['psw'];
$res=$mysqli->query("select id from admin where uname='$id' and pwd='$psw'") or die("Error");
$c=$res->num_rows;
if($c==1){
	$_SESSION['admin']="Admin";
	header("Location:home.php");
}
else{
	header("Location:index.php?m=invalid");
	
}
}

?>