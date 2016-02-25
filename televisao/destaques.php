<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/televisao.css">
        <title>
            Séries
        </title>
    </head>

    <body>
        <!--container que agrupa todo o conteúdo da pagina -->
        <div class="container">
            
        <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>
        
        <div class="container  page-container">
                <header class="row bll">
                    
                    <ul class="bl col-md-10">
                        <li>
                            <h1>
                                Séries
                            </h1>
                        </li>
                    </ul>
                </header>
            
                    <?php 
            @include 'nav-televisao.php';
                ?>
            
                    <article class="row home">
                        <ul class="row page-title">
                            <li  class="col-md-12"> Destaques</li>
                        </ul>
                        <ul class="row titulo-artigo">
                            <li class="col-md-11">Mais recentes</li>
                        </ul>           
                        <ul class="row secao-1">
                                
                                <!-- Destaques -->
                                
                            <!-- Resenhas -->
                        
                                <li class="col-md-3 secao">
                                    <a href="resenhas.php" class="resenhasdahome">
                                        <img src="img/big.jpg" class="thumbnail"  alt="" />
                                        <h3>Big Bang Theory</h3>
                                        <p>Conheça mais sobre uma das séries de comédia mais bem sucedida dos últimos tempos</p>
                                    </a>
                                </li>
                                <!-- Opinião -->
                                
                                <li class="col-md-3 col-md-offset-1 secao">
                                    <a href="opiniao.php" class="resenhasdahome">
                                        <img class="thumbnail" src="img/once-upon-a-time-500x500.jpg" alt="" />
                                        <h3>Opinião</h3>
                                        <p>Coisas Sobre o Once Upon a Time que você deve saber.</p>
                                    </a>
                                    
                                    
                                </li>
                                
                                <!-- Top 10 -->
                                
                                <li class="col-md-3 col-md-offset-1 secao">
                                    <a href="top_10.php" class="resenhasdahome">
                                        <img class="thumbnail" src="img/top10.jpg" alt="" />
                                        <h3>Top 10</h3>
                                        <p>Saiba quais são  as séries mais comentadas nas últimas semanas no Brasil e nos Estados Unidos</p>
                                    </a>
                                    

                                    </li>
                            </ul>
                    
                        <ul class="row titulo-artigo-secundario">
                            <li class="col-md-12"> Eventos</li>
                        </ul>
                        <ul class="row  secao-1">
                            <li class="col-md-12">
                                <a href="eventos.php">
                                    <img class="thumbnail" src="img/comiccon.jpg" alt=""/>
                                </a>
                            </li>
                        </ul>
                </article>
            
             <!--Include Footer-->
                    <?php 
                    @include '../footer.php';
                    
                    ?>
                
            </div>
            </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
            
    </body>
</html>
