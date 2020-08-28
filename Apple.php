<?php 

/*

Plugin Name: Prices
Plugin URI:
Description: Pricing table for Cell Phone Lab
Author: Jason Freedman
Author URI:
Version: 1

*/

function appleSubMenu(){

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

    //iwatch variables
    $price10 = $wpdb->get_results("SELECT * FROM `appleiwatch` WHERE `model`='series5_44m'");
    $series5_44mbatteryreplacement = $price10[0]->batteryreplacement;
    $series5_44mscreenrepair = $price10[0]->screenrepair;

    $price11 = $wpdb->get_results("SELECT * FROM `appleiwatch` WHERE `model`='series5_40m'");
    $series5_40mbatteryreplacement = $price11[0]->batteryreplacement;
    $series5_40mscreenrepair = $price11[0]->screenrepair;

    $price12 = $wpdb->get_results("SELECT * FROM `appleiwatch` WHERE `model`='series4_44m'");
    $series4_44mbatteryreplacement = $price12[0]->batteryreplacement;
    $series4_44mscreenrepair = $price12[0]->screenrepair;

    $price13 = $wpdb->get_results("SELECT * FROM `appleiwatch` WHERE `model`='series4_40m'");
    $series4_40mbatteryreplacement = $price13[0]->batteryreplacement;
    $series4_40mscreenrepair = $price13[0]->screenrepair;

    // screenrepair
    // lcdtouch
    // batteryreplacement
    // chargingport
    // headphonejack
    // front camera
    // rear camera
    // rear back glass
    // rear camera lens
    // power button
    // home button

    // <th>iPhone X</th>
    // <th>iPhone 11</th>
    // <th>iPhone 11 Pro</th>
    // <th>iPhone 11 ProMax</th>
    // <th>iPhone XS</th>
    // <th>iPhone XS Max</th>

    ?>

    <style>

        input#switch{
            display: inline-block;
            
        }

        input#switchapple{
            display: inline-block;
            
        }

        .submenu-wrapper{
            /* padding-top: 20px; */
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
            border:1px solid red;
        }

        td.submenu-price-field{
            font-weight: bold;
            color: black;
        }
    </style>

    <!-- var x = document.getElementsByClassName("testClass"); -->

    <script>

        // document.getElementsByClassName('iphoneinputs').onchange = function() {
        //     document.getElementById('yourText').disabled = !this.checked;
        // };


        // iphoneinputs.forEach(disable)



        function EnableDisableTextBox(switchapple) {
            var iphoneinputs = document.getElementsByClassName("iphoneinputs");
            for(var i = 0; i < iphoneinputs.length; i++) {
                // if(iphoneinputs[i].disabled === true){
                if(iphoneinputs[i].readOnly === true){
                    // iphoneinputs[i].disabled = false;
                    iphoneinputs[i].readOnly = false;

                }
                else{
                    // iphoneinputs[i].disabled = true;
                    iphoneinputs[i].readOnly = true;
                }
                
                // iphoneinputs[i] = (e) => {
                //     e.currentTarget.style.display = "none"
                // }
            }

            var button = document.getElementById("iphone-save");
                if(button.style.display === "none"){
                    button.style.display = "inline-block";
                }
                else{
                    button.style.display = "none";
                }
            // for(var i = 0; i < buttons.length; i++) {
            //     if(buttons[i].style.display === "none"){
            //         buttons[i].style.display = "inline-block";
            //     }
            //     else{
            //         buttons[i].style.display = "none";
            //     }
                
            //     // iphoneinputs[i] = (e) => {
            //     //     e.currentTarget.style.display = "none"
            //     // }
            // }
            // var iphoneinputs = document.getElementsByClassName("iphoneinputs");
            // // console.log(iphoneinputs);
            // iphoneinputs.disabled = switchapple.checked ? false : true;
            // console.log("clicking da box");
            // console.log(iphoneinputs.length);
        }
    </script>

    <div class="submenu-wrapper">
    

        <!-- iPhone 1 -->
        <!-- iPhone 2 -->
        <!-- iPhone 3 -->
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">

        <div class="submenu-wrapper2">
        <form method="post"> 
        <input type="submit" name="iphone-save" id="iphone-save" style="padding:10px; margin-bottom: 7.4px; margin-left: 20px; " class="pure-button pure-button-primary"/>
        <div class="submenu-heading">
            <!-- <label style="margin-bottom: 11.4px;display: inline-block;">Unlock</label>
            <input style="margin-bottom: 7.4px;"  id="switch" type="checkbox"/> -->
            <h1 class="submenu-heading1">
                iPhone
            </h1>


                <?php
                    // $price = $wpdb->get_results("SELECT * FROM `appleiphone` WHERE `model`='11'");
                    // $sql = $wpdb->prepare("UPDATE appleiphone SET screenrepair='200' WHERE model='11' ") ;
                    // $wpdb->query($sql);
                                            // $sql = $wpdb->prepare("UPDATE `appleiphone` SET `screenrepair`='200' WHERE `model`='11'") ;
                        // $wpdb->query($sql);
                    
                    if(isset($_POST['iphone11screenrepair'])){
                        $iphone11screenrepairprice = $_POST['iphone11screenrepair'];
                    }
                    // $iphone11screenrepairprice = $_POST['iphone11screenrepair'];
                    // global $wpdb;
                    if(isset($_POST['iphone-save'])) { 
                        $iphone11screenrepair = $_POST['iphone11screenrepair'];
                        // echo "This is iPhone-button1";
                        echo '<script>';
                        echo 'console.log('. json_encode( $iphone11screenrepairprice ) .')';
                        echo '</script>';
                        
                        $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11screenrepairprice WHERE `model`='11'");

                    } 
                ?> 
        </div>
        <!-- <form method="post"> 
        <input type="submit" name="iphone-save" id="iphone-save" style="padding:10px; margin-bottom: 7.4px; margin-left: 20px; " class="pure-button pure-button-primary"/> -->
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>            
                        <label style="padding-bottom: 4px;display: inline-block;">Locked</label>
                        <input onclick="EnableDisableTextBox(this)" id="switchapple" type="checkbox" checked/>
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
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXscreenrepair ?>" readonly /></td>
                    <td class="submenu-price-field"><input name="iphone11screenrepair" class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11proscreenrepair ?>" readonly /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxscreenrepair ?>" readonly /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsscreenrepair ?>" readonly /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxscreenrepair ?>" readonly /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11prolcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexslcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11probatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11prochargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexschargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11proheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11profrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11prorearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11prorearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11prohomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexshomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphoneXpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11propowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphone11promaxpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexspowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iphoneinputs" type="text" readonly value="<?php echo $iphonexsmaxpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>
        </form>

        <!-- iPad 1 -->
        <!-- iPad 2 -->
        <!-- iPad 3 -->

        <div class="submenu-heading">
            <!-- <label style="margin-bottom: 11.4px;display: inline-block;">Unlock</label>
            <input style="margin-bottom: 7.4px;"  id="switch" type="checkbox"/> -->
            <h1 class="submenu-heading1">
                iPad
            </h1>
            <button style="margin-left: 20px; margin-bottom: 7.4px;" class="pure-button pure-button-primary">Save</button>
        </div>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>            
                        <label style="padding-bottom: 4px;display: inline-block;">Locked</label>
                        <input id="ipadswitch" type="checkbox" checked/>
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
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro97powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro105powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro11_2genpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input ipadinputs" type="text" disabled value="<?php echo $ipadpro129_4genpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>

        <!-- iWatch 1 -->
        <!-- iWatch 2 -->
        <!-- iWatch 3 -->

        <div class="submenu-heading">
            <!-- <label style="margin-bottom: 11.4px;display: inline-block;">Unlock</label>
            <input style="margin-bottom: 7.4px;"  id="switch" type="checkbox"/> -->
            <h1 class="submenu-heading1">
                iWatch
            </h1>
            <button style="margin-bottom: 7.4px;margin-left: 20px; " class="pure-button pure-button-primary">Save</button>
        </div>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>            
                        <label style="padding-bottom: 4px;display: inline-block;">Locked</label>
                        <input id="iwatchswitch"  checked type="checkbox"/>
                    </th>
                    <th>Series 4 40mm</th>
                    <th>Series 4 44mm</th>
                    <th>Series 5 40mm</th>
                    <th>Series 5 44mm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series4_40mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series4_44mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series5_40mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series5_44mscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series4_40mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series4_44mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series5_40mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input iwatchinputs" type="text" disabled value="<?php echo $series5_44mbatteryreplacement ?>" /></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <!-- more HTML code here -->
    <?php   // back to PHP


}

?>