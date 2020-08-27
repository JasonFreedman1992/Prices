<?php 

/*

Plugin Name: Prices
Plugin URI:
Description: Pricing table for Cell Phone Lab
Author: Jason Freedman
Author URI:
Version: 1

*/

include_once(__DIR__.'/Apple.php');
include_once(__DIR__.'/Google.php');
include_once(__DIR__.'/LG.php');
include_once(__DIR__.'/Motorola.php');
include_once(__DIR__.'/OnePlus.php');
include_once(__DIR__.'/Samsung.php');

include_once(__DIR__.'/AppleShortCodes.php');
include_once(__DIR__.'/GoogleShortCodes.php');
include_once(__DIR__.'/LGShortCodes.php');
include_once(__DIR__.'/MotorolaShortCodes.php');
include_once(__DIR__.'/OnePlusShortCodes.php');
include_once(__DIR__.'/SamsungShortCodes.php');

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

add_action("admin_menu", "addMenu");

// apple shortcodes
add_shortcode('iphone11screenrepair', 'iphone11screenrepair');
add_shortcode('iphone11batteryreplacement', 'iphone11batteryreplacement');
add_shortcode('iphone11lcdtouch', 'iphone11lcdtouch');
add_shortcode('iphone11chargingport', 'iphone11chargingport');
add_shortcode('iphone11headphonejack', 'iphone11headphonejack');
add_shortcode('iphone11frontcamera', 'iphone11frontcamera');
add_shortcode('iphone11rearcamera', 'iphone11rearcamera');
add_shortcode('iphone11rearcameralens', 'iphone11rearcameralens');
add_shortcode('iphone11rearbackglass', 'iphone11rearbackglass');
add_shortcode('iphone11powerbutton', 'iphone11powerbutton');
add_shortcode('iphone11homebutton', 'iphone11homebutton');


?>