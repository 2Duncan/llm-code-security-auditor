<?php
// Secure version using prepared statements

global $wpdb;

$id = absint($_GET['id']);

$query = $wpdb->prepare(
    "SELECT * FROM {$wpdb->users} WHERE ID = %d",
    $id
);

$result = $wpdb->get_results($query);

?>
