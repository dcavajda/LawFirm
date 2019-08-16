<?php

switch ($_SERVER["REMOTE_ADDR"]) {
    case '127.0.0.1': //moj lokalni razvoj
        $server="localhost";
        $baza="lawfirm";
        $korisnik="edunova";
        $lozinka="edunova";
        break;
    
    case '31.147.185.242': //edunova shared hosting
        $server="localhost";
        $baza="morfej_lawfirm";
        $korisnik="morfej_lawfirm";
        $lozinka="lawfirm";
        break;
}

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

//$veza = new PDO("mysql:dbname=edunovapp19;host=localhost",
//"edunova","edunova");

$veza = new PDO("mysql:dbname=" . $baza . ";host=" . $server,
$korisnik,$lozinka,[PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"]);