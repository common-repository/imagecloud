<?php 
/*
Plugin Name: Image Cloud
Plugin URI: http://joost.reuzel.nl/about/plugins/
Description: Wordle style tag cloud using gif graphics
Version: 1.2
Author: Joost Reuzel
Author URI: http://joost.reuzel.nl/
*/

include_once('ic_Plugin.class.php');

if(!isset($imageCloudPlugin))
	$imageCloudPlugin = new ic_Plugin();
	
