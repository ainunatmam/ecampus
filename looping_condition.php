<?php


for ($i=1; $i <= 50; $i++) { 
	if($i % 15 == 0)  {
	    echo "fooBar </br>";
	} elseif ($i % 5 == 0) {
	    echo "bar </br>";
	} elseif ($i % 3 == 0) {
	    echo "Foo </br>";
	} else{
		echo $i."</br>";
	}
}


?>