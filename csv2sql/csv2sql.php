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
		
<html>
<head>
<title> csv2 sql</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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
      <li class="active"><a href="../admin/home.php">Home</a></li>
      
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
     
      <!--<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>-->
      
      	
      	?>
      	  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">'.$user.'
        <span class="caret"></span></a>        <ul class="dropdown-menu">
          <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          
        </ul>
        </li>
        <!--<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sample Toggle-->
         

   </ul>
  </div>
</nav>

        </div>
      </header>
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


</body>
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


</html>
