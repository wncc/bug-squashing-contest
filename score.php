<?php
include_once('config.php');
$link = mysql_connect("$DB_HOST","$DB_USER","$DB_PASSWORD");
if (!$link)
{
  die('Could not connect: ' . mysql_error());
}

// Select database
mysql_select_db("$DB_NAME", $link);
echo mysql_error($link); 

$overallQuery = "SELECT Name, NBugs FROM People WHERE NOT (NBugs = 0)  ORDER BY NBugs DESC";
$overallResult = mysql_query($overallQuery, $link);
if(!$overallResult) {
	echo "SQL Error" . mysql_error($link);	
}

$monthlyQuery1 = "CREATE VIEW level1 AS SELECT PersonId, BugsId FROM Bugs WHERE MONTH(DATE(Time)) = MONTH(CURDATE()) AND Review='success';";
$monthlyResult1 = mysql_query($monthlyQuery1,$link);
if(!$monthlyResult1) {
	//echo "SQL Error" . mysql_error($link);	
}
$monthlyQuery2 = "SELECT Name, COUNT(BugsId) FROM level1, People WHERE level1.PersonId = People.PersonId GROUP BY level1.PersonId ORDER BY COUNT(BugsId) DESC"; 
$monthlyResult2 = mysql_query($monthlyQuery2,$link);
if(!$monthlyResult2) {
	echo "SQL Error" . mysql_error($link);	
}

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
        <div class= "row span12">
           <div class="well">
            <div class="page-header">
                <h1> Overall</h1>
                <hr />
            </div>
            <table class="table table-bordered table-striped">
            <thead><tr><th><h3>Rank</h3></th><th><h3>Name</h3></th><th><h3>Issues Resolved</h3></th></tr></thead>
				<?php				
				$num = mysql_num_rows($overallResult); 
						if($num==0) {
							echo '';							
						} else {
							$i = 1;
							while($row = mysql_fetch_array($overallResult)) {
									echo "<tr><td>" . $i . "</td>" .
										"<td>".$row['Name']."</td>" .
										"<td>" . $row['NBugs']. "</td></tr>" ; 																		
							$i++;							
							}	
						}
				?>            
  	         </table>
           </div>
        </div>
        <div class= "row span12 ">
           <div class="well" id="About">
            <div class="page-header">
                <h1>Monthly</h1>
                <hr />
            </div>
            <table class="table table-bordered table-striped">
            <thead><tr><th><h3>Rank</h3></th><th><h3>Username</h3></th><th><h3>Issues Resolved</h3></th></tr></thead>
            <?php				
				$num = mysql_num_rows($monthlyResult2); 
						if($num==0) {
							echo '';							
						} else {
							$i = 1;
							while($row = mysql_fetch_array($monthlyResult2)) {
									echo "<tr><td>" . $i . "</td>" .
										"<td>".$row['Name']."</td>" .
										"<td>" . $row[mysql_field_name($monthlyResult2, 1)]. "</td></tr>" ; 																		
							}	
						}
				?>            
            </table>
           </div>
        </div>
    </div>
</div>
</body>
</html>
