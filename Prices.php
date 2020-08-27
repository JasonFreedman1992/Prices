<?php 

/*

Plugin Name: Prices
Plugin URI:
Description: Pricing table for Cell Phone Lab
Author: Jason Freedman
Author URI:
Version: 1

*/

global $wpdb;

include_once(__DIR__.'/Apple.php');
include_once(__DIR__.'/Google.php');
include_once(__DIR__.'/LG.php');
include_once(__DIR__.'/Motorola.php');
include_once(__DIR__.'/OnePlus.php');
include_once(__DIR__.'/Samsung.php');

function addMenu(){
    //
    add_menu_page("Prices", "Prices", "edit_pages", "prices", "pricesMenu");
    add_submenu_page("prices", "Apple", "Apple", "edit_pages", "apple-prices", "appleSubMenu");
    add_submenu_page("prices", "Samsung", "Samsung", "edit_pages", "samsung-prices", "samsungSubMenu");
    add_submenu_page("prices", "Motorola", "Motorola", "edit_pages", "motorola-prices", "motorolaSubMenu");
    add_submenu_page("prices", "LG", "LG", "edit_pages", "lg-prices", "lgSubMenu");
    add_submenu_page("prices", "Google", "Google", "edit_pages", "google-prices", "googleSubMenu");
    add_submenu_page("prices", "OnePlus", "OnePlus", "edit_pages", "oneplus-prices", "oneplusSubMenu");
}

function pricesMenu(){
    global $wpdb;

    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11'");
    $moneysign = "$";
    $length=count($price);
    
    $moneysign .= $price[0]->screenrepair;
    echo $moneysign;
}

function iphone11screenrepair(){

    $finalString = "$";

    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11'");
    
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

add_action("admin_menu", "addMenu");
add_shortcode('iphone11screenrepair', 'iphone11screenrepair');



?>