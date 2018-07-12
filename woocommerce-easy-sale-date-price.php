<?php
/*
Plugin Name:  Woocommerce Easy Sale Date Price
Plugin URI:   https://github.com/3gillsig/woocommerce-easy-sale-price-date-plugin.git
Description:  This plugin 
Version:      1.0.0
Author:       Egill Sigurðarson
Author URI:   https://egillspegill.is/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Egill
Domain Path:  /languages
*/

if (! defined('ABSPATH')){
    die;
    exit;
}

defined( 'ABSPATH') or die('Hey, can´t access this file, silly human!');
 if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
     require_once dirname(__FILE__) . '/vendor/autoload.php';
 }

 if(! class_exists('woocommerce_easy_sale_date_price')) {

 }

class woocommerce_easy_sale_date_price {
    
    function change_date($array){
        if($array) {
            $prods = wc_get_products( );
          
            foreach($prods as $prod){
                $arg= $prod['price'];
                $arg=$arg*(1+($prosentage/100));
                $prod['sale_price']= $arg;
            }
            return $prods;
        }
    }
    function change_price($prosentage){
        if(100 > $prosentage && $prosentage > 0) {
          $prods = wc_get_products( );
          
            foreach($prods as $prod){
                $arg= $prod['price'];
                $arg=$arg*(1+($prosentage/100));
                $prod['sale_price']= $arg;
            }
            return $prods;
        }
    }
    

}