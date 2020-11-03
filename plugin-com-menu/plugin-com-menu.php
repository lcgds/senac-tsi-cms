<?php

/*
* Plugin Name: Plugin com Menu
* Plugin URI: https://www.technerdpoint.blogspot.com/
* Description: Plugin para testar inclusão de menu no painel do WordPress
* Version: 0.0.1
* Author: Luiz Carlos
* Author URI: https://t.me/lcgds/
* License: CC BY
*/

add_action('admin_menu', 'menu_plugin_com_menu');

function menu_plugin_com_menu() {

    add_menu_page(
        'Configurações do Plugin', 
        'Meu plugin', 
        'administrator', 
        'meu-plugin-config', 
        'abre_menu_meu_plugin', 
        'dashicons-admin-generic');

    /*
    add_submenu_page(
        'options-general.php',
        'Configurações do Plugin', 
        'Meu plugin', 
        'administrator', 
        'meu-plugin-config', 
        'abre_menu_meu_plugin');
    */
}

function abre_menu_meu_plugin() {
    require 'settings-tpl.php';
}