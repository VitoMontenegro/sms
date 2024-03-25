<?php

/**
 * Добавляем кастомные типы записей
 */
add_action( 'init', 'cptui_register_my_cpts_cars' );
function cptui_register_my_cpts_cars() {
    // Раздел вопроса - рынок IT
    register_taxonomy( 'marketcat', [ 'market' ], [
        'label'                 => 'Раздел статей рынок IT', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы статей рынок IT',
            'singular_name'     => 'Раздел статьи рынок IT',
            'search_items'      => 'Искать Разделы статей рынок IT',
            'all_items'         => 'Все Разделы статей рынок IT',
            'parent_item'       => 'Родит. раздел статей рынок IT',
            'parent_item_colon' => 'Родит. раздел статей рынок IT:',
            'edit_item'         => 'Ред. раздел статей рынок IT',
            'update_item'       => 'Обновить Раздел статей рынок IT',
            'add_new_item'      => 'Добавить Раздел  статей рынок IT',
            'new_item_name'     => 'Новый Раздел  статей рынок IT',
            'menu_name'         => 'Раздел  статей рынок IT',
        ),
        'description'           => 'Рубрики для раздела статей рынок IT', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => false, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'marketcat', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ] );


    /**
     * Post Type: рынок IT.
     */
    $labels = array(
        "name" => "Статьи Рынок IT", "lpb_bank" ,
        "singular_name" => "Статья Рынок IT", "lpb_bank",
        "menu_name" => "Статьи Рынок IT", "lpb_bank",
        "all_items" => "Все статьи рынок IT", "lpb_bank",
        "add_new" => "Добавить статью рынок IT", "lpb_bank",
        "add_new_item" => "Добавить новую статью рынок IT", "lpb_bank",
        "edit_item" => "Редактировать статью рынок IT", "lpb_bank",
        "new_item" => "Новая статья рынок IT", "lpb_bank",
        "view_item" => "Смотреть статью рынок IT", "lpb_bank",
        "view_items" => "Смотреть статьи рынок IT", "lpb_bank",
        "search_items" => "Найти статью рынок IT", "lpb_bank",
        "not_found" => "Статьи рынок IT не найдены", "lpb_bank",
        "featured_image" => "Картинка к этой статье", "lpb_bank",
        "set_featured_image" => "Установить картинку к этой статье", "lpb_bank",
        "remove_featured_image" => "Удалить картинку статьи", "lpb_bank",
        "use_featured_image" => "Использовать как изображение к статье", "lpb_bank",
        "archives" => "Архивы статей рынок IT", "lpb_bank",
        "insert_into_item" => "Вставить в статью", "lpb_bank",
        "uploaded_to_this_item" => "Загружено к этой статье", "lpb_bank",
        "filter_items_list" => "Фильтровать список статей", "lpb_bank",
        "items_list_navigation" => "Навигация по списку статей", "lpb_bank",
        "items_list" => "Список статей", "lpb_bank",
        "attributes" => "Атрибуты статей", "lpb_bank",
        "name_admin_bar" => "Статьи Рынок IT", "lpb_bank",
        "parent_item_colon" => "Родительская Статья Рынок IT", "lpb_bank",
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "query_var" => true,
        'publicly_queryable ' => true,
        "menu_icon"=> 'dashicons-format-gallery',
        "rewrite" => array( "slug" => "market", "with_front" => true ),
        "supports" => array( 'title','editor','thumbnail' )
    );

    register_post_type( "market", $args );


    // Раздел кейса - casescat
    register_taxonomy( 'casescat', [ 'cases' ], [
        'label'                 => 'Раздел кейса', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Разделы кейсов',
            'singular_name'     => 'Раздел кейса',
            'search_items'      => 'Искать Раздел кейса',
            'all_items'         => 'Все Разделы кейсов',
            'parent_item'       => 'Родит. раздел кейса',
            'parent_item_colon' => 'Родит. раздел кейсов:',
            'edit_item'         => 'Ред. Раздел кейса',
            'update_item'       => 'Обновить Раздел кейса',
            'add_new_item'      => 'Добавить Раздел кейса',
            'new_item_name'     => 'Новый Раздел кейса',
            'menu_name'         => 'Раздел кейса',
        ),
        'description'           => 'Рубрики для раздела кейсов', // описание таксономии
        'public'                => true,
        'show_in_nav_menus'     => false, // равен аргументу public
        'show_ui'               => true, // равен аргументу public
        'show_tagcloud'         => false, // равен аргументу show_ui
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'casescat', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ] );


	/**
	 * Post Type: Проекты.
	 */
	$labels = array(
		"name" => __( "Кейсы", "lpb_bank" ),
		"singular_name" => __( "Кейс", "lpb_bank" ),
		"menu_name" => __( "Кейсы", "lpb_bank" ),
		"all_items" => __( "Все кейсы", "lpb_bank" ),
		"add_new" => __( "Добавить кейс", "lpb_bank" ),
		"add_new_item" => __( "Добавить новый кейс", "lpb_bank" ),
		"edit_item" => __( "Редактировать кейс", "lpb_bank" ),
		"new_item" => __( "Новый кейс", "lpb_bank" ),
		"view_item" => __( "Смотреть кейс", "lpb_bank" ),
		"view_items" => __( "Смотреть кейсы", "lpb_bank" ),
		"search_items" => __( "Найти кейс", "lpb_bank" ),
		"not_found" => __( "Кейсы не найдены", "lpb_bank" ),
		"featured_image" => __( "Картинка к этому кейсу", "lpb_bank" ),
		"set_featured_image" => __( "Установить картинку к этому кейсу", "lpb_bank" ),
		"remove_featured_image" => __( "Удалить картинку кейса", "lpb_bank" ),
		"use_featured_image" => __( "Использовать как изображение к кейсу", "lpb_bank" ),
		"archives" => __( "Архивы кейсов", "lpb_bank" ),
		"insert_into_item" => __( "Вставить в кейс", "lpb_bank" ),
		"uploaded_to_this_item" => __( "Загружено к этому кейсу", "lpb_bank" ),
		"filter_items_list" => __( "Фильтровать список кейсов", "lpb_bank" ),
		"items_list_navigation" => __( "Навигация по списку кейсов", "lpb_bank" ),
		"items_list" => __( "Список кейсов", "lpb_bank" ),
		"attributes" => __( "Атрибуты кейса", "lpb_bank" ),
		"name_admin_bar" => __( "Кейсы", "lpb_bank" ),
		"parent_item_colon" => __( "Родительский кейс", "lpb_bank" ),
	);

	$args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => true,
        "query_var" => true,
        'publicly_queryable ' => true,
        "menu_icon"=> 'dashicons-format-gallery',
        "rewrite" => array( "slug" => "cases", "with_front" => true ),
        "supports" => array( 'title','editor','thumbnail' )
	);

	register_post_type( "cases", $args );


    /**
     * Post Type: Услуги.
     */
    $labels = array(
        "name" => __( "Услуги", "lpb_bank" ),
        "singular_name" => __( "Услуга", "lpb_bank" ),
        "menu_name" => __( "Услуги", "lpb_bank" ),
        "all_items" => __( "Все услуги", "lpb_bank" ),
        "add_new" => __( "Добавить услугу", "lpb_bank" ),
        "add_new_item" => __( "Добавить новую услугу", "lpb_bank" ),
        "edit_item" => __( "Редактировать услугу", "lpb_bank" ),
        "new_item" => __( "Новая услуга", "lpb_bank" ),
        "view_item" => __( "Смотреть услугу", "lpb_bank" ),
        "view_items" => __( "Смотреть услуги", "lpb_bank" ),
        "search_items" => __( "Найти услугу", "lpb_bank" ),
        "not_found" => __( "Услуги не найдены", "lpb_bank" ),
        "featured_image" => __( "Картинка к этой услуге", "lpb_bank" ),
        "set_featured_image" => __( "Установить картинку к этой услуге", "lpb_bank" ),
        "remove_featured_image" => __( "Удалить картинку услуги", "lpb_bank" ),
        "use_featured_image" => __( "Использовать как изображение к услуге", "lpb_bank" ),
        "archives" => __( "Архивы услуг", "lpb_bank" ),
        "insert_into_item" => __( "Вставить в услугу", "lpb_bank" ),
        "uploaded_to_this_item" => __( "Загружено к этой услуге", "lpb_bank" ),
        "filter_items_list" => __( "Фильтровать список услуг", "lpb_bank" ),
        "items_list_navigation" => __( "Навигация по списку услуг", "lpb_bank" ),
        "items_list" => __( "Список услуг", "lpb_bank" ),
        "attributes" => __( "Атрибуты услуги", "lpb_bank" ),
        "name_admin_bar" => __( "Услуги", "lpb_bank" ),
    );

    $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "query_var" => true,
        'publicly_queryable ' => true,
        "rewrite" => array( "slug" => "services", "with_front" => true ),
        "supports" => array( 'title','editor','thumbnail' )
    );

    register_post_type( "services", $args );


	/**
	 * Post Type: Партнеры.
	 */

	$labels = array(
		"name" => __( "Партнеры", "lpb_bank" ),
		"singular_name" => __( "Партнеры", "lpb_bank" ),
		"menu_name" => __( "Партнеры", "lpb_bank" ),
		"all_items" => __( "Все партнеры", "lpb_bank" ),
		"add_new" => __( "Добавить партнера", "lpb_bank" ),
		"add_new_item" => __( "Добавить нового партнера", "lpb_bank" ),
		"edit_item" => __( "Редактировать партнера", "lpb_bank" ),
		"new_item" => __( "Новый партнер", "lpb_bank" ),
		"view_item" => __( "Смотреть партнера", "lpb_bank" ),
		"view_items" => __( "Смотреть партнеров", "lpb_bank" ),
		"search_items" => __( "Найти партнера", "lpb_bank" ),
		"not_found" => __( "Партнеры не найдены", "lpb_bank" ),
		"not_found_in_trash" => __( "Партнеры не найдены в корзине", "lpb_bank" ),
		"featured_image" => __( "Изображение", "lpb_bank" ),
		"set_featured_image" => __( "Установить изображение", "lpb_bank" ),
		"remove_featured_image" => __( "Удалить изображение", "lpb_bank" ),
		"use_featured_image" => __( "Использовать как изображение к партнеру", "lpb_bank" ),
		"archives" => __( "Архив партнеров", "lpb_bank" ),
		"insert_into_item" => __( "Добавить к партнеру", "lpb_bank" ),
		"uploaded_to_this_item" => __( "Загружено к этому партнеру", "lpb_bank" ),
		"filter_items_list" => __( "Фильтровать список партнеров", "lpb_bank" ),
		"items_list_navigation" => __( "Навигация по списку партнеров", "lpb_bank" ),
		"items_list" => __( "Список партнеров", "lpb_bank" ),
		"attributes" => __( "Атрибуты партнеров", "lpb_bank" ),
		"name_admin_bar" => __( "Сотрудник", "lpb_bank" ),
	);

	$args = array(
		"label" => __( "Партнеры", "lpb_bank" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "partners", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-businessman",
		"supports" => array( "title" ),
	);

	register_post_type( "partners", $args );

	/**
	 * Post Type: Направления разработки.
	 */

	$labels = array(
		"name" => __( "Направления разработки", "lpb_bank" ),
		"singular_name" => __( "Направления разработки", "lpb_bank" ),
		"menu_name" => __( "Направления разработки", "lpb_bank" ),
		"all_items" => __( "Все направления", "lpb_bank" ),
		"add_new" => __( "Добавить направление", "lpb_bank" ),
		"add_new_item" => __( "Добавить новое направление", "lpb_bank" ),
		"edit_item" => __( "Редактировать направление", "lpb_bank" ),
		"new_item" => __( "Новое направление", "lpb_bank" ),
		"view_item" => __( "Смотреть направление", "lpb_bank" ),
		"view_items" => __( "Смотреть направления", "lpb_bank" ),
		"search_items" => __( "Найти направление", "lpb_bank" ),
		"not_found" => __( "Направления не найдены", "lpb_bank" ),
		"not_found_in_trash" => __( "Направления не найдены в корзине", "lpb_bank" ),
		"featured_image" => __( "Изображение", "lpb_bank" ),
		"set_featured_image" => __( "Установить изображение", "lpb_bank" ),
		"remove_featured_image" => __( "Удалить изображение", "lpb_bank" ),
		"use_featured_image" => __( "Использовать как изображение к направлению", "lpb_bank" ),
		"archives" => __( "Архив направлений", "lpb_bank" ),
		"insert_into_item" => __( "Вставить в направление", "lpb_bank" ),
		"uploaded_to_this_item" => __( "Загружено к этому направлению", "lpb_bank" ),
		"filter_items_list" => __( "Фильтровать список направлений", "lpb_bank" ),
		"items_list_navigation" => __( "Навигация по списку направлений", "lpb_bank" ),
		"items_list" => __( "Список направлений", "lpb_bank" ),
		"attributes" => __( "Атрибуты направлений", "lpb_bank" ),
		"name_admin_bar" => __( "Направление разработки", "lpb_bank" )
	);

	$args = array(
		"label" => __( "Направления разработки", "lpb_bank" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "dev_directions", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-networking",
		"supports" => array( 'title','editor','author','thumbnail','excerpt' )
	);


	register_post_type( "dev_directions", $args );

	/**
	 * Post Type: Преимущества.
	 */

	$labels = array(
		"name" => __( "Преимущества", "lpb_bank" ),
		"singular_name" => __( "Преимущества", "lpb_bank" ),
		"menu_name" => __( "Преимущества", "lpb_bank" ),
		"all_items" => __( "Все преимущества", "lpb_bank" ),
		"add_new" => __( "Добавить преимущество", "lpb_bank" ),
		"add_new_item" => __( "Добавить новое преимущество", "lpb_bank" ),
		"edit_item" => __( "Редактировать преимущество", "lpb_bank" ),
		"new_item" => __( "Новое преимущество", "lpb_bank" ),
		"view_item" => __( "Смотреть преимущество", "lpb_bank" ),
		"view_items" => __( "Смотреть преимущества", "lpb_bank" ),
		"search_items" => __( "Найти преимущество", "lpb_bank" ),
		"not_found" => __( "Преимущества не найдены", "lpb_bank" ),
		"not_found_in_trash" => __( "Преимущества не найдены в корзине", "lpb_bank" ),
		"featured_image" => __( "Изображение", "lpb_bank" ),
		"set_featured_image" => __( "Установить изображение", "lpb_bank" ),
		"remove_featured_image" => __( "Удалить изображение", "lpb_bank" ),
		"use_featured_image" => __( "Использовать как изображение к преимуществу", "lpb_bank" ),
		"archives" => __( "Архив преимуществ", "lpb_bank" ),
		"insert_into_item" => __( "Вставить в преимущество", "lpb_bank" ),
		"uploaded_to_this_item" => __( "Загружено к этому преимуществу", "lpb_bank" ),
		"filter_items_list" => __( "Фильтровать список преимуществ", "lpb_bank" ),
		"items_list_navigation" => __( "Навигация по списку преимуществ", "lpb_bank" ),
		"items_list" => __( "Список преимуществ", "lpb_bank" ),
		"attributes" => __( "Атрибуты преимуществ", "lpb_bank" ),
		"name_admin_bar" => __( "Преимущества", "lpb_bank" )
	);

	$args = array(
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => true,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "query_var" => true,
        'publicly_queryable ' => true,
		"rewrite" => array( "slug" => "advantages", "with_front" => true ),
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => array( 'title','editor','author','thumbnail','excerpt' )
	);

	register_post_type( "advantages", $args );

    /**
     * Post Type: Сотрудники.
     */

    $labels = array(
        "name" => __( "Сотрудники", "lpb_bank" ),
        "singular_name" => __( "Сотрудники", "lpb_bank" ),
        "menu_name" => __( "Сотрудники", "lpb_bank" ),
        "all_items" => __( "Все сотрудники", "lpb_bank" ),
        "add_new" => __( "Добавить сотрудника", "lpb_bank" ),
        "add_new_item" => __( "Добавить нового сотрудника", "lpb_bank" ),
        "edit_item" => __( "Редактировать сотрудника", "lpb_bank" ),
        "new_item" => __( "Новый сотрудник", "lpb_bank" ),
        "view_item" => __( "Смотреть сотрудника", "lpb_bank" ),
        "view_items" => __( "Смотреть сотрудников", "lpb_bank" ),
        "search_items" => __( "Найти сотрудник", "lpb_bank" ),
        "not_found" => __( "Сотрудники не найдены", "lpb_bank" ),
        "not_found_in_trash" => __( "Сотрудники не найдены в корзине", "lpb_bank" ),
        "parent_item_colon" => __( "Родительский сотрудник", "lpb_bank" ),
        "featured_image" => __( "Изображение", "lpb_bank" ),
        "set_featured_image" => __( "Установить изображение", "lpb_bank" ),
        "remove_featured_image" => __( "Удалить изображение", "lpb_bank" ),
        "use_featured_image" => __( "Использовать как изображение к сотруднику", "lpb_bank" ),
        "archives" => __( "Архив сотрудников", "lpb_bank" ),
        "insert_into_item" => __( "Вставить в сотрудника", "lpb_bank" ),
        "uploaded_to_this_item" => __( "Загружено к этому сотруднику", "lpb_bank" ),
        "filter_items_list" => __( "Фильтровать список сотрудников", "lpb_bank" ),
        "items_list_navigation" => __( "Навигация по списку сотрудников", "lpb_bank" ),
        "items_list" => __( "Список сотрудников", "lpb_bank" ),
        "attributes" => __( "Атрибуты сотрудников", "lpb_bank" ),
        "name_admin_bar" => __( "Сотрудник", "lpb_bank" ),
        "parent_item_colon" => __( "Родительский сотрудник", "lpb_bank" ),
    );

    $args = array(
        "label" => __( "Сотрудники", "lpb_bank" ),
        "labels" => $labels,
        "description" => "",
        "public" => false,
        "publicly_queryable" => false,
        "show_ui" => true,
        "delete_with_user" => false,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "reviews", "with_front" => true ),
        "query_var" => true,
        "menu_icon" => "dashicons-buddicons-buddypress-logo",
        "supports" => array( "title" ),
    );

    register_post_type( "team", $args );

}

