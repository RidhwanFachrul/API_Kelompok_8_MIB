<?php 

require_once('db.php'); 
if(isset($_GET['hapus'])){
    $id_awal = $_GET['id_awal'];
    $id_akhir = $_GET['id_akhir'];
    for ($id_awal; $id_awal <= $id_akhir; $id_awal++) {
        $query = "DELETE FROM api_mib WHERE id='$id_awal'";
        $sql = mysqli_query($conn, $query);  
    }
    if ($sql) { 
        echo json_encode(array('message' => 'deleted')); 
    }
}
else {
    parse_str(file_get_contents('php://input'), $value); 
    
    $id = $value['id']; 
    $query = "DELETE FROM api_mib WHERE id='$id'"; 
    $sql = mysqli_query($conn, $query); 
    if ($sql) { 
        echo json_encode(array('message' => 'deleted')); 
    } else { 
        echo json_encode(array('message' => 'error')); 
    }

}

