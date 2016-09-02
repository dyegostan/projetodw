<?php
$iduser = $_GET['id'];

$adminedita = mysqli_query($db,"SELECT * FROM usuarios WHERE id ='$iduser'") or die ("deu ruim");
$resu =mysqli_fetch_array($adminedita);
$user = $resu["usuario"];
$senha = $resu["senha"];
$eemail = $resu["email"];
$elevel = $resu["level"];

$editusername = mysqli_real_escape_string($db,$_POST['username']);
$editpassword = mysqli_real_escape_string($db,$_POST['password']);
$editemail = mysqli_real_escape_string($db,$_POST['email']);
$editlevel = mysqli_real_escape_string($db,$_POST['level']);
$envia = mysqli_real_escape_string($db,$_POST['envia']);

if ($envia == "1"){
mysqli_query($db,"UPDATE usuarios SET usuario = '$editusername', senha = '$editpassword', email = '$editemail', level = '$editlevel' WHERE id = '$iduser'") or die ("deu muito ruim");

//atualizando valores... não precisava mas...
$adminedita = mysqli_query($db,"SELECT * FROM usuarios WHERE id ='$iduser'") or die ("deu ruim");
$resu =mysqli_fetch_array($adminedita);
$user = $resu["usuario"];
$senha = $resu["senha"];
$eemail = $resu["email"];
$elevel = $resu["level"];
// sem tempo para melhorar
}
print "
<form action = '' method = 'post'>
                  <label>Usuário: </label><input type = 'text' name = 'username' class = 'box' value='$user' autofocus /><br /><br />
                  <label>Senha: </label><input type = 'text' name = 'password' class = 'box' value='$senha' /><br/><br />
				  <label>Email: </label><input type = 'text' name = 'email' class = 'box' value='$eemail' /><br/><br />
				  <label>Level: </label><input type = 'text' name = 'level' class = 'box' value='$elevel' /><br/><br />
                  <input type = 'hidden' name = 'envia' value='1'>
				  <input type = 'submit' value = ' Salvar '/><br />
				  
               </form>
			   <p>$envia</p>
";
?>