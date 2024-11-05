<?php




    $baza = mysqli_connect("localhost","root","","prvi_cas");


    if (mysqli_connect_error()){
        die("desila se gresika prilikom konektovanja na bazu podataka");
    }



//    mysqli_query($baza,"INSERT INTO korisnici (email,lozinka,datumRodjenja) VALUES ('proba@gmail.com','123456','1994-04-22')");


    $ime = "krompir";
    $opis = "domaci krompir prve klase";
    $cena = 100.22;
    $datum_nabavke = "2000-03-02";
    $kolicina = 4;



    $baza->query("INSERT INTO proizvodi (ime,opis,cena,dan_nabavke,kolicina) VALUES('$ime','$opis','$cena','$datum_nabavke','$kolicina')");


?>