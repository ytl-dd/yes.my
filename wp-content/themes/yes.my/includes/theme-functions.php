<?php 
    /**
     * All yes.my theme functions
     */

     define('THEME_FUNCTIONS_PATH', TEMPLATEPATH.'/includes/functions');
     define('PLUGIN_DIR', dirname(__FILE__));

     require_once(THEME_FUNCTIONS_PATH.'/admin.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-init.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-options.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-custom-meta-box.php');
?>