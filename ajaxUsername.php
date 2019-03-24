<?php
    include 'config/conn.php';
    $username = $_GET['username'];
    
    $sql = "select * from login where username = '{$username}'";
    $res = $conn->query($sql);
    $data = array();
    while($row = $res->fetch_assoc()){
        $user = $row['username'];
        $data[] = array("username" => $user);
    }
    
    echo json_encode($data);
?>