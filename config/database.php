<?php

const DB_HOST = 'vivaldi.o2switch.net';
const DB_NAME = 'pega5739_zippette';
const DB_USER = 'pega5739';
const DB_PASS = '3CFq-CdPH-vWC{'; 

try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
} catch (Exception $e) {
    die("Connexion à la base impossible : " . $e->getMessage());
}
