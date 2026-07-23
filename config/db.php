<?php
    try{
        $pdo = new PDO(
            'mysql:host=localhost;dbname=fintech_db;charset=utf8mb4', 
            'fintech_admin', 
            '@FintechOrdis#2026!', 
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
             PDO::ATTR_EMULATE_PREPARES => false
            ]);
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données Fintech-Ordis : ' . $e->getMessage());
    }
?>