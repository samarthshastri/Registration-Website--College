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
					
					
				<br>You are <font color="red">Successfully</font> Registered.<br>You will be sent an Acknowledgement Number to your Contact number within 24 hours which has to be re-produced at the Registration Desk<br>In case you dont get the same, please contact Registration Co-ordinators.
				<?php
				session_start();
				$var_value=$_session['varname'];
				echo $var_value
				?>
				<br>
				H.V.Prashant - 9535681929<br>
				Samarth.V.Shastri - 8105928436
				
					
	
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
