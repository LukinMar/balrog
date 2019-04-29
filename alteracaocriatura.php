<?php 

 $nomemonstro = filter_input(INPUT_POST, 'nomemonstro', FILTER_SANITIZE_STRING);
 $ataquebase = filter_input (INPUT_POST,'ataquebase', FILTER_SANITIZE_STRING);
 $defesabase = filter_input (INPUT_POST, 'defesabase',FILTER_SANITIZE_STRING);
 $descricao = filter_input (INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
 
 //echo "nome monstro: $nomemonstro <br>";
 //echo "ataquebase: $ataquebase<br>";
 //echo "defesabase: $defesabase<br>";
 //echo "descricao: $descricao <br>";   
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $dbname = "balrog";
 
$nomemonstro = $_POST['nomemonstro'];
$ataquebase = ($_POST['ataquebase']);
$defesabase = ($_POST['defesabase']);
$descricao = ($_POST ['descricao']);


$link = mysqli_connect($servidor, $usuario, $senha, $dbname);
$query_select = "SELECT nome FROM monstros WHERE nome = '$nomemonstro'";
$select = mysqli_query($link,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['nome'];

 
  if($nomemonstro == "" || $nomemonstro == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo nome deve ser preenchido');window.location.href='alteracriatura.php';</script>";
 
    }else{
      if($logarray != $nomemonstro){
 
        echo"<script language='javascript' type='text/javascript'>alert('Essa criatura não está cadastrada');window.location.href='alteracriatura.php';</script>";
        die();
 
      }else{
        $query = "UPDATE monstros SET ataquebase='$ataquebase', defesabase='$defesabase', descricao='$descricao' WHERE nome='$nomemonstro'";
        $edita = mysqli_query($link,$query);
        
         if($edita){
           echo"<script language='javascript' type='text/javascript'>alert('Criatura alterada com sucesso!');window.location.href='alteracriatura.php'</script>";
        }else{
         echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar essa criatura');window.location.href='alteracriatura.php'</script>";
        }
      }
    }
