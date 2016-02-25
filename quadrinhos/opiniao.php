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
                    <h1 class="cabecalho">Opinião</h1>
                </div>
            </header>
            <?php
@include 'nav-quadrinhos.php';
            ?>
            
            <!-- PÁGINA -->
            

                            <div class="row">


                                <ul class="destaques col-md-12">
                                    
                              
                          

                            
                                    <li class="col-md-4 col-offser-1 thumbnail dest  ">
                                    <img src="img/miracle1.jpg" alt="" />
                                    
                                    <h2 class="tituloeventos">Miracleman</h2>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet purus nec faucibus posuere. Curabitur volutpat sapien diam, quis congue erat aliquet quis. Ut lobortis tortor non ex interdum, sed bibendum mi semper. In eleifend massa eu tempus congue. Vestibulum eleifend cursus nibh, a cursus quam pharetra vel. Phasellus lectus leo, fermentum eget lacus vel, luctus vehicula purus. In quis quam vestibulum, hendrerit dolor eu, vulputate libero. Phasellus tincidunt nunc et ligula viverra euismod. Aenean consectetur placerat mi, fringilla congue.</p>
                            </li>
                                
                           


                            
                                    <li class="col-md-4 col-offser-1 thumbnail dest  ">
                                    <img src="img/fimdostempos.jpg" alt="" />
                                    
                                    <h2 class="tituloeventos">Fim dos Tempos(Novos 52)</h2>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet purus nec faucibus posuere. Curabitur volutpat sapien diam, quis congue erat aliquet quis. Ut lobortis tortor non ex interdum, sed bibendum mi semper. In eleifend massa eu tempus congue. Vestibulum eleifend cursus nibh, a cursus quam pharetra vel. Phasellus lectus leo, fermentum eget lacus vel, luctus vehicula purus. In quis quam vestibulum, hendrerit dolor eu, vulputate libero. Phasellus tincidunt nunc et ligula viverra euismod. Aenean consectetur placerat mi, fringilla congue</p>
                            </li>
                            


                              
                                    <li class="col-md-4 col-offser-1 thumbnail dest  ">
                                    <img src="img/flash2.jpg" alt="" />
                                    
                                    <h2 class="tituloeventos">Flash - Novos 52</h2>
                                    <p class="eventos">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam aliquet purus nec faucibus posuere. Curabitur volutpat sapien diam, quis congue erat aliquet quis. Ut lobortis tortor non ex interdum, sed bibendum mi semper. In eleifend massa eu tempus congue. Vestibulum eleifend cursus nibh, a cursus quam pharetra vel. Phasellus lectus leo, fermentum eget lacus vel, luctus vehicula purus. In quis quam vestibulum, hendrerit dolor eu, vulputate libero. Phasellus tincidunt nunc et ligula viverra euismod. Aenean consectetur placerat mi, fringilla congue. </p>
                            </li>
                            


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
