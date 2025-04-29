<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sottosuolo di napoli</title>
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
        'url("https://i.postimg.cc/Qtd7xGz3/1.jpg")',
        'url("https://i.postimg.cc/3RfvkfMD/2.jpg")',
        'url("https://i.postimg.cc/zXggfkxV/3.jpg")',
        'url("https://i.postimg.cc/d3zZB7Vs/4.jpg")',
        'url("https://i.postimg.cc/904qZPVg/7.jpg")',
        'url("https://i.postimg.cc/dQXCvfmb/8.jpg")',
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
      <h1>Napoli sotterranea</h1>
      <h3>Il più affascinante percorso nel sottosuolo di Napoli</h3>
      <p>Napoli Sotterranea è l’altra faccia di Napoli, un labirinto di cunicoli, cisterne e cavità che creano una vera e propria città che rispecchia,
        in negativo, la città di superficie. Dal Tunnel borbonico al cimitero delle Fontanelle, da Napoli Sotterranea alle Catacombe di San Gennaro,
        sono tanti i siti da visitare passando per la grande rete di cunicoli, gallerie ed acquedotti che attraversano tutto il centro storico.<br>
        Una volta entrati, si scenderà a 40 mt. di profondità e si potranno ammirare le vecchie cisterne dell’acquedotto del Carmignano e si potranno
        rivivere le sensazioni di chi vi si rifugiò durante Seconda Guerra Mondiale.<br>
        Ripercorrendo la storia della Napoli sotterranea scopriamo che i primi scavi risalgono all’era preistorica, anche se furono i Greci i primi che sfruttarono
        gli ambienti del sottosuolo per costruirvi degli ipogei funerari, fatto che si ripeterà nel 1656 quando le cave verranno usate come ossario per i deceduti per la peste.
        In epoca romana all’interno del dedalo di cunicoli sotterranei fu installata una rete di acquedotti alimentata dalle sorgenti del Serino, mentre nel XX secolo i cunicoli
        si trasformarono in rifugi antiaerei durante il secondo conflitto mondiale.<br>
        Di notevole ingegno è la Pizzeria geotermica, sorta dove c’era un antico forno romano, sotto le volte del convento teatino di San Paolo Maggiore.
        Inoltre, è consentita la visita gratuita all’antico Teatro greco-romano.<br>
        La storia fece sì che gli impieghi di tale Galleria fossero i più diversi: durante la Seconda Guerra Mondiale costituì il rifugio antibombardamenti per la popolazione di Chiaia,
        mentre negli Anni ’70 fu adibita a Deposito Giudiziale Comunale. Ragion per cui sono ancora conservate qui le carcasse di vecchie auto e motociclette, sepolte dalla polvere.</p>
        <h3>Curiosità</h3>
        <p>Vi è una particolare credenza che viene associata alla Napoli sotterranea, si tratta della figura folkloristica del monaciello ovvero il frate che si aggirava per
          i cunicoli e che poter far trovare dei soldi o recar dispetto nel caso in cui lo si fosse offeso. Eppure come tutte le leggende c’è un fondo di verità questi frate altro
          non era che la versione fantasiosa dei pozzari ovvero gli uomini che gestivano i pozzi sotterranei e che vestivano con dei lunghi mantelli perciò molo similari alle figure dei frati,
          queste figure potevano chiaramente introdursi facilmente nelle abitazioni e derubarle o lasciare il compenso per il lavoro svolto.</p>
          <p>Tra le curiosità c’è anche la Stanza di Filomena, dove la signorina suddetta ospitava i
            propri clienti-amanti durante la seconda guerra mondiale, per dar libero sfogo alle loro follie d’amore. Numerosi i graffiti e i resti di arredi ed anche vari oggetti,
            che sono stati conservati in ottimo stato, fino ai giorni nostri.</p>
            <p>Tra le altre scoperte recenti, c’è la Galleria Borbonica, fatta costruire nel XIX secolo dal re Ferdinando II di Borbone da Enrico Alvino, il tunnel rappresentava un sistema di
              difesa rapido per la Reggia del re, che poteva dunque essere facilmente raggiunto dai soldati che si trovavano nella caserma a Montedidio.</p>
            </div>
          </article>

          <article>
            <div class="descrizione_aggiuntiva">
              <h2>Orari partenze escursioni:</h2>

              <h4>Escursioni in italiano:</h4>
              <p>10,00-11,00-12,00-13,00 – 14,00-15,00-16,00 – 17,00-18,00</p>
              <p>(giovedì ore 21,00 solo su prenotazione raggiungendo un minimo di 10 persone)</p>
              <h4>Escursioni in inglese:</h4>
              <p>10,00-12,00-14,00-16,00-18,00</p>
              <p>(giovedì ore 21,00 solo prenotazione raggiungendo un minimo di 10 persone)</p>
              <br>
              <p>Nei festivi e nei ponti (consideriamo festivi il sabato e la domenica, i giorni di festa nazionale come ‪il 25 aprile‬ ad esempio e quelli
                di festa cittadina come ‪il 19 settembre‬ festa di San Gennaro) le prenotazioni per i gruppi si accettano solo in orari diversi da quelli di apertura,
                dunque prima delle 9.30 o dopo le 18.30. Se il gruppo nei festivi o ponti deciderà di venire in un orario compreso tra le ore 9.30 e le ore 18.30
                dovrà attendere il proprio turno in caso di fila.</p>
                <p>Escursioni in altre lingue, gruppi o escursioni fuori dagli orari di apertura solo su prenotazione.</p><br>

                <h2>Orari e prenotazioni Napoli Sotterranea per le scuole:</h2>
                <p>Le scuole possono prenotare visite guidate anche ad orari diversi da quelli indicati inviando una mail a info@napolisotterranea.org  oppure richiedere informazioni ai seguenti numeri di telefono (+39) 081 296944; (+39) 081 01909330; (+39) 334 3662841; (+39) 340 4606045. Inviando una mail o chiamando ai numeri indicati è possibile concordare con i responsabili che si occupano di gestire le escursioni per gruppi scolastici, nonché le lezioni di inquadramento al sito che, a richiesta della scuola, potranno essere tenute prima della visita; è inoltre possibile concordare o richiedere informazioni a proposito dei laboratori didattici.</p> <br>

                <h2>Durata:</h2>
                <p>La durata del percorso è di circa 2 ore.</p><br>

                <h2>Tariffe</h2>

                <p>Intero €10</p>
                <p>Ridotto €8 (studenti)</p>
                <p>Ridotto €6 (bambini dai 5 ai 10 anni)</p>
                <p>Gruppi scolastici € 8 (gratuità per insegnanti)</p>
                <p>Sconto 10% con Artecard</p>
                <p>Gratuito per i bambini sotto i 5 anni</p><br>

                <h2>Come arrivare</h2>

                <p>Piazza San Gaetano 68 (su via dei Tribunali)</p>
                <p>Via D. Morelli, 61 (ingresso pedonale del Parcheggio Morelli)</p>
                <p>Vico del Grottone, 4 (a circa 100 m da Piazza Plebiscito)</p>
                <p>Nel cuore del centro antico di Napoli, a pochi passi dal Museo Archeologico, dal Duomo e da San Gregorio Armeno (celebre per le botteghe artigiane di presepi).</p>
                <p>Dalla Stazione Centrale (Piazza Garibaldi): Metropolitana Linea 1 – direzione Piscinola – Fermata Dante. Proseguire su Via Port’Alba, Via San Pietro a Maiella, Piazza Miraglia, Via Dei Tribunali – Piazza San Gaetano.</p>
                <p>Dall’Aeroporto di Capodichino: A 250 m dal terminal 1 (fronte Banco di Napoli) prendere il Bus linea ANM ALIBUS- fermata Piazza Garibaldi-Metropolitana Linea 1 – direzione Piscinola – Fermata Dante. Proseguire su Via Port’Alba, Via San Pietro a Maiella, Piazza Miraglia, Via Dei Tribunali – Piazza San Gaetano.</p>
                <p>Dal Porto: Raggiungere Piazza Municipio – Via De Pretis – Bus Linea R4 verso Ospedale Cardarelli – Piazza Dante (IV fermata) – Proseguire su Via Port’Alba, Via San Pietro a Maiella, Piazza Miraglia, Via Dei Tribunali – Piazza San Gaetano.</p>
              </div>
            </article>

            <section>
              <div class="mappa">
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Piazza%20San%20Gaetano%2068&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://putlocker-is.org"></a><br>
                    <style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
                  </div>
                </div>
              </div>
            </section>

            <section>
              <a name="recensioni"></a>
              <div class="box_recensioni">
                <h1>Recensioni su Napoli sotterranea</h1>
                <form action="../recensione/2scrivi.php">
                  <button type="submit" id="pulsante">
                    Lascia la tua recensione
                  </button>
                </form>
                <div class="recensioni">

                  <?php
                  $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
                  or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
                  $sql=pg_query("SELECT commento,data,utente,stelle FROM napolisott ORDER BY id DESC;");
                  while ($array = pg_fetch_array($sql)) {
                    echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ a Napoli Sotterranea<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
                  }
                  ?>
                </div>
              </div>
            </section>

            <section class="cards clearfix">
              <?php if(isset($_SESSION['login_flag'])){
                echo '<a href="pg6.php">';
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
              echo '<a href="pg1.php">';
            }
            else{
              echo '<div onclick="myFunction()">';
            }
            ?>
            <div class="card">
              <img class="card_image" src="https://i.postimg.cc/xC2syrNV/cri1.jpg" alt="Img Cristo velato">
              <div class="card_copy">
                <h3>Cristo velato</h3>
                <p>Il Cristo velato è una scultura marmorea di Giuseppe Sanmartino, conservata nella cappella Sansevero di Napoli ed è stata realizzata nel 1753.
                  Ne esistono altre due copie: una situata a Potenza e l'altra a Parma.</p>
                </div>
              </div>
            </div>
          </a>

          <?php if(isset($_SESSION['login_flag'])){
            echo '<a href="pg4.php">';
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
          echo '<a href="pg5.php">';
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
