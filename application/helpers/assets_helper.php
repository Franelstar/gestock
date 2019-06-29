<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('base_url')){
	function base_url($nom=""){
		$CI =& get_instance();
		return $CI->config->item('base_url').'/'.$nom;
	}
}
if ( ! function_exists('css_url')){
	function css_url($nom){
		$CI =& get_instance();
		return base_url().$CI->config->item('css_base'). $nom . '.css';
	}
}
if ( ! function_exists('js_url')){
	function js_url($nom){
		$CI =& get_instance();
		return base_url().$CI->config->item('js_base'). $nom . '.js';
               
	}
}
if ( ! function_exists('img_url')){
	function img_url($nom){
		$CI =& get_instance();
		return base_url().$CI->config->item('img_base'). $nom;
	}
}
if ( ! function_exists('img')){
	function img($nom, $alt = ''){
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}