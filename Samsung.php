<?php 

/*

Plugin Name: Prices
Plugin URI:
Description: Pricing table for Cell Phone Lab
Author: Jason Freedman
Author URI:
Version: 1

*/

function samsungSubMenu(){

    // global sql import, php is dumb.
    global $wpdb;

    //
    // iphone variables first
    //
    $price = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='11'");

    $iphone11screenrepair = $price[0]->screenrepair;
    $iphone11batteryreplacement = $price[0]->batteryreplacement;
    $iphone11lcdtouch = $price[0]->lcdtouch;
    $iphone11chargingport = $price[0]->chargingport;
    $iphone11headphonejack = $price[0]->headphonejack;
    $iphone11frontcamera = $price[0]->frontcamera;
    $iphone11rearcamera = $price[0]->rearcamera;
    $iphone11rearcameralens = $price[0]->rearcameralens;
    $iphone11rearbackglass = $price[0]->rearbackglass;
    $iphone11powerbutton = $price[0]->powerbutton;
    $iphone11homebutton = $price[0]->homebutton;

    $price1 = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='X'");
    $iphoneXscreenrepair = $price1[0]->screenrepair;
    $iphoneXbatteryreplacement = $price1[0]->batteryreplacement;
    $iphoneXlcdtouch = $price1[0]->lcdtouch;
    $iphoneXchargingport = $price1[0]->chargingport;
    $iphoneXheadphonejack = $price1[0]->headphonejack;
    $iphoneXfrontcamera = $price1[0]->frontcamera;
    $iphoneXrearcamera = $price1[0]->rearcamera;
    $iphoneXrearcameralens = $price1[0]->rearcameralens;
    $iphoneXrearbackglass = $price1[0]->rearbackglass;
    $iphoneXpowerbutton = $price1[0]->powerbutton;
    $iphoneXhomebutton = $price1[0]->homebutton;

    $price2 = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='11pro'");
    $iphone11proscreenrepair = $price2[0]->screenrepair;
    $iphone11probatteryreplacement = $price2[0]->batteryreplacement;
    $iphone11prolcdtouch = $price2[0]->lcdtouch;
    $iphone11prochargingport = $price2[0]->chargingport;
    $iphone11proheadphonejack = $price2[0]->headphonejack;
    $iphone11profrontcamera = $price2[0]->frontcamera;
    $iphone11prorearcamera = $price2[0]->rearcamera;
    $iphone11prorearcameralens = $price2[0]->rearcameralens;
    $iphone11prorearbackglass = $price2[0]->rearbackglass;
    $iphone11propowerbutton = $price2[0]->powerbutton;
    $iphone11prohomebutton = $price2[0]->homebutton;

    $price3 = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='11promax'");
    $iphone11promaxscreenrepair = $price3[0]->screenrepair;
    $iphone11promaxbatteryreplacement = $price3[0]->batteryreplacement;
    $iphone11promaxlcdtouch = $price3[0]->lcdtouch;
    $iphone11promaxchargingport = $price3[0]->chargingport;
    $iphone11promaxheadphonejack = $price3[0]->headphonejack;
    $iphone11promaxfrontcamera = $price3[0]->frontcamera;
    $iphone11promaxrearcamera = $price3[0]->rearcamera;
    $iphone11promaxrearcameralens = $price3[0]->rearcameralens;
    $iphone11promaxrearbackglass = $price3[0]->rearbackglass;
    $iphone11promaxpowerbutton = $price3[0]->powerbutton;
    $iphone11promaxhomebutton = $price3[0]->homebutton;

    $price4 = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='xs'");
    $iphonexsscreenrepair = $price4[0]->screenrepair;
    $iphonexsbatteryreplacement = $price4[0]->batteryreplacement;
    $iphonexslcdtouch = $price4[0]->lcdtouch;
    $iphonexschargingport = $price4[0]->chargingport;
    $iphonexsheadphonejack = $price4[0]->headphonejack;
    $iphonexsfrontcamera = $price4[0]->frontcamera;
    $iphonexsrearcamera = $price4[0]->rearcamera;
    $iphonexsrearcameralens = $price4[0]->rearcameralens;
    $iphonexsrearbackglass = $price4[0]->rearbackglass;
    $iphonexspowerbutton = $price4[0]->powerbutton;
    $iphonexshomebutton = $price4[0]->homebutton;

    $price5 = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='xsmax'");
    $iphonexsmaxscreenrepair = $price5[0]->screenrepair;
    $iphonexsmaxbatteryreplacement = $price5[0]->batteryreplacement;
    $iphonexsmaxlcdtouch = $price5[0]->lcdtouch;
    $iphonexsmaxchargingport = $price5[0]->chargingport;
    $iphonexsmaxheadphonejack = $price5[0]->headphonejack;
    $iphonexsmaxfrontcamera = $price5[0]->frontcamera;
    $iphonexsmaxrearcamera = $price5[0]->rearcamera;
    $iphonexsmaxrearcameralens = $price5[0]->rearcameralens;
    $iphonexsmaxrearbackglass = $price5[0]->rearbackglass;
    $iphonexsmaxpowerbutton = $price5[0]->powerbutton;
    $iphonexsmaxhomebutton = $price5[0]->homebutton;

    //
    // ipad variables
    //
    $price6 = $wpdb->get_results("SELECT * FROM `appleipad` WHERE `model`='pro97'");
    $ipadpro97screenrepair = $price6[0]->screenrepair;
    $ipadpro97batteryreplacement = $price6[0]->batteryreplacement;
    $ipadpro97lcdtouch = $price6[0]->lcdtouch;
    $ipadpro97chargingport = $price6[0]->chargingport;
    $ipadpro97headphonejack = $price6[0]->headphonejack;
    $ipadpro97frontcamera = $price6[0]->frontcamera;
    $ipadpro97rearcamera = $price6[0]->rearcamera;
    $ipadpro97rearcameralens = $price6[0]->rearcameralens;
    $ipadpro97rearbackglass = $price6[0]->rearbackglass;
    $ipadpro97powerbutton = $price6[0]->powerbutton;
    $ipadpro97homebutton = $price6[0]->homebutton;

    $price7 = $wpdb->get_results("SELECT * FROM `appleipad` WHERE `model`='pro105'");
    $ipadpro105screenrepair = $price7[0]->screenrepair;
    $ipadpro105batteryreplacement = $price7[0]->batteryreplacement;
    $ipadpro105lcdtouch = $price7[0]->lcdtouch;
    $ipadpro105chargingport = $price7[0]->chargingport;
    $ipadpro105headphonejack = $price7[0]->headphonejack;
    $ipadpro105frontcamera = $price7[0]->frontcamera;
    $ipadpro105rearcamera = $price7[0]->rearcamera;
    $ipadpro105rearcameralens = $price7[0]->rearcameralens;
    $ipadpro105rearbackglass = $price7[0]->rearbackglass;
    $ipadpro105powerbutton = $price7[0]->powerbutton;
    $ipadpro105homebutton = $price7[0]->homebutton;

    $price8 = $wpdb->get_results("SELECT * FROM `appleipad` WHERE `model`='pro112'");
    $ipadpro11_2genscreenrepair = $price8[0]->screenrepair;
    $ipadpro11_2genbatteryreplacement = $price8[0]->batteryreplacement;
    $ipadpro11_2genlcdtouch = $price8[0]->lcdtouch;
    $ipadpro11_2genchargingport = $price8[0]->chargingport;
    $ipadpro11_2genheadphonejack = $price8[0]->headphonejack;
    $ipadpro11_2genfrontcamera = $price8[0]->frontcamera;
    $ipadpro11_2genrearcamera = $price8[0]->rearcamera;
    $ipadpro11_2genrearcameralens = $price8[0]->rearcameralens;
    $ipadpro11_2genrearbackglass = $price8[0]->rearbackglass;
    $ipadpro11_2genpowerbutton = $price8[0]->powerbutton;
    $ipadpro11_2genhomebutton = $price8[0]->homebutton;

    $price9 = $wpdb->get_results("SELECT * FROM `appleipad` WHERE `model`='pro1294'");
    $ipadpro129_4genscreenrepair = $price9[0]->screenrepair;
    $ipadpro129_4genbatteryreplacement = $price9[0]->batteryreplacement;
    $ipadpro129_4genlcdtouch = $price9[0]->lcdtouch;
    $ipadpro129_4genchargingport = $price9[0]->chargingport;
    $ipadpro129_4genheadphonejack = $price9[0]->headphonejack;
    $ipadpro129_4genfrontcamera = $price9[0]->frontcamera;
    $ipadpro129_4genrearcamera = $price9[0]->rearcamera;
    $ipadpro129_4genrearcameralens = $price9[0]->rearcameralens;
    $ipadpro129_4genrearbackglass = $price9[0]->rearbackglass;
    $ipadpro129_4genpowerbutton = $price9[0]->powerbutton;
    $ipadpro129_4genhomebutton = $price9[0]->homebutton;

    //
    // Samsung helper functions
    //
    include_once(__DIR__.'/SamsungInputFunctions.php');

    $lastfocusvalue = 0;

    ?>

    <style>

        input#switch{
            display: inline-block;
        }

        input#switchapple{
            display: inline-block;
            
        }

        .submenu-wrapper{
            display: block;
        }

        .submenu-wrapper2{
            /* padding-top: 20px; */
            display: inline;
        }

        .submenu-heading{
            width:480px;
            text-align: center;
            display: inline;
        }

        h1.submenu-heading1{
            display: inline-block;
            top: -35px;
        }

        table.submenu-table{
            border: 2px solid grey !important;
            margin-left: 0 !important;
            padding-left: 0 !important;
            font-size: 14px !important;
        }

        ::placeholder{
            color: black;
        }

        input.submenu-table-input{
            width: 60px;
            border:1px solid #3471D1;
        }

        td.submenu-price-field{
            font-weight: bold;
            color: black;
        }
    </style>

    <script>

        function onFocus(textinput){
            console.log(textinput);
            console.log("focus value" + textinput.placeholder);
        }

        function onFocusOut(textinput){
            if(textinput.placeholder !== textinput.value){
                textinput.style.borderColor = "red";
            }
            else{
                textinput.style.borderColor = "#3471D1";
            }
        }

        function EnableDisableTextBoxiPhone(switchapple) {
            var iphoneinputs = document.getElementsByClassName("iphoneinputs");
            for(var i = 0; i < iphoneinputs.length; i++) {
                if(iphoneinputs[i].readOnly === true){
                    iphoneinputs[i].readOnly = false;

                }
                else{
                    iphoneinputs[i].readOnly = true;
                }
            }

            var button = document.getElementById("iphone-save");
            if(button.style.display === "none"){
                button.style.display = "inline-block";
            }
            else{
                button.style.display = "none";
            }
        }

        function EnableDisableTextBoxiPad(switchapple) {
            var ipadinputs = document.getElementsByClassName("ipadinputs");
            for(var i = 0; i < ipadinputs.length; i++) {
                if(ipadinputs[i].readOnly === true){
                    ipadinputs[i].readOnly = false;
                }
                else{
                    ipadinputs[i].readOnly = true;
                }
            }

            var button1 = document.getElementById("ipad-save");
            if(button1.style.display === "none"){
                button1.style.display = "inline-block";
            }
            else{
                button1.style.display = "none";
            }
        }

        function EnableDisableTextBoxiWatch(switchapple) {
            var iwatchinputs = document.getElementsByClassName("iwatchinputs");
            for(var i = 0; i < iwatchinputs.length; i++) {
                if(iwatchinputs[i].readOnly === true){
                    iwatchinputs[i].readOnly = false;
                }
                else{
                    iwatchinputs[i].readOnly = true;
                }
            }

            var button2 = document.getElementById("iwatch-save");
            if(button2.style.display === "none"){
                button2.style.display = "inline-block";
            }
            else{
                button2.style.display = "none";
            }
        }
    </script>

    <div class="submenu-wrapper">
    

        <!-- iPhone 1 -->
        <!-- iPhone 2 -->
        <!-- iPhone 3 -->
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">

        <div class="submenu-wrapper2">
        <form method="post"> 
        <div class="submenu-heading">
            <h1 class="submenu-heading1">
                iPhone
            </h1>
        </div>
        <input type="submit" name="iphone-save" id="iphone-save" style="padding:10px; margin-bottom: 7.4px; margin-left: 20px; " class="pure-button pure-button-primary"/>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>            
                        <label style="padding-bottom: 4px;display: inline-block;">Locked</label>
                        <input onclick="EnableDisableTextBoxiPhone(this)" id="switchapple" type="checkbox" checked/>
                    </th>
                    <th>iPhone X</th>
                    <th>iPhone 11</th>
                    <th>iPhone 11 Pro</th>
                    <th>iPhone 11 ProMax</th>
                    <th>iPhone XS</th>
                    <th>iPhone XS Max</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)" maxlength="4" name="iphoneXscreenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXscreenrepair ?>"  value="<?php echo $iphoneXscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength="4" name="iphone11screenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11screenrepair ?>" value="<?php echo $iphone11screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength="4" name="iphone11proscreenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonepro11screenrepair ?>" value="<?php echo $iphone11proscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength="4" name="iphone11promaxscreenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxscreenrepair ?>" value="<?php echo $iphone11promaxscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength="4" name="iphonexsscreenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsscreenrepair ?>" value="<?php echo $iphonexsscreenrepair ?>"  /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength="4" name="iphonexsmaxscreenrepair" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxscreenrepair ?>" value="<?php echo $iphonexsmaxscreenrepair ?>"  /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXlcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXlcdtouch ?>" value="<?php echo $iphoneXlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11lcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11lcdtouch ?>" value="<?php echo $iphone11lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11prolcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11prolcdtouch ?>" value="<?php echo $iphone11prolcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxlcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxlcdtouch ?>" value="<?php echo $iphone11promaxlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexslcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexslcdtouch ?>" value="<?php echo $iphonexslcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxlcdtouch" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxlcdtouch ?>" value="<?php echo $iphonexsmaxlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXbatteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXbatteryreplacement ?>" value="<?php echo $iphoneXbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11batteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11batteryreplacement ?>" value="<?php echo $iphone11batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11probatteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11probatteryreplacement ?>" value="<?php echo $iphone11probatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxbatteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxbatteryreplacement ?>" value="<?php echo $iphone11promaxbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsbatteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsbatteryreplacement ?>" value="<?php echo $iphonexsbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxbatteryreplacement" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxbatteryreplacement ?>" value="<?php echo $iphonexsmaxbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXchargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXchargingport ?>" value="<?php echo $iphoneXchargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11chargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11chargingport ?>" readonly value="<?php echo $iphone11chargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11prochargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11prochargingport ?>" readonly value="<?php echo $iphone11prochargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxchargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxchargingport ?>" value="<?php echo $iphone11promaxchargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexschargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexschargingport ?>" value="<?php echo $iphonexschargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxchargingport" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxchargingport ?>" value="<?php echo $iphonexsmaxchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXheadphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXheadphonejack ?>" value="<?php echo $iphoneXheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11headphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11headphonejack ?>" value="<?php echo $iphone11headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11proheadphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11proheadphonejack ?>" value="<?php echo $iphone11proheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxheadphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxheadphonejack ?>" value="<?php echo $iphone11promaxheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsheadphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsheadphonejack ?>" value="<?php echo $iphonexsheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxheadphonejack" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxheadphonejack ?>" value="<?php echo $iphonexsmaxheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXfrontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXfrontcamera ?>" value="<?php echo $iphoneXfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11frontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11frontcamera ?>" value="<?php echo $iphone11frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11profrontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11profrontcamera ?>" value="<?php echo $iphone11profrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxfrontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxfrontcamera ?>" value="<?php echo $iphone11promaxfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsfrontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsfrontcamera ?>" value="<?php echo $iphonexsfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxfrontcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxfrontcamera ?>" value="<?php echo $iphonexsmaxfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXrearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXrearcamera ?>" value="<?php echo $iphoneXrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11rearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11rearcamera ?>" value="<?php echo $iphone11rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11prorearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11prorearcamera ?>" value="<?php echo $iphone11prorearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxrearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxrearcamera ?>" value="<?php echo $iphone11promaxrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsrearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsrearcamera ?>" value="<?php echo $iphonexsrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxrearcamera" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxrearcamera ?>" value="<?php echo $iphonexsmaxrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXrearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXrearcameralens ?>" value="<?php echo $iphoneXrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11rearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11rearcameralens ?>" value="<?php echo $iphone11rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11prorearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11prorearcameralens ?>" value="<?php echo $iphone11prorearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxrearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxrearcameralens ?>" value="<?php echo $iphone11promaxrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsrearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsrearcameralens ?>" value="<?php echo $iphonexsrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxrearcameralens" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxrearcameralens ?>" value="<?php echo $iphonexsmaxrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXhomebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXhomebutton ?>" value="<?php echo $iphoneXhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11homebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11homebutton ?>" value="<?php echo $iphone11homebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11prohomebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11prohomebutton ?>" value="<?php echo $iphone11prohomebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxhomebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxhomebutton ?>" value="<?php echo $iphone11promaxhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexshomebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexshomebutton ?>" value="<?php echo $iphonexshomebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxhomebutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxhomebutton ?>" value="<?php echo $iphonexsmaxhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphoneXpowerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphoneXpowerbutton ?>" value="<?php echo $iphoneXpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11powerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11powerbutton ?>" value="<?php echo $iphone11powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11propowerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11propowerbutton ?>" value="<?php echo $iphone11propowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphone11promaxpowerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphone11promaxpowerbutton ?>" value="<?php echo $iphone11promaxpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexspowerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexspowerbutton ?>" value="<?php echo $iphonexspowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="iphonexsmaxpowerbutton" class="submenu-table-input iphoneinputs" type="text" readonly placeholder="<?php echo $iphonexsmaxpowerbutton ?>" value="<?php echo $iphonexsmaxpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>
        </form>

        <!-- iPad 1 -->
        <!-- iPad 2 -->
        <!-- iPad 3 -->
        <form method="post"> 
        <div class="submenu-heading">
            <h1 class="submenu-heading1">
                iPad
            </h1>
            <button id="ipad-save" name="ipad-save" type="submit" style="margin-left: 20px; margin-bottom: 7.4px;" class="pure-button pure-button-primary">Save</button>
        </div>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>            
                        <label style="padding-bottom: 4px;display: inline-block;">Locked</label>
                        <input onclick="EnableDisableTextBoxiPad(this)" id="ipadswitch" type="checkbox" checked/>
                    </th>
                    <th>iPad Pro 9.7</th>
                    <th>iPad Pro 10.5</th>
                    <th>iPad Pro 12.9 4gen</th>
                    <th>iPad Pro 11 2Gen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97screenrepair" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97screenrepair ?>" value="<?php echo $ipadpro97screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105screenrepair" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105screenrepair ?>" value="<?php echo $ipadpro105screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genscreenrepair" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genscreenrepair ?>" value="<?php echo $ipadpro11_2genscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genscreenrepair" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genscreenrepair ?>" value="<?php echo $ipadpro129_4genscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97lcdtouch" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97lcdtouch ?>" value="<?php echo $ipadpro97lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105lcdtouch" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105lcdtouch ?>" value="<?php echo $ipadpro105lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genlcdtouch" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genlcdtouch ?>" value="<?php echo $ipadpro11_2genlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genlcdtouch" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genlcdtouch ?>" value="<?php echo $ipadpro129_4genlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97batteryreplacement" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97batteryreplacement ?>" value="<?php echo $ipadpro97batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105batteryreplacement" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105batteryreplacement ?>" value="<?php echo $ipadpro105batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genbatteryreplacement" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genbatteryreplacement ?>" value="<?php echo $ipadpro11_2genbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genbatteryreplacement" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genbatteryreplacement ?>" value="<?php echo $ipadpro129_4genbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97chargingport" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97chargingport ?>" value="<?php echo $ipadpro97chargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105chargingport" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105chargingport ?>" value="<?php echo $ipadpro105chargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genchargingport" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genchargingport ?>" value="<?php echo $ipadpro11_2genchargingport ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genchargingport" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genchargingport ?>" value="<?php echo $ipadpro129_4genchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97headphonejack" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97headphonejack ?>" value="<?php echo $ipadpro97headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105headphonejack" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105headphonejack ?>" value="<?php echo $ipadpro105headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genheadphonejack" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genheadphonejack ?>" value="<?php echo $ipadpro11_2genheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genheadphonejack" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genheadphonejack ?>" value="<?php echo $ipadpro129_4genheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97frontcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97frontcamera ?>" value="<?php echo $ipadpro97frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105frontcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105frontcamera ?>" value="<?php echo $ipadpro105frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genfrontcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genfrontcamera ?>" value="<?php echo $ipadpro11_2genfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genfrontcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genfrontcamera ?>" value="<?php echo $ipadpro129_4genfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97rearcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97rearcamera ?>" value="<?php echo $ipadpro97rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105rearcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105rearcamera ?>" value="<?php echo $ipadpro105rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genrearcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genrearcamera ?>" value="<?php echo $ipadpro11_2genrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genrearcamera" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genrearcamera ?>" value="<?php echo $ipadpro129_4genrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97rearcameralens" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97rearcameralens ?>" value="<?php echo $ipadpro97rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105rearcameralens" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105rearcameralens ?>" value="<?php echo $ipadpro105rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genrearcameralens" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genrearcameralens ?>" value="<?php echo $ipadpro11_2genrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genrearcameralens" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genrearcameralens ?>" value="<?php echo $ipadpro129_4genrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro97homebutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97homebutton ?>" value="<?php echo $ipadpro97homebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro105homebutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105homebutton ?>" value="<?php echo $ipadpro105homebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro11_2genhomebutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genhomebutton ?>" value="<?php echo $ipadpro11_2genhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)"  maxlength= "4" name="ipadpro129_4genhomebutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genhomebutton ?>" value="<?php echo $ipadpro129_4genhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)" maxlength= "4" name="ipadpro97powerbutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro97powerbutton ?>" value="<?php echo $ipadpro97powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)" maxlength= "4" name="ipadpro105powerbutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro105powerbutton ?>" value="<?php echo $ipadpro105powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)" maxlength= "4" name="ipadpro11_2genpowerbutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro11_2genpowerbutton ?>" value="<?php echo $ipadpro11_2genpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input onfocus="onFocus(this)" onfocusout="onFocusOut(this)" maxlength= "4" name="ipadpro129_4genpowerbutton" class="submenu-table-input ipadinputs" type="text" readonly placeholder="<?php echo $ipadpro129_4genpowerbutton ?>" value="<?php echo $ipadpro129_4genpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>
        </form>
        </div>
    </div>
    <!-- more HTML code here -->
    <?php   // back to PHP


}

?>