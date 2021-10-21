<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>

<div class="container">
    <div class="row">
        <h1 class=" col-6">LIBRAIRIE</h1>

    </div>


</div>


<!-- /////////////////- start nav bar -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active">TABLEAU DE BORD</a>
        </li>
        
        <li class="nav-item">

            <a href="index.php?id=0"  class="nav-link">AJOUTER LIVRE</a>
        </li>
        <li class="nav-item">
            <a href="index.php?action=galerie" class="nav-link ">GALERIE</a>
        </li>
        
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
    <!-- //////////////////////////:: - end nav bar -->
    
</body>
</html>