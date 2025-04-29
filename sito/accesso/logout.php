<html>
<head>
	<meta charset="utf-8">
	<title>Logout</title>
	<link rel="icon" type="image/png" href="../logo_url.png">
</head>
<body>

	<?php
	/* attiva la sessione */
	session_start();
	if(!isset($_SESSION['login_flag']) and !isset($_COOKIE['stato'])){
		EchoMessage("Pagina non accessibile, accedi o registrati.","../../sito/index.php");
	}
	/* sessione attiva, la distrugge */
	session_destroy();
	/* ed elimina il cookie corrispondente */
	$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
	setcookie('stato','',time()-1,'/',$domain,false);
	setcookie('nome','',time()-1,'/',$domain,false);
	setcookie('cognome','',time()-1,'/',$domain,false);
	setcookie('email','',time()-1,'/',$domain,false);
	setcookie('username','',time()-1,'/',$domain,false);
	setcookie('password','',time()-1,'/',$domain,false);
	EchoMessage("Logout effettuato.","../../sito/index.php");
	?>

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
