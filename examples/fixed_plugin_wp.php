<?php
// WordPress standard secure approach
global $wpdb;

// Sanitize input
$id = absint($_GET['id']);

// Prepare query safely
$query = $wpdb->prepare(
    "SELECT * FROM {$wpdb->users} WHERE ID = %d",
    $id
);

// Execute query
$result = $wpdb->get_results($query);
?>
