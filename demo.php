<?php
/**
 * Plugin Name: PluginDemo
 * Plugin URI: miniorange-demo-plugin
 * Description: Plugin that list out users from the database.
 * Author: miniOrange
 * Author URI: https://www.miniorange.com
 * License: MIT/Expat
* License URI: https://docs.miniorange.com/mit-license
*/

add_action( 'admin_menu', 'main_menu' );

function add_front_Page(){
	include_once("users.php");


}
function add_second_Page(){
	include_once("abcd.php");
	pagee();
	

	
}

function main_menu() {

		$page = add_menu_page( 'PluginDemo', 'User Details', 'administrator', 'Demo_setting', 'add_front_Page');

		$submenu_page=add_submenu_page( 'Demo_setting', 'PluginDemo', 'Search User', 'administrator', 'Demo_setting1', 'add_second_Page');	
	}







