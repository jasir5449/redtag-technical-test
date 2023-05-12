<?php 

if($_SERVER['SERVER_NAME'] == 'localhost'){
	define('ROOT', 'http://localhost:8086/testmvc/public');
}else{
	define('ROOT', 'https://cameomanjachola.com/testmvc/public');
}

define('APP_NAME', "REDTAG TECHNICAL TEST");
define('APP_DESC', "Filtering Csv Data");

/** true means show errors **/
define('DEBUG', true);
