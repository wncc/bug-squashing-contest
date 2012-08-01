<?php 
	include_once('config.php');
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
            <?php $menukey=basename(__FILE__); include('header.php'); ?>
    <!--
    <div class='hero ac span12' id='hero-box' style="display:none">
    	<div class = 'container'>
			<h2 style="text-align:center">Never allow the same bug to bite you twice</h2><br><br>
			<div class='big-media' style="text-align:center">
	 			<img height="500" src="coding.jpg" width="640">   
    		</div>
    	</div>
    </div>
    -->
    <div class="row">
       <div class="span12">
    		<div class="row" >
    				<div class="well ">
           			<div class="row" style="margin:10px">
                		<h2>About the Contest</h2>
               		<hr/>
            		</div>
            		<p>
            			<h4><a href="http://en.wikipedia.org/wiki/Open-source_software">Open-source software (OSS)</a>
            				is software whose source code is published and made available to the public, 
            				enabling anyone to copy, modify and redistribute the source code .Most of the OSS rely on community developers ,
            				people like us to work on and contribute to the project. The sole purpose of this purpose of this contest is to 
            				get students involved into open source communities .
            			</h4>
            		</p><br>
            		<h3>Some things in for you!!</h3>
            		<div class = 'row'>
            			<div class='span6'>
            				<div class='span1'>
									<div style="margin:15px; background: url('icons.png');background-position:0 0; height:50px; width:50px"></div>            
            				</div>
            				<div class="span5" style="margin:15px">
									<h3>Coding Standards</h3>
									<h4>The code quality standards in open source software is high. At the end the way you code would .. 
										well try it for yourself.
									</h4>
            				</div>
            			</div>
            			<div class='span6'>
            				<div class='span1'>
									<div style="margin:15px; background: url('icons.png');background-position:-50px 0; height:50px; width:50px"></div>            
            				</div>
            				<div class="span5" style="margin:15px">
									<h3>Lots of fun</h3>
									<h4>
									It is fun working on bugs and being a part of community. Get into IRC, meet new people its all there 									
									</h4>
            				</div>
            			</div>
            			<div class='span6'>
            				<div class='span1'>
									<div style="margin:15px; background: url('icons.png');background-position:-200px 0; height:50px; width:50px"></div>            
            				</div>
            				<div class="span5" style="margin:15px">
									<h3>Glory</h3>
									<h4>
									Fixing bugs serves as a gateway to get into programs like Google Summer of Code.  									
									</h4>
            				</div>
            			</div>
            		</div>
        			</div>
    		</div>
    <div class="row" >
    		<div class="well ">
            <div class="page-header">
                <h1>Latest Updates</h1>
                <hr/>
            </div>
            <h3> Introduction to Open Source : Wiki Page coming soon!! </h3>
        	</div>	
    </div>
  </div>
</div>
</div>
</body>
</html>
