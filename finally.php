<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Kalanjali '12</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>
<script type="text/javascript">
    Cufon.replace("H1");
	Cufon.replace("H2");
	Cufon.replace("H3");
	Cufon.replace("#top_padding a");
	Cufon.replace("#menu a");
</script>
    </head>
    <body>
    	<div id="wrap">
				<div id="menu">
					<ul>
					
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="events.html"> Events</a></li>
						<li><a href="#">Calendar of Events</a></li>
						<li><a href="reg1.html">Registeration</a></li>
						<li><a href="contact_us.html">Contact Us</a></li>
					</ul>
				</div>						
				
				<div id="top_padding">
						<a href="index.html">Kalanjali '12</a>
						<h3><a href="">Where Technology and Culture converge!</a></h3>
				</div>
				<div id="content_top"></div>
				
				<div id="content_bg_repeat">
					
					
					
					<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
						<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
						<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
						</script>
					
					<div id="content">
			
			<div class="col2">
				<h2>REGISTRATION:</h2>
				<p class="pad_bot3"><font size ="4" color = "#2F8CA8">
					
					
				
				
<?php
	
	$a=$_REQUEST['event1'];
	$b=$_REQUEST['name'];
	$c=$_REQUEST['college'];
	$d=$_REQUEST['contactno'];
	$e=$_REQUEST['emailid'];

