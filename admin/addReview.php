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


if(isset($_POST)) {
				echo $_POST['review']."<br>";
				echo $_POST['description']."<br>";
				if($_POST['review']=='success' | $_POST['review']=='fail') {	
						if($_POST['review']=='success') {
						$updatePeopleQuery = "UPDATE People SET NBugs = NBugs+1 WHERE PersonId = '".$_POST["id"]."'";
		  				mysql_query($updatePeopleQuery);
		  				echo mysql_error($link);	
						}		
		  				$updateRevQuery = "UPDATE Bugs SET Review ='".$_POST['review']."', Description='" . $_POST['description']."' WHERE Link = '".$_POST["link"]."'";
		  				mysql_query($updateRevQuery);
		  				echo mysql_error($link);
		  			}
		  		}
	//} 
	//echo "added";
header("Location: pending.php?username=anil&password=wncc");
?>
