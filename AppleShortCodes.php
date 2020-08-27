<?php 

function iphone11screenrepair(){
    global $wpdb;
    $finalString = "$";
    $price = $wpdb->get_results("SELECT `screenrepair` FROM `appleiphone` WHERE `model`='11'");
    $finalString .= $price[0]->screenrepair;
    return $finalString;
}

?>