<?php

	
	$connection = mysqli_connect('localhost', 'root', '', 'ss_platform');

	if ( !$connection ){
		echo "Mysql Database Connection Failed";
	}
	else{
		//echo "Database Connection Established";
	}


?>
