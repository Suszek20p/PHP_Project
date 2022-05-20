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
  <input type="text" name="post">
  <input type="submit" value="Dodaj posta"/>
</form>


    <?php
        session_start();

        $addPost = $_POST["post"];
        $f = fopen("posty.txt", 'r+');
        fwrite($f, "$addPost \n");
        fclose($f);

        echo $_SESSION["login"]."<br>"."<br>". $addPost;       

    ?>
    
</body>
</html>
