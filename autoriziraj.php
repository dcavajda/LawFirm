<?php
include_once "konfiguracija.php";

if(!$_POST || !isset($_POST["email"]) || !isset($_POST["lozinka"])){
    exit;
}

//uvdje će doći autorizacija na bazu
if($_POST["email"]==="edunova@edunova.hr" && $_POST["lozinka"]==="edunova"){

    //autoriziran sam
    $_SESSION["autoriziran"]="edunova";
    header("location: privatno.php");

}else{

    //nisam autoriziran
    header("location: index.php?g=1");

}

