<?php
function sum($parameter1,$parameter2){
	$addtion=$parameter1+$parameter2;
	return $addtion;
}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>functions</title>
	</head>
	<body>
		<?php
		$var1=61;
		$var2=60;
		$sum=sum($var1,$var2);
		echo "the sum is ".$sum; 
		 ?>
	
	</body>
	</html>