<?php
require_once ('db.php');

$catatan = $_POST['catatan'];

$query = "INSERT INTO api_mib(catatan) VALUES ('$catatan')" ;
$sql = mysqli_query($conn, $query);

if ($sql && isset($catatan)) {

         echo json_encode ( array('message' => 'created!'));
 } else  {
        echo json_encode ( array('message' => 'error'));
    }
    
