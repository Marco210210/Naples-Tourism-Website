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
require_once "db.php";
if(!empty($_GET['id'])){
	//Prima controllo se l'id che si intende modificare esiste
	$id=$_GET['id'];
	$sql_byId = "SELECT id, nome, cognome, username, email, password FROM account WHERE id=$1;";
	$prep = pg_prepare($db, 'selectById', $sql_byId);
	if(!$prep) {
		echo "ERRORE QUERY Update: " . pg_last_error($db);
		exit;
	}else{
		$ret_select = pg_execute($db, 'selectById', array($id));
		if(!$ret_select){
			echo "ERRORE QUERY";
		}
		else{
			$account = pg_fetch_array($ret_select);
			$nome = $account['nome'];
			$cognome = $account['cognome'];
			$username = $account["username"];
			$email = $account["email"];
			$password = $account["password"];
		}
	}
}
if(!empty($_POST) && !empty($_POST['id'])){
	$id = $_POST['id'];
	$nome = $_SESSION['nome'];
	$cognome = $_SESSION['cognome'];
	$username = $_SESSION["username"];
	$email = strtolower($_POST['email']);
	$password = $_POST["password"];
	if(email_exist($email)){
		EchoMessage("Email $email già esistente.","registrati.php");
	}
	else{
		$sql_update= "
		UPDATE account
		SET
		nome = $1,
		cognome = $2,
		username = $3,
		email = $4,
		password = $5
		WHERE id=$6;
		";
		$prep = pg_prepare($db,"UpdateAccount", $sql_update);
		if(!$prep) {
			echo pg_last_error($db);
		}
		else {
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$ret_update = pg_execute($db, "UpdateAccount", array($nome, $cognome, $username, $email, $hash, $id));
			if(!$ret_update){
				echo "ERRORE AGGIORNAMETO. RICARICARE LA PAGINA E RIPROVARE - " .pg_last_error($db);
			}
			else{
				session_destroy();
				$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
				setcookie('stato','',time()-1,'/',$domain,false);
				setcookie('nome','',time()-1,'/',$domain,false);
				setcookie('cognome','',time()-1,'/',$domain,false);
				setcookie('email','',time()-1,'/',$domain,false);
				setcookie('username','',time()-1,'/',$domain,false);
				setcookie('password','',time()-1,'/',$domain,false);
				EchoMessage("Aggiornamento riuscito rieffettua l'accesso","../accesso/login.php");
			}
		}
	}
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Modifica contatto</title>
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
			<?php include '../header/header_log.html'; ?>
		</header>
	</section>


	<div id="main-wrapper-ed">
		<div>
			<h1>Modifica contatto</h1>
			<form target="edit.php" id="form-registrazione" method="post"  novalidate>
				<div id="wrapper-input">
					<input type="email" name="email" placeholder="E-mail" required>
					<div id="password">
						<input type="password" name="password" placeholder="Password (min. 8 caratteri)" required>
						<span id="l_1"></span>
						<span id="l_2"></span>
						<span id="l_3"></span>
					</div>
					<input type="hidden" name="id" value="<?php echo $id;?>"/>
				</div>
				<input type="password" name="re_password" placeholder="Conferma password" required>
				<input type="submit" name="add" value="Modifica"/>
				<div id="notifica-registrazione"></div>
			</form>
		</div>
	</div>

	<section>
		<footer>
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
?>

<?php function EchoMessage($msg, $redirect)
{
	echo '<script type="text/javascript">
	alert("' . $msg . '")
	window.location= "'.$redirect.'"
	</script>';
}
?>
