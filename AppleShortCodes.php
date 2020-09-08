<?php 

// apple shortcodes ('string for shortcode', 'function being called by this shortcode')
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

add_shortcode('iphoneXscreenrepair', 'iphoneXscreenrepair');
add_shortcode('iphoneXbatteryreplacement', 'iphoneXbatteryreplacement');
add_shortcode('iphoneXlcdtouch', 'iphoneXlcdtouch');
add_shortcode('iphoneXchargingport', 'iphoneXchargingport');
add_shortcode('iphoneXheadphonejack', 'iphoneXheadphonejack');
add_shortcode('iphoneXfrontcamera', 'iphoneXfrontcamera');
add_shortcode('iphoneXrearcamera', 'iphoneXrearcamera');
add_shortcode('iphoneXrearcameralens', 'iphoneXrearcameralens');
add_shortcode('iphoneXrearbackglass', 'iphoneXrearbackglass');
add_shortcode('iphoneXpowerbutton', 'iphoneXpowerbutton');
add_shortcode('iphoneXhomebutton', 'iphoneXhomebutton');

add_shortcode('iphone11proscreenrepair', 'iphone11proscreenrepair');
add_shortcode('iphone11probatteryreplacement', 'iphone11probatteryreplacement');
add_shortcode('iphone11prolcdtouch', 'iphone11prolcdtouch');
add_shortcode('iphone11prochargingport', 'iphone11prochargingport');
add_shortcode('iphone11proheadphonejack', 'iphone11proheadphonejack');
add_shortcode('iphone11profrontcamera', 'iphone11profrontcamera');
add_shortcode('iphone11prorearcamera', 'iphone11prorearcamera');
add_shortcode('iphone11prorearcameralens', 'iphone11prorearcameralens');
add_shortcode('iphone11prorearbackglass', 'iphone11prorearbackglass');
add_shortcode('iphone11propowerbutton', 'iphone11propowerbutton');
add_shortcode('iphone11prohomebutton', 'iphone11prohomebutton');

add_shortcode('iphone11promaxscreenrepair', 'iphone11promaxscreenrepair');
add_shortcode('iphone11promaxbatteryreplacement', 'iphone11promaxbatteryreplacement');
add_shortcode('iphone11promaxlcdtouch', 'iphone11promaxlcdtouch');
add_shortcode('iphone11promaxchargingport', 'iphone11promaxchargingport');
add_shortcode('iphone11promaxheadphonejack', 'iphone11promaxheadphonejack');
add_shortcode('iphone11promaxfrontcamera', 'iphone11promaxfrontcamera');
add_shortcode('iphone11promaxrearcamera', 'iphone11promaxrearcamera');
add_shortcode('iphone11promaxrearcameralens', 'iphone11promaxrearcameralens');
add_shortcode('iphone11promaxrearbackglass', 'iphone11promaxrearbackglass');
add_shortcode('iphone11promaxpowerbutton', 'iphone11promaxpowerbutton');
add_shortcode('iphone11promaxhomebutton', 'iphone11promaxhomebutton');

add_shortcode('iphonexsscreenrepair', 'iphonexsscreenrepair');
add_shortcode('iphonexsbatteryreplacement', 'iphonexsbatteryreplacement');
add_shortcode('iphonexslcdtouch', 'iphonexslcdtouch');
add_shortcode('iphonexschargingport', 'iphonexschargingport');
add_shortcode('iphonexsheadphonejack', 'iphonexsheadphonejack');
add_shortcode('iphonexsfrontcamera', 'iphonexsfrontcamera');
add_shortcode('iphonexsrearcamera', 'iphonexsrearcamera');
add_shortcode('iphonexsrearcameralens', 'iphonexsrearcameralens');
add_shortcode('iphonexsrearbackglass', 'iphonexsrearbackglass');
add_shortcode('iphonexspowerbutton', 'iphonexspowerbutton');
add_shortcode('iphonexshomebutton', 'iphonexshomebutton');

add_shortcode('iphonexsmaxscreenrepair', 'iphonexsmaxscreenrepair');
add_shortcode('iphonexsmaxbatteryreplacement', 'iphonexsmaxbatteryreplacement');
add_shortcode('iphonexsmaxlcdtouch', 'iphonexsmaxlcdtouch');
add_shortcode('iphonexsmaxchargingport', 'iphonexsmaxchargingport');
add_shortcode('iphonexsmaxheadphonejack', 'iphonexsmaxheadphonejack');
add_shortcode('iphonexsmaxfrontcamera', 'iphonexsmaxfrontcamera');
add_shortcode('iphonexsmaxrearcamera', 'iphonexsmaxrearcamera');
add_shortcode('iphonexsmaxrearcameralens', 'iphonexsmaxrearcameralens');
add_shortcode('iphonexsmaxrearbackglass', 'iphonexsmaxrearbackglass');
add_shortcode('iphonexsmaxpowerbutton', 'iphonexsmaxpowerbutton');
add_shortcode('iphonexsmaxhomebutton', 'iphonexsmaxhomebutton');


// apple iphone 

function iphone11screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphone11batteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphone11lcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphone11chargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphone11headphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphone11frontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphone11rearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphone11rearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphone11rearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphone11powerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphone11homebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function iphoneXscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphoneXbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphoneXlcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphoneXchargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphoneXheadphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphoneXfrontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphoneXrearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphoneXrearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphoneXrearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphoneXpowerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphoneXhomebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='X'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function iphone11proscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphone11probatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphone11prolcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphone11prochargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphone11proheadphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphone11profrontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphone11prorearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphone11prorearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphone11prorearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphone11propowerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphone11prohomebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='11pro'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function iphone11promaxscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphone11promaxbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphone11promaxlcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphone11promaxchargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphone11promaxheadphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphone11promaxfrontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphone11promaxrearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphone11promaxrearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphone11promaxrearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphone11promaxpowerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphone11promaxhomebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='11promax'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function iphonexsscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphonexsbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphonexslcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphonexschargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphonexsheadphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphonexsfrontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphonexsrearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphonexsrearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphonexsrearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphonexspowerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphonexshomebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='xs'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function iphonexsmaxscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function iphonexsmaxbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function iphonexsmaxlcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function iphonexsmaxchargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function iphonexsmaxheadphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function iphonexsmaxfrontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function iphonexsmaxrearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function iphonexsmaxrearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function iphonexsmaxrearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function iphonexsmaxpowerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function iphonexsmaxhomebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleiphone` WHERE `model`='xsmax'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

// apple ipad
function ipadpro97screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function ipadpro97batteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function ipadpro97lcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function ipadpro97chargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function ipadpro97headphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function ipadpro97frontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function ipadpro97rearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function ipadpro97rearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function ipadpro97rearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function ipadpro97powerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function ipadpro97homebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleipad` WHERE `model`='pro97'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function ipadpro105screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function ipadpro105batteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function ipadpro105lcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function ipadpro105chargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function ipadpro105headphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function ipadpro105frontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function ipadpro105rearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function ipadpro105rearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function ipadpro105rearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function ipadpro105powerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function ipadpro105homebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleipad` WHERE `model`='pro105'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function ipadpro112screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function ipadpro112batteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function ipadpro112lcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function ipadpro112chargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function ipadpro112headphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function ipadpro112frontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function ipadpro112rearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function ipadpro112rearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function ipadpro112rearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function ipadpro112powerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function ipadpro112homebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleipad` WHERE `model`='pro112'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

function ipadpro1294screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function ipadpro1294batteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function ipadpro1294lcdtouch(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `lcdtouch` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->lcdtouch;
    return $finalString;
}

function ipadpro1294chargingport(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `chargingport` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->chargingport;
    return $finalString;
}

function ipadpro1294headphonejack(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `headphonejack` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->headphonejack;
    return $finalString;
}

function ipadpro1294frontcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `frontcamera` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->frontcamera;
    return $finalString;
}

function ipadpro1294rearcamera(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcamera` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->rearcamera;
    return $finalString;
}

function ipadpro1294rearcameralens(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearcameralens` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->rearcameralens;
    return $finalString;
}

function ipadpro1294rearbackglass(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `rearbackglass` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->rearbackglass;
    return $finalString;
}

function ipadpro1294powerbutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `powerbutton` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->powerbutton;
    return $finalString;
}

function ipadpro1294homebutton(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `homebutton` FROM `appleipad` WHERE `model`='pro1294'");
    $finalString .= $price[0]->homebutton;
    return $finalString;
}

// apple iwatch
function series4_40mscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiwatch` WHERE `model`='series4_40m'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function series4_40mbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiwatch` WHERE `model`='series4_40m'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function series4_44mscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiwatch` WHERE `model`='series4_44m'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function series4_44mbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiwatch` WHERE `model`='series4_44m'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function series5_40mscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiwatch` WHERE `model`='series5_40m'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function series5_40mbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiwatch` WHERE `model`='series5_40m'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}

function series5_44mscreenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiwatch` WHERE `model`='series5_44m'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

function series5_44mbatteryreplacement(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `batteryreplacement` FROM `appleiwatch` WHERE `model`='series5_44m'");
    $finalString .= $price[0]->batteryreplacement;
    return $finalString;
}


?>