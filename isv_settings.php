<?php
	
	/*** DEFINE SITE SETTINGS ***/
	define('ISV_VERSION', '2.0.0'); //IsVipi OSSN current installed version
	define('ISV_ENCR_KEY', 'grQw57V4iJ3PgnBX'); //Encryption Key
	define('ISVIPI_ACT_THEME', ISVIPI_THEMES .$isv_siteDetails['s_theme'].'' .DIRECTORY_SEPARATOR); //current theme
	define('ISV_DEFAULT_TZ', 'Atlantic/St_Helena'); //Default Timezone
	define('ISV_SITE_TITLE', $isv_siteDetails['s_title']); //Default Timezone
	define('ISV_DEFAULT_EMAIL_FROM', $isv_siteDetails['s_email']); //Default Timezone
	
	
	/*** DEFINE URL PARAMETERS ***/
	define ('ISVIPI_ACT_THEME_URL', ISVIPI_URL .'themes/' .$isv_siteDetails['s_theme'].'' .DIRECTORY_SEPARATOR); //theme url
	define ('ISVIPI_ACT_ADMIN_URL', ISVIPI_URL .$isv_siteSettings['adminEnd'].'' .DIRECTORY_SEPARATOR); //admin url
	
	/*** TIMEZONE SETTINGS ***/
	if($isv_siteSettings['defaultTzone'] === 1){
		date_default_timezone_set (ISV_DEFAULT_TZ);
	} else {
		date_default_timezone_set ($isv_siteDetails['s_time_zone']);
	}

	/*** HIDE PHP ERRORS SETTINGS ***/
	if($isv_siteSettings['hide_errors'] === 1){
		error_reporting(0);
		ini_set('display_errors', 0);
	}
	
	/*** CRON JOBS SETTINGS ***/
	if($isv_siteSettings['sys_cron'] === 1){
		require_once(ISVIPI_CRON_BASE .'cron.php');
	}
	
	/*** ALLOW USER REGISTRATION ***/
	if ($isv_siteSettings['user_reg'] == 0){
		define('ALLOW_USER_REG', false);
	} else {
		define('ALLOW_USER_REG', true);
	}
	
	/*** IMAGE SIZES ***/
	define('ISVIPI_THUMBS', '150x150_');
	define('ISVIPI_600', '600x600_');

?>