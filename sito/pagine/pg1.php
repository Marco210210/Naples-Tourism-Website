<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cristo velato</title>
  <link rel="icon" type="image/png" href="../logo_url.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../header/style.css">
  <link rel="stylesheet" href="../footer/style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body link="#000" vlink="#000" alink="#000">

  <?php session_start();
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

  <header>
    <div id = "header">
      <?php include '../header/header_log.html'; ?>
    </div>
  </header>

  <section class="immagine">
    <script>
    function changeBg() {
      const images = [
        'url("https://i.postimg.cc/xC2syrNV/cri1.jpg")',
        'url("https://i.postimg.cc/B6Bmmh2L/cri2.jpg")',
        'url("https://i.postimg.cc/PfK6ZRt0/cri3.jpg")',
        'url("https://i.postimg.cc/4NdW1Qyy/cri4.jpg")',
        'url("https://i.postimg.cc/RhPXBNsv/cri5.jpg")',
        'url("https://i.postimg.cc/7hPmdgNB/cri6.jpg")',
        'url("https://i.postimg.cc/8zfw2khV/cri7.jpg")',
        'url("https://i.postimg.cc/MGktqkDf/cri8.jpg")',
      ]
      const section = document.querySelector('section')
      const bg = images[Math.floor(Math.random() * images.length)];
      section.style.backgroundImage = bg;
    }
    setInterval(changeBg,3000)
    </script>
  </section>

  <article>
    <div class="descrizione">
      <h1>Cristo velato</h1>
      <p>Posto al centro della navata della Cappella Sansevero, il Cristo velato è una delle opere più note e suggestive al mondo.<br>
        Nelle intenzioni del committente, la statua doveva essere eseguita da Antonio Corradini, che per il principe aveva già scolpito la Pudicizia.<br>
        Tuttavia, Corradini morì nel 1752 e fece in tempo a terminare solo un bozzetto in terracotta del Cristo, oggi conservato al Museo di San Martino.<br>
        Fu così che Raimondo di Sangro incaricò un giovane artista napoletano, Giuseppe Sanmartino, di realizzare “una statua di marmo scolpita a grandezza naturale,
        rappresentante Nostro Signore Gesù Cristo morto, coperto da un sudario trasparente realizzato dallo stesso blocco della statua”.<br>
        Sanmartino tenne poco conto del precedente bozzetto dello scultore veneto. Come nella Pudicizia, anche nel Cristo velato l’originale messaggio stilistico è nel velo,
        ma i palpiti e i sentimenti tardo-barocchi di Sanmartino imprimono al sudario un movimento e una significazione molto distanti dai canoni corradiniani.<br>
        La moderna sensibilità dell’artista scolpisce, scarnifica il corpo senza vita, che le morbide coltri raccolgono misericordiosamente, sul quale i tormentati,
        convulsi ritmi delle pieghe del velo incidono una sofferenza profonda, quasi che la pietosa copertura rendesse ancor più nude ed esposte le povere membra,
        ancor più inesorabili e precise le linee del corpo martoriato.<br>
        La vena gonfia e ancora palpitante sulla fronte, le trafitture dei chiodi sui piedi e sulle mani sottili,
        il costato scavato e rilassato finalmente nella morte liberatrice sono il segno di una ricerca intensa che non dà spazio a preziosismi o a canoni di scuola,
        anche quando lo scultore “ricama” minuziosamente i bordi del sudario o si sofferma sugli strumenti della Passione posti ai piedi del Cristo.<br>
        L’arte di Sanmartino si risolve qui in un’evocazione drammatica, che fa della sofferenza del Cristo il simbolo del destino e del riscatto dell’intera umanità.</p>
      </div>
    </article>

    <article>
      <div class="descrizione_aggiuntiva">
        <h2>Orari</h2>

        <p>Orari di apertura dal 15 luglio 2021</p>
        <p>Tutti i giorni: 9.00 - 19.00</p>
        <p>Chiuso il martedì</p>
        <p>Ultimo ingresso 30 minuti prima della chiusura</p><br>

        <h2>Tariffe</h2>

        <p>Biglietto ordinario: € 8,00</p>
        <p>Soci FAI: € 6,00</p>
        <p>Ragazzi dai 10 ai 25 anni: € 5,00</p>
        <p>Bambini fino ai 9 anni: gratis</p>
        <p>Scuole: € 3,00 (tariffa valida solo nei giorni feriali)</p>
        <p>Audioguida: € 3,50</p><br>

        <h2>Come arrivare</h2>

        <p>Via Francesco de Sanctis, 19/21, 80134 Napoli NA</p>
        <p>Nel centro storico, a piedi per Spaccanapoli o Via dei Tribunali.</p>
        <p>Dall’aeroporto di Capodichino, Alibus fermata Piazza Municipio poi a piedi.</p>
        <p>Dalla Stazione Centrale: Metro Linea 1 fermata Dante.</p>
      </div>
    </article>

    <section>
      <div class="mappa">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Via%20Francesco%20de%20Sanctis,%2019/21,%2080134%20Napoli%20NA&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://2piratebay.org"></a><br>
            <style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style>
            <a href="https://www.embedgooglemap.net">custom map for website</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
          </div>
        </div>
      </div>
    </section>

    <section>
      <a name="recensioni"></a>
      <div class="box_recensioni">
        <h1>Recensioni sul Cristo Velato:</h1>
        <form action="../recensione/1scrivi.php">
          <button type="submit" id="pulsante">
            Lascia la tua recensione
          </button>
        </form>
        <div class="recensioni">
          <?php
          $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
          or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
          $sql=pg_query("SELECT commento,data,utente,stelle FROM cristovelato ORDER BY id DESC;");
          while ($array = pg_fetch_array($sql)) {
            echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ al Cristo Velato<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
          }
          ?>
        </div>
      </div>
    </section>

    <section class="cards clearfix" >
      <?php if(isset($_SESSION['login_flag'])){
        echo '<a href="pg6.php" >';
      }
      else{
        echo '<div onclick="myFunction()">';
      }
      ?>
      <div class="card">
        <img class="card_image" src="https://i.postimg.cc/SKDRm6sv/24.jpg" alt="Img Chiostro di Santa Chiara">
        <div class="card_copy">
          <h3>Chiostro di Santa Chiara</h3>
          <p>Esistono luoghi che contribuiscono a rendere il mondo ancora più straordinario È il caso
            del complesso monumentale di Santa Chiara a Napoli, il Monastero con quel magnifico Chiostro che incanta cittadini e viaggiatori da generazioni.</p>
          </div>
        </div>
      </div>
    </a>

    <?php if(isset($_SESSION['login_flag'])){
      echo '<a href="pg4.php" >';
    }
    else{
      echo '<div onclick="myFunction()">';
    }
    ?>
    <div class="card">
      <img class="card_image" src="https://i.postimg.cc/pXhNpNPx/sangennaro.jpg" alt="Img Duomo e Tesoro di San Gennaro">
      <div class="card_copy">
        <h3>Il Duomo e il Tesoro di San Gennaro</h3>
        <p>Luogo deputato principalmente al culto di San Gennaro.
          Ricco di cappelle di potenti famiglie napoletane, il Duomo è abbellito dai dipinti di Luca Giordano che raffigurano gli Apostoli, i Padri e i Dottori della Chiesa.</p>
        </div>
      </div>
    </div>
  </a>

  <?php if(isset($_SESSION['login_flag'])){
    echo '<a href="pg5.php" >';
  }
  else{
    echo '<div onclick="myFunction()">';
  }
  ?>
  <div class="card">
    <img class="card_image" src="https://i.postimg.cc/tCLK6rg6/Museo-Archeologico.jpg" alt="Img Museo Archeologico di Napoli">
    <div class="card_copy">
      <h3>Museo Archeologico di Napoli</h3>
      <p>Prima scuola di equitazione poi sede dell’Università, il Museo Archeologico di Napoli (MANN)
        venne inaugurato nel 1816 e ad oggi è uno dei più importanti nel mondo per la qualità e la quantità delle opere che custodisce al suo interno.</p>
      </div>
    </div>
  </div>
