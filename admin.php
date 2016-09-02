<?php
if ($level >= "1"){ //Verificando o level do usuario
$pg = $_GET['lista'];
if (!isset($pg))
{
$pg = 1;
}

$sqladmin = mysqli_query($db,"SELECT * FROM usuarios") or die ("consulta um falhou");

$qtpg = 10;
$total = mysqli_num_rows($sqladmin);

if ($total <= $qtpg)
{
$total_paginas = 1;
} else {
$total_paginas = ceil($total/$qtpg);
}
$inicio = ($pg - 1) * $qtpg;
$final = $inicio + $qtpg - 1;
$ponteiro = 0;
$i = "1";

print "Encontrado(s): "."<b>"."$total"."</b>"." usuários"."<br>";
print "Listando: "."<b>"."$qtpg"."</b>"."<br><br>";
print "<div id='adminlista'>";
$total="1";

$sqladmin = mysqli_query($db,"SELECT * FROM usuarios LIMIT $inicio, $qtpg") or die ("consulta falhou");

while($array_result=mysqli_fetch_array($sqladmin)){
$iduser = $array_result["id"];
$user = $array_result["usuario"];
print "<p><a class='linkedita' href='?page=edita&id=$iduser'>$user</a> | <a class='linkedita' href='?page=deleta&id=$iduser'>deletar</a></p>";
$total=$total+1;
}
print "</div>";
//paginas
print "<div class='listapagina'>";
if ($pg == 1) {
	echo "Anterior |";
}
else
{echo "<a href=\"?page=admin&lista=".($pg - 1)."\" targe=\"_self\">Anterior</a> |";}
$i = 1;
while ($i <= $total_paginas) {
if ($i == $pg)
{
echo "<strong><font size=2 color=#000000>";
echo " <b>|<u>$i</u>|</b> ";
echo "</font></strong>";
}
else
{
echo "<strong><font size=2 color=#000000>";
echo " <a href=\"?page=admin&lista=".$i."\" target=\"_self\">".$i."</a> ";
echo "</font></strong>";
}
$i = $i + 1;
}
if ($pg == $total_paginas)
{
echo "<font size=2 color=#000000>";
echo "| Próxima\n";
echo "</font>";
}
else
{
echo "<font size=2 color=#000000>";
echo "| <a href=\"?page=admin&lista=".($pg + 1)."\" targe=\"_self\">Próxima</a>\n";
echo "</font>"; }
print "</div>";
//fim de lista de paginas
} else {echo "Você não é admin";}
?>