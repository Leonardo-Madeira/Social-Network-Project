<?php
	session_start();// Esta iniciando uma sessão 
	require('vendor/autoload.php');// comando do 'composer'

	define('INCLUDE_PATH_STATIC','http://localhost/Projetos/redesocialdevweb20_/SpeakDev/Views/pages/');

	$app = new SpeakDev\Application();

	$app->run();

?>