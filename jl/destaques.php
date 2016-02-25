<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/jogosludicos.css">
        <title>Games</title>
    </head>

    <body>
        <div class="container page-container navnav">

       <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>

        <!-- NAVEGAÇÃO INDIVIDUAL -->

                <header class="row">
                       
                        <div class="col-md-10">
                            <h1>Games</h1>
                        </div>
                </header>
                
            <?php 
        @include 'nav-jl.php';
            ?>

        <!-- NAVEGAÇÃO INDIVIDUAL FIM-->

        <!-- INÍCIO DA PÁGINA -->
        <div class="row desth">
                <div class="col-md-12 desth">
                    <h1 class="titulo">Destaques</h1>

            <!-- Thumbs de conteúdo -->

        <div class="row desth">
          <div class="col-sm-6 col-md-6 desth">
            <div class="thumbnail destaque">
              <img src="img/overhome.jpg" alt="...">
              <div class="caption">
                <h3>Overwatch</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="opiniao.php" class="btn btn-primary botaohome" role="button">Saiba Mais</a></p>
              </div>
            </div>
          </div>

              <div class="col-sm-6 col-md-6">
            <div class="thumbnail destaque">
              <img src="img/blizz512.JPG" alt="...">
              <div class="caption">
                <h3>BlizzCon</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="resenhas.php" class="btn btn-primary botaohome" role="button">Saiba Mais</a></p>
              </div>
            </div>
          </div>
        </div>


        <div class="row desthome">
          <div class="col-sm-6 col-md-6 ">
            <div class="thumbnail destaque">
              <img src="img/assasins512.jpg" alt="...">
              <div class="caption">
                <h3>Top 10 jogos</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="top_semanal.php" class="btn btn-primary botaohome" role="button">Saiba Mais</a></p>
              </div>
            </div>
          </div>

              <div class="col-sm-6 col-md-6">
            <div class="thumbnail destaque">
              <img src="img/bgs512.JPG" alt="...">
              <div class="caption">
                <h3>Eventos</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="eventos.php" class="btn btn-primary botaohome" role="button">Saiba mais</a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- FIM DOS THUMBNAILS -->

        </div>
        </div>

        <!-- FIM DO ARTICLE -->

            <!--Include Footer-->
                    <?php 
                    @include '../footer.php';
                    
                    ?>
        </div>
                        <!-- Javascriptagem -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
