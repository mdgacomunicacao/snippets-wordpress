<?php
// "Pegar" todos os IDs de um post-type específico
$profissional_posts = get_posts( array(
    'post_type' => 'profissional',
    'numberposts' => -1, // Retorna todos os posts
    'fields' => 'ids'    // Retornar apenas o campo de ID
) );

// Loop por cada post
foreach ( $profissional_posts as $post_id ) {
    // Deletar a imagem destacada de cada post
    delete_post_thumbnail( $post_id );
}
