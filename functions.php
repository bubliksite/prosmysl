<?php 

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	wp_enqueue_style('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

	wp_enqueue_script('jquery-3.4.1.min', '//code.jquery.com/jquery-3.4.1.min.js');
	wp_enqueue_script('popper.min', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
	wp_enqueue_script('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/** Включаем меню **/
register_nav_menu('menu', 'Главное меню');

/**Создаем новый тип записей - Проекты**/
add_action('init', 'projects');
function projects() {
	register_post_type('projects', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Проекты',
				'add_new' => 'Добавить проект',
				'all_items' => 'Все проекты',
				'add_new_item' => 'Добавить проект'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-buddicons-activity'
		));
}

?>