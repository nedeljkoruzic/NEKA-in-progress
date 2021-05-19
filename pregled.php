<?php
include "crud/pregledc.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../NEKAphp/css/dogadjaj.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>Humanitarni događaji</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">Pregled humanitarnih događaja</h4>
            <hr><br>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>

            <?php } ?>
            <?php if (mysqli_num_rows($result)) { ?>

        </div>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">R.br.</th>
                    <th scope="col">Naziv događaja</th>
                    <th scope="col">Mesto događaja</th>
                    <th scope="col">Datum događaja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_assoc($result)) {
                    $i++;
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $rows['naziv'] ?></td>
                        <td><?php echo $rows['mesto']; ?></td>
                        <td><?php echo $rows['datum']; ?></td>
                        <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Ažuriraj</a>

			      	  <a href="crud/obrisic.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Obriši</a>
			      </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    <?php } ?>
    <div class="kreiraj">
        <a href="Dogadjaj.php" class="NazadnaDogadjaj">Kreiraj novi događaj</a>
    </div>

    </div>
    
   
</body>

</html>