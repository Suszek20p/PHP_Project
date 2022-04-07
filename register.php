<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
</html>

<?php
    $password = $_POST['password'];
    $password_02 = $_POST['password_02'];

    if ($password != $password_02)
    {
        echo "Hasło musi być takie samo w obu polach";
    }
    else
    {
        if (isset($_POST['login']) && isset($_POST['password']))
        {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $dane = fopen('dane.txt', 'a');
            fwrite($dane, $login." ".$password . "\n");

            echo "Witaj użytkowniku: ".$login.". Mamy nadzieję że ci się tu spodoba!"."</br>"."<a href='login.html'> A teraz się zaloguj </a>";
        }
    }
