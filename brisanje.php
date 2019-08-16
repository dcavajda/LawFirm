<?php
require_once "baza.php";

$izraz=$veza->prepare ("delete from lawyer where lawyer_id=:lawyer_id");
$izraz->execute($_GET);

header("location: lawfirm1.php");