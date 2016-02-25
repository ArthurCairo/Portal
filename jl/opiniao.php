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
        <div class="row destha">
                <h1 class="titulo">Opinião</h1>
                <article class="col-md-12 well destha">
                    <img src="img/overop.jpg" alt="branco"/>
                    <h2>Overwatch o mais NOVO MEGA JOGO da Blizzard</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque dictum blandit. Pellentesque pulvinar blandit placerat. Duis luctus odio vitae eros bibendum venenatis. Duis metus sapien, rhoncus ut neque et, iaculis egestas enim. Cras ac lobortis dolor. Nam at quam vestibulum purus porta consectetur vel ac urna. Nulla tempor tortor non nisl lacinia placerat. Nulla rhoncus gravida ligula, consequat convallis metus. Sed cursus eu sapien et commodo. Mauris commodo dolor at enim accumsan, at feugiat eros auctor. Nunc eget viverra nisi. Quisque condimentum pharetra purus vitae pretium. Etiam venenatis sed est ac ultrices.</p>
                    <blockquote> Quisque id orci dui. In pharetra lorem in ante euismod dapibus quis nec justo. In hac habitasse platea dictumst. Donec vehicula mauris sit amet nisi blandit posuere. Aliquam rutrum ultricies orci, sit amet pulvinar quam commodo id. Aenean non enim mauris, at commodo magna. Nullam metus ipsum, feugiat vitae mollis id, feugiat at erat. Sed sem leo, pulvinar id ultrices vitae, venenatis eget purus. Quisque ac velit sem. Phasellus a est vel lorem egestas tincidunt.</blockquote>
                    <p>In rhoncus a eros molestie pellentesque. Donec id odio eu sem eleifend adipiscing. Suspendisse sagittis, magna at egestas commodo, diam libero vulputate neque, nec dignissim magna magna non leo. In nec luctus neque. Nam quis luctus magna. Phasellus volutpat erat eu rhoncus convallis. Sed in interdum nibh, vel bibendum ante. Praesent pulvinar adipiscing dictum. Integer fermentum mauris volutpat est egestas, non consequat metus iaculis. Fusce imperdiet accumsan risus quis mollis.</p>
                    <blockquote>In convallis ut dolor ac ultricies. Nunc nunc sem, rutrum eu enim ac, dictum lobortis sem. Cras lorem eros, porta sit amet magna quis, sagittis pellentesque mauris. Aenean a pretium massa. Mauris eget nulla sed justo molestie hendrerit. Integer egestas arcu non consectetur elementum. Nullam velit dolor, condimentum a lectus et, viverra suscipit quam. In pretium pharetra leo, ac rutrum massa lobortis at.</blockquote>
                    <p>In convallis ut dolor ac ultricies. Nunc nunc sem, rutrum eu enim ac, dictum lobortis sem. Cras lorem eros, porta sit amet magna quis, sagittis pellentesque mauris. Aenean a pretium massa. Mauris eget nulla sed justo molestie hendrerit. Integer egestas arcu non consectetur elementum. Nullam velit dolor, condimentum a lectus et, viverra suscipit quam. In pretium pharetra leo, ac rutrum massa lobortis at.</p>
                </article>
        </div>

        

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
