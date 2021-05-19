<?php

if(isset($_POST['kreiraj'])){
    include "../baza_dogadjaja.php";

    function validiraj($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $naziv=validiraj($_POST['naziv']);
    $mesto=validiraj($_POST['mesto']);
    $datum=validiraj($_POST['datum']);

    $user_data='naziv='.$naziv.'&mesto='.$mesto.'&datum='.$datum;

    if(empty($naziv)){
        header("Location: ../Dogadjaj.php?error=Naziv događaja je obavezan");
    }else if(empty($mesto)){
        header("Location: ../Dogadjaj.php?error=Mesto događaja je obavezno");
    }else if(empty($datum)){
        header("Location: ../Dogadjaj.php?error=Datum događaja je obavezan");
    }else{
        $sql = "INSERT INTO dogadjaji(naziv,mesto,datum)
                VALUES ('$naziv','$mesto','$datum')";

        $rezultat=mysqli_query($conn,$sql);
        if($rezultat){
            header("Location: ../pregled.php?success=Uspešno ste kreirali događaj!");
        }else{
            header("Location: ../Dogadjaj.php?error=unknown error
                    occurred&user_data");
        }
    }
}





