<?php

// Include file koneksi ke database
require_once('api/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    // Atur header untuk OPTIONS
    header("HTTP/1.1 200 OK");
    exit(); // Keluar dari skrip setelah menanggapi OPTIONS
}

// Tangkap method HTTP
$method = $_SERVER['REQUEST_METHOD'];


switch ($method) {
    case 'GET':
        require_once('api/data.php');
        break;
    case 'POST':
        require_once('api/Create.php');
        break;
    case 'PUT':
        require_once('api/update.php');
        break;
    case 'DELETE':
        require_once('api/delete.php');
        break;
    default:
        // Tangkap jika method HTTP tidak didukung
        http_response_code(405); // Method Not Allowed
        echo "Method HTTP tidak didukung";
        break;
}
