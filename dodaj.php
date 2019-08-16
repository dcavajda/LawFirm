<?php
require_once "baza.php";

$izraz=$veza->prepare("insert into lawyer 
(firstname,lastname,OIB,IBAN) values 
(:firstname,:lastname,:OIB,:IBAN)");

$izraz->execute($_POST);

header("location: lawfirm1.php");

