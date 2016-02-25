<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<link href="../css/cinema.css" rel="stylesheet" type="text/css">
    
<!-- 'shim' para compatibilidade do HTML5 com os IEs antigos -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"</script>
	<![endif]-->
<title>Cinema</title>
</head>

<body>
<div class="container-fluid">
		   
          <!--        INclude Nav do site -->
        <?php
        @include '../nav-site.php';
        ?>
            
			 <div class="container page-container">
             <header class="row cinenav">
                    
                    <div class="col-md-5">
                    <h1 class="cabecalho">Cinema</h1>
                </div>
                </header>
                 
            
                 
                 <!--                 INclude nav do cinema-->
                <?php
                    @include 'nav-cinema.php';
                 ?>
			
            <h2 class="row"><span ></span>Em Cartaz</h2>
			
			<div class="row carousel-row">
                <div class="col-md-10">
                    <div id="carousel-index" class="carousel slide" data-ride="carousel">
                        
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                              <img class="img-responsive " src="img/007-1200.jpg" alt="Maecenas pulvinar semper consequat." />
                               <a href="destaques.php"><div class="carousel-caption">
                               <h4>007 - Contra Spectre</h4>
                                <p>Etiam sed eros lecus. Sed vehicula tortor et fermentum lacinia.
								In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus.</p>
                              </div></a>
                            </div>
                            <div class="item">
                              <img class="img-responsive" src="img/jogos-1200.jpg" alt="Maecenas pulvinar semper consequat." />
                              <a href="destaques.php"><div class="carousel-caption">
                                 <h4>Jogos Vorazes: A esperança O Final.</h4>
                                <p>Etiam sed eros lectus. Sed vehicula tortor et fermentum lacinia.
								In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus.</p>
                              </div></a>
                            </div>
                            <div class="item">
                              <img class="img-responsive" src="img/cacador-1200.JPG" alt="Maecenas pulvinar semper consequat." />
                              <a href="destaques.php"><div class="carousel-caption">
                                <h4>O Ultimo Caçador de Bruxas.</h4>
                                <p>Etiam sed eros lectus. Sed vehicula tortor et fermentum lacinia.
								In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus.</p>
                              </div></a>
                            </div>
							<div class="item">
                              <img class="img-responsive" src="img/gose-1200.jpg" alt="Maecenas pulvinar semper consequat." />
                              <a href="destaques.php"><div class="carousel-caption">
                                <h4>Goosebumps: Monstros e Arrepios.</h4>
                                <p>Etiam sed eros lectus. Sed vehicula tortor et fermentum lacinia.
								In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus.</p>
                              </div></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-2 carousel-navigation">
                    <ol class="row">
                        <li data-target="#carousel-index" data-slide-to="0" class="active">007 Contra Spectre</li>
                         <li data-target="#carousel-index" data-slide-to="1">Jogos Vorazes a Esperaça O Final</li>
                         <li data-target="#carousel-index" data-slide-to="2">O Úiltmo Caçador de Bruxas</li>
						 <li data-target="#carousel-index" data-slide-to="3">Goosebumbs Monstros e Arrepios</li>
                    </ol>
                </div>
            </div>
            
            <article class="row col-md-12">
                        <h2 class="row ">Proximos Lançamentos</h2>
                         
                        <div class="thumbnail col-md-3 destaquesdiv">
                                    <a href="eventos.php">
                                        <img class="thumbnail" src="img/dead-180.JPG"   alt="DeadPool" />
                                        <h3>DeadPool</h3></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    
                            
                                        
                                </div>
                               
                        <div class="thumbnail col-md-3 offset-1 destaquesdiv">
                                    <a href="eventos.php">
										 <img class="thumbnail" src="img/esquadrao-140.JPG"  alt="Esquadrao Suicida" />
                                        <h3>Esquadrão Suícida</h3></a>
                                        
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           
									</div>
                              
                                   
                                 
                        <div class="thumbnail col-md-3 offset-1 destaquesdiv">
                                    <a href="eventos.php">
                                        <img class="thumbnail" src="img/dory-180.jpg" alt="Procurando Dory" />
                                        <h3>Procurando Dory</h3>  </a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  
                            
                                    </div>
                             
									
									
                        <div class="thumbnail col-md-3 offset-1 destaquesdiv">
                                    <a href="eventos.php">
                                        <img class="thumbnail" src="img/incriveis-180.jpg" alt="Incriveis 2" />
                                        <h3>Incriveis 2</h3></a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                           			
								</div>
                               
                    
                       
                </article>
				
				<section>
                <div class="row">
				 <h2 class="row"><span ></span>Noticias</h2>
				
                    <section class="container news-box">
                        <div class="col-md-3">
                            <a href="eventos.php ">
                           <img class="thumbnail" src="img/esquadrao-140.JPG" alt="Homens Que Encaravam Cabras" /></a>
                        </div>
                        <div class="col-md-9">
                            <a href="eventos.php " >
                            <h3>Tudo até agora sobre o Esquadrao Suícida</h3></a>
                            <p>Duis suscipit neque eu felis cursus, a faucibus magna porta. Etiam sit amet auctor velit.
							Nam congue sollicitudin tincidunt. Sed vestibulum condimentum erat,
							non faucibus arcu rhoncus quis. Duis venenatis condimentum diam,
							ac condimentum ligula fringilla quis. Lorem ipsum dolor sit amet,
							consectetur adipiscing elit.
							Integer nec tellus nulla. 
                        </div>
                    </section>
                </div>
				
				
				
                        
                
               
			</section>
            
            <!--Include Footer-->
                    <?php 
                    @include '../footer.php';
                    
                    ?>
                 
        </div>
        
     
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    
    </div>
    </body>
</html>

 