$hostname='localhost';
$username='';
$password='';
$dbname='samarth';
mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);



	
		if($a=="Anthakshari" )
		{
			$result=mysql_query("select count('$c') as counters from anthakshari where college='$c'");
			$row=mysql_fetch_row($result);
			if($row['counters']<1)
			{	
				echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
				mysql_query("INSERT INTO anthakshari(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
				$rud=mysql_query("SELECT * FROM  `anthakshari` ORDER BY UID DESC LIMIT 1");
				$ud=mysql_fetch_array($rud);
				$valu=$ud['UID'];
				echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
				echo "<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
				
			}
			else
			{
				echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information
				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
			}
		}
		if($a=="Cartooning")
		{
		$result=mysql_query("select count('$c') as counters from Cartooning where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Cartooning(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Cartooning(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Cartooning` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Classical Dance-Solo")
		{
		$result=mysql_query("select count('$c') as counters from Classical_Dance_Solo where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Classical_Dance_Solo(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Dance_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Classical_Dance_Solo` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Classical/Creative Dance-Group(non filmy)")
		{
		$result=mysql_query("select count('$c') as counters from Classical_Creative_Dance_Group_non_filmy where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Classical_Creative_Dance_Group_non_filmy(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Creative_Dance_Group_non_filmy(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Classical_Creative_Dance_Group_non_filmy` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}}
		
	if($a=="Classical Instrumental-percussion")
		{
		$result=mysql_query("select count('$c') as counters from Classical_prescussion where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Classical_prescussion(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(12) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_prescussion(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Classical_prescussion` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Classical Instrumental-non-percussion")
		{
		$result=mysql_query("select count('$c') as counters from Classical_Instrumental_non_percussion where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Classical_Instrumental_non_percussion(Event VARCHAR(30) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(50) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Instrumental_non_percussion(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Classical_Instrumental_non_percussion` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Collage")
		{
		$result=mysql_query("select count('$c') as counters from Collage where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Collage(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Collage(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Collage` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Debate")
		{
		$result=mysql_query("select count('$c') as counters from Debate where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Debate(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Debate(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Debate` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Dumb Charades")
		{
		$result=mysql_query("select count('$c') as counters from Dumb_Charades where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Dumb_Charades(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Dumb_Charades(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Dumb_Charades` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Essay Writing")
		{
		$result=mysql_query("select count('$c') as counters from Essay_Writing where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Essay_Writing(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Essay_Writing(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Essay_Writing` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Fashion Show")
		{
		$result=mysql_query("select count('$c') as counters from Fashion_Show where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Fashion_Show(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Fashion_Show(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Fashion_Show` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>"; 
			
		}
		}
	if($a=="Filmi Dance-Solo")
		{
		$result=mysql_query("select count('$c') as counters from Filmi_Dance_Solo where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Filmi_Dance_Solo(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Filmi_Dance_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Filmi_Dance_Solo` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Filmi Dance-Group")
		{
		$result=mysql_query("select count('$c') as counters from Filmi_Dance_Group where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Filmi_Dance_Group(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Filmi_Dance_Group(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Filmi_Dance_Group` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Indian Vocal Solo")
		{
		$result=mysql_query("select count('$c') as counters from Indian_Vocal_Solo where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Indian_Vocal_Solo(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Indian_Vocal_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Indian_Vocal_Solo` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
	if($a=="Light Vocal-Solo(film)")
		{
		$result=mysql_query("select count('$c') as counters from Light_Vocal_Solo_film where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		mysql_query("CREATE TABLE Light_Vocal_Solo_film(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Light_Vocal_Solo_film(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Light_Vocal_Solo_film` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
	   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		if($a=="Western Song Solo")
		{
		$result=mysql_query("select count('$c') as counters from Western_Solo where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Western_Solo(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Western_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Western_Solo` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		if($a=="Indian Group")
		{
		$result=mysql_query("select count('$c') as counters from indian_Group where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		 mysql_query("CREATE TABLE indian_Group(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO indian_Group(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `indian_Group` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
	     
		if($a=="Western-Group")
		{
		$result=mysql_query("select count('$c') as counters from Western_Group where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		 mysql_query("CREATE TABLE Western_Group(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Western_Group(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Western_Group` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		if($a=="Techno Business Quiz")
		{
		$result=mysql_query("select count('$c') as counters from Techno_Business_Quiz where college='$c'");
		$row=mysql_fetch_array($result);
		
			if($row['counters'])
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
			mysql_query("CREATE TABLE Techno_Business_Quiz(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Techno_Business_Quiz(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Techno_Business_Quiz` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}	
		
		
		
		if($a=="Technical Paper Presentation")
		{
		$result=mysql_query("select count('$c') as counters from Technical_Paper_Presentation where college='$c'");
		$row=mysql_fetch_array($result);
		
		
			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Technical_Paper_Presentation(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Technical_Paper_Presentation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Technical_Paper_Presentation` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		if($a=="Street Play")
		{
		$result=mysql_query("select count('$c') as counters from Street_Play where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Street_Play(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Street_Play(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Street_Play` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
		}
		
			
		
		}	
		
		if($a=="Software Presentation")
		{
		$result=mysql_query("select count('$c') as counters from Software_Presentation where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		 mysql_query("CREATE TABLE Software_Presentation(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Software_Presentation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Software_Presentation` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		if($a=="Rangoli")
		{
		$result=mysql_query("select count('$c') as counters from Rangoli where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Rangoli(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Rangoli(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Rangoli` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}	
		
		if($a=="Poetry Recitation")
		{
		$result=mysql_query("select count('$c') as counters from Poetry_Recitation where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Poetry_Recitation(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Poetry_Recitation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Poetry_Recitation` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		if($a=="On the spot painting")
		{
		$result=mysql_query("select count('$c') as counters from On_the_spot_painting where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE On_the_spot_painting(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO On_the_spot_painting(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `On_the_spot_painting` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		if($a=="Mime")
		{
		$result=mysql_query("select count('$c') as counters from Mime where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Mime(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Mime(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Mime` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		if($a=="Light Vocal-Solo(non-film)")
		{
		$result=mysql_query("select count('$c') as counters from Light_Vocal_Solo_non_film where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Light_Vocal_Solo_non_film(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Light_Vocal_Solo_non_film(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Light_Vocal_Solo_non_film` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		if($a=="Model_Making")
		{
		$result=mysql_query("select count('$c') as counters from Model_Making where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Model_Making(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Model_Making(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Model_Making` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>"; 
			
		}
		}
		
		if($a=="Coding_and_Debugging")
		{
		$result=mysql_query("select count('$c') as counters from Coding_and_Debugging where college='$c'");
		$row=mysql_fetch_array($result);
		mysql_query("CREATE TABLE Coding_and_Debugging(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Coding_and_Debugging(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Coding_and_Debugging` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		
		if($a=="Counter_Strike")
		{
		$result=mysql_query("select count('$c') as counters from Counter_Strike where college='$c'");
		$row=mysql_fetch_array($result);

			
		  mysql_query("CREATE TABLE Counter_Strike(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Counter_Strike(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Counter_Strike` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		
		}
		
		if($a=="DOTA")
		{
		$result=mysql_query("select count('$c') as counters from DOTA where college='$c'");
		$row=mysql_fetch_array($result);

		
		  mysql_query("CREATE TABLE DOTA(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO DOTA(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `DOTA` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		
		}
		
		
		if($a=="NFSMW")
		{
		$result=mysql_query("select count('$c') as counters from NFSMW where college='$c'");
		$row=mysql_fetch_array($result);
		mysql_query("CREATE TABLE NFSMW(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO NFSMW(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `NFSMW` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		
		
		if($a=="FIFA")
		{
		$result=mysql_query("select count('$c') as counters from FIFA where college='$c'");
		$row=mysql_fetch_array($result);
		mysql_query("CREATE TABLE FIFA(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO FIFA(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `FIFA` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		
		}
		if($a=="MINI_CRICKET")
		{
		$result=mysql_query("select count('$c') as counters from MINI_CRICKET where college='$c'");
		$row=mysql_fetch_array($result);
	  mysql_query("CREATE TABLE MINI_CRICKET(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO MINI_CRICKET(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `MINI_CRICKET` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		if($a=="Group Song Indian")
		{
		$result=mysql_query("select count('$c') as counters from Group_Song_Indian where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<1)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Group_Song_Indian(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Group_Song_Indian(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		$rud=mysql_query("SELECT * FROM  `Group_Song_Indian` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>"; 
			
		}
		}
		
		if($a=="Light_painting")
		{
		$result=mysql_query("select count('$c') as counters from Light_painting where college='$c'");
		$row=mysql_fetch_array($result);

			if($row['counters']<2)
		{
		echo" Online Registration for the event not opened yet.Online Registrations will commence after publicity teams vistit your college.Conatct Registation Co-ordinators for further details .";
		  mysql_query("CREATE TABLE Light_painting(Event VARCHAR(50) NOT NULL,Name VARCHAR(50) NOT NULL,College VARCHAR(50) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Light_painting(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
	$rud=mysql_query("SELECT * FROM  `Light_painting` ORDER BY UID DESC LIMIT 1");
		$ud=mysql_fetch_array($rud);
		$valu=$ud['UID'];
		echo "<html>You are  Successfully Registered with <font color=\"red\">ACKNOWLEDGEMENT NUMBER:$valu</font><br></html>";		 
		 echo"<html><br>You will be also be sent the same Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.<br><br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436</html>";
		
		}
		else
		{
		   echo"<html><br>sorry registrations for the college for the particular event is over.contact registration co-ordinator for further information

				<br>
				<br>
				Pramodh.N.R - 9743305604<br>
				Anantkrishna. - 8951544254
				</html>";
			
		}
		}
		
		
		
	
     
	?>
	
				       		</div>
		</div>
					
				</div>
				<div id="content_bottom"></div>
				<div id="footer_top">
					<div id="footer_column1">
						<h2>Recent posts</h2>
						<div class="footer_text">
						<!--	<p><a href="#">Suspendisse rutrum interdum lacinia.</a>
							Suspendisse tempus aliquet elit sit amet pellentesque. Donec iaculis pulvinar mauris, ac vulputate justo pretium quis. </p>
							<br />
							<p><a href="#">Quisque luctus, mi ornare malesuada</a>
							Suspendisse tempus aliquet elit sit amet pellentesque. Donec iaculis pulvinar </p> 
			-->			</div>
					</div>
					<div id="footer_column2">
						<h2>Share with Others</h2>
						<div class="footer_text">
							<div class="foot_pad">
		                   		
		                        <div class="link2"><a href="#">Be a fan on Facebook</a></div>
		                        
		                        
		                    </div>
						</div>
					</div>
					<div id="footer_column3">
						<h2>Useful Resources</h2>
						<div class="footer_text">
							<div class="foot_pad">
		                    	<ul class="ls">
		                          <!--  <li><a href="#">Lorem ipsum dolor</a></li>
		                            <li><a href="#">Maecenas in turpis </a></li>
		                            <li><a href="#">Morbi fringilla libero</a></li>
		                            <li><a href="#">In venenatis metus vel </a></li>
		                            <li><a href="#">Donec cursus quam ac </a></li> -->
		                        </ul>
		                    </div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				
		</div>
    </body>
</html>


