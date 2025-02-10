<?php
session_start(); 
include "../config/database.php"; 
require_once '../config/projet.php'; 

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['projet_nom'], $_POST['projet_descript'])){
        $projet_nom = htmlspecialchars(trim($_POST['projet_nom'])); 
        $projet_descript = htmlspecialchars(trim($_POST['projet_descript']));

        if(!empty($projet_nom) && !empty($projet_descript)){

            try {
                $projet = new Projet($projet_nom, $projet_descript); 

                // Interaction avec la base de données
                $sql = "INSERT INTO projet(projet_nom, projet_descript) VALUES(:projet_nom, :projet_descript)"; 
                $stmt = $pdo->prepare($sql); 
                $stmt->execute([
                    "projet_nom" => $projet_nom,
                    "projet_descript" => $projet_descript,
                ]); 

                $_SESSION['projet_nom'] = $projet_nom; 
                $_SESSION['projet_descript'] = $projet_descript;

                header('Location: index_admin.php'); 
                exit; 

            } catch (PDOException $e) {
                die("Erreur lors de l'insertion du projet : " . $e->getMessage());
            }

        } else {
            echo "Vous devez remplir tous les champs"; 
        }
    } else {
        echo "Vous devez remplir tous les champs"; 
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un projet</title>
</head>
<body>

<h1> Ajouter  projet </h1>

<form action="" method="post">
    <label for="projet_nom">Nom</label>
    <input type="text" id="projet_nom" name="projet_nom" required>

    <label for="projet_descript">Description</label>
    <input type="text" id="projet_descript" name="projet_descript" required>

    <button type="submit">Ajouter</button>
</form>

</body>
</html>
