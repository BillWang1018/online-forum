<?php
    // replace mydatabase.db to actual path
    try {
        $db = new PDO('sqlite:bubbles.db');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>