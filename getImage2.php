<?php

  $id = $_GET['event_id'];
  // do some validation here to ensure id is safe

	$dbh= mysql_connect('phpmyadmin.in.cs.ucy.ac.cy','essex-db','rTcwNZMnH')
	or die("Couldn't connect to database.");

	$db = mysql_select_db("essex-db", $dbh) 
	or die("Couldn't select database.");

	$sql= "SELECT Photo FROM Events WHERE EventID=$id";
	$result = mysql_query($sql) 
	or die("Something is wrong with your SQL statement.");
	 $row = mysql_fetch_assoc($result);
	  mysql_close($dbh);
		
 	 header("Content-type: image/jpeg");
 	 echo $row['Photo'];

?>
