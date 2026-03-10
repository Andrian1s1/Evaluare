<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS event_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
    echo "OK\n";
} catch (Exception $e) {
    echo 'ERR: ' . $e->getMessage() . "\n";
}
