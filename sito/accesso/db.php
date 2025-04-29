<?php
  $host = 'localhost';
  $port = '5432';
  $db = 'TSW';
  $username = 'www';
  $password = 'tsw2022';

  $connection_string = "host=$host port=$port dbname=$db user=$username password=$password";

    //CONNESSIONE AL DB
  $db = pg_connect($connection_string) or die('Impossibile connetersi al database: ' . pg_last_error());
?>
