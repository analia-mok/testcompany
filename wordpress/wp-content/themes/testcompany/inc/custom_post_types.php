<?php

/**
 * Post Type: Testimonials.
 */
function register_testimonials_cpt() {
	$labels = array(
		"name" => __( "Testimonials", "" ),
		"singular_name" => __( "Testimonial", "" ),
		"menu_name" => __( "Testimonials", "" ),
		"all_items" => __( "All Testimonials", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Testimonial", "" ),
		"edit_item" => __( "Edit Testimonial", "" ),
		"new_item" => __( "New Testimonial", "" ),
		"view_item" => __( "View Testimonial", "" ),
		"view_items" => __( "View Testimonials", "" ),
		"search_items" => __( "Search Testimonials", "" ),
		"not_found" => __( "No Testimonials", "" ),
		"not_found_in_trash" => __( "No Testimonial found in trash", "" ),
	);

	$args = array(
		"label" => __( "Testimonials", "" ),
		"labels" => $labels,
		"description" => "Client Testimonials",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "testimonials",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-nametag",
		"supports" => array( "title", "thumbnail", "revisions" ),
	);

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'register_testimonials_cpt', 0 );

/**
 * Post Type: Services
 */
function register_services_cpt() {
	$labels = array(
		"name" => __( "Services", "" ),
		"singular_name" => __( "Service", "" ),
		"menu_name" => __( "Services", "" ),
		"all_items" => __( "All Services", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Service", "" ),
		"edit_item" => __( "Edit Service", "" ),
		"new_item" => __( "New Service", "" ),
		"view_item" => __( "View Service", "" ),
		"view_items" => __( "View Services", "" ),
		"search_items" => __( "Search Services", "" ),
		"not_found" => __( "No Services", "" ),
		"not_found_in_trash" => __( "No Service found in trash", "" ),
	);

	$args = array(
		"label" => __( "Services", "" ),
		"labels" => $labels,
		"description" => "Client Services",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "Services",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-sos",
		"supports" => array( "title", "thumbnail", "revisions" ),
	);

	register_post_type( "services", $args );
}

add_action( 'init', 'register_services_cpt', 0 );

/**
 * Post Type: Projects
 */
function register_projects_cpt() {
	$labels = array(
		"name" => __( "Projects", "" ),
		"singular_name" => __( "Project", "" ),
		"menu_name" => __( "Projects", "" ),
		"all_items" => __( "All Projects", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Project", "" ),
		"edit_item" => __( "Edit Project", "" ),
		"new_item" => __( "New Project", "" ),
		"view_item" => __( "View Project", "" ),
		"view_items" => __( "View Projects", "" ),
		"search_items" => __( "Search Projects", "" ),
		"not_found" => __( "No Projects", "" ),
		"not_found_in_trash" => __( "No Project found in trash", "" ),
	);

	$args = array(
		"label" => __( "Projects", "" ),
		"labels" => $labels,
		"description" => "Client Projects",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "Projects",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projects", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-art",
		"supports" => array( "title", "thumbnail", "revisions" ),
	);

	register_post_type( "projects", $args );
}

add_action( 'init', 'register_projects_cpt', 0 );

/**
 * Post Type: Partners
 */
function register_partners_cpt() {
	$labels = array(
		"name" => __( "Partners", "" ),
		"singular_name" => __( "Partner", "" ),
		"menu_name" => __( "Partners", "" ),
		"all_items" => __( "All Partners", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Partner", "" ),
		"edit_item" => __( "Edit Partner", "" ),
		"new_item" => __( "New Partner", "" ),
		"view_item" => __( "View Partner", "" ),
		"view_items" => __( "View Partners", "" ),
		"search_items" => __( "Search Partners", "" ),
		"not_found" => __( "No Partners", "" ),
		"not_found_in_trash" => __( "No Partner found in trash", "" ),
	);

	$args = array(
		"label" => __( "Partners", "" ),
		"labels" => $labels,
		"description" => "Client Partners",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "Partners",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "partners", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-universal-access",
		"supports" => array( "title", "thumbnail", "revisions" ),
	);

	register_post_type( "partners", $args );
}

add_action( 'init', 'register_partners_cpt', 0 );

/**
 * Post Type: Employees
 */
function register_employees_cpt() {
	$labels = array(
		"name" => __( "Employees", "" ),
		"singular_name" => __( "Employee", "" ),
		"menu_name" => __( "Employees", "" ),
		"all_items" => __( "All Employees", "" ),
		"add_new" => __( "Add New", "" ),
		"add_new_item" => __( "Add New Employee", "" ),
		"edit_item" => __( "Edit Employee", "" ),
		"new_item" => __( "New Employee", "" ),
		"view_item" => __( "View Employee", "" ),
		"view_items" => __( "View Employees", "" ),
		"search_items" => __( "Search Employees", "" ),
		"not_found" => __( "No Employees", "" ),
		"not_found_in_trash" => __( "No Employee found in trash", "" ),
	);

	$args = array(
		"label" => __( "Employees", "" ),
		"labels" => $labels,
		"description" => "Company Employees",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "employees",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "employees", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title", "thumbnail", "revisions" ),
	);

	register_post_type( "employees", $args );
}

add_action( 'init', 'register_employees_cpt', 0 );
