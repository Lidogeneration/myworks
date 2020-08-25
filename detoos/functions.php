<?php
remove_action ('wp_head','rsd_link');
remove_action ('wp_head','wlwmanifest_link');
remove_action ('wp_head','wp_generator');

show_admin_bar(false);


add_action( 'wp_enqueue_scripts', 'generationlead_styles' );
add_action( 'wp_enqueue_scripts', 'main_js' );

function main_js() {
wp_enqueue_script( 'all', get_template_directory_uri().'/js/libs.min.js', array('jquery'),null,true );
wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array('jquery'),'10',true );
}

function generationlead_styles() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'style-libs', get_template_directory_uri() .'/css/libs.min.css',array(),'1');
	wp_enqueue_style( 'style-main', get_template_directory_uri() .'/css/main.css',array(),'10');
  wp_enqueue_style( 'mediaall', get_template_directory_uri() .'/css/mediaall.css',array(),'6');
  wp_enqueue_style( 'font-awes', get_template_directory_uri() .'/libs/fontawesome/css/all.min.css',array(),'1');

  
}


add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type('table', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Акция', // основное название для типа записи
			'singular_name'      => 'Акция', // название для одной записи этого типа
			'add_new'            => 'Добавить новую акцию', // для добавления новой записи
			'add_new_item'       => 'Добавление новой акции', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование акции', // для редактирования типа записи
			'new_item'           => 'Новая запись', // текст новой записи
			'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
			'search_items'       => 'Искать в записи', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акция', // название меню
		),
		'description'         => 'Акция',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-media-spreadsheet', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}