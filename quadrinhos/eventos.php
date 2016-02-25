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
                    <h1 class="cabecalho">Eventos</h1>
                </div>
            </header>
            <?php
@include 'nav-quadrinhos.php';
            ?>
            <!-- PÁGINA -->
            
     

                            <div class="row">



                            <ul class="destaques col-md-12">
                                    <li class="col-md-9 col-offser-1 thumbnail ">
                                    <img src="img/expoanime.jpg" alt="" />
                                    
                                    <h2 class="tituloeventos">Expo Anime 2015</h2>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                    </li>
                                
                            </ul>



                        <section class="col-md-3">
                        <ul class="row">
                          <li class="col-md-12 thumbnail">
                                    <img src="img/batman2.jpg" alt=""/>
                                <h2>Batman</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                <a class="btn btn-danger btn-sm" role="button" href="top_semanal.php">Ir para Top Semanal</a>
                            </li>
                             <li class="col-md-12 thumbnail">
                                    <img src="img/homemraranha1.JPG" alt=""/>
                                <h2>Homem Aranha</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam. Maecenas eleifend interdum ante ac mattis. Donec accumsan cursus mauris, nec facilisis risus posuere eu. Etiam ut arcu posuere, consectetur est ac, faucibus magna. Maecenas maximus sapien nec odio euismod mollis. </p>
                                 <a class="btn btn-danger btn-sm" role="button" href="top_semanal.php">Ir para Top Semanal</a>
                            </li>
                             
                        </ul>
                        </section>    


                              <ul class="destaques col-md-12">
                                    <li class="col-md-9 col-offser-1 thumbnail ">
                                    <img src="img/friends.jpg" alt="" />
                                    
                                    <h2 class="tituloeventos">Anime Friends 2015</h2>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam.</p></li>
                                
                            </ul>

                               
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
