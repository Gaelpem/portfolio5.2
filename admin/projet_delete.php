<?php
session_start();


if (!isset($_SESSION['admin_nom'])) {
    header('Location: login_admin.php');
    exit;
}
   
require_once '../config/database.php';



if(isset($_GET['id_2'])){
     $id_projet = (int)$_GET['id_2'] ; 



//  Recuperation des donnneee 

$sql_checker = "SELECT id_projet  FROM  projet WHERE id_projet= :id_projet";
$stmt_checker = $pdo->prepare($sql_checker); 
$stmt_checker->execute([
    "id_projet" =>  $id_projet,
]); 

  if($stmt_checker->rowCount() > 0){
     // L'ID existe, procéder à la suppression
     try{
          
        $sql = "DELETE FROM projet WHERE id_projet= :id_projet"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->execute([
            "id_projet" => $id_projet,
        ]); 

        if($stmt->rowCount() > 0){
            // si un projet a été trouvé 
            echo "Projet trouver"; 
        }else{
            echo "Aucun projet trouver"; 
        }

        header(
            'location: index_admin.php'
        ); 
        exit; 

     }catch(Exception $e){
           
           echo "Erreur: " .$e->getMessage(); 
     }
  }else{
    echo "Aucun utilisateur trouvé"; 
  }
   
}else{
    echo  "Aucun utilisateur trouvé"; 
}

