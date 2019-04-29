<?php 

 $nomemonstro = filter_input(INPUT_POST, 'nomemonstro', FILTER_SANITIZE_STRING);
 
 //echo "nome monstro: $nomemonstro <br>";
 //echo "ataquebase: $ataquebase<br>";
 //echo "defesabase: $defesabase<br>";
 //echo "descricao: $descricao <br>";   
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $dbname = "balrog";
 
$nomemonstro = $_POST['nomemonstro'];



$link = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query_select = "SELECT nome FROM monstros WHERE nome = '$nomemonstro'";
$select = mysqli_query($link,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['nome'];

 if($nomemonstro == "" || $nomemonstro == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo nome deve ser preenchido');window.location.href='excluicriatura.php';</script>";
 
    }else{
      if($logarray != $nomemonstro){
 
        echo"<script language='javascript' type='text/javascript'>alert('Essa criatura não está cadastrada');window.location.href='excluicriatura.php';</script>";
        die();
 
      }else{
        $query = "DELETE FROM monstros WHERE nome='$nomemonstro'";
        $edita = mysqli_query($link,$query);
        
         if($edita){
           echo"<script language='javascript' type='text/javascript'>alert('Criatura excluída com sucesso!');window.location.href='excluicriatura.php'</script>";
        }else{
         echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir essa criatura');window.location.href='excluicriatura.php'</script>";
        }
      }
    }
