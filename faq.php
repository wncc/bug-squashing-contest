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
									<?php echo "<div style='margin:15px; height:50px;width:50px'></div>";?>           
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. What is a BUG ??</h3>
									<h4>A bug is a common term used to describe a flaw, mistake, failure or fault in a 
									computer program or system. Most bugs are caused from mistakes made by people in 
									either the source code or design. For the purpose of the contest feature additions are also considered.
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px;height:50px;width:50px'></div>";?>
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. Where to find the source code?</h3>
									<h4>
									Most open source software host their code reponsitory in a version control system like Hg, Git or Svn. The link to repository can usually be found in the organisation homepage or via simple web search. <br/>Eg: Source code for chrome: <a href='http://code.google.com/p/chromium/'>Google Chrome</a>, source of VLC media player : <a href='http://www.videolan.org/vlc/download-sources.html'>VLC Media Player </a> 
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; height:50px;width:50px'></div>";?>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. How do I get started?</h3>
									<h4>
									Steps : <br>
									<ol>
									<li> Choose a software you wish to get involved with .</li>
									<li>
									Check out the bug tracker and choose a bug you want to work on									
									</li>
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
									<?php echo "<div style='margin:15px;height:50px;width:50px'></div>";?>
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. When is a bug considered squashed?</h3>
									<h4>
									Bug is considered squashed once the patch is pushed to repository or the admin pulls it into the repository. Again you can file an entry if you have just submitted a patch.
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; height:50px;width:50px'></div>";?>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. Can you show me an example</h3>
									<h4>
									Here's one : <a href='https://github.com/twitter/bootstrap/issues/885'>Example</a> 
									</h4>
            				</div>
            			</div>
            			<div class='span12'>
            				<div class='span1'>
									<?php echo "<div style='margin:15px; height:50px;width:50px'></div>";?>           
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. Can you suggest some popular Open Source Sites?</h3>
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
									<?php echo "<div style='margin:15px; height:50px;width:50px'></div>";?>            
            				</div>
            				<div class="span10" style="margin:15px">
									<h3>Q. I need some more insight into this!!</h3>
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
