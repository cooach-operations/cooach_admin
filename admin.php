<?php

add_action('admin_menu', 'cooach_admin_menu');

function cooach_admin_menu()
{
    add_menu_page('Cooach Admin', 'Cooach Admin', 'manage_options', 'cooach-admin-menu', 'cooach_admin_options_page');
}

function cooach_admin_options_page()
{
    echo '<h1>Cooach Admin - Register Your Plugins Here!</h1>';
}

function cooach_admin_register_submenus()
{
    do_action('cooach_admin_register_submenu');
}

add_action('admin_menu', 'cooach_admin_register_submenus');