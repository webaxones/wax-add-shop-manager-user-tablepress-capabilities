<?php
/**
 * Plugin Name: WAX Add Shop manager user TablePress capabilities
 * Plugin URI: https://www.webaxones.com
 * Description: Add TablePress plugin capabilities to WooCommerce Shop manager user
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;


/**
 * Add TablePress plugin capabilities to WooCommerce Shop manager user
 *
 * @return void
 */
function wax_add_shop_manager_user_tablepress_capabilities() {
	$shop_manager = get_role( 'shop_manager' );
	if ( $shop_manager && class_exists( 'TablePress' ) ) :
		$shop_manager->add_cap( 'tablepress_edit_tables' );
		$shop_manager->add_cap( 'tablepress_delete_tables' );
		$shop_manager->add_cap( 'tablepress_list_tables' );
		$shop_manager->add_cap( 'tablepress_add_tables' );
		$shop_manager->add_cap( 'tablepress_copy_tables' );
		$shop_manager->add_cap( 'tablepress_import_tables' );
		$shop_manager->add_cap( 'tablepress_export_tables' );
		$shop_manager->add_cap( 'tablepress_access_options_screen' );
		$shop_manager->add_cap( 'tablepress_access_about_screen' );
	endif;
}
add_action( 'admin_init', 'wax_add_shop_manager_user_tablepress_capabilities' );
