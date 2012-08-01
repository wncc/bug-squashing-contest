<?php
function already_exists($res, $user) {
	$num=mysql_num_rows($res);
	$i=0;
	while ($i < $num) {	
	if (strcmp(mysql_result($res,$i,"PersonId"),$user["id"])==0) {		
		return true;
	}
	$i++;
	}
	return false;
}		 
require_once '../src/apiClient.php';
require_once '../src/contrib/apiOauth2Service.php';
session_start();

$client = new apiClient();
$client->setApplicationName("Bug Squashing Contest");

 $client->setClientId('393220185541.apps.googleusercontent.com');
 $client->setClientSecret('11Rjxk_7d06dNDmXo_522d5_');
 $client->setRedirectUri('http://localhost/bug-squashing-contest/user/profile.php');
 $client->setDeveloperKey('AIzaSyAe5u9AyufN8BjitK8bSbTdTBRkDL38ZUw');
$oauth2 = new apiOauth2Service($client);

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
  header('Location : home.php');
}

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $user = $oauth2->userinfo->get();


  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
}

$link = mysql_connect("localhost","root");
if (!$link)
  {
  die('Could not connect: ' . mysql_error());
  }

// Select database
mysql_select_db("data", $link);
echo mysql_error($link) . "<br>"; 
	
	
$id = $user["id"];
$query = "Select * FROM People";
echo mysql_error($link);
$res = mysql_query($query);
if(already_exists($res,$user)) {
		//echo 'Person Already Exists';
	
		$dispQuery = "SELECT BugsId, Link, Review, Description, Time FROM Bugs WHERE PersonId ='" . $id ."'ORDER BY Time DESC";
		$dispResult = mysql_query($dispQuery,$link);
		if(!$dispResult) {
				echo mysql_error($link);			
		} 
		
} else {
		$addQuery  = "INSERT INTO People (PersonId, Name, Photo, NBugs) VALUES ('". $user["id"] . "','" . $user["name"] . "','" . $user["picture"] . "', 0);";
   	$addResult = mysql_query($addQuery, $link);
    
   	if(!$addResult) {
     		echo 'Error in Database' . mysql_error($link);
     }
}

$flag = array(
	'notreviewed' => 'label-warning',
	'success' => 'label-success',
	'fail' =>  'label-important'
	);
mysql_close();

?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Bug Squashing Party 2k12-13</title>
  <meta name= "viewport" content="width=device-width, initial-scale=1.0"/>
  
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
	#content-wrapper	{
	display:none;	
	}
 	</style>
</head>

<body>
<div id="content-wrapper">
    <div class="header">
    		<div class="container">
            <div class="row">
                <div class="span6" id="logo">
                    <img src='../bug-squasher.png' height=150 width=200 />
         		 </div>
          		 <div class="span8" id="navbar" style="float:right">
                	<ul class="nav nav-pills" style="float:right">
                   	<li><a href="home.php" data-toggle="pill" rel="tab"><h3>Home</h3> </a></li>
                   	<li><a href="faq.php" data-toggle="tab" rel="tab"><h3>FAQ</h3></a></li>
                   	<li><a href="contact.php" data-toggle="tab" rel="tab"><h3>Contact Us</h3></a></li>
                   	<li><a href="score.php" data-toggle="tab" rel="tab"><h3>Scoreboard</h3></a></li>
                   	<li class="active"><a href="profile.php" data-toggle="tab" rel="tab"><h3>Profile</h3></a></li>
                
						<li><form method = "post" action="?logout" class="span2">                
                	<button type="submit" class="btn btn-danger btn-large" style="float:right">
                		<h4>Sign Out</h4>
                	</button>
               </form></li>
               </ul>
            	</div>
            </div>
        </div> 
    </div>
    <div class="container">
       <div class= "row span12 " id="About">
         <div class="well">
            <div class="page-header">
					<?php 
						if(array_key_exists("picture", $user)) {
							$pic = $user["picture"];
         	 		} else {
							$pic = "../default.jpg";                				
   	        		} 
 	              print "<h2> <img src= '". $pic. "' height=50 width=50 /> ".$user['name']."</h2>";
               ?>               
               <hr />
            </div>
            <div>
            	<table class="table table-bordered table-striped">
            		<thead>
            			<tr>
	      	   	   	<th><h3>BugId</h3></th>
   		   	      	<th><h3>Link to Commit</h3></th>
  	 			         	<th><h3>Time Stamp</h3></th>
   		         		<th><h3>Description</h3></th>
	   	         	</tr>	
   	         	</thead>
	            	<?php 
	            		$num = mysql_num_rows($dispResult); 
							if($num==0) {
								echo '';							
							} else {
								while($row = mysql_fetch_array($dispResult)) {
									$rev = $row['Review'];
									echo "<tr><td><span class='label ".$flag[$rev]."'>" . $row['BugsId'] . "</span></td>" .
									"<td><a href='http://" . $row['Link'] . "'>".$row['Link']."</a></td>" .
									"<td>" .$row['Time']."</td>" .
									"<td>" . $row['Description'] . "</td></tr>" ; 																																
								}	
							}
						?>
            	</table>
           </div>
           <form class="well" method="post" action="../admin/addBug.php" id ="addbug">
  					<input id = "io1" type="text" name="bugid" class="span3" placeholder="Bug Id">
  					<div class="input-prepend" id="io4">
  						<span id="io3" class="add-on">http://</span><input id = "io2" type="text" name="link" class="span3" placeholder="Link to Commit">
  					</div>
  					<?php 
  						echo "<input type='hidden' name='id' value=" . $id . ">";
  					?>
  					<br>
  					<button type="submit" class="btn btn-primary">Add New</button>
				</form>
				<span class='label label-success'>Reviewed Success</span>
				<span class='label label-important'>Reviewed Failure</span>
				<span class='label label-warning'>Not Reviewed</span>       
       	</div>
    	 </div>
	 </div>
	</div>
</body>
</html>
