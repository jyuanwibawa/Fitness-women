<?php
require_once("../db.php");

$data = json_decode(file_get_contents("php://input"));

if (
    isset($data->Name) &&
    isset($data->Email) &&
    isset($data->Password) &&
    isset($data->Age) &&
    isset($data->Height) &&
    isset($data->Weight) &&
    isset($data->ActivityLevel)
) {
    $stmt = $conn->prepare("INSERT INTO User (Name, Email, Password, Age, Height, Weight, ActivityLevel) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "sssidds",
        $data->Name,
        $data->Email,
        $data->Password,
        $data->Age,
        $data->Height,
        $data->Weight,
        $data->ActivityLevel
    );

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "User added successfully."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to add user."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid input."]);
}
