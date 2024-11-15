<?php




    $baza = mysqli_connect("localhost","root","","prvi_cas");


    if (mysqli_connect_error()){
        die("desila se gresika prilikom konektovanja na bazu podataka");
    }






    $ime =  mysqli_real_escape_string( $baza,"krompir");
    $opis = mysqli_real_escape_string( $baza,"domaci krompir prve klase");
    $cena = mysqli_real_escape_string( $baza,100.22);
    $datum_nabavke = mysqli_real_escape_string( $baza,"2000-03-02");
    $kolicina = mysqli_real_escape_string( $baza,4);



    $baza->query("INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES('$ime','$opis','$cena','$datum_nabavke','$kolicina')");


?>