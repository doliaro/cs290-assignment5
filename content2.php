<html>
<body>
<?php 
error_reporting(E_ALL);

if($_GET['id']  && $_GET['id'] == 'next'){
	echo "<br />";
	echo "<a href='content1.php'>Click here to got back to page 1</a>";
}	
else{
	echo "<br />";
	print('<a href="http://localhost/assignment5/login.php"> Click here to return to the login screen</a>');
}
?>

</body>
</html>