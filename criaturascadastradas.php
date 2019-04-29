
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="icon" type="image/gif" href="imagens/animated_favicon1.gif" >
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       
        <title>Visualização de Criaturas</title>
        <style>  
             a:link{
                background-color:#aa0c21;
                -moz-border-radius:15px;
                -webkit-border-radius:15px;
                padding: 4px 11px;
                border-radius: 15px;
                font-family:"Segoe UI";
                font-weight: bold;
                color: #fff;
                text-shadow: 0 1px 0 #666;
                box-shadow: inset 0 1px 1px #fff, 0 2px 3px #666;
                cursor:pointer;
                position: relative;
                text-decoration:none;
             }

            #button{
                display:flex;
                align-items: center;
                justify-content: center;
                border-radius:10px;
                width: 230px;
                height:20px;
                background-color:#fdfdfd;
                padding-bottom:20px;
                position: fixed;
                left: 560px; right: 5px; top:630px;
                box-shadow: 0px 0px 5px black;
                border: 5px solid #8c091b;
                align-items: center;    
            }   
            
            #body{
                background-image: url(imagens/background.jpg);
                background-position:center;
                background-color:#aa0c22;
                background-attachment:fixed;
                background-repeat: no-repeat;
            }            
            #box{
                background-color:#fdfdfd;
                border: 5px solid #8c091b;
                align-items: center;
                box-shadow: 0px 0px 5px black;
                width:170px;
                height:710px;
                float:left;
                margin:0px;
                padding:0;
                border-radius:15px;
                text-shadow:1px 0px 1px white;
                overflow:auto;
                text-align: center;
                position:absolute;
                font:bold 14px/45px sans-serif;
                text-decoration: none;
                align-items: center;
            }
            ::-webkit-scrollbar-thumb{ background-color: #8c091b; box-shadow: 0px 0px 5px black;; border-radius: 5px; } 
            ::-webkit-scrollbar-thumb:hover{ background-color: #f12943; box-shadow: 0px 0px 5px black;; } 
            ::-webkit-scrollbar{ width: 3px; }

            
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
            
            .monsterDiv {
                text-align:center;
                background-color: #fdfdfd;;
                opacity : 0.8 ;
                margin: auto;
                padding: 10px;
                width: 50%;
                border: 1px;
                border-radius: 20px;
                font: 14px/25px sans-serif;
                border: 5px solid #8c091b;  
           }
            
            </style>
    </head>
    <body id="body">

        <div id="box">
            <div id="box-label" >Criaturas<br>
            
            </div>
        
        <?php
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $dbname = "balrog";
            
            $link = mysqli_connect($servidor, $usuario, $senha, $dbname);           
            $query_select = "SELECT nome, ataquebase, defesabase, descricao FROM monstros";

            $select = mysqli_query($link,$query_select);

            while($aux = mysqli_fetch_assoc($select)) {
            echo '<a href="javascript:showMonster(\'' .$aux["nome"]. '\',' .$aux["ataquebase"].',' .$aux["defesabase"].',\''.$aux["descricao"].'\' );">' .$aux["nome"]. '</a><br>';
            //echo "Ataque Base: ".$aux["ataquebase"]."<br>"; 
            //echo "Defesa Base: ".$aux["defesabase"]."<br>";
            //echo "Descrição: ".$aux["descricao"]."<br>";
            }
         ?>
            </span>   
            </div>
        
        <div id="showMonsterDiv" class="monsterDiv" style="display: none;">
            
        </div>
        <div id="button">
            <form method="post" action="processamentoselecao.php" id="centro"> <br>
                <input type="button" value="TELA INICIAL" onclick="location.href='monstro.php'"/>        
                <input type="button" value="SAIR" onclick="location.href='sair.php'"/>
                
            </form>
        </div>
        </div>
            
    <script>    
            function showMonster(nomeMonstro, ataqueBase, defesaBase, descricaoMonstro){

                document.getElementById("showMonsterDiv").style.display = "block";
              
               var htmlDiv = "<center><strong>" + nomeMonstro + "</strong>";
               htmlDiv += "<table width='400' border='0' cellspacing='0' cellpadding='0'>";
               htmlDiv +=   "<tr> <td>";
               switch (nomeMonstro){
                   case "Quimera":
                      htmlDiv+= "<img src='imagens/quimera.gif'>";
                       break;
                   case "Hungarian Horntail":
                       htmlDiv += "<img src='imagens/dragao.gif'> ";
                       break;
                   case "Grifo":
                       htmlDiv += "<img src='imagens/grifo.gif'> ";
                       break;                      
                   case "Hidra":
                       htmlDiv += "<img src='imagens/hidra.gif'> ";
                       break;
                   case "Cérbero":
                       htmlDiv += "<img src='imagens/cerbero.gif'> ";
                       break;
                   case "Fênix":
                       htmlDiv += "<img src='imagens/fenix.gif'> ";
                       break;
                   case "Acromântula":
                       htmlDiv += "<img src='imagens/acromantula.gif'> ";
                       break;
               }
               htmlDiv += "</td><td>";
               htmlDiv += "<br><strong>Ataque: </strong> " + ataqueBase;
               htmlDiv += "<br><strong>Defesa: </strong>" + defesaBase;
               htmlDiv += "<br><strong>Descrição: </strong>" + descricaoMonstro;
               htmlDiv += "</td> </tr>";
               htmlDiv += "</table>";
               htmlDiv += "</center>";
               
              
              $("#showMonsterDiv").html(htmlDiv);
               
            }
        
        
        </script>
    </body>
</html>

