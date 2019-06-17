<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="icon" type="image/gif" href="imagens/animated_favicon1.gif" >
        <meta charset="UTF-8">
        <title>Cadastro de Criaturas</title>
        <style>
            #body{
                background-color:#aa0c22;
            }            
            #box{
                background-color:#8c091b;
                width:350px;
                height:400px;               
                justify-content: center;
                background-color:#fdfdfd;
                border: 5px solid #8c091b;
                align-items: center;
                box-shadow: 0px 0px 5px black;
                overflow:hidden;
                margin:140px auto 0px;
                border-radius:15px;
            }
            
            #box-label{
                height:45px;
                text-align:center;
                font:bold 14px/45px sans-serif;
                border-top-left-radius:5px;
                border-top-right-radius:5px;
                background: #f6f8f9;
                background: -moz-linear-gradient(top, #f6f8f9 0%, #e5ebee 50%, #d7dee3 51%, #f5f7f9 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom, #f6f8f9 0%,#e5ebee 50%,#d7dee3 51%,#f5f7f9 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f8f9', endColorstr='#f5f7f9',GradientType=0 ); /* IE6-9 */
                border-bottom: 1px solid #bfc3c5;
                box-shadow: 1px 0px 3px #dedede;
                color:#555555;
                text-shadow:1px 0px 1px white;
            }
            
            </style>
    </head>
    <body id="body">
        <div id="box">
            <div id="box-label"> Cadastro de Criaturas
         <form method="post" action="processamentomonstro.php" id="centro">
            <label><br> Nome: </label> <input type="text" name="nomemonstro" id="nomemonstro" placeholder="Digite o nome da criatura">
            <label><br> Ataque Base: </label> <input type="text" name="ataquebase" id="ataquebase" placeholder="Digite o ataque base">
            <label><br> Defesa Base: </label><input type="text" name="defesabase" id="defesabase" placeholder="Digite a defesa base">
            <label><br> Descrição: </label><textarea name="descricao" id="descricao" rows="4" cols="20" placeholder="Digite a descrição da criatura"></textarea>
            <br>
            <input type="submit" value="CADASTRAR">
        <input type="button" value="VOLTAR" onclick="location.href='monstro.php'"/> 
        <input type="button" value="SAIR" onclick="location.href='sair.php'"/>
        </form>
        </div>
        </div>
    </body>
</html>


<?php
?>