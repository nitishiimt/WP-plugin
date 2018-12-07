<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    CustomForm
 * @subpackage CustomForm/includes
 */
class Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
            $sql="";
            $trackifytags = $wpdb->prefix."test";
            if($wpdb->get_var("SHOW TABLES LIKE '$trackifytags'") != $trackifytags) {
                $sql ="CREATE TABLE `".$trackifytags."` (
                  `id` int(11) NOT NULL,
                  `tag` varchar(100) NOT NULL,
                  `vc_count` int(10) NOT NULL DEFAULT '0',
                  `atc_count` int(10) NOT NULL DEFAULT '0',
                  `purchase_count` int(10) NOT NULL DEFAULT '0',
                  `type` enum('T','C') DEFAULT NULL,
                  `pixel_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '-',
                  `pixel_id` varchar(50) NOT NULL DEFAULT '-', PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
            } 
          
    
        if(isset($sql)){
                require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); 
                dbDelta($sql);
                
        }

	}

}
