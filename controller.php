<?php

// Include file koneksi ke database
require_once('api/db.php');

function sendResponse($statusCode, $data = null)
{
    http_response_code($statusCode);
    header('Content-Type: application/json');
    $response = array('statusCode' => $statusCode, 'data' => $data);
    echo json_encode($response);
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
