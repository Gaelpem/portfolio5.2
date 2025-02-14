<?php
session_start();

// si l'admin n'est pas encore connnecté 

if (!isset($_SESSION['admin_nom'])) {
    header('Location: login_admin.php');
    exit;
}

require_once '../config/database.php'; // Inclure la connexion à la base de données

// Vérifie si un ID d'utilisateur a été passé via l'URL
if (isset($_GET['id'])) {
    $id_user = (int)$_GET['id'];

    // Vérifier si l'ID existe dans la base de données
    $sql_check = "SELECT id_user FROM utilisateur WHERE id_user = :id_user";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute(['id_user' => $id_user]);

    if ($stmt_check->rowCount() > 0) {
        // L'ID existe, procéder à la suppression
        try {
            $sql = "DELETE FROM utilisateur WHERE id_user = :id_user";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id_user' => $id_user]);
                   
            header("Location: index_admin.php"); 
            if ($stmt->rowCount() > 0) {
                echo "L'utilisateur a été supprimé avec succès.";
            } else {
                echo "Aucun utilisateur trouvé avec cet ID.";
            }

            header("Location: index_admin.php");
            exit;

        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet ID.";
    }
} else {
    echo "Aucun ID d'utilisateur spécifié.";
}
?>