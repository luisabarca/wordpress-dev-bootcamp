<?php
$cantidad = $wp_query->post_count - 1; // Resto porque inicia en ceros el conteo
?>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i <= $cantidad; $i++): // Dibuja los indicadores (circulos) ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" <?php if ($i == 0): ?>class="active"<?php endif ?>></li>
        <?php endfor ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php $i = 0; while (have_posts()): the_post() ?>
        <div class="item <?php echo $i == 0 ? 'active': '' ?>">
            <?php 
            // Verifica que tenga imagen destacada, en caso que no tenga, mostramos una por defecto
            if (has_post_thumbnail()):                 
                // Obtenemos el ID de la imagen destacada
                $img_id = get_post_thumbnail_id();
                // Obtenemos un arreglo con la URL de la imagen, ancho y alto,
                // lo obtenemos de esta forma para mostrarla como fondo del DIV
                $img = wp_get_attachment_image_src($img_id);
            ?>
            <div class="fill" style="background-image:url('<?php echo $img[0] ?>');"></div>
            <?php else: ?>
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <?php endif ?>
            
            <div class="carousel-caption">
                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
            </div>
        </div>
        <?php $i++; endwhile ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>