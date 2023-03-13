<?php
include "connection_db.php";

$sql_query = $mysqli -> query('SELECT ar.*, a.name as author_name 
FROM articles ar
JOIN authors a ON a.id = ar.author_id ');

$response = [];

while ($row = $sql_query -> fetch_array(MYSQLI_NUM)) {
    $arr = [];
    $arr['id'] = $row[0];
    $arr['title'] = $row[1];
    $arr['body'] = $row[2];
    $arr['author_id'] = $row[3];
    $arr['category_id'] = $row[4];
    $arr['author_name'] = $row[5];

    array_push($response, $arr);
}

echo json_encode($response);

?>
