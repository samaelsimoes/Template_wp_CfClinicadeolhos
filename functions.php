<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

//permite upload de arquivos svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

//cria um menu de navegação
register_nav_menus(

	array('responsive' => __('responsive', 'theme'))
);

register_nav_menus(

	array('main-menu' => __('main-menu', 'theme'))
);
register_nav_menus(

	array('main-footer' => __('main-footer', 'theme'))
);

//adiciona campo de descrição das páginas
add_action('init', 'theme_custom_init');

//post supports
function theme_custom_init() {
	add_post_type_support('page', 'excerpt');
	add_post_type_support('post', 'excerpt');
}

//cria uma area de widgets
function theme_widgets_init() {
	register_sidebar(array(
		'name' => __('Widgets', 'theme'),
		'id' => 'primary-widget-area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'theme_widgets_init');

//cria o menu personalizado responsivo
class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {
	public function start_lvl(&$output, $depth = 0, $args = Array()) {}

	public function end_lvl(&$output, $depth = 0, $args = Array()) {}

	public function start_el(&$output, $item, $depth = 0, $args = Array(), $id = 0) {
		$item->title = str_repeat("&nbsp;", $depth * 4) . $item->title;
		parent::start_el($output, $item, $depth, $args);
		$output = str_replace('<li', '<option', $output);
		$output = str_replace('><a href="', ' value="', $output);
	}

	public function end_el(&$output, $item, $depth = 0, $args = Array()) {
		$output .= "</option>\n";
	}
}

function custom_post_type_equipemedica() {

	$labels = array(

		'name' => _x('Equipemedica', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Equipemedica', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Equipemedica', 'text_domain'),
	);

	$args = array(

		'label' => __('Equipemedica', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Equipemedica', $args);
}

add_action('init', 'custom_post_type_equipemedica', 0);

function custom_post_type_especialidades1() {

	$labels = array(

		'name' => _x('Especialidades1', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Especialidades1', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Especialidades1', 'text_domain'),
	);

	$args = array(

		'label' => __('Especialidades1', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Especialidades1', $args);
}

add_action('init', 'custom_post_type_especialidades1', 0);

function custom_post_type_especialidades2() {

	$labels = array(

		'name' => _x('Especialidades2', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Especialidades2', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Especialidades2', 'text_domain'),
	);

	$args = array(

		'label' => __('Especialidades2', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Especialidades2', $args);
}

add_action('init', 'custom_post_type_especialidades2', 0);

function custom_post_type_especialidades3() {

	$labels = array(

		'name' => _x('Especialidades3', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Especialidades3', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Especialidades3', 'text_domain'),
	);

	$args = array(

		'label' => __('Especialidades3', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Especialidades3', $args);
}
add_action('init', 'custom_post_type_especialidades3', 0);

function custom_post_type_exames() {

	$labels = array(

		'name' => _x('Exames', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Exames', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Exames', 'text_domain'),
	);

	$args = array(

		'label' => __('Exames', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Exames', $args);
}
add_action('init', 'custom_post_type_Exames', 0);

function custom_post_type_convenio() {

	$labels = array(

		'name' => _x('Convenio', 'Post Type General Name', 'text_domain'),
		'singular_name' => _x('Convenio', 'Post Type Singular Name', 'text_domain'),
		'menu_name' => __('Convenio', 'text_domain'),
	);

	$args = array(

		'label' => __('Convenio', 'text_domain'),
		'description' => __('Product information pages', 'text_domain'),
		'labels' => $labels,
		'taxonomies' => array(),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 6,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'supports' => array('title', 'editor', 'post-formats'),
	);

	register_post_type('Convenio', $args);
}

add_action('init', 'custom_post_type_convenio', 0);

?>