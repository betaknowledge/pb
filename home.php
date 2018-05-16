<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['user'])){
  header("Location:index.php?q=nlog");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Presidency University Transportation System</title>


<link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="bootstrap-3.3.7/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function getStatus() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("status").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "paystatus.php?q=status", true);
  xhttp.send();
}
  function showReq() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("requests").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "paystatus.php?q=requests", true);
  xhttp.send();
}

  function feeDet() {
    var bdet=document.getElementById('point').value;
    alert(bdet);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("fee").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "paystatus.php?point"+bdet, true);
  xhttp.send();
}
</script>
<style>
html {
    height: 100%;
    margin: 0;
}
body {
    /* The image used */
    background-image: url("background.jpg");

    /* Full height */
    height: "100%"; 

    /* Center and scale the image nicely */
    
    background-repeat: repeat;
    //background-size: cover;
    
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
      <li class="active"><a href="#">Home</a></li>
      <!--<li class="glyphicon glyphicon-notification"><select class="">
        <option>test</option>
      </select>
      </li>-->

    </ul>
    <!--<form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>-->
    <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      <?php 
        $user=$_SESSION['user'];
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
      <br><br><br><br><br>
      <?php 
       if(isset($_GET['q'])){
    if($_GET['q']=="nsreq"){
    echo '
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Request Created!</strong> Your Request has been Created <b>Successfully</b><br> Now wait for your Request Approval.!
  <p>You may need to visit transportation office if Required!</p>
</div>';
  }
  if($_GET['q']=="nnreq"){
    echo '
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Unable to Request!</strong> Your Request has not been Created <br> 
  <p>Please check your details and Request Again!</p>
</div>';
  }
    if($_GET['q']=="rdels"){
    echo '
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Request Removed Successfully!</strong>
</div>';
  }
    if($_GET['q']=="rdeln"){
    echo '
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Something went wrong!</strong> Please try Again!
</div>';
  }
      if($_GET['q']=="semail"){
    echo '
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Successfully Updated Email!</strong>
</div>';
  }
        if($_GET['q']=="nemail"){
    echo '
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Something went wrong!</strong> Please try again.
</div>';
  }
          if($_GET['q']=="nm2"){
    echo '
    <div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Something went wrong!</strong> Can`t send Mail. Please Check your Email and submit Again.!
</div>';
  }
        if($_GET['q']=="m2"){
    echo '
    <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Successfully sent mail!</strong> Please check your mail for Verification.
</div>';
  }

}
      ?>
     
      <center>
      <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-8 col-md-offset-2">


           <!-- PHPMailer MOD BY D3V-->
    <?php
    $ma=$mysqli->query("select * from account where sid='$user'");
    $mai=mysqli_fetch_array($ma);
    $maii=$mai['email'];
    if($maii==''){
    if(!isset($_GET['q']) ){
  
    
      echo '
    <div class="alert alert-warning alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Update Email!</strong> Please Update your EMAIL ID to proceed!
</div>';
    echo '    <form action="paystatus.php?q=em1" method="post">
      <table class="table table-hover">
        <tr>
          <th>Email :</th>
          <td><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please give correct Mail ID: [Eg: name.12@example.com]"></td>
        </tr>
        <tr><td></td>
        <td><input type="submit" name="submit" class="btn btn-success" value="Submit"></td>
      </table>
    </form>';

  }

  else{
          echo '
    <div class="alert alert-warning alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Enter your Verification Code!</strong>
  <p><b>DO NOT REFRESH </b>the page</p>
</div>';
    echo ' <form action="paystatus.php?q=em2" method="post">
      <table class="table table-hover">
        <tr>
          <th>Code :</th>
          <td><input type="text" name="vcode"  title="Enter validation code mailed to you"></td>
        </tr>
        <tr><td></td>
        <td><input type="submit" name="submit" class="btn btn-success" value="Submit"></td>
      </table>
    </form>';
  }
}
    else {
    ?>
<!-- in ELSE LOOP-->


          <table class="table table-hover">

          <h3><strong><u>Your Details</u></strong></h3>
          <hr>
    <!--Table head-->
   
  <!--Table head
<input type="button" class="btn btn-info" value="Input Button" onclick="location.href = 'routes.php';">
  -->
  <?php 
    include 'db.php';
    $qu=$mysqli->query("select * from account where sid='$user'");
    $r=$qu->fetch_array();
    $bid=$r['b_id'];
    $due=$r['due'];
    $qu=$mysqli->query("select * from bus where id=$bid");
    $r=$qu->fetch_array();
    $rno=$r['rno'];
    $point=$r['point'];
    $at=$r['at'];
    $rt=$r['rt'];
    $fee=$r['fee'];
    
    ?>
    <!--Table body-->
    <tbody>
        <tr>
            <th scope="row">ID</th>
            <td><?php echo $user;?></td>
            
        </tr>
        <tr>
            <th scope="row">Route No</th>
            
           <td><?php echo $rno;?></td>
        </tr>
        <tr>
        <th scope="row">Boarding/Return Point</th>
           <td><?php echo $point;?></td></tr>
            <tr>
        <th scope="row">Pickup Time</th>
           <td><?php echo $at;?></td>
            
            </tr>
        <tr>
        <th scope="row">Drop Time</th>
           <td><?php echo $rt;?></td>
            
            </tr>
          
             <tr>
        <th scope="row">Requests</th>
           <td><button title="All your Requests will be shown at the end of Page" class="btn btn-info" onclick="showReq();">Show Requests</button></td>
            
            </tr>
            <tr>
        <th scope="row">Fee</th>
           <td><?php echo $fee;?></td>

           <div >
           <td><a href="#"><span id="status"><button title="Get your payment status" onclick="getStatus();" class="btn btn-info">Get Status</button></a></td><td></span></td>
            </div>
            </tr>
          <tr>
        <th scope="row">Due</th>
           <td><?php echo $due; ?></td>
            
            </tr>

            <tr> <th scope="row">Update Details</th>
           <!--<td><a><button title="Request for Change of Route" type="button" data-toggle="modal" data-target="#request" class="btn btn-primary">Request</button></a></td>-->
             <?php 
            $q=$mysqli->query("select * from req where sid='$user' and done='p'") or die("Error getting status");
            $count=$q->num_rows;
    if($count>0){
      echo '
           <td><button disabled title="You have already made a Request. Only one Request can be processed. If any changes are to be made, kidnly remove current request and make another one.!" class="btn btn-disabled" onclick="showReq();">Request</button></td>
            
            </tr>';
          }

          else{ echo '
           <td><a href="stureq.php"><button title="Request for Change of Route" type="button"  class="btn btn-primary">Request</button></a></td>
            
            </tr>';}?>
    </tbody>


<table class="table table-hover">
<tbody>
    <div id="requests"></div>
</tbody>
</table>

<?php } ?>
<!-- END ELSE LOOP-->

    <!--Table body-->
<!--
</table>
<div class="container">
 <div class="modal fade" id="request" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Details</h4>
        </div>

        <div class="modal-body">
          
          <form class="form-horizontal" method="post">
  <div class="form-group">
  <?php 
  include 'db.php';

  $qu=$mysqli->query("select * from bus");
  $to=$qu->num_rows;
  
  ?>
  <table class="table table-hover">
    <tr>
    <form action="#">
<th><label for="id">ID:</label></th>
<th><input disabled type="text" name="id" id="id" value="<?php echo $user; ?>" required></th>
</tr>

<tr><th><label for="point">Point:</label></th>
<th><select name="point" onchange="feeDet();">
<?php $qu=$mysqli->query("select * from bus");
  while($r=mysqli_fetch_array($qu)){
    echo '<option value="'.$r['id'].'">'.$r['point'].'</option>';
  }
  ?>
  </select>
</tr>

<tr><th><label for="fee">Updated Fee:</label></th>
<th><span id="fee"><button title="Get your payment status" onclick="feeDet();" class="btn btn-info">Fee Details</button></a></td><td></span></th>

</tr>
<input type="hidden" value="<?php echo $to;?>" name="total">
<tr><th></th>
<th><input class="btn btn-success" type="submit" name="submit" value="Submit">
<a href="home.php"><button class="btn btn-danger">Cancel</button></a></th>
<th></th></tr>

</form>
</table>
    
      </div>
    </div>
  </div>
 
</form>
  </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

    
  </body>
</html>
