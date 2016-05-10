<?php

$n1 = $_REQUEST[ "n1" ];
$n2 = $_REQUEST[ "n2" ];
$n3 = $_REQUEST[ "n3" ];
$n4 = $_REQUEST[ "n4" ];



set_time_limit(0);

$values = array($n1,$n2,$n3,$n4 );

$result = 24;


$list = array();

 

echo "<pre>";

makeValue($values);

print_r($list);

 

function makeValue($values, $set=array())

{

    $words = array("+", "-", "*", "/");

    if(sizeof($values)==1)

    {

        $set[] = array_shift($values);

        return makeSpecial($set);

    }

     

    foreach($values as $key=>$value)

    {

        $tmpValues = $values;

        unset($tmpValues[$key]);

        foreach($words as $word)

        {

            makeValue($tmpValues, array_merge($set, array($value, $word)));

        }

    }

}

 

function makeSpecial($set)

{

    $size = sizeof($set);


    if($size<=3 || !in_array("/", $set) && !in_array("*", $set))

    {

        return makeResult($set);

    }

 

    for($len=3; $len<$size-1; $len+=2)

    {

        for($start=0; $start<$size-1; $start+=2)

        {

            if(!($set[$start-1]=="*" || $set[$start-1]=="/" || $set[$start+$len]=="*" || $set[$start+$len]=="/"))

                continue;

            $subSet = array_slice($set, $start, $len);

            if(!in_array("+", $subSet) && !in_array("-", $subSet))

                continue;

            $tmpSet = $set;

            array_splice($tmpSet, $start, $len-1);

            $tmpSet[$start] = "(".implode("", $subSet).")";

            makeSpecial($tmpSet);

        }

    }
}

 

function makeResult($set)

{

    global $result, $list;

    $str = implode("", $set);

    @eval("\$num=$str;");

    if($num==$result && !in_array($str, $list))

    $list[] = $str;

}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>24 Solver</title>
		<style>
		
			body{
				background: aqua;
				margin: 200px 400px;
			}
			#input{
				position: absolute;
				top: 150px;
				left: -30px;
			}
			#title {
				position: absolute;
				top: -50px;
				left: -150px;
				font-family: baskerville;
				font-size: 80px;
				
			}
		</style>
	</head>
	
	<body>
		<div id= title>
		24 SOLVER
		</div>
		<?php echo $str ?>
		<div id=input>
		<form method="get" action="index4.php">
			Number 1<input type="text" name="n1" />
			Number 2<input type="text" name="n2" />
			Number 3<input type="text" name="n3" />
			Number 4<input type="text" name="n4" />
			
			<input type="submit" value="SOLVE it!!" />
			
		</form>
		</div>



	</body>

</html>


