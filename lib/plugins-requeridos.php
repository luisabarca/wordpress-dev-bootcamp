<?php

add_action('tgmpa_register', 'curso_theme_register_required_plugins');

/**
 * Plugins necesarios y recomendados para esta plantilla
 *
 */
function curso_theme_register_required_plugins() 
{
    $theme_text_domain = 'curso';
    
    /**
     * Plugin list.
     */
    $plugins = array(
        array(
            'name' 	=> 'Google Typography',
            'slug' 	=> 'google-typography',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Easy Bootstrap Shortcode',
            'slug' 	=> 'easy-bootstrap-shortcodes',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Advanced Custom Fields',
            'slug' 	=> 'advanced-custom-fields',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'WordPress SEO by Yoast',
            'slug' 	=> 'wordpress-seo',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Single Post Template',
            'slug' 	=> 'single-post-template',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'TinyMCE Advanced',
            'slug' 	=> 'tinymce-advanced',
            'required' 	=> false
        ),        
        array(
            'name' 	=> 'WordPress Importer',
            'slug' 	=> 'wordpress-importer',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'W3 Total Cache',
            'slug' 	=> 'w3-total-cache',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'Members',
            'slug' 	=> 'members',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Posts 2 Posts',
            'slug' 	=> 'posts-to-posts',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Front-end Editor',
            'slug' 	=> 'front-end-editor',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'WP Smush.it',
            'slug' 	=> 'wp-smushit',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'Widget Logic',
            'slug' 	=> 'widget-logic',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Duplicate Post',
            'slug' 	=> 'duplicate-post',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Breadcrumb NavXT',
            'slug' 	=> 'breadcrumb-navxt',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'WP Mail SMTP',
            'slug' 	=> 'wp-mail-smtp',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'Redirection',
            'slug' 	=> 'redirection',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'WP-PostRatings',
            'slug' 	=> 'wp-postratings',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'NextGEN Gallery',
            'slug' 	=> 'nextgen-gallery',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'No Self Pings',
            'slug' 	=> 'no-self-ping',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'Google Analyticator',
            'slug' 	=> 'google-analyticator',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Subscribe to Comments',
            'slug' 	=> 'subscribe-to-comments',
            'required' 	=> false
        ),
        array(
            'name' 	=> 'Jetpack by WordPress.com',
            'slug' 	=> 'jetpack',
            'required' 	=> true
        ),        
        array(
            'name' 	=> 'Category Order',
            'slug' 	=> 'order-categories',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'WP-PageNavi',
            'slug' 	=> 'wp-pagenavi',
            'required' 	=> true
        ),
        array(
            'name' 	=> 'WP No Category Base',
            'slug' 	=> 'wp-no-category-base',
            'required' 	=> true
        ),        
        array(
            'name'             => 'OptionTree',
            'slug'             => 'option-tree',
            'required'         => true,
            'force_activation' => true
        ),
        array(
            'name'             => 'Contact Form 7',
            'slug'             => 'contact-form-7',
            'required'         => true,
            'force_activation' => true
        )
    );    

    /**
     * Configuración de cadenas y menú de configuración.
     */
    $config = array(
        'domain'           => $theme_text_domain,         // Text domain - likely want to be the same as your theme.
        'default_path' 	   => '',                         // Default absolute path to pre-packaged plugins
        'parent_menu_slug' => 'themes.php', 		  // Default parent menu slug
        'parent_url_slug'  => 'themes.php',               // Default parent URL slug
        'menu'         	   => 'required-plugins', // Menu slug
        'has_notices'      => true,                       // Show admin notices or not
        'is_automatic'     => false,			  // Automatically activate plugins after installation or not
        'message' 	   => '',			  // Message to output right before the plugins table
        'strings'          => array(
            'page_title'                      => __( 'Instalar módulos requeridos', $theme_text_domain ),
            'menu_title'                      => __( 'Instalar módulos', $theme_text_domain ),
            'installing'                      => __( 'Instalando módulo: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                            => __( 'Ocurrió un error con la API del módulo.', $theme_text_domain ),
            'notice_can_install_required'     => _n_noop( 'Esta plantilla necesita el siguiente módulo: %1$s.', 'Esta plantilla necesita los siguientes módulos: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'  => _n_noop( 'Esta plantilla recomienda el siguiente módulo: %1$s.', 'Esta plantilla recomienda los siguientes módulos: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'           => _n_noop( 'Lo sentimos, no tienes los permisos necesarios para instalar el módulo %s. Contacta al administrador del sitio para que te ayude a instalarlo.', 'Lo sentimos, no tienes los permisos necesarios para instalar los módulos %s. Contacta al administrador del sitio para que te ayude a instalarlo.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'    => _n_noop( 'El siguiente módulo necesario se encuentra inactivo: %1$s.', 'Los siguientes módulos necesarios se encuentran inactivo: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended' => _n_noop( 'El siguiente módulo recomendado se encuentra inactivo: %1$s.', 'Los siguientes módulos recomendados se encuentran inactivo: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'          => _n_noop( 'Lo sentimos, no tienes los permisos necesarios para activar el módulo %s. Contacta al administrador del sitio para que te ayude a activarlo.', 'Lo sentimos, no tienes los permisos necesarios para activar los módulos %s. Contacta al administrador del sitio para que te ayude a activarlos.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'            => _n_noop( 'El siguiente módulo debe ser actualizado a la última versión para asegurar la mejor compatibilidad con esta plantilla: %1$s.', 'Los siguientes módulos deben ser actualizados a la última versión para asegurar la mejor compatibilidad con esta plantilla: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'            => _n_noop( 'Lo sentimos, no tienes los permisos necesarios para actualizar el módulo %s. Contacta al administrador del sitio para que te ayude a actualizarlo.', 'Lo sentimos, no tienes los permisos necesarios para actualizar los módulos %s. Contacta al administrador del sitio para que te ayude a actualizarlo.' ), // %1$s = plugin name(s)
            'install_link'                    => _n_noop( 'Inicia proceso de instalación del módulo', 'Inicia proceso de instalación de los módulos' ),
            'activate_link'                   => _n_noop( 'Activar móudulo instalado', 'Activar móudulos instalados' ),
            'return'                          => __( 'Regresar al instalador de módulos necesarios', $theme_text_domain ),
            'plugin_activated'                => __( 'Módulo activado con éxito.', $theme_text_domain ),
            'complete'                        => __( 'Todos los módulos se han instalado y activado. %s', $theme_text_domain ), // %1$s = dashboard link
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa($plugins, $config);
}
