<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KubiXgram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
  <textarea name="post"></textarea>
  <input type="submit" value="Dodaj posta"/>
</form>


    <?php
    session_start();
    
        echo $_SESSION["login"]."<br>"."<br>";

        $posty = $_POST["post"];
        echo $posty;
        
    ?>
    
</body>
</html>
