<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/tecnologia.css">
        
   <title>
    Sobre
    </title>
    </head>

    <body class="mel">
        
          <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>
        
<!--        nav sobre-->
        <div class="container page-container col-md-12 mel">
            
                
                
                  <header class="row col-md-12">
                   
                    <ul class="bd col-md-11 ">
                        <li class="lihome">Quem Somos</li>
                        
                    </ul>
                </header>  
                    
           <?php
@include 'nav-sobre.php'; 
?>

            
            <!-- PÁGINA -->
            <div class="col-md-12 row mel">
            <article class="articlequem">
                <h1 class="h1mart">Funcionarios</h1>
                <img class="col-md-4 func img-responsive" src="arthur1.jpg" alt=""/>
                <h5>Arthur Cairo dos Santos</h5>
                <h5>Funções no Portal</h5>
                <p>
                Por ter faltado muito, ficou com todas as funções do Portal.
                </p>
                <h5>Áreas no Portal</h5>
                <p>Home, Games, Quadrinhos, Cinema. Séries e Quem Somos.</p>
                <h5>Biografia</h5>
                <p>Arthur Cairo dos Santos, RA - 2650831513004. Estudante da Fatec São Roque no curso de Sistemas para Internet, gosta de correr,jogar bola, jogos online, pebolim, dormir e comer. Atualmente desempregado, porem faz bicos em pizzaria e seus pais são comerciantes.</p>
                </article>
            
            </div>
            
         <!--Include Footer-->
                    <?php 
                    @include '../footer.php';
                    
                    ?>
            
        </div>
        <!-- IMPORTS -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
