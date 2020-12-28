<?php

/**
 * Register a custom post type for testimonials.
 */

function test_custom_type_testimonials_init() {
  $labels = array(
      'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' )
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'testimonial' ),
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
  );

  register_post_type( 'testimonial', $args );
}

add_action( 'init', 'test_custom_type_testimonials_init' );

/**
 * Register a custom post type for advantages.
 */

function test_custom_type_advantages_init() {
  $labels = array(
      'name'                  => _x( 'Advantages', 'Post type general name', 'textdomain' ),
      'singular_name'         => _x( 'Advantage', 'Post type singular name', 'textdomain' )
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'advantages' ),
      'capability_type'    => 'post',
      'has_archive'        => false,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'thumbnail' ),
  );

  register_post_type( 'advantages', $args );
}

add_action( 'init', 'test_custom_type_advantages_init' );

?>