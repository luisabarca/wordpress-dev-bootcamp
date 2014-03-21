<?php get_header() ?>
    <div class="container">
        <div class="row">            
            <div class="col-sm-9">
                <?php if (have_posts()): the_post() ?>
                
                <h1 class="page-header"><?php the_title() ?></h1>                
                <?php get_template_part('partes/migajas-de-pan') ?>
                
                <?php the_content() ?>
                
                <?php the_zona(); // ejemplo de campo personalizado ?>
                
                <?php else: ?>
                <?php get_template_part('partes/sin-contenido') ?>
                <?php endif ?>
            </div>
            
            <?php get_sidebar() ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php get_footer() ?>