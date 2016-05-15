<?php
/**
* Plugin Name: Custom Post Types
* Description: Um plugin para posts personalizados
* Version: 0.1
* Author: Allan Lima 
* License: GPL2
*/

/*Custom Post Types is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Custom Post Types is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Custom Post Types.
*/

function my_custom_posttypes() {

    //Notícias Post Type
	$labels = array(
        'name'               => 'Noticias',
        'singular_name'      => 'Noticia',
        'menu_name'          => 'Noticias',
        'name_admin_bar'     => 'Noticia',
        'add_new'            => 'Adicionar Noticia',
        'add_new_item'       => 'Adicionar nova Noticia',
        'new_item'           => 'Nova Noticia',
        'edit_item'          => 'Editar Noticia',
        'view_item'          => 'Visualizar Noticia',
        'all_items'          => 'Todas as Noticias',
        'search_items'       => 'Procurar Noticias',
        'parent_item_colon'  => 'Parent Testimonials:',
        'not_found'          => 'Nenhuma Noticia encontrada.',
        'not_found_in_trash' => 'Nenhuma Noticia encontrada na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'noticias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats' )
    );
	register_post_type('noticias', $args);

    //Equipe Post Type
    $labels = array(
        'name'               => 'Equipe',
        'singular_name'      => 'Equipe',
        'menu_name'          => 'Equipe',
        'name_admin_bar'     => 'Equipe',
        'add_new'            => 'Adicionar Membro de Equipe',
        'add_new_item'       => 'Adicionar novo Membro de Equipe',
        'new_item'           => 'Novo Membro de Equipe',
        'edit_item'          => 'Editar Membro de Equipe',
        'view_item'          => 'Visualizar Membro de Equipe',
        'all_items'          => 'Todos os Membro de Equipes',
        'search_items'       => 'Procurar Membro de Equipes',
        'parent_item_colon'  => 'Parent Membro de Equipe:',
        'not_found'          => 'Nenhum Membro encontrado.',
        'not_found_in_trash' => 'Nenhum Membro encontrado na lixeira.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-id-alt',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'equipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'post-formats', 'custom-fields' )
    );
    register_post_type('equipe', $args);
}

add_action('init', 'my_custom_posttypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
   my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );