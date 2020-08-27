<?php 

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

?>