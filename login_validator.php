<?php
ob_start();
session_start();


if( !isset($_POST["submit"]) )   //validacja
{      
    echo "Nie ładnie tak wchodzić bez logowania!";
    header("refresh:3; url=login.html");  
}


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
    header("Location: stg.php");  
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
