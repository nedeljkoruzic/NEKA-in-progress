<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../NEKAphp/css/dogadjaj.css" type="text/css">
    <title>Humanitarni događaji</title>
</head>

<body>
    <div class="container">

        <form action="crud/kreiraj.php" method="POST">
            <h4 class="display-4 text-center">Kreiraj događaj</h4>
            <hr><br>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>

            <?php } ?>

            <div class="form-group">
                <label for="Name">Naziv događaja</label>
                <input type="text" class="form-control" id="name" placeholder="Naziv" name="naziv" value="<?php if (isset($_GET['naziv']))
                                                                                                                echo ($_GET['naziv']); ?>">
            </div>
            <div class="form-group">
                <label for="Place">Mesto događaja</label>
                <input type="text" class="form-control" id="place" placeholder="Mesto" name="mesto" value="<?php if (isset($_GET['mesto']))
                                                                                                                echo ($_GET['mesto']); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputDate">Datum</label>
                <input type="date" class="form-control" id="date" placeholder="Datum" name="datum" value="<?php if (isset($_GET['datum']))
                                                                                                                echo ($_GET['datum']); ?>">
            </div>

            <button type="submit" class="dugme" name="kreiraj" id="kreirajdugme">&nbsp Kreiraj &nbsp</button>
            <a href="pregled.php" class="dugme2">Spisak događaja</a>
            
        </form>
    </div>
</body>

</html>