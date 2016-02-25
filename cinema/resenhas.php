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
             <header class="row">
                    
                    <div class="col-md-5">
                    <h1 class="cabecalho">Cinema</h1>
                </div>
                </header>
            
                 <!--                 INclude nav do cinema-->
                <?php
                    @include 'nav-cinema.php';
                 ?>
					
					
                <div class="row">
				
				<article class="row col-md-12">
                        <h2 class="row"><span></span>Noticias</h2>
                         
                        <div class="thumbnail col-md-4 destaquesdiv">
                                    <a href="resenhas.php">
                                        <img class="thumbnail" src="img/teste2.jpg" alt="" />
                                        <h3>Tudo até agora sobre o Esquadrão Suicida</h3>  </a>
                                         <p>Duis suscipit neque eu felis cursus, a faucibus magna porta. Etiam sit amet auctor velit.
							Nam congue sollicitudin tincidunt. Sed vestibulum condimentum erat,
							non faucibus arcu rhoncus quis. Duis venenatis condimentum diam,
							ac condimentum ligula fringilla quis. Lorem ipsum dolor sit amet,
							consectetur adipiscing elit.
							Integer nec tellus nulla. </p>			
                                </div>
                               
                        <div class="thumbnail col-md-4 destaquesdiv">
                                    <a href="resenhas.php">
                                        <img class="thumbnail"  src="img/disney.JPG" alt="A Doce Vida" />
                                        <h3>Os desenhos mais esperados da Disney</h3></a>
                                         <p>Duis suscipit neque eu felis cursus, a faucibus magna porta. Etiam sit amet auctor velit.
							Nam congue sollicitudin tincidunt. Sed vestibulum condimentum erat,
							non faucibus arcu rhoncus quis. Duis venenatis condimentum diam,
							ac condimentum ligula fringilla quis. Lorem ipsum dolor sit amet,
							consectetur adipiscing elit.
							Integer nec tellus nulla.</p>
                        </div>
						<div class="thumbnail col-md-4 destaquesdiv">
                                    <a href="resenhas.php">
                                        <img class="thumbnail"  src="img/marvel.jpg" alt="" />
                                        <h3>Marvel e seus filmes. O que esperar?</h3></a>
                                         <p>Duis suscipit neque eu felis cursus, a faucibus magna porta. Etiam sit amet auctor velit.
							Nam congue sollicitudin tincidunt. Sed vestibulum condimentum erat,
							non faucibus arcu rhoncus quis. Duis venenatis condimentum diam,
							ac condimentum ligula fringilla quis. Lorem ipsum dolor sit amet,
							consectetur adipiscing elit.
							Integer nec tellus nulla.</p>
                        </div>
                </article>
                    
<!--Include Footer-->
                    <?php 
                    @include '../footer.php';
                    
                    ?>
            </div>
            </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </div>  
    </body>
</html>
