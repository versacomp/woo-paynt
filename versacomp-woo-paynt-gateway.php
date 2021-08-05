<?php
/*
Plugin Name: VersaComp WooCommerce PAYNT Gateway
Plugin URI: https://www.versacomputer.com/woo-paynt/
Description: Choice Payment gateway for WooCommerce using PAYNT API.
Version: 1.0.0
WC tested up to: 5.7.2
Author: Versa Computer
Author URI: https://www.versacomputer.com/woo-paynt/
*/

class VersaCompPayntGateway {

    public function init() {

        if (!class_exists('WC_Payment_Gateway')) {
            return;
        }

        load_plugin_textdomain('versacomp_paynt', false, dirname(plugin_basename(__FILE__)) . '/languages');

    }
}
new VersaCompPayntGateway();
