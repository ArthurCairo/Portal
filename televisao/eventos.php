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
            
                 <header class="row">
                    
                    <ul class="bl col-md-10">
                        <li>Eventos</li>
                    </ul>
                </header>
            
                   <?php 
            @include 'nav-televisao.php';
                ?>
            
                <div class="row">
                    <article class="col-md-9">
                        <ul class="row page-title">
                            <li class="col-md-12"><span ></span>  Principais Eventos</li>
                        </ul>
                        <ul class="row titulo-artigo">
                            <li class="col-md-11"><span></span>2015</li>
                        </ul>           
                            <ul class="destaques row">
                                    <li class="col-md-11 col-offser-1 duas-colunas">
                                    <img class="thumbnail" src="img/comiccon.jpg" alt="" />
                                    
                                    <h3>Comic Con Experience 2015</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis quam nibh. Nam eu auctor augue, eget consectetur felis. Vestibulum luctus, neque at viverra cursus, massa turpis fringilla lectus, a eleifend urna elit eu velit. Etiam ac ligula quis eros ullamcorper iaculis. Integer viverra vel dui in consequat. Duis tempus libero ex, sit amet hendrerit enim vehicula nec. Vivamus aliquet magna ut porttitor imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Nullam risus dui, fringilla a porttitor sit amet, rhoncus at risus. Fusce imperdiet vel neque a vulputate. In venenatis est nibh, ac tristique diam cursus quis. Donec vitae euismod odio, eu varius diam. In congue massa sed ipsum eleifend, sed sodales risus gravida.</p>

                                    
                                </li>
                                
                            </ul>
                            <ul class="destaques row">
                                    <li class="col-md-11 col-offser-1 duas-colunas">
                                    <img class="thumbnail" src="img/harry.jpg" alt="" />
                                    
                                    <h3>O Mundo Mágico de Harry Potter</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis quam nibh. Nam eu auctor augue, eget consectetur felis. Vestibulum luctus, neque at viverra cursus, massa turpis fringilla lectus, a eleifend urna elit eu velit. Etiam ac ligula quis eros ullamcorper iaculis. Integer viverra vel dui in consequat. Duis tempus libero ex, sit amet hendrerit enim vehicula nec. Vivamus aliquet magna ut porttitor imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Nullam risus dui, fringilla a porttitor sit amet, rhoncus at risus. Fusce imperdiet vel neque a vulputate. In venenatis est nibh, ac tristique diam cursus quis. Donec vitae euismod odio, eu varius diam. In congue massa sed ipsum eleifend, sed sodales risus gravida.</p>

                                   
                                </li>
                                
                            </ul>
                </article>
                    <aside class="col-md-2">
                        <ul class="row">
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/revenge-mini.jpg" alt=""/>
                                <h1>Revenge</h1>
                                    <p>Beaseado no livro de Alexandre Dumas "O Conde de Monte Cristo", a série Revenge conta a história de Emily Thorne, uma garota misteriosa que chega aos Hamptons, em Nova York, em busca de vingança contra aqueles que destruíram sua família.</p>
                                <p><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button></p>
                        
                            </li>
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/the-vampire-diaries-mini.jpg" alt=""/>
                                <h1>The Vampire Diaries</h1>
                                    <p>Quatro meses após o trágico acidente de carro que matou seus pais, Elena Gilbert, que tem 17 anos, e seu irmão, Jeremy, que tem 15 anos, ainda estão aprendendo a lidar com o luto e tocar suas vidas adiante. </p>
                                <p><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button></p>
                                
                            </li>
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/once-upon-a-time-mini.jpg" alt=""/>
                                <h1>Once Upon a Time</h1>
                                    <p>Imagine os personagens dos contos de fadas sem seus finais felizes. É assim que Once Upon a Time se apresenta, mostrando que dessa vez a Rainha Má finalmente triunfou.</p>
                                <p><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button></p>
                                    
                            </li>
                        </ul>
                    </aside>
                    </div>
            
            
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