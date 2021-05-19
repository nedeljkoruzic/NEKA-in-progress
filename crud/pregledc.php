<?php

include "baza_dogadjaja.php";

$sql= "SELECT * FROM dogadjaji ORDER BY datum ASC";
$result = mysqli_query($conn, $sql);