<?php
        if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['email']))
        {
          echo "Twoj login to: " .$_POST['login']."</br>". "Twoje haslo to: ".$_POST['password']."</br>". "Twoj email to: ".$_POST['email'];
        }
