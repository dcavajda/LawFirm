<?php include_once "konfiguracija.php";
if(!isset($_SESSION["autoriziran"])){
    header("location: index.php");
    exit;
}
include_once "lawfirm1.php";

?>







<a href="odjava.php">Odjava</a>

