<?php 

if (isset($_GET['id'])) {
	include "baza_dogadjaja.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM dogadjaji WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: ../pogled.php");
    }


}else if(isset($_POST['update'])){
    include "../baza_dogadjaja.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$naziv = validate($_POST['naziv']);
	$mesto = validate($_POST['mesto']);
    $datum = validate($_POST['datum']);
	$id = validate($_POST['id']);

	if (empty($naziv)) {
		header("Location: ../update.php?id=$id&error=naziv is required");
	}else if (empty($mesto)) {
		header("Location: ../update.php?id=$id&error=mesto is required");
	}else if (empty($datum)) {
		header("Location: ../update.php?id=$id&error=datum is required");
    }else {

       $sql = "UPDATE dogadjaji
               SET mesto='$mesto', naziv='$naziv', datum='$datum'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../pogled.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: ../NEKAphp/pregled.php");
}