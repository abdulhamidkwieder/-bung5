<?php
    foreach($errors as $error) {
        echo $error;
    }
?>
<div class="p-5">
<form action="" method="post" class="pure-form pure-form-stacked">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email-Adresse:</label>
            <input type="email" class="form-control" name="emailAdresse" id="inputEmail4" placeholder="Email-Adresse">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Passwort:</label>
            <input type="password" class="form-control" name="passwort" id="inputPassword4" placeholder="Passwort">
        </div>
        <label class="form-check-label">
            <a href="#">Konto vergessen?</a>
        </label>
    </div>
    <div id="senden">
        <input type="submit" value="Anmelden" class="pure-button pure-button-primary">
        <label class="form-check-label" for="#">
        <p>Haben Sie kein Konto?  <a href="register.php">Registrieren</a></p>
    </label>
    </div>
    </div>
</form>
</div>
