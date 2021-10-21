<?php
        // include 'model.php';
        // $livre = getNewLivre();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        
    
    <div class="container  ">

        <div class="row">
            <div class="col-md-6">    
                <h1 >LIVRES</h1>
                <hr>



            <form action="index.php" method="POST" class= "justify-content-center">
                    

                <div class="form-group w-50">
                    <label for="reference">reference</label>
                    <input type="text" disabled
                      class="form-control" name="reference" id="reference" placeholder="reference" 
                      value="<?php echo $livre["id"]; ?>">
                      
                   </div>
                <div class="form-group w-50" >
                    <label for="titre">titre</label>
                    <input type="text"
                      class="form-control" name="titre" id="titre"   placeholder="titre" value="<?php echo $livre["titre"]; ?>">
                   </div>
                <div class="form-group w-50">
                    <label for="auteur">auteur</label>
                    <input type="text"
                      class="form-control" name="auteur" id="auteur" aria-describedby="helpId" placeholder="auteur" value="<?php echo $livre["auteur"]; ?>">
                   </div>
                <div class="form-group w-50">
                    <label for="description">description</label>
                    <input type="text"
                      class="form-control" name="descriptionlivre" id="description" aria-describedby="helpId" placeholder="description" value="<?php echo $livre["descriptionlivre"]; ?>">
                </div>
                <div class="form-group w-50">
                    <label for="date">date</label>
                    <input type="text"
                      class="form-control" name="dateparution" id="date" aria-describedby="helpId" placeholder="date" value="<?php echo $livre["dateparution"]; ?>">
                </div>
                <div class="form-group w-50">



                <?php  

                if($libelle == "modifier"){ ?>

                    <button type="submit" class="btn btn-success"><?php echo $libelle; ?></button>

                    <?php          
                }
                   ?>

<?php 

                if($libelle == "supprimer"){   ?>

                    <button type="submit" class="btn btn-danger"><?php echo $libelle; ?></button>

                    <?php            

                } 
                
                if( $_GET["id"] == 0){                   ?>

                    <button type="submit" class="btn btn-primary"><?php echo $libelle; ?></button>


                    <?php       } else {

                                header ('location:index.php');
                    }

                
                
                ?>

                 </div>
                   

            </form>

            </div>
       


        </div>
           
    </div>







































    <!-- ////////////////////////////////////////////// -->
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
        
        <?php
     
        while ($donnees = $req->fetch())
        {
        ?>
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['titre']); ?>
             </h3>
            
            <p>
            <?php
            echo nl2br(htmlspecialchars($donnees['contenu']));
            ?>
            <br />
            <em><a href="#">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $req->closeCursor();
        ?>


<!-- /////////////////////////////////////////// -->

    </body>
</html>

