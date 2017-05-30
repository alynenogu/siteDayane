<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title>Dayane Maquiagem</title>
		<link rel="icon" href="css/imagens/logotipo_dayanemaquiagem.jpg">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">

		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 

</head>

<body>
	<h1 class="titulo-principal"> Contato:</h1>
	<?php
		$nome = $_GET["nome"];


	?>
	<p><?php echo $nome; ?>, seu contato foi enviado! Por favor aguardar...</p>


</body>
</html>