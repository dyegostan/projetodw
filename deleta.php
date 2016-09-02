<?php
if ($level >= "1"){
$iduser = $_GET['id'];
$sqladmin = mysqli_query($db,"SELECT * FROM usuarios WHERE id='$iduser'") or die ("deu ruim");
$deletauser = mysqli_num_rows($sqladmin);
if ($deletauser >= "1") {
$sqladmin = mysqli_query($db,"DELETE FROM usuarios WHERE id='$iduser'") or die ("Usuário não encontrado");

print "<p>Usuário deletado.</p>";
} else {print "<p>Usuário não existe.</p>";}
} else {echo "Você não é admin";}
?>