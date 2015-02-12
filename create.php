<?php
	
	$a=$_REQUEST['event1'];
	$b=$_REQUEST['name'];
	$c=$_REQUEST['college'];
	$d=$_REQUEST['contactno'];
	$e=$_REQUEST['emailid'];
	
	$name="kalanjallo";
		$con= mysql_connect("localhost","sam","") or die(mysql_error());
		mysql_query("CREATE DATABASE kallanjalo");
		mysql_select_db("kalanjallo");
		
		
		mysql_query("CREATE TABLE reg(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO reg(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Table created";
	
	
?>
<html>
<body>

<?php 
echo $a; ?><br>
<?php echo $b; ?><br>
<?php echo $c; ?><br>
<?php echo $d; ?><br>
<?php echo $e; ?><br>

