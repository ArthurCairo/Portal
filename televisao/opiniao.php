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
                        <li>Opinião</li>
                    </ul>
                </header>
                    
            <?php 
            @include 'nav-televisao.php';
                ?>
            
                <div class="row">
                    <article class="col-md-9">
                        <ul class="row page-title">
                            <li class="col-md-12"><span></span>Opinião</li>
                        </ul>
                        <ul class="row titulo-artigo">
                           
                        </ul>           
                        <div class="row">
                            <ul class="destaques col-md-12">
                                    <li class="col-md-11 col-offser-1 duas-colunas">
                                    <img class ="thumbnail" src="img/once.jpg" alt="" id="opiniao" />
                                    
                                    <h3>Coisas Sobre Once Upon a Time que você devia saber.</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ornare ipsum ex, eu rutrum lectus euismod consequat. In sed felis fringilla, rutrum felis ut, ultricies nisl. Sed urna ante, fermentum non auctor quis, pretium eu leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In ut porta tortor. Curabitur iaculis nulla nec turpis faucibus posuere. Sed eget elementum eros. Fusce maximus risus ac leo varius, nec pretium ligula tempor.

Curabitur dignissim placerat vulputate. Quisque finibus ante sed urna blandit pretium. Mauris quis viverra erat, id cursus purus. Ut feugiat rhoncus mauris nec cursus. Sed lacus velit, finibus non metus a, placerat auctor purus. Donec ut viverra sapien. Morbi tristique non eros ut varius. Nunc mollis massa et elit accumsan, et vestibulum felis sagittis. Integer lacinia enim leo, feugiat euismod est laoreet hendrerit.</p>
                                </li>
                                
                            </ul>
                        </div>
                </article>
                    <aside class="col-md-2">
                        <ul class="row">
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/revenge-mini.jpg" alt=""/>
                                <h1>Revenge</h1>
                                    <p>Beaseado no livro de Alexandre Dumas "O Conde de Monte Cristo", a série Revenge conta a história de Emily Thorne, uma garota misteriosa que chega aos Hamptons, em Nova York, em busca de vingança contra aqueles que destruíram sua família.</p>
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button>
                            </li>
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/the-vampire-diaries-mini.jpg" alt=""/>
                                <h1>The Vampire Diaries</h1>
                                    <p>Quatro meses após o trágico acidente de carro que matou seus pais, Elena Gilbert, que tem 17 anos, e seu irmão, Jeremy, que tem 15 anos, ainda estão aprendendo a lidar com o luto e tocar suas vidas adiante. </p>
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button>
                            </li>
                            <li class="col-md-12">
                                    <img class="img-responsive thumbnail" src="img/once-upon-a-time-mini.jpg" alt=""/>
                                <h1>Once Upon a Time</h1>
                                    <p>Imagine os personagens dos contos de fadas sem seus finais felizes. É assim que Once Upon a Time se apresenta, mostrando que dessa vez a Rainha Má finalmente triunfou.</p>
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button>
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