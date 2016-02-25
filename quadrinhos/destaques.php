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
        <div class="container col-md-12">
            
           <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>
        
        <div class="container page-container col-md-12 ">
            <header class="row">
                
                <div class="col-md-5">
                    <h1 class="cabecalho">Quadrinhos</h1>
                </div>
            </header>
            
            <?php
@include 'nav-quadrinhos.php';
            ?>
            
            <!-- PÁGINA -->
            
            
  	
                                <!-- Destaques -->
                                
                                <!-- Resenhas -->
                        <div >
                            <ul>
                                <li class="col-md-4 col-offset-1 thumbnail">
                                    <img src="img/caphome.jpg" alt="" />
                                    <a href="destaques.php" class="notc">
                                    <h3>Capitã Marvel</h3>
                                        </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam. Maecenas eleifend interdum ante ac mattis. Donec accumsan cursus mauris, nec facilisis risus posuere eu. Etiam ut arcu posuere, consectetur est ac, faucibus magna. Maecenas maximus sapien nec odio euismod mollis. Sed tellus risus, viverra ut lobortis quis, finibus eget odio. Vivamus malesuada eros et metus blandit, non efficitur arcu venenatis. Nam commodo augue sit amet consectetur mollis. Morbi in lacinia tortor, eu pulvinar nisl. Donec pulvinar rhoncus nulla quis rhoncus. Praesent malesuada efficitur odio, at ultricies justo vehicula ac. Donec elit diam, bibendum sit amet luctus sed, scelerisque nec felis.</p>
                                
                                   
                                </li>                               
                                     <li class="col-md-4 col-offset-1 thumbnail">
                                    <img src="img/aranhahome.jpg" alt="" />
                                    <a href="destaques.php" class="notc">
                                    <h3>Homem Aranha</h3>
                                        </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam. Maecenas eleifend interdum ante ac mattis. Donec accumsan cursus mauris, nec facilisis risus posuere eu. Etiam ut arcu posuere, consectetur est ac, faucibus magna. Maecenas maximus sapien nec odio euismod mollis. Sed tellus risus, viverra ut lobortis quis, finibus eget odio. Vivamus malesuada eros et metus blandit, non efficitur arcu venenatis. Nam commodo augue sit amet consectetur mollis. Morbi in lacinia tortor, eu pulvinar nisl. Donec pulvinar rhoncus nulla quis rhoncus. Praesent malesuada efficitur odio, at ultricies justo vehicula ac. Donec elit diam, bibendum sit amet luctus sed, scelerisque nec felis.</p>
                                
                                    
                                </li>     
                                <li class="col-md-4 col-offset-1 thumbnail">
                                    <img src="img/assasin.jpg" alt="" />
                                    <a href="destaques.php" class="notc">
                                    <h3>Assasination Classrom</h3>
                                        </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat congue lectus non vulputate. Cras eget tincidunt sapien. Integer enim velit, tristique pellentesque sollicitudin eu, gravida ut nisl. Suspendisse rhoncus, nulla malesuada consectetur fermentum, neque nulla congue lectus, quis feugiat velit nisl sed diam. Maecenas eleifend interdum ante ac mattis. Donec accumsan cursus mauris, nec facilisis risus posuere eu. Etiam ut arcu posuere, consectetur est ac, faucibus magna. Maecenas maximus sapien nec odio euismod mollis. Sed tellus risus, viverra ut lobortis quis, finibus eget odio. Vivamus malesuada eros et metus blandit, non efficitur arcu venenatis. Nam commodo augue sit amet consectetur mollis. Morbi in lacinia tortor, eu pulvinar nisl. Donec pulvinar rhoncus nulla quis rhoncus. Praesent malesuada efficitur odio, at ultricies justo vehicula ac. Donec elit diam, bibendum sit amet luctus sed, scelerisque nec felis.</p>
                                
                                   
                                </li>   
                            </ul>                        

                        	</div>
						</div>

                        
                                        
                                



                        <div class="row titulo-artigo col-md-12">
                            <h1 class="col-md-2">Eventos</h1>
                        </div>
                        <div class="row dee">
                            <ul>
                            <li class="col-md-12 thumbnail desta">
                            <section class="titulos">
                                <a href = "eventos.php"></a><img src="img/expoanimehomoe.jpg" class="img-responsive col-md-6" alt="expo anime"/>
                                <a href = "eventos.php"></a><img src="img/friendshome.jpg" class="img-responsive col-md-6" alt="anime friends"/>
                            </section>
                            </li>
                                </ul>
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

