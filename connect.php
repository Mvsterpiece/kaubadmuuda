<?php
$kasutaja='saiko_tarpv21'; // d113371_artjom
$server='localhost'; // d113371.mysql.zonevs.eu
$andmebaas='tarpv21'; // d113371_baas
$salasyna='123456'; // syRWwjXQJR2lglYGDMk6
//teeme käsk mis ühendab andmebaasiga

$yhendus= new mysqli($server,$kasutaja,$salasyna,$andmebaas);
$yhendus->set_charset('UTF8');

?>