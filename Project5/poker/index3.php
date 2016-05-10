<?php

	$cards = array("1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png",
	"9.png","10.png","11.png","12.png","13.png","14.png","15.png","16.png","17.png",
	"18.png","19.png","20.png","21.png","22.png","23.png","24.png","25.png","26.png",
	"27.png","28.png","29.png","30.png","31.png","32.png","33.png","34.png","35.png",
	"36.png","37.png","38.png","39.png","40.png","41.png","42.png","43.png","44.png",
	"45.png","46.png","47.png","48.png","49.png","50.png","51.png","52.png");
	

	
	$equation = $_REQUEST[ "equation" ];
	$a=$equation; 
	
	

	if ($equation == "" ){
		$a=$equation;
	}
	else {
		eval("\$a=$a;");
	}
	
	
	
	if ($a == 24 ){
		$response = "Genius!";
		$result= " is 24";
	}
	else if ($a == ""){
		$response = "";
		$result= "";
	}
	else {
		$response = "You'd better check your IQ!";
		$result=" is not 24";
	}
	


 


?>

<!DOCTYPE html>
<html>
	<head>
		<title>24</title>
		
		<style>
		
			body{
				background: green;
				margin:0;
			}
			
			p {
				font-family: Futura;
				font-size: 20px;
			}
			
			input {
				background: LightGray;
				font-size: 30px;
				}
				
			select {
				background: Yellow;
				}	
			#letter {
				position: absolute;
				top: 400px;
				left: 120px;
			}
			
			#number {
				position: absolute;
				top: 450px;
				left: 820px;
			}
			#cards {
				position: absolute;
				top: 150px;
				left: 50px;
			
			}
			#go {
				position: absolute;
				top: 570px;
				left: 250px;
				font-size: 24px;
			
			}

			#title {
				font-family: baskerville;
				font-size: 80px;
				margin: 30px 0px 30px 300px;
			}
			#iframe {
				position: relative;
				left: 100px;
			}
			a:link{
				font-size: 35px;

			}

			a:visited{
				color:#ff0;
			}

			a:hover{
				font-style: italic;
				background: blue;
				border-bottom: none;

			}

			a:active{
				color: red;

			}
			#result {
				font-size: 40px;
				position: absolute;
				top: 650px;
				left: 200px;
				color: yellow;
			
			}
			#refresh {
				position: absolute;
				left: 500px;
				top: 500px;
			}
			#start {
				background: aqua;
				position: absolute;
				top:30px;
				
				height: 90px;
				width: 100%;
				z-index:-1;
			}
			

			
			
		</style>
	</head>
	
	<body>
		
		<div id= title>
		24
		</div>
		<!--<div id= start>
		</div>-->
		<div id= result>
		
		<?php echo $equation ?><?php echo $result ?></br>
		<?php echo $response ?>
		</div>
		
		<div id=refresh>
		<p><a href="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/poker/index4.php/" target="_blank" >Answers!</a><p>
		</div>
		<p><?php shuffle($cards);
		
		
		?><p>
		<div id=cards>
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[0] ?>" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[1] ?>" width=150 />
	    <img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[2] ?>" width=150 />
		<img src="http://bert.art.yale.edu/~designsummer2013/zhao/Project5/img/<?php echo $cards[3] ?>" width=150 />
		</div>
		<form method="get" action="index3.php">
			
			
			
			<div id="letter">
			<p>Enter your equation here:  24=</p>
			<input type="text" name="equation" />

			
			</div>
			
			
			<div id=go>
			<input type="submit" value="I got it!!" />
			</div>
		</form>
		
		

		
	
		
		

		
		
		
		
		
		
		
	
		
	</body>
	
</html>