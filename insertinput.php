<?php
	$ori = strtoupper($_POST['origen']);
	$str = $ori;
	shell_exec("echo $str > origen.txt");
	$ori = str_replace(' ', '', $ori);
	$dest =  strtoupper($_POST['destino']);
	$str = $dest;
	shell_exec("echo $str > destino.txt");
	$dest = str_replace(' ', '', $dest);
	$str = "(echo $ori& echo.$dest) > entrada.txt";
	shell_exec($str);
	header('Location: mapa.html');
?>