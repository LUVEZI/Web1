<?php
require 'config.php';


$stmt = $pdo->query('
    SELECT a.nom, a.prenom, COUNT(p.id) AS total_presences
    FROM adolescents a
    LEFT JOIN presences p ON a.id = p.adolescent_id AND p.present = 1
    GROUP BY a.id
');
$stats = $stmt->fetchAll();


header('Content-Type: application/json');
echo json_encode($stats);
?>