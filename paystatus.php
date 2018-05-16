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

           <td><a class="btn btn-success" href="#">Paid<span class="glyphicon glyphicon-ok"></span</button></a></td>
            			';
		}
		else{
			echo '

           <td><a class="btn btn-danger" title="Click to Pay Now" href="pay.php?sid='.$id.'">Not Paid<span class="glyphicon glyphicon-remove"></span</button></a></td>
            			';
		}
	}
	

	
	if($_GET['q']=="requests"){
		$sn=0;
		$q=$mysqli->query("select * from req where sid='$id'") or die("Error getting status");
		$count=$q->num_rows;
		if($count<0){
			echo '<h3>No Requests</h3>';
		}
		else{
		echo '
		<hr>
		<h3> <strong><u>Your Requests</u></strong> </h3>
		<table class="table table-hover">
		 <div class="text-center col-md-2 col-md-offset-2">
		<thead>
		<tr><th scope="col">S.No</th>
		<th scope="col">Request</th>
		<th scope="col">Status</th>
		<th scope="col">Action</th></tr>
		
		</thead>
		<tbody>
		';
		
		while($qi=mysqli_fetch_array($q)){
			$sn=$sn+1;
			$rid=$qi['id'];
			echo '
			
			<tr>
			<td scope="row">'.$sn.'</td>
			<td>'.$qi['n_p'].'</td>';
			if($qi['done']==1){
				echo "<td>Accepted</td>";
			} else if($qi['done']=='p'){
				echo "<td title='Your Request is Processing. Be Patient!'>Pending</td>";
			}
			else{
				echo "<td title='Please visit Transportation office'>Rejected</td>";
			}
			echo '<td><a title="Click only if your DAMN sure!" class="btn btn-danger" href="paystatus.php?q=ndelr&re='.$rid.'">Remove</a></td>
			</tr>
			</tbody>
			
			';

		}
		echo '</table>
			</div>';
		
	}

}


	if($_GET['q']=="ndelr"){
		$re=$_GET['re'];
		
		$q=$mysqli->query("delete from req where id=$re") or die("Error getting status");
		if($q==1){
			header("Location:home.php?q=rdels");
		}
		else{
			header("Location:home.php?q=rdeln");
		}

}

	if($_GET['q']=="em1"){
		$email=$_POST['email'];
		$_SESSION['email']=$email;
		$s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
		$_SESSION['valcode']=$s;
		if(isset($_SESSION['valcode'])){
			header("Location:admin/mail/mail.php?q=vcode");
		}
	}

	if($_GET['q']=="em2"){
		$email=$_SESSION['email'];
		$valcode=$_SESSION['valcode'];
		$uvalcode=$_POST['vcode'];
		if($valcode==$uvalcode){
		$q=$mysqli->query("update account set email='$email' where sid='$id'") or die("Error getting status");
		if($q==1){
			header("Location:home.php?q=semail");
		}
		else{
		header("Location:home.php?q=nemail");
		}
	}
		else{
		header("Location:home.php?q=evcode");
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