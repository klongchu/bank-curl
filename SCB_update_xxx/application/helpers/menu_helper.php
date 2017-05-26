<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('active_link')) {
  function activate_menu($controller) {
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    return ($class == $controller) ? 'active' : '';
  }
  function activate_menu_li($controller) {
    // Getting CI class instance.
    $CI = get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    return ($class == $controller) ? 'in' : '';
  }
  
  function activate_menu_sub($controller) {
    // Getting CI class instance.
    $CI = get_instance();
    
    // Getting router class to active.
    $class = $CI->router->fetch_method();
    if(!$controller){
    	$controller = 'admin';
    	$class = 'admin';
    }
    return ($class == $controller) ? 'active' : '';
  }
}