<?php
add_action
( '
wp_enqueue_scripts
', '
theme_enqueue_styles
' );
function theme_enqueue_styles
() {
wp_enqueue_style
( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action('init', 'my_custom_init');  // ajout d une action "my custom init"
function my_custom_init()   // fonction my custom init   : on va créer un custop post type
{
/* notre code PHP pour rajouter les custom post type */
    register_post_type(
      'FAQ',
      array(
        'label' => 'FAQ',
        'labels' => array(
          'name' => 'FAQ',
          'singular_name' => 'FAQ',
          'all_items' => 'Tous les Q/R',
          'add_new_item' => 'Ajouter une Q/R',
          'edit_item' => 'Éditer une Q/R',
          'new_item' => 'Nouvelle Q/R',
          'view_item' => 'Voir Q/R',
          'search_items' => 'Rechercher parmi les Q/R',
          'not_found' => 'Pas de Q/R trouvé',
          'not_found_in_trash'=> 'Pas de Q/R dans la corbeille'
          ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
          'custom-fields'
        ),
        'has_archive' => true
      )
    );
    add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');
     function wpc_champs_personnalises_defaut($post_id)
     {
     if ( $_GET['post_type'] != 'page' ) {
     add_post_meta($post_id, 'Question', '', true);
     add_post_meta($post_id, 'Reponse', '', true);
     }
     return true;
     }
}
function wpd_testimonials_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'FAQ' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 20 );
    }
}
add_action( 'pre_get_posts', 'wpd_testimonials_query' );
