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
		'all_items'             => 'All Items',
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
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'servise',
		'rewrite'               => $rewrite,
	);
	register_post_type( 'biz_nes_servise', $args );

}
add_action( 'init', 'custom_post_type_servise', 0 );

?>