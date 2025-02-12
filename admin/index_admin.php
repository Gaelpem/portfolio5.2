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


<title>Document</title>
</head>
<body>
    <main>
    <table>
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

  
</body>
</html>