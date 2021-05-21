<?php 
    /**
     * All yes.my theme functions
     */

     define('THEME_FUNCTIONS_PATH', TEMPLATEPATH.'/includes/functions');

     require_once(THEME_FUNCTIONS_PATH.'/admin.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-init.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-options.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-custom-meta-box.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-custom-post-types.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-custom-admin-post-types.php');
     require_once(THEME_FUNCTIONS_PATH.'/theme-custom-templates.php');
?>