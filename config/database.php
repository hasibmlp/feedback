<?php 
define ('DB_HOST', 'localhost');
define ('DB_USER', 'hsb');
define ('DB_PASS', '123456');
define ('DB_NAME', 'fb_dev');

// CREATE CONNECTION
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// CHECK CONNECTION
if ($conn->connect_error) {
    die('connection filed' . $conn->connect_error);
}

