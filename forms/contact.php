<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"] ?? ''));
    $message = strip_tags(trim($_POST["message"] ?? ''));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Please fill in all fields."]);
        exit;
    }

    // Use pipe | as delimiter and escape newlines
    $row = date("Y-m-d H:i:s") . '|' . str_replace(["\r", "\n"], " ", $name) . '|' . 
           $email . '|' . str_replace(["\r", "\n"], " ", $subject) . '|' . 
           str_replace(["\r", "\n"], " ", $message) . PHP_EOL;

    $file = '../contact_messages.txt';
    if (file_put_contents($file, $row, FILE_APPEND | LOCK_EX)) {
        http_response_code(200);
        echo json_encode(["status" => "success", "message" => "Your message has been saved. Thank you!"]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to save your message."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
