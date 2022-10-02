<?php
/*
 * Plugin Name: filter words
 * Plugin URI: #
 * Description: پلاگین فیلتر کلمات خاص با * در بخش کامنت های وردپرس
 * Author: Mhdibaqri
 * Version: 1.0.0
 * Author URI: #
 */
defined('ABSPATH') or die("You don't have permission to access this resource.");

function registerFilter($content)
{
    $rep = "بستنی";
    return str_replace('کلمه', $rep, $content);
}
function run(){
    add_filter('comment_text','registerFilter');
}
run();