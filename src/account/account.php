<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Account</title>
  <link rel="icon" type="image/png" href="../logo_url.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="../header/style.css">
  <link rel="stylesheet" href="../footer/style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body link="#000" vlink="#000" alink="#000">

  <?php
  session_start();
  if(!isset($_SESSION['login_flag']) and !isset($_COOKIE['stato'])){
    EchoMessage("Pagina non accessibile, accedi o registrati.","../index.php");
  }
  if(!isset($_SESSION['nome'])){
    $_SESSION['nome']= @$_COOKIE['nome'];
  }
  if(!isset($_SESSION['cognome'])){
    $_SESSION['cognome']= @$_COOKIE['cognome'];
  }
  if(!isset($_SESSION['email'])){
    $_SESSION['email']= @$_COOKIE['email'];
  }
  if(!isset($_SESSION['username'])){
    $_SESSION['username']= @$_COOKIE['username'];
  }
  ?>

  <section>
    <header>
      <div>
        <?php include '../header/header_log.html'; ?>
      </div>
    </header>
  </section>

  <div id="main-wrapper">
      <h2>I dati relativi al tuo account sono:</h2>
      <p>Nome: <?php echo $_SESSION['nome'] ?></p>
      <p>Cognome: <?php echo $_SESSION['cognome'] ?></p>
      <p>E-mail: <?php echo $_SESSION['email']?></p>
      <p>Username: <?php echo $_SESSION['username']?></p>

      <?php
      require_once "../accesso/db.php";
      if(!empty($_GET['action']) && $_GET['action']=='delete'){
        //Prima controllo se l'id che si intende cancellare esiste
        $id=$_GET['id'];
        $sql_byId = "SELECT id, nome, cognome, username, email, password FROM account WHERE id=$1;";
        $prep = pg_prepare($db, 'selectById', $sql_byId);
        if(!$prep) {
          echo "ERRORE QUERY DELETE: " . pg_last_error($db);
          exit;
        }else{
          $ret_delete = pg_execute($db, 'selectById', array($id));
          if(!$ret_delete){
            echo "ERRORE QUERY";
          }
          else{
            $account = pg_fetch_array($ret_delete);
            $nome = $account['nome'];
            $cognome = $account['cognome'];
            $sql_delete = "DELETE FROM account WHERE id=$1";
            $prep_delete = pg_prepare($db, "deleteById", $sql_delete);
            $ret_delete = pg_execute($db, 'deleteById', array($id));
            if(!$ret_delete){
              echo "ERRORE DELETE " . pg_last_error($db);
            }
            else{
              echoMessage("L'account $user è stato cancellato.","../index.php");
              session_destroy();
              $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
              setcookie('stato','',time()-1,'/',$domain,false);
              setcookie('nome','',time()-1,'/',$domain,false);
              setcookie('cognome','',time()-1,'/',$domain,false);
              setcookie('email','',time()-1,'/',$domain,false);
              setcookie('username','',time()-1,'/',$domain,false);
              setcookie('password','',time()-1,'/',$domain,false);
            }
          }
        }
      }
      ?>

      <?php
      $user=$_SESSION['username'];
      $sql = "SELECT * FROM account WHERE username='$user';";
      $ret = pg_query($db, $sql);
      if(!$ret) {
        echo "ERRORE QUERY: " . pg_last_error($db);
        exit;
      }
      ?>

      <?php
      $row = pg_fetch_array($ret);
      $nome = $row["nome"];
      $cognome = $row["cognome"];
      $username = $row["username"];
      $email = $row["email"];
      $pass = $row["password"];
      $id = $row["id"];
      echo '<a href="../accesso/edit.php?id='.$id.'" style="text-decoration: none"> <div class=btn>Modifica</div></a><a href="'.$_SERVER['PHP_SELF'].'?action=delete&id='.$id.'" style="text-decoration: none"><div class=btn>Cancella</div></a>';
      pg_close($db);
      ?>
  </div>

  <section>
    <footer>
      <div>
        <?php include '../footer/foot.html'; ?>
      </div>
    </footer>
  </section>

</body>
</html>

<?php function EchoMessage($msg, $redirect)
{
  echo '<script type="text/javascript">
  alert("' . $msg . '")
  window.location= "'.$redirect.'"
  </script>';
}
?>
