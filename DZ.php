
<?php
//Iz svoje baze izvući sve nazive entiteta koji nemaju vanjski ključ


$veza = new PDO("mysql:dbname=lawfirm; host=localhost",
"edunova","edunova");

$izraz = $veza->query("select * from legal_case;");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
//var_dump($rezultati);
echo "</pre>";

foreach($rezultati as $red){
    echo $red->case_date_start, "<br />";
    echo $red->case_date_end, "<br />";
}