<?php
include "connection_db.php";

$sql_query = $mysqli -> query('SELECT * FROM articles');

$response = [];

while ($row = $sql_query -> fetch_array(MYSQLI_NUM)) {
    $arr = [];
    $arr['id'] = $row[0];
    $arr['title'] = $row[1];
    $arr['body'] = $row[2];
    $arr['author_id '] = $row[3];
    $arr['category_id '] = $row[4];

    array_push($response, $arr);
}

echo json_encode($response);

?>
