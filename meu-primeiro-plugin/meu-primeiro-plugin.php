<?php
/*
* Plugin Name: Meu Primeiro Plugin
* Plugin URI: https://www.technerdpoint.blogspot.com/
* Description: Plugin para quem gosta de gatos
* Version: 0.0.1
* Author: Luiz Carlos
* Author URI: https://t.me/lcgds/
* License: CC BY
*/


//Erro no Login
add_filter('login_errors', 'new_login_errors');

function new_login_errors() {
    return 'Credenciais inválidas!';
}


//Compartilhamento
add_action('wp_head', 'og_tags');

function og_tags() {
    if (is_single()) {

        $dados_do_post = get_post(get_the_ID());

        $titulo = $dados_do_post->post_title;
        $site = get_bloginfo();
        $descricao = $dados_do_post->post_excerpt;

        echo "
        \n\n\n
        <meta property='og:title' content='" . $titulo . "'> \n
        <meta property='og:site_name' content='" . $site . "'> \n
        <meta property='og:url' content='" . get_permalink() . "'> \n
        <meta property='og:url' content='" . $descricao . "'> \n
        ";
    } 
}
