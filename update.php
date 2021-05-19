<?php include "crud/updatec.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dogadjaj.css">
</head>
<body>
	<div class="container">
		<form action="crud/updatec.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
           <?php if(isset($_GET['success'])){ ?>
                <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
                </div>
            
            <?php }?> 
		   <div class="form-group">
		     <label for="naziv">Naziv</label>
		     <input type="text" 
		           class="form-control" 
		           id="naziv" 
		           name="naziv" 
		           value="<?=$row['naziv'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="mesto">Mesto</label>
		     <input type="text" 
		           class="form-control" 
		           id="mesto" 
		           name="mesto" 
		           value="<?=$row['mesto'] ?>" >
		   </div>
           <div class="form-group">
		     <label for="datum">Datum</label>
		     <input type="date" 
		           class="form-control" 
		           id="datum" 
		           name="datum" 
		           value="<?=$row['datum'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="pregled.php" class="link-primary">Pregled</a>
	    </form>
	</div>
</body>
</html>