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
                        <h2 class="row"><span ></span>Proximos Lançamentos</h2>
						<p>Fusce aliquam elit convallis nibh tristique, semper consectetur nisl venenatis. Vestibulum enim augue, faucibus id dolor a, hendrerit hendrerit justo. Nulla egestas velit eu lobortis tempus. Nullam pulvinar scelerisque blandit. Nullam semper ipsum eros, in egestas augue tempor eget. Mauris pellentesque feugiat enim convallis dapibus.</p>
                    </article>
                    </div>
					<div class="row">
                             
						
						<div class="col-md-3">
                            <img class="thumbnail" src="img/esquadrao2.jpg"  alt="Autor" />
							<h3>Esquadrão Suicida</h3>
							<p>Fusce aliquam elit convallisr</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							
						</div>	
                        <div class="col-md-8 col-md-offset-1">            
                                    
                                    
                                    
                                    <p>Fusce aliquam elit convallis nibh tristique, semper consectetur nisl venenatis. Vestibulum enim augue, faucibus id dolor a, hendrerit hendrerit justo. Nulla egestas velit eu lobortis tempus. Nullam pulvinar scelerisque blandit. Nullam semper ipsum eros, in egestas augue tempor eget. Mauris pellentesque feugiat enim convallis dapibus. Curabitur consequat tellus viverra metus sagittis, eget adipiscing justo aliquet. Etiam porta ut dui cursus pretium. Nulla porttitor in metus in aliquam. Aliquam ultrices eros vel metus facilisis, et adipiscing nisi dapibus. Nunc sed consequat tortor. Quisque malesuada, dui non porta pellentesque, purus lectus fringilla lectus, ut rhoncus tortor nisl eget nibh. Praesent purus lectus, tempus id nisl sagittis, fermentum pulvinar nibh. Fusce sit amet eros vitae nibh imperdiet commodo.</p>
                                    <p>Etiam sed eros lectus. Sed vehicula tortor et fermentum lacinia. In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus. Maecenas pulvinar semper consequat. Morbi sed tincidunt libero. Nulla facilisi. Cras nec faucibus est.</p>
                        </div>  
					</div>
				<div class="row">
							
							
								
                        <div class="col-md-3">
                            <img class="thumbnail" src="img/deadpool.jpg"  alt="Autor" />
							<h3>DeadPool</h3>
							<p>Fusce aliquam elit convallisr</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							
						</div>	
                        <div class="col-md-8 col-md-offset-1">            
                                    
                                   
                                    <p>Fusce aliquam elit convallis nibh tristique, semper consectetur nisl venenatis. Vestibulum enim augue, faucibus id dolor a, hendrerit hendrerit justo. Nulla egestas velit eu lobortis tempus. Nullam pulvinar scelerisque blandit. Nullam semper ipsum eros, in egestas augue tempor eget. Mauris pellentesque feugiat enim convallis dapibus. Curabitur consequat tellus viverra metus sagittis, eget adipiscing justo aliquet. Etiam porta ut dui cursus pretium. Nulla porttitor in metus in aliquam. Aliquam ultrices eros vel metus facilisis, et adipiscing nisi dapibus. Nunc sed consequat tortor. Quisque malesuada, dui non porta pellentesque, purus lectus fringilla lectus, ut rhoncus tortor nisl eget nibh. Praesent purus lectus, tempus id nisl sagittis, fermentum pulvinar nibh. Fusce sit amet eros vitae nibh imperdiet commodo.</p>
                                    <p>Etiam sed eros lectus. Sed vehicula tortor et fermentum lacinia. In hac habitasse platea dictumst. Duis consectetur nisl viverra pellentesque luctus. Maecenas pulvinar semper consequat. Morbi sed tincidunt libero. Nulla facilisi. Cras nec faucibus est.</p>
                        </div>       	
					
					
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