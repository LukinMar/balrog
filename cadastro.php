<?php 

 $login = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
 $password = filter_input (INPUT_POST,'senha', FILTER_SANITIZE_STRING);
 $email = filter_input (INPUT_POST, 'email',FILTER_VALIDATE_EMAIL_EMAIL);
   // echo "nome: $login <br>";
   // echo "senha: $password<br>";
   // echo "email: $email";
    
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $dbname = "balrog";

$login = $_POST['usuario'];
$password = ($_POST['senha']);
$email = ($_POST['email']);

$link = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($link,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastrar.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastrar.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha,email) VALUES ('$login','$password','$email')";
        $insere = mysqli_query($link,$query);
         
        if($insere){
           echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='telainicial.php'</script>";
        }else{
         echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastrar.php'</script>";
        }
      }
    }