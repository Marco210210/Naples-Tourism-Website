<html>
<head lang="it">
  <meta charset="utf-8">
  <title>Registrati</title>
  <link rel="icon" type="image/png" href="../logo_url.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../header/style.css">
  <link rel="stylesheet" href="../footer/style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>

  <section>
    <header>
      <?php
      session_start();
      if(isset($_COOKIE['stato'])){
        $_SESSION['login_flag']=1;
      }
      if(!isset($_SESSION['login_flag'])){
        include '../header/header.html';
      }
      if(isset($_SESSION['login_flag'])){
        include '../header/header_log.html';
        EchoMessage("Sei già loggato","../index.php");
      }
      ?>
    </header>
  </section>

  <?php
  if(isset($_POST['nome']))
  $nome = $_POST['nome'];
  else
  $nome = "";
  if(isset($_POST['cognome']))
  $cognome = $_POST['cognome'];
  else
  $cognome = "";
  if(isset($_POST['username']))
  $user = $_POST['username'];
  else
  $user = "";
  if(isset($_POST['email']))
  $email = strtolower($_POST['email']);
  else
  $email = "";
  if(isset($_POST['password']))
  $pass = $_POST['password'];
  else
  $pass = "";
  if(isset($_POST['re_password']))
  $repassword = $_POST['re_password'];
  else
  $repassword = "";
  if (!empty($pass)){
    if(username_exist($user)){
      EchoMessage("Username $user già esistente.","registrati.php");
    }
    if(email_exist($email)){
      EchoMessage("Email $email già esistente.","registrati.php");
    }
    else{
      //ORA posso inserire il nuovo utente nel db
      if(insert_utente($nome, $cognome, $user, $email, $pass)){
        EchoMessage("Utente registrato con successo. Effettua il login","login.php");
      }
      else{
        EchoMessage("Errore durante la registrazione.","registarti.php");
      }
    }
  }
  ?>
    <div id="main-wrapper-rg">
      <h1>Registrati</h1>
      <form action="registrati.php" id="form-registrazione" method="post"  novalidate>
        <div id="wrapper-input">
          <input type="text" name="nome" placeholder="Nome" value="<?php echo $nome?>" required>
          <input type="text" name="cognome" placeholder="Cognome" value="<?php echo $cognome?>" required>
          <input type="text" name="username" placeholder="Username" value="<?php echo $user?>" required>
          <input type="email" name="email" placeholder="E-mail" value="<?php echo $email?>" required>
          <div id="password">
            <input type="password" name="password" placeholder="Password (min. 8 caratteri)" value="<?php echo $pass?>" required>
            <span id="l_1"></span>
            <span id="l_2"></span>
            <span id="l_3"></span>
          </div>
          <input type="password" name="re_password" placeholder="Conferma password" value="<?php echo $repassword?>" required>
          <input type="checkbox" name="terms" value="true" required>
            <span class="fs-small">Autorizzo al trattamento dei miei dati personali, ai sensi del <a href="https://web.camera.it/parlam/leggi/deleghe/Testi/03196dl.htm">D.lgs.196 del 30 giugno 2003</a>.</span>
            <p class="reg"><span class="fs-small">Sei già registrato? <a href="login.php">Accedi</a>!</span></p>
          </div>
          <input type="submit" name="registra" value="registrati">
        </form>
        <div id="notifica-registrazione"></div>
      </div>

    <section>
      <footer id="footer">
        <?php include '../footer/foot.html'; ?>
      </footer>
    </section>

    <script type="module">
    import formValidation from './reg-edit.js';
    document.addEventListener("DOMContentLoaded", function () {
      formValidation('#form-registrazione', '#notifica-registrazione');
    });
    </script>

  </body>
  </html>

  <?php
  function username_exist($user){
    require "./db.php";
    $sql = "SELECT username FROM account WHERE username=$1";
    $prep = pg_prepare($db, "sqlUsername", $sql);
    $ret = pg_execute($db, "sqlUsername", array($user));
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
  }

  function email_exist($email){
    require "./db.php";
    $sql = "SELECT email FROM account WHERE email=$1";
    $prep = pg_prepare($db, "sqlEmail", $sql);
    $ret = pg_execute($db, "sqlEmail", array($email));
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
  }

  function insert_utente($nome, $cognome, $user, $email, $pass){
    require "./db.php";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "INSERT INTO account(nome, cognome, username, email, password) VALUES($1, $2, $3, $4, $5)";
    $prep = pg_prepare($db, "insertUser", $sql);
    $ret = pg_execute($db, "insertUser", array($nome, $cognome, $user, $email, $hash));
    if(!$ret) {
      echo "ERRORE QUERY: " . pg_last_error($db);
      return false;
    }
    else{
      return true;
    }
  }
  ?>

  <?php function EchoMessage($msg, $redirect)
  {
    echo '<script type="text/javascript">
    alert("' . $msg . '")
    window.location= "'.$redirect.'"
    </script>';
  }
  ?>
