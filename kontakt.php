<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kontakt</title>
</head>

<div class="grid-x grid-margin-x">
    <div class="small-8 large-4 cell">
    
    <form action="kontakt.php" method="post">    
    <label>ime
        <input type="text" name="Ime"  />
    </label>    
    <label>prezime
        <input type="text" name="Prezime"  />
    </label>        
    <label>Email
        <input type="email" name="email" />
    </label>
                
    <label>Poruka
        <textarea name="message"></textarea>
    </label>
                
    </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.7656638547605!2d18.696152315166287!3d45.55503937910219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ce7b7f11eb4e7%3A0x347e545141d6af20!2sVijenac+Ivana+Me%C5%A1trovi%C4%87a+74%2C+31000%2C+Osijek!5e0!3m2!1shr!2shr!4v1565803542310!5m2!1shr!2shr" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

<input id="submit" name="submit" type="submit" value="Pošalji" >
 
</form>
<br \>
<a href="index.php">Početna</a>

</div>
<?php
//var_dump($_SESSION);