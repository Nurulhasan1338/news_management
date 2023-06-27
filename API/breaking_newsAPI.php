<?php


include_once('./config.php');


if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'retrieve') {
    
$data = json_decode(file_get_contents('php://input'), true);
$sql = "SELECT * FROM users WHERE breakingnews = '1' And (reporter_name = ? or location = ? or title = ? or catchy = ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $data['reporter_name'], $data['location'], $data['title'], $data['catchy']);
$stmt->execute();
$result = $stmt->get_result();

$newsReports = array();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newsReports[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');

echo json_encode($newsReports);


}
?>
