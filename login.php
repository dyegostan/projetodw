<?php
   include("conectar.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // usuario e senha enviado pelo formulario 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM usuarios WHERE usuario = '$myusername' and senha = '$mypassword' limit 1";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
 
		
      if($count == 1) {
		 include_once("timestamp.php"); // carrega timestamp
		 include_once("function.php"); // carrega pega ip
		 $sqlupdate = "UPDATE `usuarios` SET `ultimo_login` = '$timestamp', `ultimo_ip` = '$ipaddress', `contador` = contador+1 WHERE `usuarios`.`usuario` = '$myusername';";
		 mysqli_query($db,$sqlupdate);
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location:index.php");
		 $msg = "sucesso $timestamp";
      }else {
         $msg = "Usuário ou Senha incorreto.";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
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
		 a{text-decoration: none; color: black; font-size:10px;}
         
         .box {
			float: right;
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Usuário: </label><input type = "text" name = "username" class = "box" required autofocus /><br /><br />
                  <label>Senha: </label><input type = "password" name = "password" class = "box" required /><br/><br />
                  <input type = "submit" value = " Entrar "/><br />
               </form>
               <div><a href="cadastro.php">Novo Usuário</a></div>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $msg; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>