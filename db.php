<?php
    // replace mydatabase.db to actual path
    try {
        $db = new PDO('sqlite:bubbles.db');
        $db->query("PRAGMA busy_timeout=60");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>