<?php
    require_once 'lib/helpers.php';
    require_once 'sources/form.php';
   // require_once 'inc/check-form.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
<div class="container">
    <header class="site-header">
        <h1 id="logh1">Log In</h1>
    </header> 
    <main>
        <?php
            if ($loginOK) {
                require_once 'contents/main-content.php';
            } else {
                require 'contents/login-form.php';
            }    
        ?>
    </main>
</div>
</body>
</html>