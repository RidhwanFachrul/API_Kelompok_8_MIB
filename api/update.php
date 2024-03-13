<?php 


$input = file_get_contents('php://input');

$data = json_decode($input, true);


$id = $data['id'] ?? null;
$note = $data['catatan'] ?? null;

echo $id . ' ' . $note;
$query = "UPDATE api_mib SET catatan='$note' WHERE id='$id'";

$sql = mysqli_query($conn, $query); 

if ($sql) { 
    echo json_encode(array('message' => 'updated!')); 
} else { 
    echo json_encode(array('message' => 'error')); 
}
