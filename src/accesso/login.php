<html>
<head lang="it">
  <meta charset="utf-8">
  <title>Accedi</title>
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

  <div id="main-wrapper-lg">
    <h1>Accedi</h1>
    <form action="login-manager.php" id="form-login" method="post" novalidate>
      <div id="wrapper-input">
        <input type="email" name="email" placeholder="Email" value="" required>
        <input type="password" name="password" placeholder="Password" value="" required>
        <p class="reg"><span class='fs-small'>Non hai un account? <a href="registrati.php"> Registrati</a>!</span></p>
      </div>
      <input type="submit" value="accedi">
    </form>
    <div id="notifica-login"></div>
  </div>

  <section>
    <footer>
      <?php include '../footer/foot.html'; ?>
    </footer>
  </section>

  <script type="module">
  import loginValidation from './login.js';
  document.addEventListener("DOMContentLoaded", function () {
    loginValidation('#form-login', '#notifica-login');
  });
  </script>

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
