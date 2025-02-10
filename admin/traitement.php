<?php
class  Admin{
    const ERROR_NOM = "Nom incorrect"; 
    const ERROR_EMAIL = "Email incorret"; 
    const ERROR_MDP = "Mot de passe incorrect"; 

    private string $nom = ""; 
    private string $email = ""; 
    private string $mdp = ""; 

    public function __construct(array $data){
      if(!empty($data["admin_nom"]) && !empty($data["admin_email"]) && !empty($data["admin_mdp"]))
          $this->setNom($data["admin_nom"]); 
          $this->setEmail($data["admin_email"]); 
          $this->setMdp($data["admin_mdp"]); 
    }
    

    public function setNom(string $nom) : void {
                         
                $nom = strtolower($nom);
                if(iconv_strlen($nom) >= 3 && iconv_strlen($nom) <=  20){
                    $this->nom = $nom  ; 
                }else{
                    throw new Exception(self::ERROR_NOM); 
                }

    }


    public function setEmail(string $email) : void{
          
                        
                        if (ctype_lower($email[0])) {
                            $premiereLettreMin = true; // verification si la 1re lettre est en miniscule
                        }

                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $this->email = $email ; 
                        }else{
                            throw new Exception(self::ERROR_EMAIL); 
                        }
    }



    public function setMdp(string $mdp): void {
        // Vérification du mot de passe avec une expression régulière
        if (strlen($mdp) >= 8 
            && preg_match('/[A-Za-z]/', $mdp) // Au moins une lettre
            && preg_match('/[0-9]/', $mdp) // Au moins un chiffre
            && preg_match('/[%+\?=#]/', $mdp) // Au moins un caractère spécial
        ) {
            $this->mdp = password_hash($mdp, PASSWORD_BCRYPT); // Hash du mot de passe
        } else {
            throw new Exception(self::ERROR_MDP); // Lancer une erreur si le mot de passe est invalide
        }
    }
    


    public function getNom() : string{
        return $this->nom; 
    }


    public function getEmail() : string{
        return $this->email; 
    }


    public function getMdp() : string{
        return $this->mdp; 
    }
    
}


?>
