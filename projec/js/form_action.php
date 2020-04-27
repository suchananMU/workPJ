<?php

	echo  "Name is" . " $_GET[firsname] " . " $_GET[lastname] " . "<br/>" ;
	echo  "The Password is" . " $_GET[Password] "  . "<br/>" ;
	echo  "The address is" . " $_GET[Address] "  . "<br/>" ;
	echo  "The favorite game is/are" . " $_GET[Address] "   ;
	foreach ($_GET["game"] as $key => $value) {
		echo " ".$value . ",." ;
	}
	echo "<br/>";
	echo  "The gender is" . " $_GET[gender] "  . "<br/>" ;
	echo  "The age is the rang of " . " $_GET[age] "."."  . "<br/>" ;

	


?>