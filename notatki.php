<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KubiXgram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <ul>
            <a href="index.php"><li>Strona Główna</li></a>
            <a href="notatki.php"><li>Twoja Notatka</li></a>

        </ul>
    </nav>

    <?php
        session_start();

        echo $_SESSION["login"]."<br>";
        $plik = $_SESSION["login"].'notatka.txt';
        if(isset($_POST['tresc']))
        {
            file_put_contents($plik, $_POST['tresc']);
        }
        echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <textarea name="tresc">'.file_get_contents($plik).'</textarea>
        <input type="submit" value="Utwórz / Zapisz">
        </form>';
    ?>

    <?php 
        require('nav_login_icon.php'); 
    ?>
    
</body>
</html>