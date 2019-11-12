<?php 
// Register Custom Post Type
function custom_post_type_awords() {

	$labels = array(
		'name'                  => 'Нагороди',
		'singular_name'         => 'Нагорода',
		'menu_name'             => 'Нагороди',
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
		'slug'                  => 'awards',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Нагорода',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'awords',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'biz_nes_awords', $args );

}
add_action( 'init', 'custom_post_type_awords', 0 );

?>