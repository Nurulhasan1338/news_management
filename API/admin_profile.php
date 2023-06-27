<?php

include_once('./config.php');


// Verify and decode JWT
function verifyToken($jwt) {
    global $jwtSecret;
    
    try {
        $decoded = JWT::decode($jwt, $jwtSecret, array('HS256'));
        return $decoded;
    } catch (Exception $e) {
        return null;
    }
}


$token = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

if (!$token) {
    http_response_code(401);
    echo json_encode(array("message" => "Authentication required."));
    exit();
}

$decodedToken = verifyToken($token);

if (!$decodedToken) {
    http_response_code(401);
    echo json_encode(array("message" => "Invalid token."));
    exit();
}

$sql = "SELECT * FROM admin_profile";
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
