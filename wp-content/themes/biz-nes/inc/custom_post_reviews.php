<?php 
// Register Custom Post Type
function custom_post_type_reviews() {

	$labels = array(
		'name'                  => 'Відгуки',
		'singular_name'         => 'Відгук',
		'menu_name'             => 'Відгуки',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Добавити новий',
		'add_new'               => 'Добавити новий',
		'new_item'              => 'Нова',
		'edit_item'             => 'Редагувати',
		'update_item'           => 'Обновити',
		'view_item'             => 'Перегляд',
		'view_items'            => 'Переглянути всі',

	);
	$rewrite = array(
		'slug'                  => 'reviews',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Відгук',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'reviews',
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'biz_nes_reviews', $args );

}
add_action( 'init', 'custom_post_type_reviews', 0 );

?>