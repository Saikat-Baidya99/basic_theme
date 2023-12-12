<?php

add_theme_support('title-tag');

add_theme_support('custom-header', array(
    'default-image' => get_template_directory_uri(). '/images/logo.jpg' 
));

add_theme_support('custom-background');

load_theme_textdomain('basic', get_template_directory_uri().'/languages');

register_nav_menus(array(
    'primarymenu' => __('primary menu', 'basic'),
    'footermenu' => __('footer menu', 'basic')
));

?>