function remove_admin_menu() {
	/*  remove_menu_page('options-general.php'); // Удаляем раздел Настройки
		remove_menu_page('tools.php'); // Инструменты
	  remove_menu_page('users.php'); // Пользователи
	  remove_menu_page('plugins.php'); // Плагины
	  remove_menu_page('themes.php'); // Внешний вид
	  remove_menu_page('upload.php'); // Медиабиблиотека
	  remove_menu_page('edit.php?post_type=page'); // Страницы*/
	//remove_menu_page('edit.php'); // Посты блога
	remove_menu_page('edit-comments.php'); // Комментарии
	/*  remove_menu_page('link-manager.php'); // Ссылки
		remove_menu_page('wpcf7');   // Contact form 7
	  remove_menu_page('options-framework'); // Cherry Framework*/
}
add_action('admin_menu', 'remove_admin_menu');

function artabr_remove_name_cat( $title ){
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );

function my_title_place_holder($title , $post){

	if( $post->post_type == 'team' ){
		$my_title = "Имя";
		return $my_title;
	}

	if( $post->post_type == 'testmonials' ){
		$my_title = "Название отзыва (не отображается)";
		return $my_title;
	}

	return $title;

}
add_filter('enter_title_here', 'my_title_place_holder' , 20 , 2 );



