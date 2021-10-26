<?php
require_once "konek.php";

global $connect;
$query = $connect->query("SELECT * FROM customers");
while ($row = mysqli_fetch_object($query)) {
    $data[] = $row;
}
$response = array(
    'took' => $_SERVER["REQUEST_TIME_FLOAT"],
    'code' => 200,
    'message' => 'Response Successfully',
    'data' => $data
);

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
echo json_encode($response);
