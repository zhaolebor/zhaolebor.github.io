<?php

	$cards = array("1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png",
	"9.png","10.png","11.png","12.png","13.png","14.png","15.png","16.png","17.png",
	"18.png","19.png","20.png","21.png","22.png","23.png","24.png","25.png","26.png",
	"27.png","28.png","29.png","30.png","31.png","32.png","33.png","34.png","35.png",
	"36.png","37.png","38.png","39.png","40.png","41.png","42.png","43.png","44.png",
	"45.png","46.png","47.png","48.png","49.png","50.png","51.png","52.png");
	

	
	$letter = $_REQUEST[ "letter" ];
	$number = $_REQUEST[ "number" ];
	
	$letter2 = $_REQUEST[ "letter2" ];
	$number2 = $_REQUEST[ "number2" ];
	
	
	
	if ($letter == "Spades"){
		$x=1;
	}
	else if ($letter == "Hearts"){
		$x=2;
	}
	else if ($letter == "Clubs"){
		$x=3;
	}
	else {
		$x=4;
	}
	
	if ($letter2 == "Spades"){
		$x2=1;
	}
	else if ($letter2 == "Hearts"){
		$x2=2;
	}
	else if ($letter2 == "Clubs"){
		$x2=3;
	}
	else {
		$x2=4;
	}
	
	if ($letter == $letter2 && $letter == "Spades"){
		$font="Impact";
	}
	else if ($letter == $letter2 && $letter == "Hearts"){
		$font="Didot";
	}
	else if ($letter == $letter2 && $letter == "Clubs"){
		$font="Helvetica";
	}
	else if ($letter == $letter2 && $letter == "Diamonds"){
		$font="Gill sans";
	}
	else {
		$font="Futura";
	}
	
	if ($letter == $letter2 && $letter == "Spades" && $number == $number2){
		$text="CHEATER!! Where did you get that " . $number . "  !!!";
	}
	else if ($letter == $letter2 && $letter == "Hearts" && $number == $number2){
		$text="CHEATER!! Where did you get that " . $number . "  !!!";
	}
	else if ($letter == $letter2 && $letter == "Clubs" && $number == $number2){
		$text="CHEATER!! Where did you get that " . $number . "  !!!";
	}
	else if ($letter == $letter2 && $letter == "Diamonds" && $number == $number2){
		$text="CHEATER!! Where did you get that " . $number . "  !!!";
	}
	else {
		$text="";
	}
	
	

	
	$y = $_REQUEST[ "number" ];
	$y2 = $_REQUEST[ "number2" ];
	$product = $x+(4*$y)-4;
	$product2 = $x2+(4*$y2)-4;
	
	
	
	
	$color = str_replace(" ","",$color);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Building Your High Cards</title>
		
		<style>
		
			body{
				background: green;
				z-index: 1;
			}
			
			p {
				font-family: <?php echo $font; ?>;
				font-size: 30px;
				z-index:1;	
			}
			
			input {
				background: LightGray;
				font-size: 30px;
				z-index:1;	
				}
				
			select {
				background: Yellow;
				z-index:1;	
				}	
			#letter {
				position: absolute;
				top: 450px;
				left: 420px;
				z-index:1;	
			}
			
			#number {
				position: absolute;
				top: 450px;
				left: 820px;
				z-index:1;	
			}
			#cards {
				position: absolute;
				top: 440px;
				left: 50px;
				z-index:1;	
			
			}
			#go {
				position: absolute;
				top: 720px;
				left: 100px;
				font-size: 24px;
				z-index:1;	
			
			}
			#refresh {
				position: absolute;
				top: 700px;
				left: 500px;
				z-index:1;	
			}
			#title {
				font-family: baskerville;
				font-size: 80px;
				position: absolute;
				top: 30px;
				left: 100px;
				
				z-index:1;	
			}
			#iframe {
				position: absolute;
				top: 150px;
				left: 120px;
				z-index:1;	
			}
			a:link{
				font-size: 35px;
				z-index:1;	

			}

			a:visited{
				color:aqua;
			}

			a:hover{
				font-style: italic;
				background: yellow;
				border-bottom: none;

			}

			a:active{
				color: red;

			}
			
			#text {
				position:fixed;
				top: 300px;
				left: 20px;
				font-size: 70px;
				-ms-transform: rotate(-30deg); /* IE 9 */
				-webkit-transform: rotate(-30deg); /* Safari and Chrome */
				-o-transform: rotate(-30deg); /* Opera */
				-moz-transform: rotate(-30deg); /* Firefox */	
				z-index: 100;	
				font-family: <?php echo $font; ?>;
				color: darkblue;
			}

			
			
		</style>
	</head>
	
	<body>
		<div id=text>
		<?php echo $text; ?>
		</div>
		
		<?php for ($i=0; $i<$y; $i++) {
				$randsize=rand(5,500);
				$pt2px=$randsize*4/3;
				$randl=rand(0,1200-$pt2px);
				$randt=rand(0,800-$pt2px);
				$randang=rand(0,60*$x-60*$x2);
				$rand=rand(175+10*$y-10*$y2,175-10*$y+10*$y2);
		?>
			<div style="position:absolute;left:<?php echo $randl;?>px;top:<?php echo $randt;?>px;
						transform: rotate(<?php echo $randang;?>deg);
						-ms-transform: rotate(<?php echo $randang;?>deg); /* IE 9 */
						-webkit-transform: rotate(<?php echo $randang;?>deg); /* Safari and Chrome */
						-o-transform: rotate(<?php echo $randang;?>deg); /* Opera */
						-moz-transform: rotate(<?php echo $randang;?>deg); /* Firefox */		
						">
				<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img2/<?php echo $letter ?>.png" width=<?php echo $rand;?>px/>
			</div>
		<?php }
			
				for ($i=0; $i<$y2; $i++) {
					$randsize=rand(5,500);
					$pt2px=$randsize*4/3;
					$randl=rand(0,1200-$pt2px);
					$randt=rand(0,800-$pt2px);
					$randang=rand(0,60*$x2-60*$x);
					$rand=rand(175+10*$y-10*$y2,175-10*$y+10*$y2);
		?>
			<div style="position:absolute;left:<?php echo $randl;?>px;top:<?php echo $randt;?>px;
						transform: rotate(<?php echo $randang;?>deg);
						-ms-transform: rotate(<?php echo $randang;?>deg); /* IE 9 */
						-webkit-transform: rotate(<?php echo $randang;?>deg); /* Safari and Chrome */
						-o-transform: rotate(<?php echo $randang;?>deg); /* Opera */
						-moz-transform: rotate(<?php echo $randang;?>deg); /* Firefox */
												
						">
				<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img2/<?php echo $letter2 ?>.png" width=<?php echo $rand;?>px/>
				</div>
		<?php
			}
			
		?>
		<div id= title>
		Building Your High Cards
		</div>
		

		<form method="get" action="index2.php">
			
			
			<div id="letter">
			<p>What suit do you want ?</p>
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
			
			<div id="number">
			<p>What number do you want ?</p>
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
			<div id=go>
			<input type="submit" value="I'm feeling lucky!!" />
			</div>

		</form>
		
		
		
		
		
		<div id=cards>
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $product ?>.png" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $product2 ?>.png" width=150 />
		</div>

		<div id=refresh>
		<p><a href="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/poker/index.php/"  >Refresh</a><p>
		</div>
		<div id=iframe>
		<iframe src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/poker/index.php/" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" name="ifrmname" id="ifrmid "height=225px width=766.5px/></iframe>
		</div>


		
		
		
		
		
	
		
	</body>
	
</html>