function remove_menus(): void {
    remove_menu_page( 'index.php' );                  //Консоль
    remove_menu_page( 'edit.php' );                   //Записи
    remove_menu_page( 'upload.php' );                 //Медиафайлы
    //remove_menu_page( 'edit.php?post_type=page' );    //Страницы
    remove_menu_page( 'edit-comments.php' );          //Комментарии
    remove_menu_page( 'themes.php' );                 //Внешний вид
    remove_menu_page( 'plugins.php' );                //Плагины
    remove_menu_page( 'users.php' );                  //Пользователи
    remove_menu_page( 'tools.php' );                  //Инструменты
    remove_menu_page( 'options-general.php' );        //Настройки
}
//add_action( 'admin_menu', 'remove_menus' );

function custom_render_block_core_group (
    string $block_content,
    array $block
): string
{

    if (
        $block['blockName'] === 'core/columns' &&
        !is_admin() &&
        !wp_is_json_request()
    ) {
        $html = '';
        $style = '';
        $block['attrs']['className'] ??= '';

        // Add background color to the page section
        $block['attrs']['className'] .= $block['attrs']['backgroundColor'] ? ' theme--' . $block['attrs']['backgroundColor'] : '';
        $block['attrs']['className'] .= $block['attrs']['textColor'] ? ' colors--' . $block['attrs']['textColor'] : '';



        $colorText = $block['attrs']['style']["color"]["text"] ?? '';
        $colorBg = $block['attrs']['style']["color"]["background"] ?? '';
        if ($colorText) {
            $style .= 'color:' . $colorText . ';' ;
        }
        if ($colorBg) {
            $style .= 'background:' . $colorBg . ';' ;
        }


        $html .= '<div class="standard_columns ' . $block['attrs']['className'] . '" style="' . $style . '">' . "\n";
        $html .= '<div class="container">' . "\n";

        if (isset($block['innerBlocks'])) {
            foreach ($block['innerBlocks'] as $inner_block) {
                $html .= render_block($inner_block);
            }
        }

        $html .= '</div><!--/ .container -->' . "\n";
        $html .= '</div><!--/ . -->' . "\n";

        return $html;
    }

    return $block_content;
}

add_filter('render_block', 'custom_render_block_core_group', 10, 2);