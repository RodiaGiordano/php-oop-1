<?php 
    include __DIR__ . './db.php';

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vue 3 -->
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row flex-wrap gap-3 mt-5 m-auto">
            <?php foreach($filmsArray as $element): ?>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                    
                        <?= $element->getDetails() ?>  

                    </ul>
                </div>
            <?php endforeach ?>

            
        </div>
    </div>
</body>
</html>