<!DOCTYPE html>
<html>
<head>
	<title>ContaBanco</title>
</head>
<body>
	<pre>
<?php
	require_once("Conta.php");
//Conta-1
	$p1 = new ContaBanco();
	$p1->abrirConta("CC");
	$p1->setNumConta(1111);
	$p1->setDono("Jubileu");
	$p1->depositar(300);
	$p1->sacar(338);
	$p1->pagarMensal();

//Conta-2
	$p2 = new ContaBanco();
	$p2->abrirConta("CP");
	$p2->setNumConta(2222);
	$p2->setDono("Creuza");
	$p2->depositar(500);
	$p2->sacar(100);
	$p2->pagarMensal();

	//print_r($p1);
	print_r($p2);
?>
	</pre>
</body>
</html>