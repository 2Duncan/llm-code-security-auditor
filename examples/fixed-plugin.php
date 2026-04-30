<?php
// Secure version using prepared statements
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM wp_users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
?>
