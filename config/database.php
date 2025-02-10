<?php 
const DB_HOST = "localhost"; 
const DB_NAME = "portfolio2";
const DB_USER = "root"; 
const DB_PASS = "root"; 

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch (Exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage()); 
}
?>
