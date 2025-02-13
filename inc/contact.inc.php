<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include 'config/database.php';
require_once 'config/formulaire.php';

$error_message = ""; // Variable pour stocker le message d'erreur
$success_message = ""; // Variable pour stocker le message de succès

if (isset($_SESSION['admin_user'])) {
    header('location: admin/index.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["user_nom"]) && !empty($_POST["user_email"]) && !empty($_POST["user_message"])) {
        // Récupération et sécurisation des données
        $user_nom = htmlspecialchars(trim($_POST["user_nom"]));
        $user_email = htmlspecialchars(trim($_POST["user_email"]));
        $user_message = htmlspecialchars(trim($_POST["user_message"]));

        try {
            // Création de l'instance Formulaire (si cette classe existe et est utile)
            $formulaire = new Formulaire([
                "user_nom" => $user_nom,
                "user_email" => $user_email,
                "user_message" => $user_message
            ]);

            // Connexion à la base de données 
          

            // Requête SQL corrigée
            $sql = "INSERT INTO utilisateur (user_nom, user_email, user_message) VALUES (:user_nom, :user_email, :user_message)";

            // Préparation et exécution de la requête
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                "user_nom" => $user_nom,
                "user_email" => $user_email,
                "user_message" => $user_message,
            ]);

            // Stockage des valeurs de l'utilisateur dans la session
            $_SESSION['user_nom'] = $user_nom;
            $_SESSION['user_email'] = $user_email;
            $_SESSION['user_message'] = $user_message;

            // Redirection avant tout contenu HTML
            $success_message = "Votre message a bien été envoyé !";

        } catch (Exception $e) {
            $error_message = 'Erreur : ' . $e->getMessage();
        }

    } else {
         $error_message = 'Tous les champs doivent être remplis!';
    }
}
?>

<section  class="portfolio-section contact">
   
     <h2 id="contact-menu">[Conta-ct]<span class="numero">(03)</span></h2> 

      <div class="contact-mini">
       <p>Pour toutes questions, avis, opportunités de stage ou d’alternance, n’hésitez pas à me contacter. Je suis ouvert aux échanges et prêt à discuter avec vous.
       </p>
         <form class= "contact-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
         <label for="nom">Nom</label>
         <input type="text" name="user_nom" id="nom" placeholder="Paul">

         <label for="email">Email</label>
         <input type="text" name="user_email" id="email" placeholder="exemple@gmail.com">

         <label for="message">Votre message</label>
         <input type="text" name="user_message" id="message" placeholder="Bonjour Gaël...">
         <?php if (!empty($error_message)): ?>
                <p class="error-message"><?= htmlspecialchars($error_message) ?></p>
            <?php endif; ?>

            <?php if (!empty($success_message)): ?>
                <p class="success-message"><?= htmlspecialchars($success_message) ?></p>
            <?php endif; ?>

         <button type="submit">Envoyez</button>
      </form>

      <ul class="reseau">
        <li><a href="">pembelegael@gmail.com</a></li>
        <li><a href="">linkedin</a></li>
        <li><a href="">github</a></li>
        <li><a href="">instagram</a></li>
     </ul>
     </div> 
</section>
