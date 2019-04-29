<!DOCTYPE HTML>
<html>
    <head>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="icon" type="image/gif" href="imagens/animated_favicon1.gif" >
        <meta charset = "UTF-8" />
        <title>Tela Inicial</title>
        <style>
            #balrog{
                padding-top:15px;
            }
            #body{
                background-color:#aa0c22;
            }            
            #box{
                background-color:#fdfdfd;
                border: 5px solid #8c091b;
                align-items: center;
                box-shadow: 0px 0px 5px black;
                overflow:hidden;
                width:380px;
                height:280px;
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
            <div id="box-label">
        <?php
    session_start();
    
    if (isset($_SESSION ['nacesso'])){
        echo 'Bem-vindo, '.$_SESSION['nacesso']. ' - ADMINISTRADOR ';
    }else if(isset($_SESSION['normal'])){
        echo 'Bem-vindo, '.$_SESSION['normal'].'';
    } else {
        echo '<script type="text/javascript">window.location = "index.php"</script>';
    }
    ?>
                <div id="balrog" align="center"><img src="imagens/balrog.png" alt="BALROG - A DEMON OF THE ANCIENT WORLD" style="width:173px;height:143px;" ></div>
         <form method="post" action="processamentoselecao.php" id="centro">               
         <input type="button" value="SELECIONAR CRIATURA" onclick="location.href='selecao.php'"/>
         <input type="button" value="SAIR" onclick="location.href='sair.php'"/>
        </form>
        </div>
            </div>
            </div>
    </body>
    </html>
    

