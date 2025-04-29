<?php
include 'db.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestione Login</title>
	<link rel="icon" type="image/png" href="../logo_url.png">
</head>
<body>

	<?php
	$email =  strtolower($_POST['email']);
	$pass =  $_POST['password'];
	$hash = get_pwd($email,$db);
	if(!$hash){
		EchoMessage("L'utente $email non esiste.","login.php");
	}
	else{
		if(password_verify($pass, $hash)){
			echo '<script> window.location="../index.php"</script>';
			session_start();
			$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
			setcookie('stato','verificato',time()+21600,'/',$domain, false);
			$_SESSION['email']=$email;
			$_SESSION['password']=$pass;
			$nome=get_nome($email,$db);
			$cognome=get_cognome($email,$db);
			$user=get_user($email,$db);
			if($nome){$_SESSION['nome']=$nome;}
			if($cognome){$_SESSION['cognome']=$cognome;}
			if($user){$_SESSION['username']=$user;}
			$_SESSION['login_flag']=1;
			if(isset($_SESSION['username'])){
				setcookie("username",$user,time()+21600,'/',$domain,false);
			}
			if(isset($_SESSION['nome'])){
				setcookie("nome",$nome,time()+21600,'/',$domain,false);
			}
			if(isset($_SESSION['cognome'])){
				setcookie("cognome",$cognome,time()+21600,'/',$domain,false);
			}
			if(isset($_SESSION['email'])){
				setcookie("email",$email,time()+21600,'/',$domain,false);
			}
			if(isset($_SESSION['password'])){
				$hash = password_hash($pass, PASSWORD_DEFAULT);
				setcookie("password",$hash,time()+21600,'/',$domain,false);
			}
		}
		else{
			EchoMessage("Email o password errati.","login.php");
		}
	}
	?>

</body>
</html>

<?php
function get_pwd($email, $db){
	$sql = "SELECT password FROM account WHERE email=$1;";
	$prep = pg_prepare($db, "sqlPassword", $sql);
	$ret = pg_execute($db, "sqlPassword", array($email));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false;
	}
	else{
		if ($row = pg_fetch_assoc($ret)){
			$pass = $row['password'];
			return $pass;
		}
		else{
			return false;
		}
	}
}

function get_nome($email, $db){
	$sql = "SELECT nome FROM account WHERE email=$1;";
	$prep = pg_prepare($db, "sqlNome", $sql);
	$ret = pg_execute($db, "sqlNome", array($email));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false;
	}
	else{
		if ($row = pg_fetch_assoc($ret)){
			$nome = $row['nome'];
			return $nome;
		}
		else{
			return false;
		}
	}
}

function get_cognome($email, $db){
	$sql = "SELECT cognome FROM account WHERE email=$1;";
	$prep = pg_prepare($db, "sqlCognome", $sql);
	$ret = pg_execute($db, "sqlCognome", array($email));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false;
	}
	else{
		if ($row = pg_fetch_assoc($ret)){
			$cognome = $row['cognome'];
			return $cognome;
		}
		else{
			return false;
		}
	}
}

function get_user($email, $db){
	$sql = "SELECT username FROM account WHERE email=$1;";
	$prep = pg_prepare($db, "sqlUsername", $sql);
	$ret = pg_execute($db, "sqlUsername", array($email));
	if(!$ret) {
		echo "ERRORE QUERY: " . pg_last_error($db);
		return false;
	}
	else{
		if ($row = pg_fetch_assoc($ret)){
			$user = $row['username'];
			return $user;
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
