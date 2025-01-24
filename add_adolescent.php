<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $contact_parent = $_POST['contact_parent'];


    $stmt = $pdo->prepare('INSERT INTO adolescents (nom, prenom, date_naissance, contact_parent) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nom, $prenom, $date_naissance, $contact_parent]);


    header('Location: ../index.html');
    exit;
}
?>