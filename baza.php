<?php



    $baza = mysqli_connect("localhost","root","","prvi_cas");


    if (mysqli_connect_error()){
        die("desila se gresika prilikom konektovanja na bazu podataka");
    }

    if ( !isset($_POST["ime_proizvoda"]) || empty($_POST["ime_proizvoda"])  ){
        die("niste prosledili ime proizvoda");
    }
    if ( !isset($_POST["opis"]) || empty($_POST["opis"])  ){
        die("niste prosledili opis");
    }
    if ( !isset($_POST["cena"]) || empty($_POST["cena"])  ){
        die("niste prosledili cenu proizvoda");
    }
    if ( !isset($_POST["kolicina"]) || empty($_POST["kolicina"])  ){
        die("niste prosledili kolicinu proizvoda");
    }
    if ( !isset($_POST["datum_nabavke"]) || empty($_POST["datum_nabavke"])  ){
        die("niste prosledili datum nabavke");
    }




    $imePorizvoda =  mysqli_real_escape_string( $baza,$_POST["ime_proizvoda"] );
    $opis =  mysqli_real_escape_string( $baza,$_POST["opis"] );
    $cena =  mysqli_real_escape_string( $baza,$_POST["cena"] );
    $kolicina = mysqli_real_escape_string( $baza, $_POST["kolicina"] );
    $datumNabavke = mysqli_real_escape_string( $baza,$_POST["datum_nabavke"] );



    $query = "INSERT INTO proizvodi ( ime,opis,cena,kolicina,dan_nabavke ) VALUE ('$imePorizvoda','$opis','$cena','$kolicina','$datumNabavke')";


    $baza -> query($query);

    var_dump($_POST);


?>