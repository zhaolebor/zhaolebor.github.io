<?php

	
	
	$statement = "Hello.";
	
	$newText = $statement . " How are you?";
	
	$letter = $_REQUEST[ "letter" ];
	$number = $_REQUEST[ "number" ];
	$letter = strtolower($letter);
	
	if ($letter == "a" || $letter == "k" || $letter == "u"){
		$x=1;
	}
	else if ($letter == "b" || $letter == "l" || $letter == "v"){
		$x=2;
	}
	else if ($letter == "c" || $letter == "m" || $letter == "w"){
		$x=3;
	}
	else if ($letter == "d" || $letter == "n" || $letter == "x"){
		$x=4;
	}
	else if ($letter == "e" || $letter == "o" || $letter == "y"){
		$x=5;
	}
	else if ($letter == "f" || $letter == "p" || $letter == "z"){
		$x=6;
	}
	else if ($letter == "g" || $letter == "q" ){
		$x=7;
	}
	else if ($letter == "h" || $letter == "r" ){
		$x=8;
	}
	else if ($letter == "i" || $letter == "s" ){
		$x=9;
	}
	else {
		$x=0;
	}
	
	$y = 9-$_REQUEST[ "number" ];
	$sum = $x + $y;
	$product = $x+$y+18;
	
	
	
	$color = str_replace(" ","",$color);
	
	//$color = str_replace($color);
	
	/* if ($color == "light gray" || "Light Gray") {
		$color = "#aaa";
	} */
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Prototype</title>
		
		<style>
			
			p {
				font-family: Futura;
				font-size: <?php echo $product; ?>px;
			}
			
			input {
				background: LightGray;
				}
				
			select {
				background: Aqua;
				}	
			#letter {
				position: absolute;
				top: 250px;
				left: 100px;
				-webkit-transform: rotate(<?php echo $sum; ?>deg);
			}
			
			#number {
				position: absolute;
				top: 250px;
				left: 500px;
				-webkit-transform: rotate(<?php echo $sum; ?>deg);
			}
			
		</style>
	</head>
	
	<body>
	
		<p><?php echo $statement; ?></p>
		
		<p><?php echo $newText; ?></p>
		
		<p><?php echo $letter; ?></p> 
	
		<p><?php echo $number; ?></p> 
		
		<p><?php echo $x; ?></p> 
		
		<p><?php echo $y; ?></p> 
		
		<p><?php echo $sum; ?></p> 
	
		<form method="get" action="index.php">
			
			</br></br>
			<div id="letter">
			<p>What's your favorite letter?</p>
			<input type="text" name="letter" />
			</div>
			</br></br></br>
			<div id="number">
			<p>What's your favorite number?</p>
			<select name="number">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
			</select>
			</div>
			</br></br></br>
			<input type="submit" value="I'm feeling lucky!!" />
		</form>
		
	
		
	</body>
	
</html>