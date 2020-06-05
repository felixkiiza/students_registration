<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$name     = "school"; 

$dsn        = "mysql:host=$host;dbname=$name";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
			  