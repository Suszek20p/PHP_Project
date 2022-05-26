<?php

if( isset($_SESSION["login"]) )
{
    echo "<a href='logout.php'>Wyloguj</a>";
}
else
{
    echo "<a href='login.html'>Zaloguj się</a>";
}

