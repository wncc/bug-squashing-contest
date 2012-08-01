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
	<div id="content-wrapper">
  	 <div class="header">
    	
        <div class="container">
          	<div class="row" id = 'row1'>
          	  <div class="span6" id="logo">
           			<img src='../bug-squasher.png' height=150 width=200 />
      		  </div>	            
              <div class="span8" id="navbar" style='float:right'>
                 <ul class="nav nav-pills" style='float:right'>
                    <li ><a href="home.php" data-toggle="pill" rel="tab"><h3>Home</h3></a></li>                     
                    <li> <a href="faq.php" data-toggle="pill" rel="tab"><h3>FAQ</h3></a></li>
                    <li class=active> <a href="contact.php" data-toggle="pill" rel="tab"><h3>Contact Us</h3></a></li>
                    <li> <a href="score.php" data-toggle="pill" rel="tab"><h3>Scoreboard</h3></a></li>                    
                    <?php
                    		if(isset($_SESSION['token'])) {
                    			echo "<li><a href='profile.php' data-toggle='tab' rel='tab'><h3>Profile</h3></a></li>";
                    		}
                    ?>
                    <?php 
              if(!isset($_SESSION['token'])) {
              	echo 
				  	"<form method = 'get' action='https://accounts.google.com/o/oauth2/auth' style='float:right;'>".                
						"<input type='hidden' name='scope' value='https://www.googleapis.com/auth/userinfo.profile'>".                
						"<input type='hidden' name='state' value='/profile'>".
						"<input type='hidden'name='redirect_uri' value='http://localhost/bug-squashing-contest/user/profile.php'>".
						"<input type='hidden' name ='response_type' value='code'>".
						"<input type='hidden' name ='client_id' value='393220185541.apps.googleusercontent.com'>".
						"<input type='hidden' name ='approval_prompt' value='force'>". 	
                	"<button type='submit' class='btn btn-success btn-large' style='float:right'>".
                		"<h4>Sign In</h4>".
                	"</button>".
              	"</form>";
             } else {
             	echo 
             	"<li><form method = 'post' action='?logout' class='span2'>".                
                	"<button type='submit' class='btn btn-danger btn-large' style='float:right'>".
                		"<h4>Sign Out</h4>".
                	"</button>".
               "</form></li>";
             }?>
                 </ul>
              </div>
             
            </div>
        </div> 
    </div>
    <div class="container">
       <div class="span12" id="About">
    <div class="row" >
    <div class="well ">
            <div class="page-header">
                <h1>Contact Us</h1>
                <hr/>
            </div>
            <h3>To be Updated!!</h3>
        </div>
    </div>
    
   </div>
    </div>

</div>
</body>
</html>