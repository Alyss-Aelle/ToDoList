<?php

include ("config.php") ;

include ($dir_common."db.php") ;

// var_dump($_GET);
// var_dump($_POST);

switch ($_GET['mod']) { // gestion du mod d'arrivée en GET 

    case 'add'://ajouter une tache en base 
        

            //creation d'une requete : requete insertion
        $sql = "INSERT INTO taches ( tache, etat) VALUES ('".$_POST['tache']."','n')";

            //execution de ma requete
        $mysqli->query($sql);
        # code...
        break;
        
    case 'delete': //supprimer une tache en base
        
        //requete de suppression
        $sql = 'DELETE FROM taches WHERE id ='.$_GET['id'] ;

        //execution de ma requete
        $mysqli->query($sql);
            # code...
            break;

            
    case 'update'://modifier une tache en base        

        //requete de suppression
        $sql = "UPDATE taches SET etat='o' WHERE id =".$_GET['id'] ;

        //execution de ma requete
        $mysqli->query($sql);
    default:
        # code...
        break;
}

// header("Location : index.php") ; redirection vers la meme page
?>