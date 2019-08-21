<!DOCTYPE HTML>
<html>
<?php include_once "head.php"?>
Click <a href="https://github.com/dcavajda/LawFirm">here</a> to go to github.

<?php include_once "konfiguracija.php" ?>
<br>
Click <a href="kontakt.php">here</a>to go to contact
<form action="autoriziraj.php" method="post">
<label>email
    <input type="email" name="email" />
</label>
<label>password
    <input type="password" name="lozinka" />
</label>
<input type="submit" value="Autoriziraj">
</form>
<?php

if(isset($_GET["g"])){
    echo $poruke[$_GET["g"]];
}



