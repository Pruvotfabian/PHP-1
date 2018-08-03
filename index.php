<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP is life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/app.css" />
 
</head>
<body>
    <?php
    $titres = array("titre1","titre2","titre3","titre4");

    for ($i=0; $i < count($titres); $i++) { 
    
    ?>
    <div class="contain flex">
    <p>
    <?php
    echo $titres[$i] . " ";
    
    ?>
    </p>
    </div>
    <?php



    }
    ?>
</body>
</html>