<?php
require_once '../config/database.php'; 
session_start(); // Démarrage de la session

// Traitement du formulaire d'inscription de l'administrateur
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['admin_nom'], $_POST['admin_email'], $_POST['admin_mdp'])) {
        // Récupérer les données du formulaire
        $admin_nom = htmlspecialchars(trim($_POST['admin_nom']));
        $admin_email = htmlspecialchars(trim($_POST['admin_email']));
        $admin_mdp = htmlspecialchars(trim($_POST['admin_mdp']));

        // Hachage du mot de passe
        $motPassHash = password_hash($admin_mdp, PASSWORD_DEFAULT);

        // Vérification si les champs sont remplis
        if (!empty($admin_nom) && !empty($admin_email) && !empty($admin_mdp)) {
            // Insertion de l'administrateur dans la base de données
            $sql = "INSERT INTO admins (admin_nom, admin_email, admin_mdp) VALUES (:admin_nom, :admin_email, :admin_mdp)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'admin_nom' => $admin_nom,
                'admin_email' => $admin_email,
                'admin_mdp' => $motPassHash
            ]);

            // Enregistrer les données de l'administrateur dans la session
            $_SESSION['admin_nom'] = $admin_nom; 
            $_SESSION['admin_email'] = $admin_email; 
            $_SESSION['admin_mdp'] = $motPassHash; // Corrigé ici
            
            // Redirection vers la page d'administration
            header('Location: index_admin.php');
            exit;
        } else {
            echo "Veuillez remplir tous les champs.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Administrateur</title>
</head>
<body>
    <h2>Créer un Administrateur</h2>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="admin_nom">Nom :</label>
        <input type="text" name="admin_nom" required><br>

        <label for="admin_email">Email :</label>
        <input type="email" name="admin_email" required><br>

        <label for="admin_mdp">Mot de passe :</label>
        <input type="password" name="admin_mdp" required><br>

        <button type="submit">Créer l'Administrateur</button>
    </form>
</body>
</html>
