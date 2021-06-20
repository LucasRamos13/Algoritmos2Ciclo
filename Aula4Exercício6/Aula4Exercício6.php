<html>
<head>
<title>Tabela</title>
</head>

<body>
<h1>Tabela de estados e cidades</h1>
<br>

<table style="border: 1px solid black; ">
<tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Sigla</td>
</tr>

<?php
include 'estados-e-municipios.php';
foreach($estados as $cod => $ar){
    echo("<tr>");
    echo('<td>');
    echo($cod);
    echo("</td>");
    echo("<td>");
    echo($ar["nome"]);
    echo("</td>");
    echo("<td>");
    echo($ar["sigla"]);
    echo("</td>");
    echo("</tr>");
}
?>
</table>
<table style="border: 1px solid black; ">
<br>
<h2>Tabela de cidades</h2>
<br>
<tr>
    <td>Código</td>
    <td>Nome</td>
</tr>
<?php
foreach($municipios as $cod => $ar){
    echo("<tr>");
    echo('<td>');
    echo($cod);
    echo("</td>");
    echo("<td>");
    echo($ar);
    echo("</td>");
echo("</tr>");}
?>
</table>
</body>
</html>

                   
                   