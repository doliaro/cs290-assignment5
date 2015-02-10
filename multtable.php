<html>
<head>
<title> Mulitplication Table</title>
</head>
<body>	

<?php
error_reporting(E_ALL);

$min_multiplicand = $_GET['min-multiplicand'];
$max_multiplicand = $_GET['max-multiplicand'];
$min_multiplier = $_GET['min-multiplier'];
$max_multiplier = $_GET['max-multiplier'];
$okay_table = true;

if($okay_table == true){
	if(!isset($_GET['min-multiplicand'])){
		echo 'Missing parameter for min-multiplicand value/n';	
		$okay_table = false;
	}

	if(!isset($_GET['max-multiplicand'])){
		echo 'Missing parameter for max-multiplicand value';
		$okay_table = false;
	}

	if(!isset($_GET['min-multiplier'])){
		echo 'Missing parameter for min-multiplier value';
		$okay_table = false;
	}

	if(!isset($_GET['max-multiplier'])){
		echo 'Missing parameter for max-multiplier value';
		$okay_table = false;
	}

	echo "<h5> Min Multiplicand is : " . $min_multiplicand . "</h5>";
	echo "<h5> Max Multiplicand is : " . $max_multiplicand . "</h5>";
	echo "<h5> Min Multiplier is : " . $min_multiplier . "</h5>";
	echo "<h5> Max Multiplier is : " . $max_multiplier . "</h5>";


	if(
		(checkNums($min_multiplier, $max_multiplier, 'multiplier') == 0) && 
		(checkNums($min_multiplicand, $max_multiplicand, 'multiplicand') == 0) &&
		($okay_table == true))
	{
		
		createTable($min_multiplicand, $max_multiplicand, $min_multiplier, $max_multiplier);
	}
}

function checkNums($min, $max, $mult_type) 
{
	if($min <= $max){
		return 0;
	}
	else{
		echo 'ERROR: Minimum ' . $mult_type . ' is larger than the maximum.';
		return 1;
	}	
}
function createTable($min_multiplicand, $max_multiplicand, $min_multiplier, $max_multiplier){

	print("<table cellpadding=5 border=\"1\">\n");
		
		print("<th width=15px>");
		print(" ");
		print("</th>");

		for($i=1; $i <= $max_multiplicand; $i++){
			
			print("<th align=center>");
			print($i);
			print("</th>");
		}
		//working table
		for($row = $min_multiplier; $row < ($max_multiplicand-$min_multiplicand)+2; $row++){
			print("<tr\n>");

			print("<th align=center>");
			print($row);
			print("</th>");
			for($col = $min_multiplicand; $col < ($max_multiplier-$min_multiplier)+2; $col++){
		
				print("<td align=center>");
				print($row * $col);
				print("</td>");
			}		
			print("</tr\n>");
		}

	print("</table\n>"); 	
}	

?>

</body>
</html>