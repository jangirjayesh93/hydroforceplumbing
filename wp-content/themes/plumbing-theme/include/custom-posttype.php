<?php
// Exit If Accessed Directly
if( !defined( 'ABSPATH' ) ) exit;

function demo_register_posttype(){
	// register Banner post type
	
	
	if( have_rows('add_custom_post_type','option')) { while(have_rows('add_custom_post_type','option')) { the_row(); 

		$post_type_name=get_sub_field('post_type_name','option');
		$post_type_slug=get_sub_field('post_type_slug','option');
		$post_public=get_sub_field('post_public','option');
		if($post_public) {
			$post_public_input="true";
		}
		else {
			$post_public_input="false";
		}
		$post_type_publicly_queryable=get_sub_field('post_type_publicly_queryable','option');
		if($post_type_publicly_queryable) {
			$post_type_publicly_queryable_input=true;
		}
		else {
			$post_type_publicly_queryable_input=false;
		}
		$post_type_show_ui=get_sub_field('post_type_show_ui','option');

		if($post_type_show_ui) {
			$post_type_show_ui_input=true;
		}
		else {
			$post_type_show_ui_input=false;
		}
		$post_type_show_in_menu=get_sub_field('post_type_show_in_menu','option');
		if($post_type_show_in_menu) {
			$post_type_show_in_menu_input=true;
		}
		else {
			$post_type_show_in_menu_input=false;
		}
		$post_query_var=get_sub_field('post_query_var','option');
		if($post_query_var) {
			$post_query_var_input=true;
		}
		else {
			$post_query_var_input=false;
		}
		$post_type_capability=get_sub_field('post_type_capability','option');

		$post_type_archive=get_sub_field('post_type_archive','option');
		if($post_type_archive) {
			$post_type_archive_input=true;
		}
		else {
			$post_type_archive_input=false;
		}
		$post_type_hierarchical=get_sub_field('post_type_hierarchical','option');
		if($post_type_hierarchical) {
			$post_type_hierarchical_input=true;
		}
		else {
			$post_type_hierarchical_input=false;
		}
		$post_type_menu_icon=get_sub_field('post_type_menu_icon','option');
		$post_type_position=get_sub_field('post_type_position','option');
		$post_type_support=get_sub_field('post_type_support','option');
		$make_taxonomy=get_sub_field('make_taxonomy','option');
		$taxonomy_name=get_sub_field('taxonomy_name','option');
		$taxonomy_slug=get_sub_field('taxonomy_slug','option');
		
		$labels=$post_type_name.'labels';
		$postname=$post_type_name.'_Demo';

	// Service Type post type
	$labels = array(
		'name'               => _x($post_type_name, 'systems', 'demo' ),
		'singular_name'      => _x($post_type_name, 'systems', 'demo' ),
		'menu_name'          => _x($post_type_name, 'systems', 'demo' ),
		'name_admin_bar'     => _x( $post_type_name, 'systems', 'demo' ),
		'add_new'            => _x( 'Add New '.$post_type_name, 'systems', 'demo' ),
		'add_new_item'       => __( 'Add New '.$post_type_name, 'demo' ),
		'new_item'           => __( 'New '.$post_type_name, 'demo' ),
		'edit_item'          => __( 'Edit '.$post_type_name, 'demo' ),
		'view_item'          => __( 'View '.$post_type_name, 'demo' ),
		'all_items'          => __( 'All '.$post_type_name, 'demo' ),
		'search_items'       => __( 'Search '.$post_type_name, 'demo' ),
		'parent_item_colon'  => __( 'Parent '.$post_type_name.':', 'demo' ),
		'not_found'          => __( 'No '.$post_type_name.' found.', 'demo' ),
		'not_found_in_trash' => __( 'No '.$post_type_name.' found in Trash.', 'demo' )
	);
	//$test = 'title' .",".'editor'.",".'thumbnail'.",".'author';
	$Service_args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'demo' ),
		/*'public'             => false,
		'publicly_queryable' => $post_type_publicly_queryable_input,
		'show_ui'            => $post_type_show_ui_input,
		'show_in_menu'       => $post_type_show_in_menu_input,
		'query_var'          => $post_query_var_input,
		'capability_type'    => $post_type_capability,
		'has_archive'        => $post_type_archive_input,
		'hierarchical'       => $post_type_hierarchical_input,
		'menu_icon'	     => $post_type_menu_icon,
		'menu_position'      => $post_type_position,
		'supports'           => array( 'title', 'editor','thumbnail','author')*/

		'public'             => $post_public_input,
		'publicly_queryable' => $post_type_publicly_queryable_input,
		'show_ui'            => $post_type_show_ui_input,
		'show_in_menu'       => $post_type_show_in_menu_input,
		'query_var'          => $post_query_var_input,
		'capability_type'    => $post_type_capability,
		'has_archive'        => $post_type_archive_input,
		'hierarchical'       => $post_type_hierarchical_input,
		'menu_icon'	     => $post_type_menu_icon,
		'menu_position'      => $post_type_menu_icon,
		'supports'           => $post_type_support
	);

    register_post_type( $post_type_slug, $Service_args );
    unset( $args );
    unset( $labels );
    if($make_taxonomy=="Yes") { 
    // Add new taxonomy, NOT hierarchical (like tags)
   $labels = array(
        'name'              => _x( $taxonomy_name, 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( $taxonomy_name, 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search '.$taxonomy_name, 'textdomain' ),
        'all_items'         => __( 'All '.$taxonomy_name, 'textdomain' ),
        'parent_item'       => __( 'Parent'.$taxonomy_name, 'textdomain' ),
        'parent_item_colon' => __( 'Parent '.$taxonomy_name, 'textdomain' ),
        'edit_item'         => __( 'Edit '.$taxonomy_name, 'textdomain' ),
        'update_item'       => __( 'Update '.$taxonomy_name, 'textdomain' ),
        'add_new_item'      => __( 'Add New '.$taxonomy_name, 'textdomain' ),
        'new_item_name'     => __( 'New '.$taxonomy_name.' Name', 'textdomain' ),
        'menu_name'         => __( $taxonomy_name, 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => $taxonomy_slug ),
    );
 
    register_taxonomy( $taxonomy_slug, array( $post_type_slug ), $args );
    }
	}
}
	
	


    	flush_rewrite_rules();
}

add_action( 'init', 'demo_register_posttype' ); ?>