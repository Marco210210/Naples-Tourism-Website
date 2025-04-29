<?php
session_start();
$db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
$utente = $_SESSION['username'];
$commento = $_POST['commento'];
$stelle = $_POST['stelle'];
if(strlen($_POST['commento'])<1){
  EchoMessage("commento vuoto", "2scrivi.php");
  exit();
} /*controllo che il commento non sia vuoto*/
$data = date('d/m/Y');
$testo="INSERT INTO napolisott (commento,data,utente,stelle) VALUES ($1,$2,$3,$4)";
$prep= pg_prepare($db,"nscomment", $testo);
$ret = pg_execute($db, "nscomment", array($commento,$data,$utente,$stelle));
EchoMessage("Commento caricato con successo","../pagine/pg2.php");
if(!$ret) {
  echo "ERRORE QUERY: " . pg_last_error($db);
  return false;
}
else{
  if ($row = pg_fetch_assoc($ret)){
    return true;
  }
  else{
    return false;
  }
}

function EchoMessage($msg, $redirect){
  echo '<script type="text/javascript">
  alert("' . $msg . '")
  window.location= "'.$redirect.'"
  </script>';
}
?>
