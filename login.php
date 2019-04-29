<?php

     $link = mysqli_connect('localhost', 'root', '') or die (mysqli_error());
     $dbname = ('balrog');
     mysqli_select_db($link, $dbname);
    
    if (isset($_POST['login']) && isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
    
    $get = mysqli_query($link, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
    $num = mysqli_num_rows($get);
        
   if ($num == 1){
       while($percorrer = mysqli_fetch_array($get)){
           $nivel = $percorrer['acesso'];
           $nome = $percorrer['login'];
         
           session_start();
           
           if($nivel == 1){
               $_SESSION['nacesso'] = $nome;
                echo '<script type="text/javascript">window.location = "monstro.php"</script>';
               
           }else{
               $_SESSION['normal'] = $nome;  
           }
              echo '<script type="text/javascript">window.location = "telainicial.php"</script>';
       }
       }else{ 
           
       echo "<script language='javascript' type='text/javascript'>alert('Usuário ou senha incorretos!');window.location.href='index.php';</script>";
   }
  }