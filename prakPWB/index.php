<?php

//code php
//cara deklarasi variabel di php
$nama = "Ghaida Putri Yunisa";

//penggabungan string
echo $nama . "<br>";

const PHI = 3.14;
echo PHI;

//$nama .= "Nama";
//echo "<br>" . $nama;

$books = array("PHP for beginner, javascript");
$authors = ["rasmus lerdof, brenda, mark"]

$authors[0] = "Ghaida Putri Yunisa"

var_dump ($books);
var_dump ($authors);

//menamilkan data data array dalam bentuk list
echo "<ul>";
    for($i = 0; $i < count $authors); $i++ {
        echo <"li"> . $authors[$i] . <"/li">;
    }
echo "</ul>"
