<?php
require 'config.php';

$stmt = $pdo->query('SELECT id, nom, prenom FROM adolescents');
$adolescents = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($adolescents);
?>