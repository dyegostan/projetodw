<?php
   include("conectar.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['usuario']);
	  $mypassword = mysqli_real_escape_string($db,$_POST['senha']);
	  $myemail = mysqli_real_escape_string($db,$_POST['email']);
      
      $sql = "SELECT id FROM usuarios WHERE usuario = '$myusername' limit 1";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	  if($count == 0) {
		 include_once("timestamp.php"); // carrega timestamp
		 $sqlinserir = "INSERT INTO `projetodw`.`usuarios` (`id`, `usuario`, `senha`, `ultimo_login`, `contador`, `email`, `ban`, `ultimo_ip`, `level`, `registro`) VALUES (NULL, '$myusername', '$mypassword', '0000-00-00 00:00:00', '0', '$myemail', '0', '0', '0', '$timestamp')";
		 mysqli_query($db,$sqlinserir);
		 $msg = "Usuário criado";
	  }else {
		 $msg = "Usuário já existe";
	  }
   }
?>
<html>
   
   <head>
      <title>Cadastro</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
			
         }
		 a{text-decoration: none; color: black; font-size:10px; float:right;}
         
         .box {
			float: right;
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Cadastro</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Usuário: </label><input type = "text" name = "usuario" class = "box" required autofocus/><br /><br />
                  <label>Senha: </label><input type = "password" name = "senha" class = "box" required /><br/><br />
				  <label>Email: </label><input type = "text" name = "email" class = "box" /><br /><br />
                  <input type = "submit" value = " Cadastrar "/><br />
               </form>
               <div><a href="login.php">Login</a></div>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $msg; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>