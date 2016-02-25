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
                        <li>Resenhas</li>
                    </ul>
                </header>
                   
            <?php 
            @include 'nav-televisao.php';
                ?>
            
                <div class="row">
                    <article class="col-md-9">
                        <ul class="row page-title">
                            <li class="col-md-12"><span ></span>Resenhas</li>
                        </ul>
                        <ul class="row titulo-artigo">
                            <li class="col-md-11"><span ></span>Série em Destaque</li>
                        </ul>
                        <ul class="row">
                            <li >The Big Bang Theory</li>
                        </ul>
                        <ul class="row">
                            <li class="col-md-3">
                                <img class="thumbnail" src="img/tbbt-4-mini.jpg" alt="" data-toggle="modal" data-target="#tbbt-1"/>
                            </li>
                             <li class="col-md-3">
                                <img class="thumbnail" src="img/tbbt-3-mini.jpg" alt="" data-toggle="modal" data-target="#tbbt-2"/>
                            </li>
                            <li class="col-md-3">
                                <img class="thumbnail" src="img/tbbt-1-mini.jpg" alt="" data-toggle="modal" data-target="#tbbt-3"/>
                            </li>
                            <li class="col-md-3">
                                <img class="thumbnail" src="img/tbbt-2-mini.jpg" alt="" data-toggle="modal" data-target="#tbbt-4"/>
                            </li>
                        </ul>
                        <ul class="row">
                            <li class="col-md-12 sinopse">
                                <h1>Sinopse</h1>
                                <p>Leonard (Johnny Galecki) e Sheldon (Jim Parsons) são dois brilhantes físicos que dividem o mesmo apartamento. Suas vidas se complicam quando uma belíssima jovem, porém pouco inteligente, Penny (Kaley Cuoco), se muda para o apartamento da frente. A chegada de Penny perturbou um pouco Sheldon já que ele prefere passar as noites jogando Klingori Boggle com seus amigos e colegas de trabalho e também cientistas, Howard (Simon Helberg) e Raj (Kunal Nayyar), sem ligar para Penny. Contudo, Leonard vê em Penny a possibilidade de aprender a interagir com as mulheres e sente que ela é um novo mundo cheio de possibilidades, e quem sabe, do amor. Sheldon acha que isso é um sonho que nunca se realizará, porém, talvez nesta comédia estas mentes brilhantes possam aprender algumas coisas com uma jovem que trabalha em uma lanchonete chamada Fábrica do Cheeseecake.</p>
                                   
                                   </li>
                        </ul>
                        
                        <ul class="row titulo-artigo-secundario">
                            <li class="row titulo-artigo-secundario" ><span ></span>Elenco</li>
                        </ul>           
                        <div class="row">
                            <ul class="destaques col-md-12">
                                
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/jim-parsons.jpg" alt="" data-toggle="modal" data-target="#jim-parsons"/>
                                    <h3>Jim Parsons</h3>
                                    
                                </li>
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/johnny-galecki.jpg" alt="" data-toggle="modal" data-target="#johnny-galecki" />
                                    <h3>Johnny Galecki</h3>
                                   
                                </li>
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/kaley-cuoco.jpg" alt="" data-toggle="modal" data-target="#kaley-cuoco"/>
                                    <h3>Kaley Couco</h3>
                                </li>
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/kunal-nayyar.jpg" alt="" data-toggle="modal" data-target="#kunal-nayyar"/>
                                    <h3>Kunal Nayyar</h3>
                                    
                                </li>
                            </ul>
                        </div>
                    <div class="row">
                            <ul class="destaques col-md-12">
                                
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/simon-helberg.jpg" alt="" data-toggle="modal" data-target="#simon-helberg"/>
                                    <h3>Simon Helberg</h3>
                                    
                                </li>
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/mayim-bialik.jpg" alt="" data-toggle="modal" data-target="#mayim-bialik"/>
                                    <h3>Mayim Bialik</h3>
                                   
                                </li>
                                <li class="col-md-3">
                                    <img class="thumbnail" src="img/melissa-rauch.jpg" alt="" data-toggle="modal" data-target="#melissa-rauch"/>
                                    <h3>Melissa Rauch</h3>
                                    
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
                                ><button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">Leia mais Top 10</button>
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
