<?php 

	session_start();

	session_destroy();
	header('Location: index.php');

	/*echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	//remove indices do array de sessão
	//unset() remove indices especificos
	unset($_SESSION['x']);

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";


	//destruir variavel de sessão
	session_destroy();

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";

	//session_destroy
	*/
?>