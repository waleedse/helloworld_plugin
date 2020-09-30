<?php

/**
 * PHP version 7.2.10
 
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */ 

/*
Plugin Name: Hello World Plugin
Description: this plugin consoles the hello world in the newest post
Author: Simon Lissack
Version: 0.1
*/
if (!function_exists('Load_My_script')) { 
    /**
     * Load_My_script
     
     * @return void
     */
    function Load_My_script()
    {
        $recent_posts = wp_get_recent_posts(array('numberposts' => 1,'post_status' => 'publish'));
        $deps = array('jquery');
        $version= '1.0';
        $in_footer = false;
        wp_enqueue_script('my-script', 'http://localhost/wordpress/heloworld.js', $deps, $version, $in_footer);
        wp_localize_script('my-script', 'my_script_vars', array('postID' => '20','newest_post' => $recent_posts[0]));
    }
}
add_action('wp_enqueue_scripts', 'Load_My_script');

?>