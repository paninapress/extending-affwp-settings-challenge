<?php
/**
 * Plugin Name: Extending AffWP Settings Challenge
 * Description: Demonstrating how to extend the AffiliateWP Settings
 * Author: 		Nina Pacifico
 * Version:     1.0.0
 * Text Domain: extending-affwp-settings-challenge
 */

    if ( is_admin() ) {
        require_once plugin_dir_path( __FILE__ ) . 'includes/class-admin.php';
    }
?>