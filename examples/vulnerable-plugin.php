<?php
// Vulnerable WordPress-like code
$id = $_GET['id'];
$query = "SELECT * FROM wp_users WHERE id = $id";
$result = mysqli_query($conn, $query);
?>
