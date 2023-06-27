<?php

include_once('./dbconnect.php');


$sql = "SELECT * FROM admin_reports";
$result = $conn->query($sql);

$newsReports = array();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newsReports[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');

echo json_encode($newsReports);
?>
