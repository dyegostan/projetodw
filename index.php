<?php
   include('session.php');
$sqlselect = "SELECT * FROM usuarios WHERE usuario = '$login_session'";
$queryselect = mysqli_query($db,$sqlselect) or die ("Não foi possível realizar a consulta!!!");
$exibe = mysqli_fetch_array($queryselect);
	$email = $exibe["email"];
	$usuario = $exibe["usuario"];
	$level = $exibe["level"];

$hash = md5( strtolower( trim( "$email " ) ) );
?>
<html>
<head>
<title>Projeto DW</title>
<style type="text/css">
*{margin: auto; padding: auto;}

body{
	background-color: #4b545f;
	width: 795px;
	font-family: arial, helvetica, sans-serif;
	font-size: 12px;
}
h2{text-align: center; margin-bottom: 10px;}
h3{margin-bottom: 10px;margin-top: 10px;}
.usuario{color: #FF0000; font-weight: bold;}
.avtr{float: right;}
p{margin-bottom: 5px;}
nav {margin-left: 0px; margin-top: 15px; font-size: 18px; font-weight: bold;}
nav ul ul {display: none;}
nav ul li:hover > ul {display: block;}
nav ul {
	background: #efefef; 
	background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
	background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
	background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 20px;
	border-radius: 2px;  
	list-style: none;
	position: relative;
	display: inline-table;
}
nav ul:after {content: ""; clear: both; display: block;}
nav ul li {float: left;}
nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
nav ul li:hover a {color: #fff;}
nav ul li a {display: block; padding: 25px 40px; color: #757575; text-decoration: none;}
#container2{
	height: 500px;
	padding: 10;
	margin:15px auto;
	border: 1px solid #ccc;
	background-color: #eee;
	border-radius: 2px;
}
.funcao li{padding-top: 5px;}
.login{float: right; font-size: 10px; padding-bottom: 15px;}
span .space{padding: 15px; width: 100px;}
.listapagina{text-align: center; bottom: 0;}
#adminlista{height: 430px;}
.linkedita{text-decoration: none;}
.box{ float: right; border: #666666 solid 1px;}
</style>
<link rel="stylesheet" type="text/css" href="chat/styles.css" />
</head>
<body>
<nav>
	<ul>
        <li><a href="?page=home">Início</a></li>
        <li><a href="?page=chat/chat">Chat</a></li>
        <li><a href="?page=admin">Admin</a></li>
		<li><a href="?page=sobre">Sobre</a></li>
        <li><a href="logout.php">Sair</a></li>
		<li><a href="http://steamcommunity.com/id/dyegostan">Perfil</a></li>
	</ul>
</nav>

<div id="container2">
<?php
if(empty($_GET['page'])) {
include ("home.php");
 }

elseif(file_exists($_GET['page'].'.php')) { include

($_GET['page'].'.php'); }


else {
	echo "Deu ruim";
	print "<p>Isso é um erro 404.</p>";
	}


?>
</div>
</body>
</html>