</a>

<?php if(isset($_SESSION['login_flag'])){
  echo '<a href="pg2.php">';
}
else{
  echo '<div onclick="myFunction()">';
}
?>
<div class="card">
  <img class="card_image" src="https://i.postimg.cc/Qtd7xGz3/1.jpg" alt="Img Napoli Sotterranea">
  <div class="card_copy">
    <h3>Napoli Sotterranea</h3>
    <p>Un substrato ricco di storia legato ad un patrimonio raro, se non unico nel suo genere. Nel vedere questi enormi opere di grande ingegneria civile, a 40 metri di profondità tra
      cunicoli e cisterne un visitatore di Napoli può solo emozionarsi.</p>
    </div>
  </div>
</div>
</a>

<?php if(isset($_SESSION['login_flag'])){
  echo '<a href="pg3.php">';
}
else{
  echo '<div onclick="myFunction()">';
}
?>
<div class="card">
  <img class="card_image" src="https://i.postimg.cc/y8dRvh7P/1.jpg" alt="Img Palazzo Reale">
  <div class="card_copy">
    <h3>Palazzo Reale</h3>
    <p>Il Palazzo Reale di Napoli è un edificio storico ubicato in piazza del Plebiscito, nel centro storico di Napoli.<br>
      Costruito a partire dal 1600, completato nel 1858: alla sua edificazione e ai restauri hanno partecipato numerosi architetti.</p>
    </div>
  </div>
</div>
</a>
</section>

<footer>
  <div>
    <?php include '../footer/footer.html'; ?>
  </div>
</footer>

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
