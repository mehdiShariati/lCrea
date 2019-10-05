<?php
## mmmm good 
// app root
$dotenv=Dotenv\Dotenv::create(dirname(dirname(__DIR__)));
$dotenv->load();


define('APP_ROOT',dirname(dirname(__FILE__)));

//url root

define("PUBLIC_ROOT",dirname(dirname(dirname(__FILE__)))."/public");


define("URL_ROOT",getenv('URL_ROOT'));



//define site name


define('SITENAME',getenv('SITENAME'));


//data base credential

define('USERNAME',getenv('USERNAME'));

define("PASSWORD",getenv('PASSWORD'));

define("DB_HOST",getenv('DB_HOST'));

define("DB_NAME",getenv('DB_NAME'));