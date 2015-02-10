<html>
<body>
<?php
error_reporting(E_ALL);

session_start();

if(isset($_GET['action']) && $_GET['action'] == 'end')
{
	unset($_SESSION);
	session_destroy();
	$_SESSION = array();
	echo 'i have destroyed it';
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php", true);
	exit;
	die();	
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])){
	if(isset($_GET['username'])){
		$_SESSION['username'] = $_GET['username'];
	}
	if(!isset($_SESSION['views'])){
		$_SESSION['views'] = 0;
	}
	echo "<br />";
	echo 'Hello ';
	echo $_POST["username"] . ' you have visited this page ' .  $_SESSION['views'] . ' times';
	echo "<br />";
	echo "<br />";
	echo "<a href='content1.php?action=end'>Click here to log out</a>";
	echo "<br />";
	echo "<a href='content2.php?id=next'>Click here to visit content page 2</a>";
	$_SESSION['views']++;
}
else{
	echo "A username must be entered. ";
	print( '<a href="http://localhost/assignment5/login.php"> Click here to return to the login screen</a>');
}
?>
</body>
</html>