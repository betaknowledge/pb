<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['user'])){
  header("Location:index.php?q=nlog");
}
?>

<?php 

if(isset($_GET['q'])){
	$id=$_SESSION['user'];
	if($_GET['q']=="status"){
		$q=$mysqli->query("select * from account where sid='$id'") or die("Error getting status");
		$qi=mysqli_fetch_array($q);
		$status=$qi['17-18'];
		if($status==1){
			echo '

           <td><a href="#"><button title="Paid. NO DUE" class="btn btn-success">Paid<span class="glyphicon glyphicon-ok"></span</button></a></td>
            			';
		}
		else{
			echo '

           <td><a href="pay.php?sid='.$id.'"><button title="Please click to pay" class="btn btn-danger">Not Paid<span class="glyphicon glyphicon-remove"></span</button></a></td>
            			';
		}
	}
	
	}

	if(isset($_GET['point'])){
	$bid=$_GET['point'];
    $q=$mysqli->query("select * from bus where id='$bid'");
    $qi=mysqli_fetch_array($q);
    $fee=$qi['fee'];
    $point=$qi['point'];
    $_SESSION['fee']=$fee;
    $_SESSION['npoint']=$point;
    $_SESSION['nbid']=$bid;
    echo '
     <input disabled type="text" name="fee" value="'.$fee.'">';
  }

?>