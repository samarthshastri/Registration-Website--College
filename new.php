<?php
	
	$a=$_REQUEST['event1'];
	$b=$_REQUEST['name'];
	$c=$_REQUEST['college'];
	$d=$_REQUEST['contactno'];
	$e=$_REQUEST['emailid'];
	
	$name="kalanjalo";
		$con= mysql_connect("localhost","sam","") or die(mysql_error());
		mysql_select_db("kallanjalo");
		
		if($a=="Anthakshari")
		{
		mysql_query("CREATE TABLE anthakshari(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO anthakshari(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	
		if($a=="Cartooning")
		{
		mysql_query("CREATE TABLE Cartooning(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Cartooning(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Classical Dance-Solo")
		{
		mysql_query("CREATE TABLE Classical_Dance_Solo(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Dance_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Classical/Creative Dance-Group(non filmy)")
		{
		mysql_query("CREATE TABLE Classical_Creative_Dance_Group_non_filmy(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Creative_Dance_Group_non_filmy(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Classical Instrumental-percussion")
		{
		mysql_query("CREATE TABLE Classical_prescussion(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_prescussion(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Classical Instrumental-non-percussion")
		{
		mysql_query("CREATE TABLE Classical_Instrumental_non_percussion(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Classical_Instrumental_non_percussion(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Collage")
		{
		mysql_query("CREATE TABLE Collage(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Collage(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Debate")
		{
		mysql_query("CREATE TABLE Debate(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Debate(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Dumb Charades")
		{
		mysql_query("CREATE TABLE Dumb_Charades(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Dumb_Charades(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Essay Writing")
		{
		mysql_query("CREATE TABLE Essay_Writing(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Essay_Writing(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Fashion Show")
		{
		mysql_query("CREATE TABLE Fashion_Show(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Fashion_Show(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Filmi Dance-Solo")
		{
		mysql_query("CREATE TABLE Filmi_Dance_Solo(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Filmi_Dance_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Filmi Dance-Group")
		{
		mysql_query("CREATE TABLE Filmi_Dance_Group(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Filmi_Dance_Group(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Indian-Solo")
		{
		mysql_query("CREATE TABLE Indian_Solo(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Indian_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
	if($a=="Light Vocal-Solo(film)")
		{
		mysql_query("CREATE TABLE Light_Vocal_Solo_film(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		mysql_query("INSERT INTO Light_Vocal_Solo_film(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		echo "Sucessfully registered";
		}
		if($a=="Western-Solo")
		{
		  mysql_query("CREATE TABLE Western_Solo(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Western_Solo(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
	     
		if($a=="Western-Group")
		{
		  mysql_query("CREATE TABLE Western_Group(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Western_Group(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Techno Business Quiz")
		{
		  mysql_query("CREATE TABLE Techno_Business_Quiz(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Techno_Business_Quiz(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Technical Poster Presentation")
		{
		  mysql_query("CREATE TABLE Technical_Poster_Presentation(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Technical_Poster_Presentation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Technical Paper Presentation")
		{
		  mysql_query("CREATE TABLE Technical_Paper_Presentation(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Technical_Paper_Presentation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Street Play")
		{
		  mysql_query("CREATE TABLE Street_Play(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Street_Play(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Software Presentation")
		{
		  mysql_query("CREATE TABLE Software_Presentation(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Software_Presentation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Rangoli")
		{
		  mysql_query("CREATE TABLE Rangoli(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Rangoli(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Poetry Recitation")
		{
		  mysql_query("CREATE TABLE Poetry_Recitation(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Poetry_Recitation(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="On the spot painting")
		{
		  mysql_query("CREATE TABLE On_the_spot_painting(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO On_the_spot_painting(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		
		if($a=="Mime")
		{
		  mysql_query("CREATE TABLE Mime(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Mime(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
		if($a=="Light Vocal-Solo(non-film)")
		{
		  mysql_query("CREATE TABLE Light_Vocal_Solo_non_film(Event VARCHAR(30) NOT NULL,Name VARCHAR(30) NOT NULL,College VARCHAR(30) NOT NULL,Contactno VARCHAR(30) NOT NULL,Emailid VARCHAR(30) NOT NULL)");
		  mysql_query("INSERT INTO Light_Vocal_Solo_non_film(Event,Name,College,Contactno,Emailid) VALUES ('$a','$b','$c','$d','$e')");
		  echo "Sucessfully registered";
		}
		
	
?>


