<?php
	$link = new mysqli('localhost', 'root', '', 'projeto');
	if ($link->connect_error) 
	{
	  die('Erro na Conexão (' . $link->connect_errno . ') ' . $link->connect_error);
	}
	$link->query("SET NAMES 'utf8'");
	$link->query('SET character_set_connection=utf8');
	$link->query('SET character_set_client=utf8');
	$link->query('SET character_set_results=utf8');
	echo 'Conexão efetuada com sucesso... <br>' .  $link->host_info;
?>