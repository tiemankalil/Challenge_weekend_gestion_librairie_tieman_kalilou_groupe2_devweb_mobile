<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>

<div class="container">

 <div class="row">

                
            
                <?php   foreach($row as $row):     ?>
     
     <article class=" col-12 col-md-6 col-lg-3 my-4">
        <div class="card  ">
            <img src="img/img1.jpg" alt="" class="card-img-top">
            <div class="card-body justify-content-center">
            <h1 class="h3" ><?php echo $row["titre"];?></h1 >
            <h2 class="h4" ><?php echo $row["titre"];?></h2 >

                <P class="card-text"><?php echo $row["descriptionlivre"];?></P>
                <p><?php echo $row["dateparution"];?></p>
               
                <div class=" card ">
                         <a href="index.php?id=<?php echo $row["id"]?>&action=modifier" class="btn btn-success m-2">Modifier</a>
                        <a href="index.php?id=<?php echo $row["id"]?>&action=supprimer" class="btn btn-danger m-2">Supprimer</a>
                   
                  </div>               
            </div>
        </div>
     </article>
                <?php endforeach ?>


 </div>
    

</div>




    
</body>
</html>