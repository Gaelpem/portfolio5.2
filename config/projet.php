<?php

Class Projet{
   
   private $nom = ""; 
   private $descript = "";

   public function __construct(string $nom, string $descript)
   {
       $this->nom = $nom; 
       $this->nom = $descript; 
   }

   public function setNom(string $nom):void
   {
    
          if(iconv_strlen($nom) > 2 && iconv_strlen($nom) < 20){
            
                       $this->nom = $nom ; 
          }else{
             echo "Nom invalide !"; 
          }
           
   }



   public function setDescript(string $descript):void
   {
    
          if(iconv_strlen($descript) > 2 && iconv_strlen($descript) < 300){
            
                       $this->descript = $descript; 
          }else{
             echo " Descritption doit entre 2 caractere et 300 caractere !"; 
          }
           
   }


  public function getNom():string 
  {
     
      return $this->nom; 

  }



  public function getDescript():string 
  {
     
      return $this->descript; 

  }

}