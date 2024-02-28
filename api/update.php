<?php 
require_once('db.php'); 

parse_str(file_get_contents('php://input'), $value); 

$id = $value['id']; 
$note = $value['catatan']; 
$query = "UPDATE api_mib SET catatan='$note' WHERE id='$id'";

$sql = mysqli_query($conn, $query); 

if ($sql) { 
    echo json_encode(array('message' => 'updated!')); 
} else { 
    echo json_encode(array('message' => 'error')); 
}
