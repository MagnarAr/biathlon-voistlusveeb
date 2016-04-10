<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getUserLanguage() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    echo $CI->_SESSION;
    // We need to use $CI->session instead of $this->session
    $lang = '';
    if (!isset($lang)) {
        return 'et';
    } else {
        return $lang;
    }
}