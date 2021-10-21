<?php


require ('model.php');


//////////////////////: start afficher  le formulaire ajout nouveau livre
if(isset($_GET["id"]) &&   $_GET["id"] == 0){

    $_id = $_GET["id"] ; 

    $libelle = "Ajouter" ;

    $livre = getNewLivre();

    require ('indexView.php') ;

}  
//////////////////////: end afficher  le formulaire ajout nouveau livre


//////////////////////////////////////////////////
if(isset($_POST["titre"]) && $_POST["titre"] != ""){


    $titre = $_POST["titre"] ; 
    $auteur = $_POST["auteur"] ; 
    $descriptionlivre = $_POST["descriptionlivre"] ; 
    $dateparution = $_POST["dateparution"] ; 
 
    createLivre($titre, $auteur, $descriptionlivre, $dateparution);

 
    require ('dashView.php');
    echo "livre ajouter avec succes";

    $row = getAllLivres();   

    require ('tabView.php');

 
 
}  
//////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////
if(isset($_GET["action"]) &&   $_GET["action"] == 'galerie'){

    

    $row = getAllLivres();   
    
    require ('dashView.php');

    require ('galerieView.php');
}
//////////////////////////////////////////
if(isset($_GET["id"]) &&   isset($_GET["action"])){


         $id = $_GET["id"] ;

        $libelle = $_GET["action"];
          
    

    $livre = readLivre($id);   
    
    require ('indexView.php') ;

 }  

else {


    $row = getAllLivres();   
    
    require ('dashView.php');

    require ('tabView.php');
}





// createLivre($titre, $auteur, $descriptionlivre, $dateparution)
 

// $req = getPosts();

// <!-- Affichage -->


