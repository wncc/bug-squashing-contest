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


if(isset($_POST)) {
				if(!($_POST['link']=='')) {					
					$countQuery= "SELECT count(*) FROM Bugs";
					$countResult = mysql_query($countQuery,$link);
					echo mysql_error($link);
					$bugid = mysql_num_rows($countResult)+1;				  		
		  				$addBugQuery = "INSERT INTO Bugs (BugsId, PersonId, Link, Time, Review) VALUES ('" 
			  					. $bugid . "','" . $_POST["id"] . "','".$_POST["link"]."','" . date('y-m-d H:i:s')."','notreviewed')";
			  			$addBugResult = mysql_query($addBugQuery, $link);
			  			echo mysql_error($link);
		  			
		  				/*
						$updatePeopleQuery = "UPDATE People SET NBugs = NBugs+1 WHERE PersonId = '".$_POST["id"]."'";
		  				mysql_query($updatePeopleQuery);
		  				echo mysql_error($link);
						*/
		  		}
} 

header('Location: profile.php');
?>
