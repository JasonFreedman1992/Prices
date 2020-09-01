<?php  

// function console_log( $data ){
//     echo '<script>';
//     echo 'var input = document.getElementByName('. json_encode("iphone11screenrepair") .');';
//     echo 'input.style.border = '.json_encode("border:1px solid red").';';
//     echo '</script>';
//   }

    if(isset($_POST['iphone-save'])) { 

        //
        // iphone X
        //
        if($iphoneXscreenrepair !== $_POST['iphoneXscreenrepair']){
            $iphoneXscreenrepair = $_POST['iphoneXscreenrepair'];
            $iphoneXscreenrepair = strval($iphoneXscreenrepair);
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`='$iphoneXscreenrepair' WHERE `model`='X'");
        }

        if($iphoneXlcdtouch !== $_POST['iphoneXlcdtouch']){
            $iphoneXlcdtouch = $_POST['iphoneXlcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphoneXlcdtouch WHERE `model`='X'");
        }

        if($iphoneXbatteryreplacement !== $_POST['iphoneXbatteryreplacement']){
            $iphoneXbatteryreplacement = $_POST['iphoneXbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphoneXbatteryreplacement WHERE `model`='X'");
        }

        if($iphoneXchargingport !== $_POST['iphoneXchargingport']){
            $iphoneXchargingport = $_POST['iphoneXchargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphoneXchargingport WHERE `model`='X'");
        }

        if($iphoneXheadphonejack !== $_POST['iphoneXheadphonejack']){
            $iphoneXheadphonejack = $_POST['iphoneXheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphoneXheadphonejack WHERE `model`='X'");
        }

        if($iphoneXfrontcamera !== $_POST['iphoneXfrontcamera']){
            $iphoneXfrontcamera = $_POST['iphoneXfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphoneXfrontcamera WHERE `model`='X'");
        }

        if($iphoneXrearcamera !== $_POST['iphoneXrearcamera']){
            $iphoneXrearcamera = $_POST['iphoneXrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphoneXrearcamera WHERE `model`='X'");
        }

        if($iphoneXrearcameralens !== $_POST['iphoneXrearcameralens']){
            $iphoneXrearcameralens = $_POST['iphoneXrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphoneXrearcameralens WHERE `model`='X'");
        }

        if($iphoneXhomebutton !== $_POST['iphoneXhomebutton']){
            $iphoneXhomebutton = $_POST['iphoneXhomebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphoneXhomebutton WHERE `model`='X'");
        }

        if($iphoneXpowerbutton !== $_POST['iphoneXpowerbutton']){
            $iphoneXpowerbutton = $_POST['iphoneXpowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphoneXpowerbutton WHERE `model`='X'");
        }

        


        if($iphone11screenrepair !== $_POST['iphone11screenrepair']){
            $iphone11screenrepair = $_POST['iphone11screenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11screenrepair WHERE `model`='11'");
        }

        if($iphone11lcdtouch !== $_POST['iphone11lcdtouch']){
            $iphone11lcdtouch = $_POST['iphone11lcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphone11lcdtouch WHERE `model`='11'");
        }

        if($iphone11batteryreplacement !== $_POST['iphone11batteryreplacement']){
            $iphone11batteryreplacement = $_POST['iphone11batteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphone11batteryreplacement WHERE `model`='11'");
        }

        if($iphone11chargingport !== $_POST['iphone11chargingport']){
            $iphone11chargingport = $_POST['iphone11chargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphone11chargingport WHERE `model`='11'");
        }

        if($iphone11headphonejack !== $_POST['iphone11headphonejack']){
            $iphone11headphonejack = $_POST['iphone11headphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphone11headphonejack WHERE `model`='11'");
        }

        if($iphone11frontcamera !== $_POST['iphone11frontcamera']){
            $iphone11frontcamera = $_POST['iphone11frontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphone11frontcamera WHERE `model`='11'");
        }

        if($iphone11rearcamera !== $_POST['iphone11rearcamera']){
            $iphone11rearcamera = $_POST['iphone11rearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphone11rearcamera WHERE `model`='11'");
        }

        if($iphone11rearcameralens !== $_POST['iphone11rearcameralens']){
            $iphone11rearcameralens = $_POST['iphone11rearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphone11rearcameralens WHERE `model`='11'");
        }

        if($iphone11homebutton !== $_POST['iphone11homebutton']){
            $iphone11homebutton = $_POST['iphone11homebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphone11homebutton WHERE `model`='11'");
        }

        if($iphone11powerbutton !== $_POST['iphone11powerbutton']){
            $iphone11powerbutton = $_POST['iphone11powerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphone11powerbutton WHERE `model`='11'");
        }



        //
        // iphone 11pro
        //
        if($iphone11proscreenrepair !== $_POST['iphone11proscreenrepair']){
            $iphone11proscreenrepair = $_POST['iphone11proscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11proscreenrepair WHERE `model`='11pro'");
        }

        if($iphone11prolcdtouch !== $_POST['iphone11prolcdtouch']){
            $iphone11prolcdtouch = $_POST['iphone11prolcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphone11prolcdtouch WHERE `model`='11pro'");
        }

        if($iphone11probatteryreplacement !== $_POST['iphone11probatteryreplacement']){
            $iphone11probatteryreplacement = $_POST['iphone11probatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphone11probatteryreplacement WHERE `model`='11pro'");
        }

        if($iphone11prochargingport !== $_POST['iphone11prochargingport']){
            $iphone11prochargingport = $_POST['iphone11prochargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphone11prochargingport WHERE `model`='11pro'");
        }

        if($iphone11proheadphonejack !== $_POST['iphone11proheadphonejack']){
            $iphone11proheadphonejack = $_POST['iphone11proheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphone11proheadphonejack WHERE `model`='11pro'");
        }

        if($iphone11profrontcamera !== $_POST['iphone11profrontcamera']){
            $iphone11profrontcamera = $_POST['iphone11profrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphone11profrontcamera WHERE `model`='11pro'");
        }

        if($iphone11prorearcamera !== $_POST['iphone11prorearcamera']){
            $iphone11prorearcamera = $_POST['iphone11prorearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphone11prorearcamera WHERE `model`='11pro'");
        }

        if($iphone11prorearcameralens !== $_POST['iphone11prorearcameralens']){
            $iphone11prorearcameralens = $_POST['iphone11prorearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphone11prorearcameralens WHERE `model`='11pro'");
        }

        if($iphone11prohomebutton !== $_POST['iphone11prohomebutton']){
            $iphone11prohomebutton = $_POST['iphone11prohomebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphone11prohomebutton WHERE `model`='11pro'");
        }

        if($iphone11propowerbutton !== $_POST['iphone11propowerbutton']){
            $iphone11propowerbutton = $_POST['iphone11propowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphone11propowerbutton WHERE `model`='11pro'");
        }



        //
        // iphone 11promax
        //
        if($iphone11promaxscreenrepair !== $_POST['iphone11promaxscreenrepair']){
            $iphone11promaxscreenrepair = $_POST['iphone11promaxscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11promaxscreenrepair WHERE `model`='11promax'");
        }

        if($iphone11promaxlcdtouch !== $_POST['iphone11promaxlcdtouch']){
            $iphone11promaxlcdtouch = $_POST['iphone11promaxlcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphone11promaxlcdtouch WHERE `model`='11promax'");
        }

        if($iphone11promaxbatteryreplacement !== $_POST['iphone11promaxbatteryreplacement']){
            $iphone11promaxbatteryreplacement = $_POST['iphone11promaxbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphone11promaxbatteryreplacement WHERE `model`='11promax'");
        }

        if($iphone11promaxchargingport !== $_POST['iphone11promaxchargingport']){
            $iphone11promaxchargingport = $_POST['iphone11promaxchargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphone11promaxchargingport WHERE `model`='11promax'");
        }

        if($iphone11promaxheadphonejack !== $_POST['iphone11promaxheadphonejack']){
            $iphone11promaxheadphonejack = $_POST['iphone11promaxheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphone11promaxheadphonejack WHERE `model`='11promax'");
        }

        if($iphone11promaxfrontcamera !== $_POST['iphone11promaxfrontcamera']){
            $iphone11promaxfrontcamera = $_POST['iphone11promaxfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphone11promaxfrontcamera WHERE `model`='11promax'");
        }

        if($iphone11promaxrearcamera !== $_POST['iphone11promaxrearcamera']){
            $iphone11promaxrearcamera = $_POST['iphone11promaxrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphone11promaxrearcamera WHERE `model`='11promax'");
        }

        if($iphone11promaxrearcameralens !== $_POST['iphone11promaxrearcameralens']){
            $iphone11promaxrearcameralens = $_POST['iphone11promaxrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphone11promaxrearcameralens WHERE `model`='11promax'");
        }

        if($iphone11promaxhomebutton !== $_POST['iphone11promaxhomebutton']){
            $iphone11promaxhomebutton = $_POST['iphone11promaxhomebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphone11promaxhomebutton WHERE `model`='11promax'");
        }

        if($iphone11promaxpowerbutton !== $_POST['iphone11promaxpowerbutton']){
            $iphone11promaxpowerbutton = $_POST['iphone11promaxpowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphone11promaxpowerbutton WHERE `model`='11promax'");
        }



        //
        // iphone xs
        //
        if($iphonexsscreenrepair !== $_POST['iphonexsscreenrepair']){
            $iphonexsscreenrepair = $_POST['iphonexsscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphonexsscreenrepair WHERE `model`='xs'");
        }

        if($iphonexslcdtouch !== $_POST['iphonexslcdtouch']){
            $iphonexslcdtouch = $_POST['iphonexslcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphonexslcdtouch WHERE `model`='xs'");
        }

        if($iphonexsbatteryreplacement !== $_POST['iphonexsbatteryreplacement']){
            $iphonexsbatteryreplacement = $_POST['iphonexsbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphonexsbatteryreplacement WHERE `model`='xs'");
        }

        if($iphonexschargingport !== $_POST['iphonexschargingport']){
            $iphonexschargingport = $_POST['iphonexschargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphonexschargingport WHERE `model`='xs'");
        }

        if($iphonexsheadphonejack !== $_POST['iphonexsheadphonejack']){
            $iphonexsheadphonejack = $_POST['iphonexsheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphonexsheadphonejack WHERE `model`='xs'");
        }

        if($iphonexsfrontcamera !== $_POST['iphonexsfrontcamera']){
            $iphonexsfrontcamera = $_POST['iphonexsfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphonexsfrontcamera WHERE `model`='xs'");
        }

        if($iphonexsrearcamera !== $_POST['iphonexsrearcamera']){
            $iphonexsrearcamera = $_POST['iphonexsrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphonexsrearcamera WHERE `model`='xs'");
        }

        if($iphonexsrearcameralens !== $_POST['iphonexsrearcameralens']){
            $iphonexsrearcameralens = $_POST['iphonexsrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphonexsrearcameralens WHERE `model`='xs'");
        }

        if($iphonexshomebutton !== $_POST['iphonexshomebutton']){
            $iphonexshomebutton = $_POST['iphonexshomebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphonexshomebutton WHERE `model`='xs'");
        }

        if($iphonexspowerbutton !== $_POST['iphonexspowerbutton']){
            $iphonexspowerbutton = $_POST['iphonexspowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphonexspowerbutton WHERE `model`='xs'");
        }



        //
        // iphone xsmax
        //
        if($iphonexsmaxscreenrepair !== $_POST['iphonexsmaxscreenrepair']){
            $iphonexsmaxscreenrepair = $_POST['iphonexsmaxscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphonexsmaxscreenrepair WHERE `model`='xsmax'");
        }

        if($iphonexsmaxlcdtouch !== $_POST['iphonexsmaxlcdtouch']){
            $iphonexsmaxlcdtouch = $_POST['iphonexsmaxlcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `lcdtouch`=$iphonexsmaxlcdtouch WHERE `model`='xsmax'");
        }

        if($iphonexsmaxbatteryreplacement !== $_POST['iphonexsmaxbatteryreplacement']){
            $iphonexsmaxbatteryreplacement = $_POST['iphonexsmaxbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `batteryreplacement`=$iphonexsmaxbatteryreplacement WHERE `model`='xsmax'");
        }

        if($iphonexsmaxchargingport !== $_POST['iphonexsmaxchargingport']){
            $iphonexsmaxchargingport = $_POST['iphonexsmaxchargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `chargingport`=$iphonexsmaxchargingport WHERE `model`='xsmax'");
        }

        if($iphonexsmaxheadphonejack !== $_POST['iphonexsmaxheadphonejack']){
            $iphonexsmaxheadphonejack = $_POST['iphonexsmaxheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `headphonejack`=$iphonexsmaxheadphonejack WHERE `model`='xsmax'");
        }

        if($iphonexsmaxfrontcamera !== $_POST['iphonexsmaxfrontcamera']){
            $iphonexsmaxfrontcamera = $_POST['iphonexsmaxfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `frontcamera`=$iphonexsmaxfrontcamera WHERE `model`='xsmax'");
        }

        if($iphonexsmaxrearcamera !== $_POST['iphonexsmaxrearcamera']){
            $iphonexsmaxrearcamera = $_POST['iphonexsmaxrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcamera`=$iphonexsmaxrearcamera WHERE `model`='xsmax'");
        }

        if($iphonexsmaxrearcameralens !== $_POST['iphonexsmaxrearcameralens']){
            $iphonexsmaxrearcameralens = $_POST['iphonexsmaxrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `rearcameralens`=$iphonexsmaxrearcameralens WHERE `model`='xsmax'");
        }

        if($iphonexsmaxhomebutton !== $_POST['iphonexsmaxhomebutton']){
            $iphonexsmaxhomebutton = $_POST['iphonexsmaxhomebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `homebutton`=$iphonexsmaxhomebutton WHERE `model`='xsmax'");
        }

        if($iphonexsmaxpowerbutton !== $_POST['iphonexsmaxpowerbutton']){
            $iphonexsmaxpowerbutton = $_POST['iphonexsmaxpowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `powerbutton`=$iphonexsmaxpowerbutton WHERE `model`='xsmax'");
        }
        

    } 

    if(isset($_POST['ipad-save'])) { 
        //
        // ipadpro97
        //
        if($ipadpro97screenrepair !== $_POST['ipadpro97screenrepair']){
            $ipadpro97screenrepair = $_POST['ipadpro97screenrepair'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `screenrepair`=$ipadpro97screenrepair WHERE `model`='pro97'");
        }

        if($ipadpro97lcdtouch !== $_POST['ipadpro97lcdtouch']){
            $ipadpro97lcdtouch = $_POST['ipadpro97lcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `lcdtouch`=$ipadpro97lcdtouch WHERE `model`='pro97'");
        }

        if($ipadpro97batteryreplacement !== $_POST['ipadpro97batteryreplacement']){
            $ipadpro97batteryreplacement = $_POST['ipadpro97batteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `batteryreplacement`=$ipadpro97batteryreplacement WHERE `model`='pro97'");
        }

        if($ipadpro97chargingport !== $_POST['ipadpro97chargingport']){
            $ipadpro97chargingport = $_POST['ipadpro97chargingport'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `chargingport`=$ipadpro97chargingport WHERE `model`='pro97'");
        }

        if($ipadpro97headphonejack !== $_POST['ipadpro97headphonejack']){
            $ipadpro97headphonejack = $_POST['ipadpro97headphonejack'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `headphonejack`=$ipadpro97headphonejack WHERE `model`='pro97'");
        }

        if($ipadpro97frontcamera !== $_POST['ipadpro97frontcamera']){
            $ipadpro97frontcamera = $_POST['ipadpro97frontcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `frontcamera`=$ipadpro97frontcamera WHERE `model`='pro97'");
        }

        if($ipadpro97rearcamera !== $_POST['ipadpro97rearcamera']){
            $ipadpro97rearcamera = $_POST['ipadpro97rearcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcamera`=$ipadpro97rearcamera WHERE `model`='pro97'");
        }

        if($ipadpro97rearcameralens !== $_POST['ipadpro97rearcameralens']){
            $ipadpro97rearcameralens = $_POST['ipadpro97rearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcameralens`=$ipadpro97rearcameralens WHERE `model`='pro97'");
        }

        if($ipadpro97homebutton !== $_POST['ipadpro97homebutton']){
            $ipadpro97homebutton = $_POST['ipadpro97homebutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `homebutton`=$ipadpro97homebutton WHERE `model`='pro97'");
        }

        if($ipadpro97powerbutton !== $_POST['ipadpro97powerbutton']){
            $ipadpro97powerbutton = $_POST['ipadpro97powerbutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `powerbutton`=$ipadpro97powerbutton WHERE `model`='pro97'");
        }



        //
        // ipadpro105
        //
        if($ipadpro105screenrepair !== $_POST['ipadpro105screenrepair']){
            $ipadpro105screenrepair = $_POST['ipadpro105screenrepair'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `screenrepair`=$ipadpro105screenrepair WHERE `model`='pro105'");
        }

        if($ipadpro105lcdtouch !== $_POST['ipadpro105lcdtouch']){
            $ipadpro105lcdtouch = $_POST['ipadpro105lcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `lcdtouch`=$ipadpro105lcdtouch WHERE `model`='pro105'");
        }

        if($ipadpro105batteryreplacement !== $_POST['ipadpro105batteryreplacement']){
            $ipadpro105batteryreplacement = $_POST['ipadpro105batteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `batteryreplacement`=$ipadpro105batteryreplacement WHERE `model`='pro105'");
        }

        if($ipadpro105chargingport !== $_POST['ipadpro105chargingport']){
            $ipadpro105chargingport = $_POST['ipadpro105chargingport'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `chargingport`=$ipadpro105chargingport WHERE `model`='pro105'");
        }

        if($ipadpro105headphonejack !== $_POST['ipadpro105headphonejack']){
            $ipadpro105headphonejack = $_POST['ipadpro105headphonejack'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `headphonejack`=$ipadpro105headphonejack WHERE `model`='pro105'");
        }

        if($ipadpro105frontcamera !== $_POST['ipadpro105frontcamera']){
            $ipadpro105frontcamera = $_POST['ipadpro105frontcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `frontcamera`=$ipadpro105frontcamera WHERE `model`='pro105'");
        }

        if($ipadpro105rearcamera !== $_POST['ipadpro105rearcamera']){
            $ipadpro105rearcamera = $_POST['ipadpro105rearcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcamera`=$ipadpro105rearcamera WHERE `model`='pro105'");
        }

        if($ipadpro105rearcameralens !== $_POST['ipadpro105rearcameralens']){
            $ipadpro105rearcameralens = $_POST['ipadpro105rearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcameralens`=$ipadpro105rearcameralens WHERE `model`='pro105'");
        }

        if($ipadpro105homebutton !== $_POST['ipadpro105homebutton']){
            $ipadpro105homebutton = $_POST['ipadpro105homebutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `homebutton`=$ipadpro105homebutton WHERE `model`='pro105'");
        }

        if($ipadpro105powerbutton !== $_POST['ipadpro105powerbutton']){
            $ipadpro105powerbutton = $_POST['ipadpro105powerbutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `powerbutton`=$ipadpro105powerbutton WHERE `model`='pro105'");
        }



        //
        // ipadpro11_2gen
        //
        if($ipadpro11_2genscreenrepair !== $_POST['ipadpro11_2genscreenrepair']){
            $ipadpro11_2genscreenrepair = $_POST['ipadpro11_2genscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `screenrepair`=$ipadpro11_2genscreenrepair WHERE `model`='pro112'");
        }

        if($ipadpro11_2genlcdtouch !== $_POST['ipadpro11_2genlcdtouch']){
            $ipadpro11_2genlcdtouch = $_POST['ipadpro11_2genlcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `lcdtouch`=$ipadpro11_2genlcdtouch WHERE `model`='pro112'");
        }

        if($ipadpro11_2genbatteryreplacement !== $_POST['ipadpro11_2genbatteryreplacement']){
            $ipadpro11_2genbatteryreplacement = $_POST['ipadpro11_2genbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `batteryreplacement`=$ipadpro11_2genbatteryreplacement WHERE `model`='pro112'");
        }

        if($ipadpro11_2genchargingport !== $_POST['ipadpro11_2genchargingport']){
            $ipadpro11_2genchargingport = $_POST['ipadpro11_2genchargingport'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `chargingport`=$ipadpro11_2genchargingport WHERE `model`='pro112'");
        }

        if($ipadpro11_2genheadphonejack !== $_POST['ipadpro11_2genheadphonejack']){
            $ipadpro11_2genheadphonejack = $_POST['ipadpro11_2genheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `headphonejack`=$ipadpro11_2genheadphonejack WHERE `model`='pro112'");
        }

        if($ipadpro11_2genfrontcamera !== $_POST['ipadpro11_2genfrontcamera']){
            $ipadpro11_2genfrontcamera = $_POST['ipadpro11_2genfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `frontcamera`=$ipadpro11_2genfrontcamera WHERE `model`='pro112'");
        }

        if($ipadpro11_2genrearcamera !== $_POST['ipadpro11_2genrearcamera']){
            $ipadpro11_2genrearcamera = $_POST['ipadpro11_2genrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcamera`=$ipadpro11_2genrearcamera WHERE `model`='pro112'");
        }

        if($ipadpro11_2genrearcameralens !== $_POST['ipadpro11_2genrearcameralens']){
            $ipadpro11_2genrearcameralens = $_POST['ipadpro11_2genrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcameralens`=$ipadpro11_2genrearcameralens WHERE `model`='pro112'");
        }

        if($ipadpro11_2genhomebutton !== $_POST['ipadpro11_2genhomebutton']){
            $ipadpro11_2genhomebutton = $_POST['ipadpro11_2genhomebutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `homebutton`=$ipadpro11_2genhomebutton WHERE `model`='pro112'");
        }

        if($ipadpro11_2genpowerbutton !== $_POST['ipadpro11_2genpowerbutton']){
            $ipadpro11_2genpowerbutton = $_POST['ipadpro11_2genpowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `powerbutton`=$ipadpro11_2genpowerbutton WHERE `model`='pro112'");
        }



        //
        // ipadpro129_4gen
        //
        if($ipadpro129_4genscreenrepair !== $_POST['ipadpro129_4genscreenrepair']){
            $ipadpro129_4genscreenrepair = $_POST['ipadpro129_4genscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `screenrepair`=$ipadpro129_4genscreenrepair WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genlcdtouch !== $_POST['ipadpro129_4genlcdtouch']){
            $ipadpro129_4genlcdtouch = $_POST['ipadpro129_4genlcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `lcdtouch`=$ipadpro129_4genlcdtouch WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genbatteryreplacement !== $_POST['ipadpro129_4genbatteryreplacement']){
            $ipadpro129_4genbatteryreplacement = $_POST['ipadpro129_4genbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `batteryreplacement`=$ipadpro129_4genbatteryreplacement WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genchargingport !== $_POST['ipadpro129_4genchargingport']){
            $ipadpro129_4genchargingport = $_POST['ipadpro129_4genchargingport'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `chargingport`=$ipadpro129_4genchargingport WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genheadphonejack !== $_POST['ipadpro129_4genheadphonejack']){
            $ipadpro129_4genheadphonejack = $_POST['ipadpro129_4genheadphonejack'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `headphonejack`=$ipadpro129_4genheadphonejack WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genfrontcamera !== $_POST['ipadpro129_4genfrontcamera']){
            $ipadpro129_4genfrontcamera = $_POST['ipadpro129_4genfrontcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `frontcamera`=$ipadpro129_4genfrontcamera WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genrearcamera !== $_POST['ipadpro129_4genrearcamera']){
            $ipadpro129_4genrearcamera = $_POST['ipadpro129_4genrearcamera'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcamera`=$ipadpro129_4genrearcamera WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genrearcameralens !== $_POST['ipadpro129_4genrearcameralens']){
            $ipadpro129_4genrearcameralens = $_POST['ipadpro129_4genrearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `rearcameralens`=$ipadpro129_4genrearcameralens WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genhomebutton !== $_POST['ipadpro129_4genhomebutton']){
            $ipadpro129_4genhomebutton = $_POST['ipadpro129_4genhomebutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `homebutton`=$ipadpro129_4genhomebutton WHERE `model`='pro1294'");
        }

        if($ipadpro129_4genpowerbutton !== $_POST['ipadpro129_4genpowerbutton']){
            $ipadpro129_4genpowerbutton = $_POST['ipadpro129_4genpowerbutton'];
            $price = $wpdb->get_results("UPDATE `appleipad` SET `powerbutton`=$ipadpro129_4genpowerbutton WHERE `model`='pro1294'");
        }
    }

    if(isset($_POST['iwatch-save'])) { 

        // iwatch series4_40m
        if($series4_40mscreenrepair !== $_POST['series4_40mscreenrepair']){
            $series4_40mscreenrepair = $_POST['series4_40mscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `screenrepair`=$series4_40mscreenrepair WHERE `model`='series4_40m'");
        }

        if($series4_40mscreenrepair !== $_POST['series4_40mscreenrepair']){
            $series4_40mscreenrepair = $_POST['series4_40mscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `screenrepair`=$series4_40mscreenrepair WHERE `model`='series4_40m'");
        }

        // iwatch series4_44m
        if($series4_44mscreenrepair !== $_POST['series4_44mscreenrepair']){
            $series4_44mscreenrepair = $_POST['series4_44mscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `screenrepair`=$series4_44mscreenrepair WHERE `model`='series4_44m'");
        }

        if($series4_44mbatteryreplacement !== $_POST['series4_44mbatteryreplacement']){
            $series4_44mbatteryreplacement = $_POST['series4_44mbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `batteryreplacement`=$series4_44mbatteryreplacement WHERE `model`='series4_44m'");
        }

        // iwatch series5_40m
        if($series5_40mscreenrepair !== $_POST['series5_40mscreenrepair']){
            $series5_40mscreenrepair = $_POST['series5_40mscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `screenrepair`=$series5_40mscreenrepair WHERE `model`='series5_40m'");
        }

        if($series5_40mbatteryreplacement !== $_POST['series5_40mbatteryreplacement']){
            $series5_40mbatteryreplacement = $_POST['series5_40mbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `batteryreplacement`=$series5_40mbatteryreplacement WHERE `model`='series5_40m'");
        }

        // iwatch series5_44m
        if($series5_44mscreenrepair !== $_POST['series5_44mscreenrepair']){
            $series5_44mscreenrepair = $_POST['series5_44mscreenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `screenrepair`=$series5_44mscreenrepair WHERE `model`='series5_44m'");
        }

        if($series5_44mbatteryreplacement !== $_POST['series5_44mbatteryreplacement']){
            $series5_44mbatteryreplacement = $_POST['series5_44mbatteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiwatch` SET `batteryreplacement`=$series5_44mpowerbutton WHERE `model`='series5_44m'");
        }
    }

?>