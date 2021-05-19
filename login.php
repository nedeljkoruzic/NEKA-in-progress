<?php
    $connect = new mysqli("localhost", "root", "", "domaci") or die("Connection Failed");

    if(!empty($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="SELECT * From login where username='$username' and password='$password'";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            header('Location: http://localhost/NEKAphp/Dogadjaj.php');
        }else{
            echo "Korisnik ne postoji u bazi";
        }
    }
    


?>