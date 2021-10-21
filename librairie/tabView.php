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
    
                
<table class="table">
                <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                                                        
                        <?php
                             foreach($row as $row): 
                        ?>

                    <tr>
                                        

                        <td><?php echo $row["id"];?></td>

                        <td><?php echo $row["titre"];?></td>
                        <td><?php echo $row["auteur"];?></td>
                        <td><?php echo $row["descriptionlivre"];?></td>
                        <td><?php echo $row["dateparution"];?></td>

                                    
                    </tr>
                        <?php endforeach ?>
    
                    
                </tbody>
            </table>
                

</div>




    
</body>
</html>