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

// // apple shortcodes ('string for shortcode', 'function being called by this shortcode')
// add_shortcode('iphone11screenrepair', 'iphone11screenrepair');
// add_shortcode('iphone11batteryreplacement', 'iphone11batteryreplacement');
// add_shortcode('iphone11lcdtouch', 'iphone11lcdtouch');
// add_shortcode('iphone11chargingport', 'iphone11chargingport');
// add_shortcode('iphone11headphonejack', 'iphone11headphonejack');
// add_shortcode('iphone11frontcamera', 'iphone11frontcamera');
// add_shortcode('iphone11rearcamera', 'iphone11rearcamera');
// add_shortcode('iphone11rearcameralens', 'iphone11rearcameralens');
// add_shortcode('iphone11rearbackglass', 'iphone11rearbackglass');
// add_shortcode('iphone11powerbutton', 'iphone11powerbutton');
// add_shortcode('iphone11homebutton', 'iphone11homebutton');

// add_shortcode('iphoneXscreenrepair', 'iphoneXscreenrepair');
// add_shortcode('iphoneXbatteryreplacement', 'iphoneXbatteryreplacement');
// add_shortcode('iphoneXlcdtouch', 'iphoneXlcdtouch');
// add_shortcode('iphoneXchargingport', 'iphoneXchargingport');
// add_shortcode('iphoneXheadphonejack', 'iphoneXheadphonejack');
// add_shortcode('iphoneXfrontcamera', 'iphoneXfrontcamera');
// add_shortcode('iphoneXrearcamera', 'iphoneXrearcamera');
// add_shortcode('iphoneXrearcameralens', 'iphoneXrearcameralens');
// add_shortcode('iphoneXrearbackglass', 'iphoneXrearbackglass');
// add_shortcode('iphoneXpowerbutton', 'iphoneXpowerbutton');
// add_shortcode('iphoneXhomebutton', 'iphoneXhomebutton');

// add_shortcode('iphone11proscreenrepair', 'iphone11proscreenrepair');
// add_shortcode('iphone11probatteryreplacement', 'iphone11probatteryreplacement');
// add_shortcode('iphone11prolcdtouch', 'iphone11prolcdtouch');
// add_shortcode('iphone11prochargingport', 'iphone11prochargingport');
// add_shortcode('iphone11proheadphonejack', 'iphone11proheadphonejack');
// add_shortcode('iphone11profrontcamera', 'iphone11profrontcamera');
// add_shortcode('iphone11prorearcamera', 'iphone11prorearcamera');
// add_shortcode('iphone11prorearcameralens', 'iphone11prorearcameralens');
// add_shortcode('iphone11prorearbackglass', 'iphone11prorearbackglass');
// add_shortcode('iphone11propowerbutton', 'iphone11propowerbutton');
// add_shortcode('iphone11prohomebutton', 'iphone11prohomebutton');

// add_shortcode('iphone11promaxscreenrepair', 'iphone11promaxscreenrepair');
// add_shortcode('iphone11promaxbatteryreplacement', 'iphone11promaxbatteryreplacement');
// add_shortcode('iphone11promaxlcdtouch', 'iphone11promaxlcdtouch');
// add_shortcode('iphone11promaxchargingport', 'iphone11promaxchargingport');
// add_shortcode('iphone11promaxheadphonejack', 'iphone11promaxheadphonejack');
// add_shortcode('iphone11promaxfrontcamera', 'iphone11promaxfrontcamera');
// add_shortcode('iphone11promaxrearcamera', 'iphone11promaxrearcamera');
// add_shortcode('iphone11promaxrearcameralens', 'iphone11promaxrearcameralens');
// add_shortcode('iphone11promaxrearbackglass', 'iphone11promaxrearbackglass');
// add_shortcode('iphone11promaxpowerbutton', 'iphone11promaxpowerbutton');
// add_shortcode('iphone11promaxhomebutton', 'iphone11promaxhomebutton');

// add_shortcode('iphonexsscreenrepair', 'iphonexsscreenrepair');
// add_shortcode('iphonexsbatteryreplacement', 'iphonexsbatteryreplacement');
// add_shortcode('iphonexslcdtouch', 'iphonexslcdtouch');
// add_shortcode('iphonexschargingport', 'iphonexschargingport');
// add_shortcode('iphonexsheadphonejack', 'iphonexsheadphonejack');
// add_shortcode('iphonexsfrontcamera', 'iphonexsfrontcamera');
// add_shortcode('iphonexsrearcamera', 'iphonexsrearcamera');
// add_shortcode('iphonexsrearcameralens', 'iphonexsrearcameralens');
// add_shortcode('iphonexsrearbackglass', 'iphonexsrearbackglass');
// add_shortcode('iphonexspowerbutton', 'iphonexspowerbutton');
// add_shortcode('iphonexshomebutton', 'iphonexshomebutton');

// add_shortcode('iphonexsmaxscreenrepair', 'iphonexsmaxscreenrepair');
// add_shortcode('iphonexsmaxbatteryreplacement', 'iphonexsmaxbatteryreplacement');
// add_shortcode('iphonexsmaxlcdtouch', 'iphonexsmaxlcdtouch');
// add_shortcode('iphonexsmaxchargingport', 'iphonexsmaxchargingport');
// add_shortcode('iphonexsmaxheadphonejack', 'iphonexsmaxheadphonejack');
// add_shortcode('iphonexsmaxfrontcamera', 'iphonexsmaxfrontcamera');
// add_shortcode('iphonexsmaxrearcamera', 'iphonexsmaxrearcamera');
// add_shortcode('iphonexsmaxrearcameralens', 'iphonexsmaxrearcameralens');
// add_shortcode('iphonexsmaxrearbackglass', 'iphonexsmaxrearbackglass');
// add_shortcode('iphonexsmaxpowerbutton', 'iphonexsmaxpowerbutton');
// add_shortcode('iphonexsmaxhomebutton', 'iphonexsmaxhomebutton');


?>