<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adolescent_id = $_POST['adolescent_id'];
    $date = $_POST['date'];
    $present = isset($_POST['present']) ? 1 : 0;


    $stmt = $pdo->prepare('INSERT INTO presences (adolescent_id, date, present) VALUES (?, ?, ?)');
    $stmt->execute([$adolescent_id, $date, $present]);


    header('Location: ../mark_presence.html');
    exit;
}
?>