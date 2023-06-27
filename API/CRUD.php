<?php

include_once('./config.php');

require 'path/to/vendor/autoload.php';

use \Firebase\JWT\JWT;

// JWT secret key
$jwtSecret = "your_jwt_secret_key";

// API endpoints

// Register a new user
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'register') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $data['username'], password_hash($data['password'], PASSWORD_DEFAULT));
    
    if ($stmt->execute()) {
        echo json_encode(array("message" => "User registered successfully."));
    } else {
        echo json_encode(array("message" => "User registration failed."));
    }
    
    $stmt->close();
}

// Authenticate a user and generate JWT
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'login') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validate and sanitize user input
    // (e.g., check for required fields, validate email, etc.)
    
    // Retrieve user from the database
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $data['username']);
    $stmt->execute();
    
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    if ($user && password_verify($data['password'], $user['password'])) {
        // Generate JWT
        $payload = array(
            "user_id" => $user['id'],
            "username" => $user['username']
        );
        $jwt = JWT::encode($payload, $jwtSecret);
        
        echo json_encode(array("token" => $jwt));
    } else {
        echo json_encode(array("message" => "Invalid username or password."));
    }
    
    $stmt->close();
}

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

// Require authentication for API endpoints
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

// CRUD operations (example endpoints)

// Retrieve all records
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['action'] === 'retrieve') {
    // Perform database query to retrieve records
    // ...
    // Return response as JSON
    // ...
}

// Create a new record
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'create') {
    // Perform database query to create a record
    // ...
    // Return response as JSON
    // ...
}

// Update an existing record
if ($_SERVER['REQUEST_METHOD'] === 'PUT' && $_GET['action'] === 'update') {
    // Perform database query to update the record
    // ...
    // Return response as JSON
    // ...
}

// Delete a record
if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && $_GET['action'] === 'delete') {
    // Perform database query to delete the record
    // ...
    // Return response as JSON
    // ...
}

// Close the database connection
$conn->close();

?>
