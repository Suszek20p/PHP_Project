<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
</html>

<?php

$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$password_02 = trim($_POST["password_02"]);
$f = fopen("dane.txt", 'r+');
$x = false;

if ($password != $password_02)
    {
        echo "Hasło musi być takie samo w obu polach";
    }
    else
    {

        while(!feof($f))
        {
            if( explode(" ", fgets($f) )[0] == $login)
            {      
                $x = true;       
            }
        }
        if($x)
        {
            echo "Podana nazwa użytkownika jest już zajęta!";
            fclose($f);
            header("refresh:3; url=register.html");  
        }
        else
        {
            fwrite($f, "$login $password \n");       
            fclose($f);
            header("Location: login.html");  
            exit;
        }
    }