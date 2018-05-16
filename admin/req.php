<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['admin'])){
  header("Location:index.php");
}
?>

<?php
    if(isset($_GET['q'])){
         $m=$_GET['m'];
        $sid=$_GET['sid'];
        $bid=$_GET['bid'];
        $due = number_format((float)0, 2);
        $due=$_GET['due'];
        $n_fee=$_GET['n_fee'];

        $qu=$mysqli->query("select * from account where sid='$sid'");
        $qui=mysqli_fetch_array($qu);
        $email=$qui['email'];
        $paychk=$qui['17-18'];
      $rid=$_GET['q'];
      if($_GET['m']=='s'){
        
        
        $qu=$mysqli->query("update req set done='1' where id=$rid");


        if($paychk>0){
          $qu=$mysqli->query("update account set `b_id`='$bid' where sid='$sid'");
          $qu=$mysqli->query("update account set `due`='$due' where sid='$sid'") or die("Error updating due");
          if($qu){
          header("Location:mail/mail.php?a=sreq&sid=$sid&email=$email");
        }
      }
        else{
        $qu=$mysqli->query("update account set `b_id`='$bid' where sid='$sid'");
        $qu=$mysqli->query("update account set `due`='$n_fee' where sid='$sid'") or die("Error updating due");
                  if($qu){
          header("Location:mail/mail.php?a=sreq&sid=$sid&email=$email");
          //echo '<a href="mail/mail.php?a=sreq&sid=$sid&email=$email">Send Reject</a>';
          //header("Refresh:0; url=mail/mail.php?a=sreq&sid=$sid&email=$email");
        }
        }

        
      }
      if($_GET['m']=='n'){
        $sid=$_GET['sid'];
        $qu=$mysqli->query("select * from account where sid='$sid'");
        $qui=mysqli_fetch_array($qu);
        $email=$qui['email'];
        
        $qu=$mysqli->query("update req set done='0' where id=$rid");
          if($qu){
          header("Location:mail/mail.php?a=nreq&sid=$sid&email=$email");
         
        }
    }
  }
    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Requests</title>
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
<style>
 html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("http://rowingsicilia.org/wp-content/uploads/2016/01/background.jpg");

    /* Full height */
    height: 100%; 
    margin: 0;
    /* Center and scale the image nicely */
   
    background-repeat: repeat;
    
}
   
</style>
</head>
  <body class="text-center">
 <div class="bg">


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
      <!--<li class="glyphicon glyphicon-notification"><select class="">
        <option>test</option>
      </select>
      </li>-->

    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <?php 
        $q=$mysqli->query("select * from req where done='p'");
        $qi=mysqli_fetch_array($q);
        $count=$q->num_rows;
        /*
        if($count>0){
          while($qi=mysqli_fetch_array($q)){
          
          echo '<li><a href="req.php?id='.$qi['id'].'"> '.$qi['sid'].'Route Update</a></li>';
        }}
        else{
          
            echo '<li><a href="#"> No Notification yet</a></li>';
          }
        */
        ?>
     
     <li><a href="req.php"><span class="glyphicon glyphicon-bell"></span>  Requests [<?php echo $count; ?>]</a>        <ul class="dropdown-menu">
      
          
          
        </ul>
        </li>
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 
        $user=$_SESSION['admin'];
        ?>
          <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>  <?php echo $user ?>
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
      <br><br><br><br><br><br><br><br><br>

<body>
<?php 
if(isset($_GET['ur'])){
  if($_GET['ur']=='done'){
     echo '
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Successfully Updated Request and Sent mail to Student.
</div>';
  }
}
  ?>
 <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center ">

		<table class="table table-hover">
		 
		<thead>
		<tr><th scope="col">S.No</th>
    <th scope="col">ID</th>
    <th scope="col">Old Point</th>
		<th scope="col">New Point</th>
    <th scope="col">Old Fee</th>
		<th scope="col">New Fee</th>
    <th scope="col">Updated Due</th>
		<th scope="col">Curr. status</th>
		<th scope="col">Action</th>
		</tr>
		
		</thead>
		<tbody>
		
		<?php 
		$q=$mysqli->query("select * from req order by date desc");
		$i=0;
		while($qi=mysqli_fetch_array($q)){

			$id=$qi['id'];
      $sid=$qi['sid'];
      $bid=$qi['bid'];
      $o_p=$qi['o_p'];
      $n_p=$qi['n_p'];
			$o_fee=$qi['o_fee'];
      $n_fee=$qi['n_fee'];
      $due = number_format((float)0, 2);
      //$due=$o_fee-$n_fee;

			$i=$i+1;
			echo '
      <tr><td scope="row">'.$i.'</td>';
			echo '<td>'.$qi['sid'].'</td>';
      echo '<td>'.$qi['o_p'].'</td>';
      echo '<td>'.$qi['n_p'].'</td>';
			echo '<td>'.$qi['o_fee'].'</td>';
      echo '<td>'.$qi['n_fee'].'</td>';

      $qu=$mysqli->query("select * from account where sid='$sid'");
      $qui=mysqli_fetch_array($qu);
        $paychk=$qui['17-18'];
        if($paychk>0){
          $due=$o_fee-$n_fee;
      echo '<td>'.$due.'</td>';
    }else{
      echo '<td>Not Paid:'.$n_fee.'</td>';
    }

			if($qi['done']==1){
				echo "<td>Accepted</td>";
			} else if($qi['done']=='p'){
				echo "<td title='Your Request is Processing. Please wait till processes. Be Patient!'>Pending</td>";
			}
			else{
				echo "<td title='Please visit Transportation office'>Rejected</td>";
			}

			echo '<td><a class="btn btn-success" href="req.php?q='.$id.'&m=s&bid='.$bid.'&sid='.$sid.'&due='.$due.'&n_fee='.$n_fee.'">Approve</a>
						<a class="btn btn-danger" href="req.php?q='.$id.'&m=n&sid='.$sid.'">Reject</a>';
      echo '</tr>';
			
		}
		?>

		</tbody>
		</div>
		</table>
		</div>
		</div>
		</div>



	
</body>
</html>