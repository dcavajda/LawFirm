<?php
require_once "baza.php";

$izraz=$veza->prepare("update lawyer 
set firstname=:firstname,
lastname=:lastname,
OIB=:OIB,
IBAN=:IBAN,
 where lawyer_id=:lawyer_id");
$izraz->execute($_POST);

header("location: lawfirm1.php");


