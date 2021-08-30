<?php
	
	session_start();// Esta iniciando uma sessão 

	require('vendor/autoload.php');// comando do 'composer'

	$app = new SpeakDev\Application();

	$app->run();

?>