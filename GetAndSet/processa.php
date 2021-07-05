<html>
<head>
<meta charset="UTF-8">
<title>Resultados</title>
</head>

<body>
<h1>Resultados:</h1>
<p>Os dados preenchidos serão impressos abaixo:</p>
<?php
	if(isset($_GET["nome"]) == true){
	$nome = $_GET["nome"];
	echo "o nome da pessoa é: " . $nome . "<br>";
	}
	
	if(isset($_GET["opção"]) == true){
	$opção = $_GET["opção"];
	echo "o sexo da pessoa é: " . $opção . "<br>";
	}
	
	if(isset($_GET["CorOlhos"]) == true){
	$corOlhos = $_GET["CorOlhos"];
	echo "a cor dos olhos da pessoa é: " . $corOlhos . "<br>";
	}
	
	if(isset($_GET["altura"]) == true){
	echo "a altura da pessoa é maior que 1,83 <br>";
	}else{echo "a altura da pessoa é menor que 1,83 <br>";}
	
	if(isset($_GET["peso"]) == true){
	echo "o peso da pessoa é maior que 91kg <br>";
	}else{echo "o peso da pessoa é menor que 91kg <br>";}
	
	if(isset($_GET["fis"]) == true){
	$fis = $_GET["fis"];
	echo $nome . " descreve a própria capacidade física como: " . $fis . "<br>";
	}
?>
</body>
</html>

                   
                   