<?php
class Formulaire {
    const ERROR_NOM = 'Nom incorrect';
    const ERROR_EMAIL = 'Email incorrect';
    const ERROR_MESSAGE = 'Le message doit contenir entre 2 et 300 caractères';

    private string $nom = "";
    private string $email = "";
    private string $message = "";

    public function __construct(array $data) {
        if (!empty($data["user_nom"]) && !empty($data["user_email"]) && !empty($data["user_message"])) {
            $this->setNom($data["user_nom"]);
            $this->setEmail($data["user_email"]);
            $this->setMessage($data["user_message"]);
        } else {
            throw new Exception("Tous les champs doivent être remplis.");
        }
    }

    public function setNom(string $nom): void {
        $nom = htmlspecialchars(trim($nom));
        if (iconv_strlen($nom) < 2) {
            throw new Exception(self::ERROR_NOM);
        }
        $this->nom = ucfirst(strtolower($nom)); // Met la première lettre en majuscule
    }

    public function setEmail(string $email): void {
        $email = htmlspecialchars(trim($email));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception(self::ERROR_EMAIL);
        }
        $this->email = $email;
    }

    public function setMessage(string $message): void {
        $message = htmlspecialchars(trim($message));
        if (iconv_strlen($message) < 2 || iconv_strlen($message) > 300) {
            throw new Exception(self::ERROR_MESSAGE);
        }
        $this->message = $message;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getMessage(): string {
        return $this->message;
    }
}
?>
