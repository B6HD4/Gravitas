<?php

$config_bd = parse_ini_file('config.ini');

if (!$config_bd) {
    print "erreur sur l'ouverture de config.ini";
    exit();
}

define('DB_HOST', $config_bd['host']);
define('DB_NAME', $config_bd['name']);
define('DB_USER', $config_bd['user']);
define('DB_PWD', $config_bd['pass']);
define('DB_PREFIX', $config_bd['prefix_table']);

$config_website = parse_ini_file('webapp_infos.ini');

if (!$config_website) {
    print "erreur sur l'ouverture de webapp_infos.ini";
    exit();
}

define('WEBSITE_TITLE', $config_website['title']);
define('WEBSITE_VERSION', $config_website['version']);
define('WEBSITE_DESCRIPTION', $config_website['description']);
define('WEBSITE_LANGUAGE', $config_website['langage']);
