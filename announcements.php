<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- #BeginEditable "doctitle" -->
<title></title>
<!-- #EndEditable -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
function logoOnClick(){
    alert("hi!");
}

</script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<style type="text/css">
.auto-style1 {
	margin-right: 0px;
	margin-top: 0px;
}
.auto-style2 {
	margin-top: 115;
}
.auto-style4 {
	margin: 1px auto 0px auto;
	width: 1200px;
}
.auto-style7 {
	text-align: left;
}
.subtitle{
	margin-top:15px;
	margin-bottom:30px;
}
.auto-style10 {
	text-decoration: underline;
}
.auto-style11 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
</style>

</head>
<body style="height:auto; width: 100%; margin-right: 0px;">
<div id="header-wrapper" style="height: auto; width: 100%;">
	<div id="header" class="auto-style4" style="height: auto; width:100%">
	<h1 class="auto-style2" style="height: auto">
	<img onclick="location.href='index.html' " src="images/00_b_.jpg" width="238" height="232" alt="" class="auto-style1" />&nbsp;</h1>
	<h1 style="height: auto">Welcome to Essex Cypriot Society</h1>

        	
		<div id="menu" style="height: auto; width: 100%;">
		<h3>
			<ul style="height:auto; display:block; clear:both;">
    
				<li> <a href="index.html" title="" style="width: auto">Home</a></li>
					 <li style="width:15%"><a href="#" >Info </a>
					
					 <ul class="auto-style7" style="height:auto; width:15%; position:absolute; display:block; text-align:center; visibility:hidden">
						<li style="width:100%"><a href="info_for_freshers.htm" title="" style="width: 100%; padding:inherit">Info for freshers</a></li>
						<li style="width:100%"><a href="about_university.htm" title="" style="width: 100%; padding:inherit">About University</a></li>
						<li style="width:100%"><a href="about_essex.htm" title="" style="width: 100%; padding:inherit">About Essex</a></li>
						<li style="width:100%"><a href="comitee.htm" title="" style="width: 100%; padding:inherit">Committee</a></li>
					</ul>
					
					</li>
				<li><a href="announcements.php" accesskey="5" title="" style="width: auto">Announcments</a></li>
				<li><a href="related_links.htm" title="" style="width: auto">Related Links</a></li>
				<li><a href="Events.php" accesskey="6" title="" style="width: auto">Events</a></li>
				<li><a href="events_photo_menu.php" accesskey="7" title="" style="width: auto">Events photos</a></li>
							</ul>
			</h3>
		</div>
	</div>
</div>


<div class="wrapper " style="background-image:url('image2.jpg')"padding-left:20%;padding-right:20%;">
	<div class="subtitle">
	</div>
		
    
	
	<table border=1 align="center" width=80% bgcolor="#FC8737">
	  	<tr>
		    <td width=100 class="auto-style11"><h3 class="auto-style10">Title</h3></td>
		    <td width=1000><h3 class="auto-style10" align="center">Announcement</h3></td>
		    <td width=100><h3 class="auto-style10">Published on</h3></td>
	  	
	  	</tr>
	  	
	  	<?php

		$dbh= mysql_connect('phpmyadmin.in.cs.ucy.ac.cy','essex-db','rTcwNZMnH')
		or die("Couldn't connect to database.");

		$db = mysql_select_db("essex-db", $dbh) 
		or die("Couldn't select database.");

		$sql= 'SELECT Title,Date,Description FROM Annoucments';
		$result = mysql_query($sql) 
		or die("Something is wrong with your SQL statement.");

		$i=0;
		echo '<table border=1 bgcolor="#FC8737" width=80% align=center>';
		while ($row = mysql_fetch_array($result)) {
			$Title=$row['Title'];
			$Description = $row['Description'];
			$Date = $row['Date'];
			echo '<td width=100>';
			echo '<h5>';
			echo '<b>';
			echo $Title;
			echo  '</b>';
			echo  '</h5>';
			echo  '</td>';

			echo '<td width=1000>';
			echo '<h5>';
			echo $Description ;
			echo '</h5>';
			echo '</td>';
			
			echo '<td width=100>';
			echo '<h5>';
			echo $Date;
			echo '</h5>';
			echo '</td>';
			echo '</tr>';
			
		}
		echo '</table>';
	 	mysql_close($dbh);
		?>


	  	
	  	  		  	
	  	  
	</table>
		


	

</div>

	


</div>

</body>
</html>
