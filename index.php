<?php
define('DEBUG', 0);
if( DEBUG ) {
    ini_set('display_errors' , 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors' , 0);
    error_reporting(E_ALL & ~E_NOTICE);
}
define('APP_DIR', realpath('./'));
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
define('INCL_DIR', APP_DIR.DS.'protected'.DS.'include');
require(INCL_DIR.DS.'core.php');
