<?php  

    if(isset($_POST['iphone-save'])) { 

        if($iphone11screenrepair !== $_POST['iphone11screenrepair']){
            $iphone11screenrepair = $_POST['iphone11screenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11screenrepair WHERE `model`='11'");
        }

        if($iphone11lcdtouch !== $_POST['iphone11lcdtouch']){
            $iphone11lcdtouch = $_POST['iphone11lcdtouch'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11lcdtouch WHERE `model`='11'");
        }

        if($iphone11batteryreplacement !== $_POST['iphone11batteryreplacement']){
            $iphone11batteryreplacement = $_POST['iphone11batteryreplacement'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11batteryreplacement WHERE `model`='11'");
        }

        if($iphone11chargingport !== $_POST['iphone11chargingport']){
            $iphone11chargingport = $_POST['iphone11chargingport'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11chargingport WHERE `model`='11'");
        }

        if($iphone11headphonejack !== $_POST['iphone11headphonejack']){
            $iphone11headphonejack = $_POST['iphone11headphonejack'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11headphonejack WHERE `model`='11'");
        }

        if($iphone11frontcamera !== $_POST['iphone11frontcamera']){
            $iphone11frontcamera = $_POST['iphone11frontcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11frontcamera WHERE `model`='11'");
        }

        if($iphone11rearcamera !== $_POST['iphone11rearcamera']){
            $iphone11rearcamera = $_POST['iphone11rearcamera'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11rearcamera WHERE `model`='11'");
        }

        if($iphone11rearcameralens !== $_POST['iphone11rearcameralens']){
            $iphone11rearcameralens = $_POST['iphone11rearcameralens'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11rearcameralens WHERE `model`='11'");
        }

        if($iphone11homebutton !== $_POST['iphone11homebutton']){
            $iphone11homebutton = $_POST['iphone11homebutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11homebutton WHERE `model`='11'");
        }

        if($iphone11powerbutton !== $_POST['iphone11powerbutton']){
            $iphone11powerbutton = $_POST['iphone11powerbutton'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11powerbutton WHERE `model`='11'");
        }
        

    } 

?>