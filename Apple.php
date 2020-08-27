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
    // global sql import
    // new 22
    global $wpdb;

    //iphone variables first
    $price = $wpdb->get_results("SELECT `*` FROM `appleiphone` WHERE `model`='11'");

    $random = $price[0]->screenrepair;

    $iphone11screenrepair = '0';

    $iphone11batteryreplacement = $price[0]->screenrepair;
    $iphone11lcdtouch = '0';
    $iphone11chargingport = '0';
    $iphone11headphonejack = '0';
    $iphone11frontcamera = '0';
    $iphone11rearcamera = '0';
    $iphone11rearcameralens = '0';
    $iphone11rearbackglass = '0';
    $iphone11powerbutton = '0';
    $iphone11homebutton = '0';

    $iphoneXscreenrepair = '0';
    $iphoneXbatteryreplacement = '0';
    $iphoneXlcdtouch = '0';
    $iphoneXchargingport = '0';
    $iphoneXheadphonejack = '0';
    $iphoneXfrontcamera = '0';
    $iphoneXrearcamera = '0';
    $iphoneXrearcameralens = '0';
    $iphoneXrearbackglass = '0';
    $iphoneXpowerbutton = '0';
    $iphoneXhomebutton = '0';

    $iphone11proscreenrepair = '0';
    $iphone11probatteryreplacement = '0';
    $iphone11prolcdtouch = '0';
    $iphone11prochargingport = '0';
    $iphone11proheadphonejack = '0';
    $iphone11profrontcamera = '0';
    $iphone11prorearcamera = '0';
    $iphone11prorearcameralens = '0';
    $iphone11prorearbackglass = '0';
    $iphone11propowerbutton = '0';
    $iphone11prohomebutton = '0';

    $iphone11promaxscreenrepair = '0';
    $iphone11promaxbatteryreplacement = '0';
    $iphone11promaxlcdtouch = '0';
    $iphone11promaxchargingport = '0';
    $iphone11promaxheadphonejack = '0';
    $iphone11promaxfrontcamera = '0';
    $iphone11promaxrearcamera = '0';
    $iphone11promaxrearcameralens = '0';
    $iphone11promaxrearbackglass = '0';
    $iphone11promaxpowerbutton = '0';
    $iphone11promaxhomebutton = '0';

    $iphonexsscreenrepair = '0';
    $iphonexsbatteryreplacement = '0';
    $iphonexslcdtouch = '0';
    $iphonexschargingport = '0';
    $iphonexsheadphonejack = '0';
    $iphonexsfrontcamera = '0';
    $iphonexsrearcamera = '0';
    $iphonexsrearcameralens = '0';
    $iphonexsrearbackglass = '0';
    $iphonexspowerbutton = '0';
    $iphonexshomebutton = '0';

    $iphonexsmaxscreenrepair = '0';
    $iphonexsmaxbatteryreplacement = '0';
    $iphonexsmaxlcdtouch = '0';
    $iphonexsmaxchargingport = '0';
    $iphonexsmaxheadphonejack = '0';
    $iphonexsmaxfrontcamera = '0';
    $iphonexsmaxrearcamera = '0';
    $iphonexsmaxrearcameralens = '0';
    $iphonexsmaxrearbackglass = '0';
    $iphonexsmaxpowerbutton = '0';
    $iphonexsmaxhomebutton = '0';

    //ipad variables
    $ipadpro97screenrepair = '0';
    $ipadpro97batteryreplacement = '0';
    $ipadpro97lcdtouch = '0';
    $ipadpro97chargingport = '0';
    $ipadpro97headphonejack = '0';
    $ipadpro97frontcamera = '0';
    $ipadpro97rearcamera = '0';
    $ipadpro97rearcameralens = '0';
    $ipadpro97rearbackglass = '0';
    $ipadpro97powerbutton = '0';
    $ipadpro97homebutton = '0';

    $ipadpro105screenrepair = '0';
    $ipadpro105batteryreplacement = '0';
    $ipadpro105batteryreplacement = '0';
    $ipadpro105lcdtouch = '0';
    $ipadpro105chargingport = '0';
    $ipadpro105headphonejack = '0';
    $ipadpro105frontcamera = '0';
    $ipadpro105rearcamera = '0';
    $ipadpro105rearcameralens = '0';
    $ipadpro105rearbackglass = '0';
    $ipadpro105powerbutton = '0';
    $ipadpro105homebutton = '0';

    $ipadpro11_2genscreenrepair = '0';
    $ipadpro11_2genbatteryreplacement = '0';
    $ipadpro11_2genlcdtouch = '0';
    $ipadpro11_2genchargingport = '0';
    $ipadpro11_2genheadphonejack = '0';
    $ipadpro11_2genfrontcamera = '0';
    $ipadpro11_2genrearcamera = '0';
    $ipadpro11_2genrearcameralens = '0';
    $ipadpro11_2genrearbackglass = '0';
    $ipadpro11_2genpowerbutton = '0';
    $ipadpro11_2genhomebutton = '0';

    $ipadpro129_4genscreenrepair = '0';
    $ipadpro129_4genbatteryreplacement = '0';
    $ipadpro129_4genlcdtouch = '0';
    $ipadpro129_4genchargingport = '0';
    $ipadpro129_4genheadphonejack = '0';
    $ipadpro129_4genfrontcamera = '0';
    $ipadpro129_4genrearcamera = '0';
    $ipadpro129_4genrearcameralens = '0';
    $ipadpro129_4genrearbackglass = '0';
    $ipadpro129_4genpowerbutton = '0';
    $ipadpro129_4genhomebutton = '0';

    //iwatch variables
    $series5_44mbatteryreplacement = '0';
    $series5_44mscreenrepair = '0';

    $series5_40mbatteryreplacement = '0';
    $series5_40mscreenrepair = '0';

    $series4_44mbatteryreplacement = '0';
    $series4_44mscreenrepair = '0';

    $series4_40mbatteryreplacement = '0';
    $series4_40mscreenrepair = '0';

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

        .submenu-wrapper{
            padding-top: 20px;
        }

        h1.submenu-heading1{
            text-align: center;
            width: 480px;
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
        }

        td.submenu-price-field{
            font-weight: bold;
        }
    </style>

    <script>

    </script>

    <div class="submenu-wrapper">

        <!-- iPhone 1 -->
        <!-- iPhone 2 -->
        <!-- iPhone 3 -->

        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <h1 class="submenu-heading1">
            iPhone
        </h1>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th></th>
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
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11proscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11prolcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexslcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11probatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11prochargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexschargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11proheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11profrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11prorearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11prorearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11prohomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexshomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphoneXpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11propowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphone11promaxpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexspowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $iphonexsmaxpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>

        <!-- iPad 1 -->
        <!-- iPad 2 -->
        <!-- iPad 3 -->

        <h1 class="submenu-heading1">
            iPad
        </h1>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th></th>
                    <th>iPad Pro 9.7</th>
                    <th>iPad Pro 10.5</th>
                    <th>iPad Pro 12.9 4gen</th>
                    <th>iPad Pro 11 2Gen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105screenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105lcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genlcdtouch ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genlcdtouch ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105batteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genbatteryreplacement ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105chargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genchargingport ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genchargingport ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Headphone Jack</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105headphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genheadphonejack ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genheadphonejack ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Front Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105frontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genfrontcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genfrontcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105rearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genrearcamera ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genrearcamera ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Rear Camera Lens</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105rearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genrearcameralens ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genrearcameralens ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105homebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genhomebutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genhomebutton ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Power Button</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro97powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro105powerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro11_2genpowerbutton ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $ipadpro129_4genpowerbutton ?>" /></td>
                </tr>
            </tbody>
        </table>

        <!-- iWatch 1 -->
        <!-- iWatch 2 -->
        <!-- iWatch 3 -->

        <h1 class="submenu-heading1">
            iWatch
        </h1>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Series 4 40mm</th>
                    <th>Series 4 44mm</th>
                    <th>Series 5 40mm</th>
                    <th>Series 5 44mm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series4_40mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series4_44mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series5_40mscreenrepair ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series5_44mscreenrepair ?>" /></td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series4_40mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series4_44mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series5_40mbatteryreplacement ?>" /></td>
                    <td class="submenu-price-field"><input class="submenu-table-input" type="text" placeholder="<?php echo $series5_44mbatteryreplacement ?>" /></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- more HTML code here -->
    <?php   // back to PHP


}

?>