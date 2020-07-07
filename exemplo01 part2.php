<?php

$conn = new mysqli("localhost2", "root", "", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;


}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$date = array();

while ($row = $result->fetch_assoc()) {

	array_push($date,$row);
}

echo json_encode($date)
?>