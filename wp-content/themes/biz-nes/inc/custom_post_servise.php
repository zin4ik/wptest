<?php 
// Register Custom Post Type
function custom_post_type_servise() {

	$labels = array(
		'name'                  => 'Послуги',
		'singular_name'         => 'Послуга',
		'menu_name'             => 'Послуги',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Всі послуги',
		'add_new_item'          => 'Добавити нову',
		'add_new'               => 'Добавити нову',
		'new_item'              => 'Нова',
		'edit_item'             => 'Редагувати',
		'update_item'           => 'Обновити',
		'view_item'             => 'Перегляд',
		'view_items'            => 'Переглянути всі',

	);
	$rewrite = array(
		'slug'                  => 'servise',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Послуга',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'servise',
		'rewrite'               => $rewrite,
	);
	register_post_type( 'biz_nes_servise', $args );

	$labels=array(
		'name'				 =>'Рубрики послуг',
		'singular_name' 	 =>'Рубрики',
		// 'search_items'	   	 =>'',
		// 'popular_items'	     =>'',
		// 'all_items'			 =>'',
		// 'parent_item' 	 	 =>'',
		// 'parent_item_colon'  =>'',
		// 'edit_item'			 =>'',
		// 'update_item'		 =>'',
		// 'add_new_item'		 =>'',
		// 'new_item_name'		 =>'',
		// 'add_or_remove_items'=> '',
		// 'choose_from_most_used'=>'',
		'menu_name'          => 'Рубрики послуг',

	);
	$args=array(
		'labels'                 => $labels, // определяется параметром $labels->name
		//'description'           => '', // описание таксономии
		'public'                => true,
		//'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,
		'rewrite'               => true,
		'query_var'             => true, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	);

	register_taxonomy( 'taxonomy-slug', array('biz_nes_servise'), $args);
}
add_action( 'init', 'custom_post_type_servise', 0 );

?>