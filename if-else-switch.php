<?php 
	$temperature = 49;
	
	/* I tested with different values*/
	
	if ($temperature <= 20) {
		echo "It is really cold today";
	}

	elseif ($temperature > 20 && $temperature <= 30) {
		echo "The weather is just perfect";
	}

	elseif ($temperature > 30 && $temperature <= 40) {
		echo "It's so hot today";
	}

	elseif ($temperature >= 40) {
		echo "Am I in the Sahara Desert?!";
	}

?>