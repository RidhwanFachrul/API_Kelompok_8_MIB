<?php
    require_once('db.php');
    
    $query = "SELECT * FROM api_mib ORDER BY id DESC";
    $sql = mysqli_query($conn, $query);
    
    if ($sql) {
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id' => $row['id'],
                'catatan' => $row['catatan']
            ));
        }
    
        echo json_encode(array('result' => $result));
    }
    