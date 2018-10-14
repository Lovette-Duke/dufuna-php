<?php
	$firstname = array('Deborah', 'Anita', 'Stephanie');
	$hobbys = array('writing', 'spoken words', 'styling naural hair');


	foreach (array_combine($firstname, $hobbys) as $name => $hobby) {
	 	echo "My name is $name. I love $hobby.<br>";
	 } 

?>