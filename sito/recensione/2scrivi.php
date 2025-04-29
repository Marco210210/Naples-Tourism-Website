<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Recensione</title>
	<link rel="icon" type="image/png" href="../logo_url.png">
	<link rel="stylesheet" href="style.css" media="all">
	<link rel="stylesheet" href="../header/style.css">
	<link rel="stylesheet" href="../footer/style.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body link="#007fff" vlink="#007fff" alink="#007fff" class="ns">

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
		<h2>Lascia una recensione su Napoli sotterranea</h2>
		<form action='2salva.php' method='post'>
			<div class="stelle">
				<input name="stelle" type="radio" id="stella1" value="1" />
				<label for="stella1"></label>

				<input name="stelle" type="radio" id="stella2" value="2" />
				<label for="stella2"></label>

				<input name="stelle" type="radio" id="stella3" value="3" />
				<label for="stella3"></label>

				<input name="stelle" type="radio" id="stella4" value="4" />
				<label for="stella4"></label>

				<input name="stelle" type="radio" id="stella5" value="5" checked />
				<label for="stella5"></label>
			</div>
			<textarea	name="commento" placeholder="Lascia un commento..." class="field"></textarea>
			<input type='submit' value='Invia' class="btn" >
			<p>Torna a Napoli Sotterranea per leggere altre <a href="../pagine/pg2.php#recensioni">recensioni</a></p>
			<p class="attenzione"><font color=#FF0000>Attenzione!</font> Il commento non potrà essere cancellato nè modificato</p>
		</form>
	</div>

	<section>
		<footer>
			<?php include '../footer/foot.html'; ?>
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
