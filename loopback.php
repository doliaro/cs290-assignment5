<html>
<head>
<title> JSON Loopback</title>
</head>
<body>	

<?php
error_reporting(E_ALL);

$qry = $_SERVER['QUERY_STRING'];

if($_GET){

	parse_str($qry, $output);

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$output = array('Type' => 'POST') + $output;
	}
	else if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$output = array('Type' => 'GET') + $output;
	}
}
else{
	echo 'ERROR: No parameters set';
	$output["Parameters"] = "null";
	//parse_str($qry, $output);
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$output = array('Type' => 'POST') + $output;
	}
	else if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$output = array('Type' => 'GET') + $output;
	}
}

echo "<br />";
echo "<br />";
echo "JSON object: { ";
echo "<br />";

foreach($output as $key => $val) { 
	echo $key . ": " . $val . " " . "<br />"; 
}
echo '}';

?>

</body>
</html>