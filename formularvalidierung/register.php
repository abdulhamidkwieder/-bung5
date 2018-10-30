<?php
require_once 'lib/helpers.php';
require_once 'sources/register-form.php';
// require_once 'inc/check-register-form.php';

?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style/layout.css">
    <title>Registrieren</title>
  </head>
  <body>
    <div class="container">
    <header class="site-header" style="margen-bottom: 20px;">
        <h1 id="logh1">Registrieren Sie bei uns</h1>
    </header>
    <main>
     <?php
          if (!empty($errors)) {
             echo '<ul class="form-errors">';
             foreach ($errors as $error) {
                  echo "<li>$error</li>";
              }
              echo '</ul>';
          }

         if ($formOK) {
             require 'contents/register-ok.php';
          }
         else {
              require 'contents/register-form.php';          
          }
      ?>
    </main>
    </div>
  </body>
</html>
