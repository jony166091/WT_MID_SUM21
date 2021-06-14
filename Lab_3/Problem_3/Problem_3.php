<?php 
	
	$length = 12;
	$width = 12;
	$perimeter =2*($length + $width);
	$area = $length * $width;
	echo "$perimeter </br>";
	echo "$area </br>";

	if($length == $width)
	{
		echo "The shape is a square";
	}

?>