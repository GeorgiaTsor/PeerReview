<?php
/**
 * Created by PhpStorm.
 * User: georgia
 * Date: 28/4/2018
 * Time: 12:24
 */

define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'GeorgiaTs');
define('DB_PASSWORD', 'kordelio1993');
define('DB_DATABASE', 'test');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
