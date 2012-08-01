<?php
if(!(isset($_REQUEST['username']) && isset($_REQUEST['password']))) {
	exit("Access Denied!!");
} else if($_REQUEST['username']!='anil' && $_REQUEST['password']!='wncc') {	
	exit("Incorrect Credentials : Access Denied!!");	
}
$link = mysql_connect("localhost","root");
if (!$link)
  {
  die('Could not connect: ' . mysql_error());
  }

// Select database
mysql_select_db("data", $link);
echo mysql_error($link) . "<br>"; 

$pendingQuery = "SELECT PersonId, Link FROM Bugs WHERE Review='notreviewed' ORDER BY Time ASC";
$pendingResult = mysql_query($pendingQuery, $link);
if(!$pendingResult) {
	echo "SQL Error" . mysql_error($link);	
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <title>Admin Page</title>
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
 
#content-wrapper
{
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
                    <img src='../bug-squasher.png' height=150 width=150 />
                </div>
                <div class="span6" id="navbar">
                    <ul class="nav nav-pills">
                        <li><a href="pending.php" data-toggle="pill" rel="tab"><h3>Pending</h3> </a></li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class= "row span12 " id="About">              
           <div class="well">
            <div class="page-header">
                <h1> To Be Reviewed</h1>
                <hr />
            </div>       
				<?php 		
				while($row = mysql_fetch_array($pendingResult)) { 
				echo "<form class='well' method='post' action='addReview.php'>
  					<span class='label label-important' id='label1'>". $row['Link'] ."</span>
  					<br><br>
  					<input type='hidden' name='link' value='".$row['Link']."'>
  					<input type='hidden' name='id' value='".$row['PersonId']."'>
  					<label class='radio'><input type='radio' name='review' value='success'>Success</input></label>
  					<label class='radio'><input type='radio' name='review' value='fail'>Failure</input></label>
  					<br>
  					<textarea name='description' class='input-xlarge' id='textarea' placeholder='Description'></textarea>
  					<br>
  					<button type='submit' class='btn btn-success'>Submit</button></form>";}?>            
           </div>
        </div>
    </div>
</div>
</body>
</html>