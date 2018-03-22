<?php
	$ori = $_POST['origen'];
	$dest = $_POST['destino'];
	$str = "(echo $ori& echo.$dest) > entrada.txt";
	shell_exec($str);
	header('Location: index.html');
?>