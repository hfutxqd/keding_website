<?php
header("Content-Type:text/html;charset=utf8"); 
define("APP_PATH",dirname(__FILE__));
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
$spConfig = array(
	"db" => array(
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'keding',
	),
	'view' => array(
		'enabled' => TRUE, 
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', 
			'compile_dir' => APP_PATH.'/tmp',
			'cache_dir' => APP_PATH.'/tmp', 
			'left_delimiter' => '<{',  
			'right_delimiter' => '}>', 
		)
	),
	'launch' => array( 
	 'router_prefilter' => array( 
		array('spAcl','mincheck') 
	 	)
	 ),
	 'include_path'=>array( APP_PATH.'/php',),
);
require(SP_PATH."/SpeedPHP.php");
spRun();