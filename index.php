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
  	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<link href="styles.css" rel="stylesheet" type="text/css" />
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
        			<h4 style="padding-left:10px; padding-right: 42px;"><a href="http://en.wikipedia.org/wiki/Open-source_software">Open-source software (OSS)</a>
        				is software whose source code is published and made available to the public,
        				enabling anyone to copy, modify and redistribute the source code. Most of the OSS rely on community developers,
        				people like us to work on and contribute to the project. The sole purpose of this purpose of this contest is to
        				get students involved into open source communities, helping us make software we love even better.
        			</h4>
            		<br>
            		<h3 style="padding-left: 20px; padding-bottom: 10px;">I am a really busy sophie/thirdie/fourthie! Why should I do this?</h3>
            		<div class = 'row'>
            			<div class='span9'>
            				<div class='span1'>
									<div style="margin:15px; margin-left: 0px; background: url('icons.png');background-position:0 0; height:50px; width:50px"></div>
            				</div>
            				<div class="span7" style="margin:15px; margin-left: 0px; ">
									<h3>Thrill</h3>
									<h4>Unlike your CS101 project which now has umm ... zero active users, this is
									real world software we are talking about. If your patches get accepted, potentially
									millions of users can benefit from your fix. If that doesn't excite you, I am not sure if you are on the right page currently.
									</h4>
            				</div>
            			</div>
            			<div class='span9'>
            				<div class='span1'>
									<div style="margin:15px; margin-left: 0px;  background: url('icons.png');background-position:-50px 0; height:50px; width:50px"></div>
            				</div>
            				<div class="span7" style="margin:15px; margin-left: 0px; ">
									<h3>Knowledge</h3>
									<h4>
									Learn from the uber hackers. Straight from the source. Talk with the maintainers on
									IRC and participate in the community. Learn some really cool tricks from some of
									the smartest guys around.
									</h4>
            				</div>
            			</div>
            			<div class='span9'>
            				<div class='span1'>
									<div style="margin:15px; margin-left: 0px;  background: url('icons.png');background-position:-200px 0; height:50px; width:50px"></div>
            				</div>
            				<div class="span7" style="margin:15px; margin-left: 0px; ">
									<h3>Glory</h3>
									<h4>
									Bragging rights! Be known as the guy who added proxy support to bunch of cool
									apps and defeated ye olde Netmon. Who knows along the way someone may like you
									enough to pick for the next Google Summer of Code.
									</h4>
            				</div>
            			</div>
            		</div>
        			</div>
    		</div>
    <div class="row" >
    		<div class="well ">
            <div class="page-header" style="margin-bottom:0px;">
                <h1>Latest Updates</h1>
                <hr/>
            </div>
            <h3> <a href="http://programmers.stackexchange.com/questions/91237/how-to-start-fixing-bugs-in-open-source-softwares">how to start fixing bugs in open source softwares </a></h3>
        	</div>
    </div>
  </div>
</div>
</div>
</body>
</html>
