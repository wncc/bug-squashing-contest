<?php 
	include_once('config.php');
	$qmark = 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBggGDxEIERQKCQkKGBUPDRYYFhYXHxsSGxUhHR8XFx4eGzIqHCUvJR4eJDssIyosODAsICo7NjI2NSY3LDUBCQoKDQsNGQ4OGTUkHiQ1KTU1NTU1NTQpNSk0NDUpNDU0NTQzLDUsKjE2LS80LDQwKTIsNDUsKSk0NSw0KSk0Kf/AABEIADIAMgMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAABQYHAQIDBP/EADAQAAEDAgQDBgUFAAAAAAAAAAEAAgMEEQUGEiExQVEHEyJhgZEjobHR8BQVM8Hh/8QAGAEBAAMBAAAAAAAAAAAAAAAAAAMEBQL/xAAfEQACAgICAwEAAAAAAAAAAAAAAgEDITEEERITQTL/2gAMAwEAAhEDEQA/ALwS3GcbgwZneO8T3bMaOJP2TJVjnuerdUuc5skdOyzIiQQD1IPDjdcWNKr3BR5170UyyRk6V3aBiJNmd3H6X+q4w9omMRHxdxK3ndpH0K8mU8v/AL/MWuLhTwjVJbiejfX+l7s35UpRM1lI9tJNE34zHElp6b7kH/FXj2NHl2YtCc21ParyTTLmZKfMDC9t45o/5GHlfmOoTlVNkapkp66Jm7TJqjkHodvcBWyp62loybXBva+rt9xgELKFIXgWj2NkGkgOB2IO63QgI/jeJYflGN0zI445JdwGtAuRzNh5qtMYxmsxaX9YdUb3M1AWAu0X/LqSdpGO1VPMyhAidA1rZtxuTdwIv0so7S4dPi88cdPEzW9mt4ubBp2Jve4UcvGoKL8lM1pvQy7PaGSprGT8W04dI8+ZBA+Z+StZIsn4dSUFKx8d/j+N5PG/T04J6iL4wdcOiaK+m3OZMoQhSFwwtS6y2KX1VS6O6Ag/aRFh75hK6SVlUGAaQzUC3Ud73FuaYZMw2Klc2tDi+WWHTG21hou03J5Hhso9nVk9bUCUNe5gaG3t5n7rvk+or6N9j3pgDS1oPAG4UEfucGPXPXLaJTf0mOWppqBow+VropQSWcwR5FSEJVTVj322N0zjJIupzYNllCEBhcahrTyCEIBbLGy/Bvsu0MUfRvsEIQHsiY3oF2CEIAQhCA//2Q==';
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8"/>
   <title>Bug Squashing Party 2k12-13</title>
   <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
   <meta http-equiv="Content-Type" content="text/html"/>
  	<link href="../bootswatchedited.css" rel="stylesheet" type="text/css"/>
  	<script type="text/javascript" src="../js/bootstrap.js"></script>
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<link href="../styles.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript">
      $(document).ready(function () {
         // fade in content.
         $('#content-wrapper').fadeIn("slow");
      });
   </script>
   <style type="text/css">
		#content-wrapper {
  			display:none;	
		}
	</style>
</head>

<body>
	<div class="container">
            <?php $menukey=basename(__FILE__); include('header.php'); 
				            
            ?>
		<div class="row">
       <div class="span12">
    <div class="row" >
    <div class="well ">
            <div class="page-header">
                <h1>FAQ</h1>
                <hr/>
            </div>
            <div class = 'row'>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; background: url('".$qmark."');height:50px;width:50px'></div>";?>           
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>What is a Bug?</h3>
									<h4>A bug is a common term used to describe a flaw,mistake,failure or fault in a 
									computer program or system.Most bugs are caused from mistakes made by people in 
									either the source code or design
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; background: url('".$qmark."');height:50px;width:50px'></div>";?>
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Where to find the source code?</h3>
									<h4>
									Nowadays most open source software have their repos on git,hg and can be searched easily by 
									googling. For example, the source code for chrome can be found here <a href='http://code.google.com/p/chromium/'>Google Chrome</a>
									. Source Code for VLC media player can be found here <a href='http://www.videolan.org/vlc/download-sources.html'>VLC Media Player </a> 
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; background: url('".$qmark."');height:50px;width:50px'></div>";?>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>When is a Bug Squashed?</h3>
									<h4>
									Steps : <br>
									<ol>
									<li>									
									Clone the repo ur focusing on <br>
										<a href='http://www.youtube.com/watch?v=gAWiXbT599E'>Git Setup Tutorial</a><br>
										<a href='http://www.youtube.com/watch?v=x1BuYsRIdXc'>Mercurial tutorial</a>
									</li>
									<li>
									 Familiarise yourself with the code. Most open source software have dedicated developer 
									 forums. Subscribe to their mailing lists to get an idea of whats happening and start 
									 interacting with other developers For example :  <a href='http://www.videolan.org/support/lists.html'> VLC Support </a>									
									</li>
									<li>
									Analyse the code and check out the bug tracker.									
									</li>
									<li>
									Start working on the bug									
									</li>
									<li>
									Once resolved push it on the local repo send a pull request to the admin									
									</li>
									<li>
									Admin reviews the code and incorporates it in the next version or patch									
									</li>
								</h4>
            				</div>            				
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; background: url('".$qmark."');height:50px;width:50px'></div>";?><div style="margin:15px; background: url('qmark.jpg');height:50px;width:50px"></div>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Can you show me an example</h3>
									<h4>
									Here's one : <a href='https://github.com/twitter/bootstrap/issues/885'>Example</a> 
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<div style="margin:15px; background: url('qmark.jpg');height:50px;width:50px"></div>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Can you suggest some popular Open Source Sites?</h3>
									<h4>
									<ul>
									 <li><a href='http://bugzilla.mozilla.org/'>Mozilla</a></li>
									 <li><a href='https://github.com/twitter/bootstrap/'>Twitter Bootstrap</a></li>
									 <li><a href='http://code.google.com/p/cyanogenmod/'>cyanogenmod</a></li>
									</h4>
									</ul>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; background: url('".$qmark."');height:50px;width:50px'></div>";?>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>I need some more insight into this!!</h3>
									<h4>
									<ul>									
									<li><a href='http://www.kegel.com/academy/opensource.html'>Go Here</a></li>
									<li><a href='http://www.freenode.net/'>Discussion Forum</a></li>
									</ul> 
									</h4>
            				</div>
            			</div>
            </div>
        </div>
    </div>
    
   </div>
    </div>

</div>
</body>
</html>
