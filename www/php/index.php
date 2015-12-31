<?php
	try{
		$katA = $_POST["a"];
		$katB = $_POST["b"];
		$hyp = $_POST["c"];
		if($hyp<0||$katB <0||$hyp<0){
				throw new Exception();
		}else if($hyp == 0 && $katA != 0&& $katB != 0){
			
			$result = "C = ".sqrt(pow ($katA,2) + pow ($katB,2));
			
		} if($hyp != 0 && $katA != 0 && $katB == 0){
			if($hyp<=$katA){
				throw new Exception();
			}
			$result = "B = ".sqrt(pow ($hypÑ,2) - pow ($katA,2));
			
		}else if($hyp != 0 && $katA == 0 && $katB != 0){
			if($hyp<=$katB){
				throw new Exception();
			}
			$result = "A = ".sqrt(pow ($hypÑ,2) - pow ($katB,2));
			
			
		}else if($hyp != 0 && $katA != 0&& $katB != 0){
			if($hyp >= $katA + $katB || $katA >= $hyp + $katB || $katB >= $katA + $hyp){
				throw new Exception();
			}
			$p = ($hyp + $katA + $katB)/2;
			$result = "S = ".sqrt($p*($p-$katA)*($p-$hyp)*($p-$katB));
		}else{
			throw new Exception();
		}
	} catch(Exception $error){
		$result = "Incorrect data";
	}
	
?>
<html>
<header>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
<title>PHP</title>
</header>
<body>

	<div name="text" id="res">
	<?=$result ?>
	</div>
	<input type="button" onclick="history.back();" value="back" id="back"/>
	
</body>
</html>