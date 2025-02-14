<?php
include "../config/database.php"; 

session_start();
// verification si l'admin est deja connecter
if(!isset($_SESSION["admin_nom"])){
    header('location: login_admin.php'); 
    exit; 
}

// Gestion de la déconnexion
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login_admin.php");
    exit;
}

//preparation de la requete pour l'utilisateur
$sql = 'SELECT id_user, user_email, user_nom, user_message, date_user FROM utilisateur'; 
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC); 

//preparation de la requete pour les projets
$sql = 'SELECT id_projet, projet_nom, projet_descript, projet_date FROM projet'; 
$stmt = $pdo->prepare($sql);
$stmt->execute(); 
$projets = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset_admin.php/css/style2.css">
    <link rel="icon" href="/asset/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Oswald:wght@200..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<header>
    <!-- Navigation principale -->
    <nav class="navbar">
        <!-- Lien vers Accueil -->
        <!-- Logo -->
        <div class="logo">
            <img src="asset_admin.php/img2/logo.svg" alt="Logo de mon site">
        </div>

        <!-- Liens de navigation -->
        <ul class="nav-links">
        <li><a href="#accueil-menu" aria-label="Retour à l'accueil">accueil,</a></li>
            <li><a href="#projet-menu" aria-label="Voir mes projets">projets,</a></li>
            <li><a href="#projet-about" aria-label="À propos de moi">à propos,</a></li>
            <li><a href="#contact-menu" aria-label="Contactez-moi">contact</a></li>
        </ul>
    </nav>

   
        
    </div>
</header>
</script>
    <main>
        <h1>[Utilisateurs]</h1>
    <table class="utilisateurs">
        <th>ID</th>
        <th>NOM</th>
        <th>EMAIL</th>
        <th>MESSAGE</th>
        <th>DATE</th>

        <?php foreach ($utilisateurs as $utilisateur): ?>
        <tr>
            <td><?= htmlspecialchars($utilisateur['id_user']) ?></td>
            <td><?= htmlspecialchars($utilisateur['user_nom']) ?></td>
            <td><?= htmlspecialchars($utilisateur['user_email']) ?></td>
            <td><?= htmlspecialchars($utilisateur['user_message']) ?></td>
            <td><?= htmlspecialchars($utilisateur['date_user']) ?></td>
            <td> 
                <form action="delete.php" method="get">
                    <input type="hidden" name="id" value="<?= $utilisateur['id_user'] ?>">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <h1>[Projets]</h1>
    <table>
        <th>ID</th>
        <th>NOM</th>
        <th>Description</th>
        <th>DATE</th>

        <?php foreach ($projets as $projet): ?>
        <tr>
            <td><?= htmlspecialchars($projet['id_projet']) ?></td>
            <td><?= htmlspecialchars($projet['projet_nom']) ?></td>
            <td><?= htmlspecialchars($projet['projet_descript']) ?></td>
            <td><?= htmlspecialchars($projet['projet_date']) ?></td>
            <td>
            <form action="projet_delete.php" method="get">
                    <input type="hidden" name="id_2" value="<?= $projet['id_projet'] ?>">
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <form action="" method="post">
        <button name="logout" type="submit">Déconnexion</button>
    </form>
    </main>
<script src="asset_admin.php/js2/app2.js"></script>
  
</body>
</html>
