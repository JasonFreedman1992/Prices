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
    font-size: 16px !important;
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

    <div class="submenu-wrapper">

        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
        <h1 class="submenu-heading1">
            Samsung
        </h1>
        <table class="pure-table pure-table-bordered submenu-table">
            <thead>
                <tr>
                    <th>Type of Repair</th>
                    <th>Pricing</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Repair/Replace Glass</td>
                        <td class="submenu-price-field">$85</td>
                </tr>
                <tr>
                    <td>Repair/Replace LCD/Touch</td>
                    <td class="submenu-price-field">$95</td>
                </tr>
                <tr>
                    <td>Repair/Replace Charging Port</td>
                    <td class="submenu-price-field">$69</td>
                </tr>
                <tr>
                    <td>Repair/Replace Home Button</td>
                    <td class="submenu-price-field">$59</td>
                </tr>
                <tr>
                    <td>Repair/Replace Battery</td>
                    <td class="submenu-price-field">$59</td>
                </tr>
                <tr>
                    <td>Repair/Replace Camera Lens</td>
                    <td class="submenu-price-field">$69</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- more HTML code here -->
    <?php   // back to PHP


}


?>