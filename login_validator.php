<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
</html>
<?php
ob_start();
session_start();

//sprawdzanie czy w pliku istnieje
$login = trim($_POST["login"]);
$password = trim($_POST["password"]);
$prime;
$f = fopen("dane.txt", 'r+');
$x = false;
$qol = false;
while(!feof($f))
{
    $line = explode(" ", fgets($f));
    if( $line[0] == $login)
    { 
        if( $line[1] == $password)
        {
            $x = true;  
            $prime = $line[2];
        }
        else
        {
            $qol = true;
        }         
    }
}
if($x)
{
    $_SESSION["login"] = $login;
    $_SESSION["password"] = $password;       //nwm czy potrzebne wsm
    $_SESSION["prime"] = $prime;
    header("Location: index.php");  
    exit;
}
else
{
    if($qol)
    {
        echo "Błędne hasło!";
    }
    else
    {
        echo "Podany login nie istnieje!";
    }
    header("refresh:3; url=login.html");  
}
