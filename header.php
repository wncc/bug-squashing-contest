<div class="row" style="margin-top: 10px; margin-bottom:10px;">
	<div class="span4" >
		<img src='img/logo.png' width=250 />
	</div>	            
	<div class="span8" style="margin-top: 30px;">
		<ul class="nav nav-pills pull-right">
		<li <?php if ($menukey=='index.php') echo 'class="active"'; ?>><a href="index.php" data-toggle="pill" rel="tab"><h3>Home</h3></a></li>                     
		<li <?php if ($menukey=='faq.php') echo 'class="active"'; ?>> <a href="faq.php" data-toggle="pill" rel="tab"><h3>FAQ</h3></a></li>
		<li <?php if ($menukey=='contact.php') echo 'class="active"'; ?>> <a href="contact.php" data-toggle="pill" rel="tab"><h3>Contact Us</h3></a></li>
		<li <?php if ($menukey=='score.php') echo 'class="active"'; ?>> <a href="score.php" data-toggle="pill" rel="tab"><h3>Scoreboard</h3></a></li>                    
		<?php
		if(isset($_SESSION['token'])) { ?>
		<li <?php if ($menukey=='profile.php') echo 'class="active"'; ?>><a href='profile.php' data-toggle='tab' rel='tab'><h3>Profile</h3></a></li>
		<?php 
		}
		if(!isset($_SESSION['token'])) {
		echo 
		"<form method = 'get' action='https://accounts.google.com/o/oauth2/auth' style='float:right;'>".                
			"<input type='hidden' name='scope' value='https://www.googleapis.com/auth/userinfo.profile'>".                
			"<input type='hidden' name='state' value='/profile'>".
			"<input type='hidden'name='redirect_uri' value='http://wncc.stab-iitb.org/bug-squasher/profile.php'>".
			"<input type='hidden' name ='response_type' value='code'>".
			"<input type='hidden' name ='client_id' value='393220185541.apps.googleusercontent.com'>".
			"<input type='hidden' name ='approval_prompt' value='force'>". 	
			"<button type='submit' class='btn btn-success btn-large' style='float:right'>".
			"<h4>Sign In</h4>".
			"</button>".
		"</form>";
		} else {
		echo 
		"<li><form method='GET' action='profile.php'><input type='hidden' name='logout' value='true' />".                
			"<button type='submit' class='btn btn-danger btn-large' style='float:right'>".
				"<h4>Sign Out</h4>".
			"</button>".
		"</form></li>";
		}
		?>
		</ul>
	</div>
</div>


