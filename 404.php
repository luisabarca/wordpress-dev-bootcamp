<?php get_header() ?>
    <div class="container">
        <div class="row">            
            <div class="col-sm-12">
                <?php if (have_posts()): the_post() ?>                
                <h1 class="page-header">Error 404 - No pudimos encontrar la página</h1>                
                <?php get_template_part('partes/migajas-de-pan') ?>
                
                <h3>Estimado usuario, no podemos encontar el contenido que busca</h3>
                
                <?php else: ?>
                <?php get_template_part('partes/sin-contenido') ?>
                <?php endif ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php get_footer() ?>