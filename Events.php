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
.auto-style8 {
	text-align: center;
	font-weight:bold;
	}
.auto-style9 {
	font-family: "Gill Sans MT";
	font-size: xx-large;
}
</style>
<script type="text/javascript">

function popup(){
  cuteLittleWindow = window.open("simple_event.htm", "littleWindow", "location=no,width=auto,height=auto"); 
}

</script>

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
					 <li style="width:15%"><a href="#" style="width:63%; ">Info </a>
					
					 <ul class="auto-style7" style="height:auto; width:15%; position:absolute; display:block; text-align:center; visibility:hidden">
						<li style="width:100%"><a href="info_for_freshers.htm" title="" style="width: 100%; padding:inherit">Info for freshers</a></li>
						<li style="width:100%"><a href="about_university.htm" title="" style="width: 100%; padding:inherit">About University</a></li>
						<li style="width:100%"><a href="about_essex.htm" title="" style="width: 100%; padding:inherit">About Essex</a></li>
						<li style="width:100%"><a href="committee.htm" title="" style="width: 100%; padding:inherit">Committee</a></li>
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
<div class="wrapper" style="height: auto">
	    	
	<div class="auto-style8" style="height:auto">
		<span class="auto-style9">
	<strong>Comming Events</strong></span> <br />
		<br />
	</div>
	<div style="height: auto">
		<div style="height: auto">
			
			<table style="width: 100%; height: auto; ">	
				
		
		<?php
		$dbh= mysql_connect('phpmyadmin.in.cs.ucy.ac.cy','essex-db','rTcwNZMnH')
		or die("Couldn't connect to database.");

		$db = mysql_select_db("essex-db", $dbh) 
		or die("Couldn't select database.");

		$sql= "SELECT Name,EventID FROM Events WHERE Date_Time>=CURDATE()";
		$result = mysql_query($sql) 
		or die("Something is wrong with your SQL statement.");

		$i=0;
		while ($row = mysql_fetch_array($result)) {
		if($i%4==0){
		echo '<tr>';
		}
		$Name = $row['Name'];
		$id=$row['EventID'];
		echo '<td class="auto-style8" style="width:25%; height:auto"><a href="simple_event.php?event_id=';
		echo $id;
		echo '" style="color:black">';
		echo '<h3>';
		echo $Name;
		echo '</h3>';
		echo '	</a><br />';
		echo '<a href="simple_event.php?event_id=';
		echo $id;
		echo '">';
		echo ' <img width="250" height="250" src="getImage2.php?event_id=';
		echo $id;
		echo '" />';
		echo '</a>';
		echo '</td>';
		$i=$i+1;
		if($i%4==0){
		echo '</tr>';
		}
		}
	 	mysql_close($dbh);

		?>

			</table>
		</div>
	</div>


</div>

</body>
</html>
