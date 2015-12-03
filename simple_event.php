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
.auto-style5 {
	text-align: center;
}
.auto-style7 {
	text-align: center;
	font-size: xx-large;
}
.auto-style8 {
	text-align: center;
	font-size: large;
}
.auto-style9 {
	text-decoration: underline;
}
</style>
<script type="text/javascript">

function popup(){
  cuteLittleWindow = window.open("simple_event.html","width=auto,height=auto"); 
}

</script>

</head>
<body style="height:auto; width: 100%; margin-right: 0px;">
<div id="header-wrapper" style="height: auto; width: 100%;">
	<div id="header" class="auto-style4" style="height: auto; width:100%">
	<h1 class="auto-style2" style="height: auto">
	<img onclick="location.href='index.html' " src="images/00_b_.jpg" width="199" height="181" alt="" class="auto-style1" />&nbsp;</h1>
			
		</div>
			</div>
		<?php
		 $id = $_GET['event_id'];

		echo '<div class="wrapper" style="height: auto">';

		echo '<div class="auto-style1" style="height:auto">';
		echo	'<div class="auto-style7" style="height: auto">';
		echo '<span class="auto-style9"><strong><br />';

		
		$dbh= mysql_connect('phpmyadmin.in.cs.ucy.ac.cy','essex-db','rTcwNZMnH')
		or die("Couldn't connect to database.");

		$db = mysql_select_db("essex-db", $dbh) 
		or die("Couldn't select database.");

		$sql= "SELECT Name,Details,DATE_FORMAT(Date_Time, '%a %b %dth %Y at %h:00%p') as event_time,Place FROM Events WHERE EventID=$id";
		$result = mysql_query($sql) 
		or die("Something is wrong with your SQL statement.");
		
		$row = mysql_fetch_array($result);
		$Details=$row['Details'];
		$Name = $row['Name'];
		$Place= $row['Place'];
		echo $Name;
		echo '</strong>';
		echo '</span>';
		echo '<div class="auto-style8" style="height: auto">';
		echo 'Date &amp; Time: '.$row['event_time'].date("").'</br>';
		echo 'Place: '.$Place.'</br>'.'</br>';
		echo '</div>';
		echo '<div class="auto-style8" style="height: auto">';
		echo '<form method="post" style="height: auto">';
		echo '<div class="auto-style5" style="height: auto">';
		echo '<input height="auto-style" name="Image1" src="getImage2.php?event_id=';
		echo $id;
		echo '" type="image" width="543" /></div>';	
		echo '</form>';
		echo '</div>';
		echo '<div class="auto-style5" style="height:auto">';
		echo '<label id="Label1">';
		echo '<h4>';
		echo $Details;
		echo '</h4>';
		echo '</label></div>';
		echo '</div>';
	 	mysql_close($dbh);

		?>

		
		

		


		
	

	
		

	

	
		



</body>
</html>
