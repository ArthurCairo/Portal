<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="../css/quadrinhos.css">
   <title>Quadrinhos</title>
    </head>

    <body>
          <!--container que agrupa todo o conteúdo da pagina -->
        <div class="container">
            
          <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>
        
        <div class="container page-container">
            <header class="row">
               
                <div class="col-md-10">
                    <h1 class="cabecalho">Resenhas</h1>
                </div>
            </header>
           <?php
@include 'nav-quadrinhos.php';
            ?>
            
            <!-- PÁGINA -->


                            <div class="row">


                              
                                
                                <section class="col-md-3 ">
                                    <section class="daredevil"><img src="img/fimdosdias.jpg" alt="..." > </section>
                                </section>
                                <section class="col-md-8 ">
                                   
                                
                                <h1>Demolidor - Fim dos Dias – ED 01</h1>
                                
                                    


<h4>Preço: R$ 18,90</h4>

<h4>Número de páginas: 124</h4>

<h4>Data de Início de vendas: 05/03/2015</h4>


<h2>Sinopse</h2>
<p>
Finalmente o segredo sobre a morte do Homem Sem Medo é revelado! Num futuro próximo, o Rei do Crime e o Demolidor são assassinados – mas isso é apenas o começo... O repórter Ben Urich tem uma última história a escrever: qual é o segredo final de Matt Murdock? Para responder a esta pergunta Ben deverá esmiuçar o passado de Murdock, seus antigos amores, seus pecados e toda sorte de enigmas que circundam sua morte... E ainda: Ben está sendo seguido enquanto realiza suas investigações, mas por quem?
</p>
                                   
</section>


            </div>
                    
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
