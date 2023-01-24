<?php
function get_level_information($level_id){
    include 'db_connect.php';

    $sql = $conn->query("SELECT * FROM level WHERE lvl_nr = $level_id ");
    $sql = $sql->fetch_assoc();

    return $sql;




}




?>