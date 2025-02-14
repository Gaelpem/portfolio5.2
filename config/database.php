<?php

const DB_HOST = 'localhost';
const DB_NAME = 'portfolio2';
const DB_USER = 'root';
const DB_PASS = 'root'; 

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
} catch (Exception $e) {
    die("Connexion à la base impossible : " . $e->getMessage());
}
