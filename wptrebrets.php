<?php

/*
Plugin Name: TREB RETS Feed Plugin
Plugin URI: http://www.moeloubani.com/treb-plugin
Description: A plugin made to create a shortcode that pulls in a feed from TREB.
Version: 1.0
Author: moeloubani
Author URI: http://www.moeloubani.com
License: A "Slug" license name e.g. GPL2
*/

//Get options framework
require 'library/CMB/init.php';

//Retrieve data for options
require 'inc/Options.php';

//Get PHRets library
require 'library/PHRets/phrets.php';

//Get feed
require 'inc/Feed.php';

//Save feed as posts
require 'inc/Save.php';

//Set shortcode to display on site
require 'inc/Shortcodes.php';

//Instantiate plugin

//get feed info from feed class

$thing = new \wptrebrets\inc\Feed("lp_dol, ml_num, addr, bath_tot, br, county, rltr, rms, s_r, st, st_num, status, zip", "2", "D14hcd", "W2925698,C2902118", "Kf$7439", "http://rets.torontomls.net:6103/rets-treb3pv/server/login");
$thing->start();
$thing->connect();
$thing->search();

//print_r($thing->show());
$save = new \wptrebrets\inc\Save($thing->mls);
$save->photos($thing->photos());

//$listings = $thing->show();