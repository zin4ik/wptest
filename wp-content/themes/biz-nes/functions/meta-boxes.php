<?php
/**
 * Initialize the custom Meta Boxes.
 *
 * @package OptionTree
 */

add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @since 2.0
 */
function custom_meta_boxes() {

/** === home_page === */
	$home_meta_box = array(
			'id'       => 'home_page_meta_box',
			'title'    => __( 'Налаштування головної сторінки', 'theme-text-domain' ),
			'desc'     => '',
			'pages'    => array( 'page' ),
			'context'  => 'normal',
			'priority' => 'high',
			'fields'   => array(
				array(
					'label' => __( 'Слайдер', 'theme-text-domain' ),
					'id'    => 'home_page_slider_tab',
					'type'  => 'tab',
				),
				array(
					'label' => __( 'Показувать слайдер..?', 'theme-text-domain' ),
					'id'    => 'home_page_slider_show',
					'type'  => 'on-off',
					'desc'  => sprintf( __( 'Поазувать чи не показувать слайдер', 'theme-text-domain' ), '<code>on</code>' ),
					'std'   => 'off',
				),	
				array(
					'id'           => 'home_page_slider_list_item',
					'label'        => __( 'Слайдер', 'theme-text-domain' ),
					'type'         => 'list-item',
					'condition'    => 'home_page_slider_show:is(on)',
					'settings'     => array(
						array(
							'id'           => 'home_page_slider_name',
							'label'        => __( 'Назва слайдеру', 'theme-text-domain' ),
							'type'         => 'text',
						),
						array(
							'id'           => 'home_page_slider_upload',
							'label'        => __( 'Завантажте слайдер', 'theme-text-domain' ),
							'desc'         => '',
							'type'         => 'upload',
						),
					)
				),
				array(
					'label' => __( 'Переваги', 'theme-text-domain' ),
					'id'    => 'home_page_advansed_tab',
					'type'  => 'tab',
				),
				array(
					'label' => __( 'Показувать Переваги..?', 'theme-text-domain' ),
					'id'    => 'home_page_advansed_show',
					'type'  => 'on-off',
					'desc'  => sprintf( __( 'Поазувать чи не показувать Переваги', 'theme-text-domain' ), '<code>on</code>' ),
					'std'   => 'off',
				),	
				array(
					'id'           => 'home_page_advansed_list',
					'label'        => __( 'Переваги', 'theme-text-domain' ),
					'type'         => 'list-item',
					'condition'    => 'home_page_advansed_show:is(on)',
					'settings'     => array(
					array(
						'id'           => 'home_page_advansed_icon',
						'label'        => 'Вкажіть іконку',
						'type'         => 'text',
						'desc' 		   => 'Додайте до опису іконку у форматі "fa-globe", детальний опис іконок
						на сайті <a href="https://fontawesome.com/icons?d=gallery">fontawesome.com</a> ',
					),
					array(
						'id'           => 'home_page_advansed_name',
						'label'        => 'Вкажіть перевагу',
						'type'         => 'text',
						'desc' 		   => 'Додайте назву переваги для відображення',
					),
					array(
						'id'           => 'home_page_advansed_descrip',
						'label'        => 'Вкажіть перевагу',
						'type'         => 'textarea',
						'desc' 		   => 'Додайте опис переваги',
					),
					array(
						'id'           => 'home_page_advansed_link',
						'label'        => 'Вкажіть силку для ознайомлення переваги',
						'type'         => 'text',
					),
					)		
				),
				array(
					'label' => __( 'Послуги', 'theme-text-domain' ),
					'id'    => 'home_page_services_tab',
					'type'  => 'tab',
				),
				array(
					'label' => __( 'Показувать Послугу..?', 'theme-text-domain' ),
					'id'    => 'home_page_services_show',
					'type'  => 'on-off',
					'desc'  => sprintf( __( 'Показувать чи не показувать Переваги', 'theme-text-domain' ), '<code>on</code>' ),
					'std'   => 'off',
				),	
				array(
					'id'           => 'home_page_services_list',
					'label'        => __( 'Послуги', 'theme-text-domain' ),
					'type'         => 'list-item',
					'condition'    => 'home_page_services_show:is(on)',
					'settings'     => array(
						array(
							'id'           => 'home_page_services_post_type_select',
							'label'        => __( 'Послуги', 'theme-text-domain' ),
							'desc'         => '',
							'type'         => 'custom-post-type-select',
							'post_type'    => 'biz_nes_servise',
						),
					)
				),
				/**Потрібно підключити add_filter в function.php для выдображення 
				 * візуального редактора
				 */
				array(
					'id'=>'home_services_desc',
					'label'=>'Короткий опис',
					'desc'=>'',
					'type'=>'textarea',
				),
				array(
					'id'           => 'home_services_numeric_slider',
					'label'        => __( 'Кількість статей', 'theme-text-domain' ),
					'desc'         => __( '-1 всі статті, 0 жодної, 1,2.. кількість статей ', 'theme-text-domain' ),
					'std'          => '',
					'type'         => 'numeric-slider',
					'min_max_step' => '-1,20,1',
				),
				array(
					'id'=>'home_services_link',
					'label'=>'Силка на всі послуги (сторінка послуг)',
					'std' => '#',
					'desc'=>'',
					'type'=>'text',
				),
				array(
					'id'=>'home_services_btn',
					'label'=>'Назва кнопки за посиланням',
					'std' => 'Детальніше',
					'desc'=>'',
					'type'=>'text',
				),
				array(
					'label' => __( 'Про нас', 'theme-text-domain' ),
					'id'    => 'home_page_about_tab',
					'type'  => 'tab',
				),
				array(
					'label' => __( 'Показувать розділ Про нас..?', 'theme-text-domain' ),
					'id'    => 'home_page_about_show',
					'type'  => 'on-off',
					'desc'  => sprintf( __( 'Показувать чи не показувать Про нас на головній сторінці', 'theme-text-domain' ), '<code>on</code>' ),
					'std'   => 'on',
				),	
				array(
					'id'           => 'home_about_page_select',
					'label'        => __( 'Сторінка  Про нас', 'theme-text-domain' ),
					'std'          => '',
					'type'         => 'page-select',
					'section'      => 'option_types',
					'condition'    => 'home_page_about_show:is(on)',
				),
				array(
					'label' => __( 'Help center', 'theme-text-domain' ),
					'id'    => 'home_page_help_tab',
					'type'  => 'tab',
				),
				array(
					'id'	=> 'home_help_work',
					'label' => 'Час роботи в будні дні',
					'std'   => '',
					'desc'  => '',
					'type'  => 'text',
				),
				array(
					'id'	=> 'home_help_sat',
					'label' => 'Час роботи в субботу',
					'std'   => '',
					'desc'  => '',
					'type'  => 'text',
				),
				array(
					'id'	=> 'home_help_sun',
					'label' => 'Час роботи в неділю',
					'std'   => '',
					'desc'  => '',
					'type'  => 'text',
				),
				array(
					'id'	=> 'home_help_support',
					'label' => 'Телефон підтримки',
					'std'   => '',
					'desc'  => '',
					'type'  => 'text',
				),
				array(
					'label' => __( 'Відгуки', 'theme-text-domain' ),
					'id'    => 'home_page_review_tab',
					'type'  => 'tab',
				),
				array(
					'label' => __( 'Показувать розділ Відгуки..?', 'theme-text-domain' ),
					'id'    => 'home_page_review_show',
					'type'  => 'on-off',
					'desc'  => sprintf( __( 'Показувать чи не показувать розділ Відгуки на головній сторінці', 'theme-text-domain' ), '<code>on</code>' ),
					'std'   => 'on',
				),	


			),

		
	);

/**записи в блоці "Послуги" */
	$meta_box_services = array(
		'id'       => 'services_meta_box',
		'title'    => __( 'Налаштування послуг', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => array( 'biz_nes_servise' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
		
			array(
				'label' => __( 'Іконка', 'theme-text-domain' ),
				'id'    => 'services_icon',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Ціна', 'theme-text-domain' ),
				'id'    => 'services_price',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			
		),
	);

/**записи у Відгуках */
	$meta_box_review = array(
		'id'       => 'review_meta_box',
		'title'    => __( 'Налаштування Відгуків', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => array( 'biz_nes_reviews' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
		
			array(
				'label' => __( 'Імя', 'theme-text-domain' ),
				'id'    => 'review_name',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Посада', 'theme-text-domain' ),
				'id'    => 'review_regal',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Посилання', 'theme-text-domain' ),
				'id'    => 'review_link',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			
		),
	);

/**Сторінка About  */

	$meta_box_about = array(
		'id'       => 'about_meta_box',
		'title'    => __( 'Налаштування сторінки About', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => array( 'page' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
	/**====Швидкі факти==== */
			array(
				'label' => __( 'Швидкі факти', 'theme-text-domain' ),
				'id'    => 'about_page_quick_facts_tab',
				'type'  => 'tab',
			),
		
			array(
				'label' => __( 'Назва', 'theme-text-domain' ),
				'id'    => 'quick_facts_name',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Дата створення', 'theme-text-domain' ),
				'id'    => 'quick_facts_date',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Місце створення', 'theme-text-domain' ),
				'id'    => 'quick_facts_birth',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Історія', 'theme-text-domain' ),
				'id'    => 'quick_facts_history',
				'type'  => 'textarea',
				'desc'  => __( '', 'theme-text-domain' ),
			),
	/**====Наша команда==== */
			array(
				'label' => __( 'Наша команда', 'theme-text-domain' ),
				'id'    => 'about_page_staff_tab',
				'type'  => 'tab',
			),
		
			array(
				'label' => __( 'Заголовок', 'theme-text-domain' ),
				'id'    => 'staff_title',
				'type'  => 'text',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'label' => __('Опис', 'theme-text-domain' ),
				'id'    => 'about_staff_desc',
				'type'  => 'textarea',
				'desc'  => __( '', 'theme-text-domain' ),
			),
			array(
				'id'           => 'about_staff_gallery',
				'label'        => __( 'Gallery', 'theme-text-domain' ),
				'desc'         => '',
				'std'          => '',
				'type'         => 'gallery',
			),
			
		),
	);
	/**
	 * Create a custom meta boxes array that we pass to
	 * the OptionTree Meta Box API Class.
	 */
	$my_meta_box = array(
		'id'       => 'demo_meta_box',
		'title'    => __( 'Demo Meta Box', 'theme-text-domain' ),
		'desc'     => '',
		'pages'    => array( 'post' ),
		'context'  => 'normal',
		'priority' => 'high',
		'fields'   => array(
			array(
				'label' => __( 'Conditions', 'theme-text-domain' ),
				'id'    => 'demo_conditions',
				'type'  => 'tab',
			),
			array(
				'label' => __( 'Show Gallery', 'theme-text-domain' ),
				'id'    => 'demo_show_gallery',
				'type'  => 'on-off',
				'desc'  => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
				'std'   => 'off',
			),
			array(
				'label'     => '',
				'id'        => 'demo_textblock',
				'type'      => 'textblock',
				'desc'      => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
				'operator'  => 'and',
				'condition' => 'demo_show_gallery:is(on),demo_gallery:not()',
			),
			array(
				'label'     => __( 'Gallery', 'theme-text-domain' ),
				'id'        => 'demo_gallery',
				'type'      => 'gallery',
				'desc'      => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
				'condition' => 'demo_show_gallery:is(on)',
			),
			array(
				'label' => __( 'More Options', 'theme-text-domain' ),
				'id'    => 'demo_more_options',
				'type'  => 'tab',
			),
			array(
				'label' => __( 'Text', 'theme-text-domain' ),
				'id'    => 'demo_text',
				'type'  => 'text',
				'desc'  => __( 'This is a demo Text field.', 'theme-text-domain' ),
			),
			array(
				'label' => __( 'Textarea', 'theme-text-domain' ),
				'id'    => 'demo_textarea',
				'type'  => 'textarea',
				'desc'  => __( 'This is a demo Textarea field.', 'theme-text-domain' ),
			),
		),
	);

	/**
	 * Register our meta boxes using the
	 * ot_register_meta_box() function.
	 */
	if ( function_exists( 'ot_register_meta_box' ) ) {
	//ot_register_meta_box( $my_meta_box );
	ot_register_meta_box( $meta_box_services);
	ot_register_meta_box($meta_box_review);

		/**умова виведення мета-бокса на певну сторінку */
		$post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
		$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
		if ( $template_file == 'home-page.php' ){
			ot_register_meta_box( $home_meta_box );
			
		}
		if ( $template_file == 'about-page.php' ){
			ot_register_meta_box( $meta_box_about );
			
		}
		
		
	}
}
