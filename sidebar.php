<div class="col-sm-3 sidebar">
<?php    
if (is_page()) {
    // Si es página, agregamos la sidebar de páginas a la derecha
    dynamic_sidebar('sidebar-derecha');
}  else if ( is_single() ) {
    // En las entradas muestra una barra especial
    dynamic_sidebar('sidebar-posts');
} else if ( is_category() ) {   
    // En la categoría noticias, agregamos un sidebar extra
    dynamic_sidebar('sidebar-noticias');
}  
?>
</div>