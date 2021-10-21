<?php
function connexiondb(){

        try
        {
            $dbco = new PDO('mysql:host=localhost;dbname=librairie;charset=utf8', 'root', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

                return $dbco ;


}



function getNewLivre(){
        $livre["id"] = "";
        $livre["titre"] = "";
        $livre["auteur"] = "";
        $livre["descriptionlivre"] = "";
        $livre["dateparution"] = "" ;
        
        return $livre ;
}


function createLivre($titre, $auteur, $descriptionlivre, $dateparution) {
        try {
                $dbco = Connexiondb();
                $sql = "INSERT INTO livres (titre, auteur, descriptionlivre, dateparution) 
                                VALUES ('$titre', '$auteur', '$descriptionlivre' ,'$dateparution')";
            $dbco->exec($sql);
 
        }

    catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
    }
}
 


////////// récupere tous les livres
        
	function getAllLivres(){
		$dbco = Connexiondb();
		$sql = 'SELECT * from livres  ORDER BY id DESC';
		$stmt = $dbco->query($sql);
                $row = $stmt->fetchAll(); 
		return $row;
	}











/////////////////////////////////////////////////

function getPosts(){
            // Récupération des données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            $req = $bdd->query('SELECT id, titre, contenu FROM billets ORDER BY id DESC LIMIT 0, 5');

                    return $req ;

}
///////////////////////////////////////////////////////////////

///// ---fonction obtenir (lire(read)) un utilisateur en utilisant don id en parametre----///////////

function readLivre($id){
        $conn =  Connexiondb();
        $sql = "SELECT * FROM livres WHERE id = $id";
        $stmt = $conn->query($sql);
        $row = $stmt->fetchAll();
        if(!empty($row)){
            return $row[0] ;
        }
        
    
    }
    

 
