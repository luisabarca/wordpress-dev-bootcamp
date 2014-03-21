<?php

// Incluidmos librerias de código de terceros
include 'vendor/class-tgm-plugin-activation.php';

// Agregamos nuestra configuración
include 'lib/plugins-requeridos.php';

/*********************************************************************************************************************
 * 
 * Agregamos el soporte menús personalizados, foto destacada y nuevos tamaños de imágenes.
 *
 */

// Agrega soporte para menús
add_theme_support('menus');

// Agrega soporte para imágenes destacadas
add_theme_support('post-thumbnails');

// Agregamos un nuevo tamaño para que se recorten nuestras fotos
add_image_size('portafolio-img', 700, 450, true);

/*********************************************************************************************************************
 * 
 * Agregamos el soporte para Widgets al registrar uno.
 * Se registran espacios para mostrarlos
 *
 */

// Sidebar en las entradas
register_sidebar(array(
    'name' 			=> 'Sidebar para entradas',
    'id' 			=> 'sidebar-posts',
    'description'   => 'Sidebar que aparece en las entradas',
    'before_widget' => '',
	'after_widget'  => ''
));

// Sidebar en las páginas
register_sidebar(array(
    'name' 			=> 'Sidebar para página',
    'id' 			=> 'sidebar-pages',
    'description' 	=> 'Sidebar que aparece en las entradas',
    'before_widget' => '',
	'after_widget'  => ''
));

// Sidebar para páginas con sidebar a la izquierda o ambos lados
register_sidebar(array(
    'name' 			=> 'Sidebar izquierda',
    'id' 			=> 'sidebar-izquierda',
    'description' 	=> 'Sidebar que aparece a la izquierda del contenido',
    'before_widget' => '',
	'after_widget'  => ''
));

// Sidebar para páginas con sidebar a la derecha o ambos lados
register_sidebar(array(
    'name' 			=> 'Sidebar derecha',
    'id' 			=> 'sidebar-derecha',
    'description' 	=> 'Sidebar que aparece a la derecha del contenido',
    'before_widget' => '',
	'after_widget'  => ''
));


/*********************************************************************************************************************
 * 
 * Menús
 *
 */

// Registra una ubicación de menú
register_nav_menu('menu-superior', 'Menú superior del sitio Web');

// Registra una ubicación de menú en el pie de página
register_nav_menu('menu-lateral', 'Menú lateral');

// Registra una ubicación de menú en el pie de página
register_nav_menu('menu-inferior', 'Menú del pie de página del sitio Web');

/** 
 * Muestra el menú de la parte superior que se muestra en todo el sitio Web
 *
 */
function the_menu_superior()
{
    echo wp_nav_menu(array(
        'theme_location'  => 'menu-superior', // Este debe coincidir con el pasado a register_nav_menu
        'menu_class'      => 'nav navbar-nav navbar-right',
        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
		'fallback_cb' 	  => 'wp_no_menu', // Si no se ha establecido un menú para esta zona, 
                                           // tomar el por defecto personalzado con las instrucciones
		'echo' 			  => 0
    ));
}

/** 
 * Muestra el menú de la parte inferior para el pie de página
 */
function the_menu_lateral()
{
    echo wp_nav_menu(array(
        'theme_location'  => 'menu-lateral', 
        'menu_class'      => 'nav navbar-nav navbar-right',
        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
		'fallback_cb' 	  => 'wp_no_menu',
		'echo' 			  => 0
    ));
}

/** 
 * Muestra el menú de la parte inferior para el pie de página
 */
function the_menu_inferior()
{
    echo wp_nav_menu(array(
        'theme_location'  => 'menu-inferior', 
        'menu_class'      => 'nav navbar-nav navbar-right',
        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
		'fallback_cb' 	  => 'wp_no_menu',
		'echo' 			  => 0
    ));
}

/**
 * Estas instrucciones se muestran cuando no hay un menú definido
 * 
 */
function wp_no_menu()
{
    ?>
    <ul class="nav nav-pills pull-right">
        <li><a href="<?php echo admin_url('nav-menus.php') ?>">1. Defina un menú</a></li>
        <li><a href="<?php echo admin_url('nav-menus.php?action=locations') ?>">2. Asignelo a esta sección</a></li>
    </ul>
    <?php 
}

/*********************************************************************************************************************
 * 
 * Funciones de utilidad
 *
 */

/**
 * Verifica si existe y muestra un campo personalizado con formato
 * 
 * @global object $post
 */
function the_zona()
{
    // Debemos incluir el objeto que se esta utilizando en el loop
    global $post;
    
    // Obtenemos los datos del custom fields, necesitamos el ID del objeto post,
    // el nombre que le dimos al campo personalizado
    // y decirle a WordPress que es un valor único y no un arreglo
    $zona = get_post_meta($post->ID, 'Zona_Acapulco', true);

    // Revisa que no este vacia y la muestra
    if (!empty($zona)): ?>
    <h3>Zona de Acapulco:</h3>
    <p><?php echo get_post_meta($post->ID, 'Zona_Acapulco', true) ?></p>
    <?php endif;
}