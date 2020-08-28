<?php  

    if(isset($_POST['iphone-save'])) { 

        if($iphone11screenrepair !== $_POST['iphone11screenrepair']){
            $iphone11screenrepair = $_POST['iphone11screenrepair'];
            $price = $wpdb->get_results("UPDATE `appleiphone` SET `screenrepair`=$iphone11screenrepair WHERE `model`='11'");
        }
        

    } 

?>