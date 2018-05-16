<?php
include 'db.php';
session_start(); 
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
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

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body, html {
    height: 100%;
    margin: 0;
}
.bg {
    /* The image used */
    background-image: url("https://images.pexels.com/photos/579353/pexels-photo-579353.jpeg?w=940&h=650&auto=compress&cs=tinysrgb");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
   
</style>
  </head>

  <body class="text-center">
 <div class="bg">


    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
         <!-- <h3 style="text-align:left" >Presidency University</h3>-->
         <nav class="navbar navbar-inverse ">
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
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
     
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
      
      <div class="container container-table">
    <div class="row vertical-center-row">
        <div class="text-center col-md-4 col-md-offset-4">
          <?php 
session_start();
if(!isset($_SESSION['admin'])){
  //$_SESSION['t']="Yeah";
  header('Refresh:2; url=../admin/index.php');
echo ('Please login as ADMIN to Continue!');
  }
  else{
    $user=$_SESSION['admin'];
    echo '
    

<br>
<h1> Import Data to SQL from CSV </h1>
<p> Specify Correct Database name,Table name and Location of the File.(Ofcourse Password)</p>

</br>
<form class="form-horizontal"action="csv2sql.php" method="post">
    <div class="form-group">
        <label for="mysql" class="control-label col-xs-2">Mysql Server address (or)<br>Host name</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="mysql" id="mysql" value="localhost" placeholder="">
    </div>
    </div>
  <div class="form-group">
        <label for="username" class="control-label col-xs-2">Username</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="username" id="username" value="root" placeholder="">
    </div>
    </div>
  <div class="form-group">
        <label for="password" class="control-label col-xs-2">Password</label>
    <div class="col-xs-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="">
    </div>
    </div>
  <div class="form-group">
        <label for="db" class="control-label col-xs-2">Database name</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="db" id="db" value="prebus" placeholder="">
    </div>
    </div>
  
  <div class="form-group">
        <label for="table" class="control-label col-xs-2">table name</label>
    <div class="col-xs-3">
        <input type="name" class="form-control" name="table" id="table">
    </div>
    </div>
  <div class="form-group">
        <label for="csvfile" class="control-label col-xs-2">Name of the file</label>
    <div class="col-xs-3">
        <input type="text" class="form-control" name="csv" id="csv" value="/opt/lampp/htdocs/btrans/">
    </div>
    eg. MYDATA.csv
    </div>
  <div class="form-group">
  <label for="login" class="control-label col-xs-2"></label>
    <div class="col-xs-3">
    <button type="submit" class="btn btn-primary">Upload</button>
  </div>
  </div>
</form>



';
}?>

<?php 
if(isset($_SESSION['admin'])){
if(isset($_POST['username'])&&isset($_POST['mysql'])&&isset($_POST['db'])&&isset($_POST['username']))
{
$sqlname=$_POST['mysql'];
$username=$_POST['username'];
$table=$_POST['table'];
if(isset($_POST['password']))
{
$password=$_POST['password'];
}
else
{
$password= '';
}
$db=$_POST['db'];
$file=$_POST['csv'];
$cons= mysqli_connect("$sqlname", "$username","$password","$db") or die(mysql_error());
$result1=mysqli_query($cons,"select count(*) count from $table");
$r1=mysqli_fetch_array($result1);
$count1=(int)$r1['count'];
//If the fields in CSV are not seperated by comma(,)  replace comma(,) in the below query with that  delimiting character 
//If each tuple in CSV are not seperated by new line.  replace \n in the below query  the delimiting character which seperates two tuples in csv
// for more information about the query http://dev.mysql.com/doc/refman/5.1/en/load-data.html
mysqli_query($cons, '
    LOAD DATA LOCAL INFILE "'.$file.'"
        INTO TABLE '.$table.'
        FIELDS TERMINATED by \',\'
        LINES TERMINATED BY \'\n\'
')or die(mysql_error());
$result2=mysqli_query($cons,"select count(*) count from $table");
$r2=mysqli_fetch_array($result2);
$count2=(int)$r2['count'];
$count=$count2-$count1;
if($count>0)
echo "Success";
echo "<b> total $count records have been added to the table $table </b> ";
}
else{
echo "Mysql Server address/Host name ,Username , Database name ,Table name , File name are the Mandatory Fields";
}
}
?>
    </div>
</div>
</div>

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
