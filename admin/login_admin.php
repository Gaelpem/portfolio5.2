<?php
  session_start();
  require_once '../config/database.php'; 

  // Vérification si l'admin est déjà connecté
  if(isset($_SESSION['admin_nom'])){
    header('location: index_admin.php'); 
    exit; 
  }

  // Vérification de la soumission
  if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['admin_email'], $_POST['admin_mdp'])){
        
      $admin_email = filter_var(trim($_POST['admin_email']), FILTER_VALIDATE_EMAIL); 
      $admin_mdp = trim($_POST['admin_mdp']); 

      // Vérifications si les champs sont remplis
      if(!empty($admin_email) && !empty($admin_mdp)){
         
        // Récupération des données
        $sql = "SELECT * FROM admins WHERE admin_email = :admin_email"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->execute([
          "admin_email" => $admin_email
        ]); 
        $admin = $stmt->fetch(PDO::FETCH_ASSOC); 
        
        if($admin){
            if(password_verify($admin_mdp, $admin['admin_mdp'])){
              // Connexion réussie, stocker les informations dans la session
              $_SESSION['admin_nom'] = $admin['admin_nom']; // Ajout de cette ligne
              $_SESSION['admin_email'] = $admin_email; 
              $_SESSION['admin_mdp'] = $admin_mdp;

              header('location: index_admin.php'); 
              exit; 

            } else {
              echo 'Mot de passe incorrect'; 
            }
        } else {
          echo "Aucun administrateur trouvé avec cet email."; 
        }

      } else {
        echo "Veuillez remplir tous les champs.";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
</head>
<body>
    <form action="" method="post"> <!-- correction ici, 'methode' à 'method' -->
        <label for="">Email</label>
        <input type="text" name="admin_email" required>

        <label for="">Mot de passe</label>
        <input type="password" name="admin_mdp" required>

        <button type="submit">Connexion</button>
    </form>
</body>
</html>
