<?php

	$cards = array("1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png",
	"9.png","10.png","11.png","12.png","13.png","14.png","15.png","16.png","17.png",
	"18.png","19.png","20.png","21.png","22.png","23.png","24.png","25.png","26.png",
	"27.png","28.png","29.png","30.png","31.png","32.png","33.png","34.png","35.png",
	"36.png","37.png","38.png","39.png","40.png","41.png","42.png","43.png","44.png",
	"45.png","46.png","47.png","48.png","49.png","50.png","51.png","52.png");
	

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Prototype</title>
		
		<style>
		
			body{
				background: green;
				margin: 0 0 0 0;
			}
			
			
			
		</style>
	</head>
	

		
		<?php shuffle($cards);
		
		
		?>
	
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[0] ?>" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[1] ?>" width=150 />
	    <img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[2] ?>" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[3] ?>" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[4] ?>" width=150 />
	

 
		
		
	
		<!--
		</br></br></br></br></br></br></br>
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $product ?>.png" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $product2 ?>.png" width=150 />
		-->
		<!--
		<form method="get" action="index2.php">
			
			</br></br>
			<div id="letter">
			<p>What suit do you want?</p>
			<input type="radio" name="letter" value="Spades">Spades
			<input type="radio" name="letter" value="Hearts">Hearts
			<input type="radio" name="letter" value="Clubs">Clubs
			<input type="radio" name="letter" value="Diamonds">Diamonds
			</br>
			</br>
			<input type="radio" name="letter2" value="Spades">Spades
			<input type="radio" name="letter2" value="Hearts">Hearts
			<input type="radio" name="letter2" value="Clubs">Clubs
			<input type="radio" name="letter2" value="Diamonds">Diamonds
			
			</div>
			</br></br></br>
			<div id="number">
			<p>What number do you want?</p>
			<select name="number">
				<option value="0"></option>
				<option value="1">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">J</option>
				<option value="12">Q</option>
				<option value="13">K</option>
			</select>
			</br>
			</br>
			<select name="number2">
				<option value="0"></option>
				<option value="1">A</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">J</option>
				<option value="12">Q</option>
				<option value="13">K</option>
			</select>
			</div>
			<input type="submit" value="I'm feeling lucky!!" />
		</form>
		-->
		
		
		
	
		
	</body>
	
</html>