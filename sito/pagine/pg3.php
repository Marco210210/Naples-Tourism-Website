<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Palazzo reale</title>
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
        'url("https://i.postimg.cc/bvnsB3WQ/10.jpg")',
        'url("https://i.postimg.cc/xCKNctP0/3.jpg")',
        'url("https://i.postimg.cc/hvczxTCV/4.jpg")',
        'url("https://i.postimg.cc/mgJPj0XL/5.jpg")',
        'url("https://i.postimg.cc/44QhG2dP/6.jpg")',
        'url("https://i.postimg.cc/8PyJJFLr/7.jpg")',
        'url("https://i.postimg.cc/vH8xZ7xs/8.jpg")',
        'url("https://i.postimg.cc/dVL78q9N/9.jpg")',
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
      <h1>Palazzo Reale</h1>
      <p>Palazzo Reale ha rappresentato per oltre tre secoli il centro del potere a Napoli e in tutta l’Italia meridionale.
        Con la sua mole grigia e rossa affacciata su piazza Plebiscito e sul golfo, costituisce una vera e propria porta della città verso il mare.<br>
        Dentro questo imponente e severo edificio si celano una serie di porticati, cortili e giardini che conducono a spazi un tempo occupati dalla corte e dalle tante funzioni di servizio di una reggia.
        Oggi quelle funzioni sono state sostituite da un museo e da altri istituti culturali (la Biblioteca Nazionale, il Teatro di San Carlo).<br>
        Nell’Appartamento Storico dipinti, marmi, stucchi, arazzi e arredi preziosi raccontano le vite degli occupanti del Palazzo e con esse tanti momenti salienti della storia d’Italia e d’Europa.<br>
        Il Palazzo, per la sua stessa posizione, si presta naturalmente a essere il cuore pulsante della città.
        La missione del museo è proprio quella di favorire al massimo il dialogo con il contesto urbano, riscoprendo il ruolo di una reggia fastosa, creata per stupire il visitatore in quanto immagine stessa del potere.
        Da monumento dell’assolutismo a luogo di aggregazione e fucina culturale, il Palazzo attraversa i secoli raccontando la sua storia e sfidandoci a interrogarci sulla nostra stessa identità.</p>
        <p>All’interno del Palazzo si può visitare l’Appartamento Storico a cui si accede tramite il maestoso Scalone d’Onore che Montesquieu definì come il più bello d’Europa.
          L’Appartamento è composto da oltre 30 sale tra cui il Teatro di Corte, la Sala del Trono e la Cappella Reale, che racchiudono arredi preziosi e dipinti della collezione borbonica.<br>
          Ci sono, inoltre, numerosi spazi esterni che è possibile visitare: il Cortile d’Onore, il Cortile delle Carrozze, il Cortile del Belvedere e il Giardino Pensile,
          che offrono una splendida veduta del golfo di Napoli e del Vesuvio. Dal Cortile d’Onore si può accedere anche al Giardino Romantico dove è l’ingresso della ‘Galleria del tempo’,
          il percorso multimediale nella storia di Napoli allestito nelle Scuderie Borboniche.</p>

          <h3>La storia</h3>
          <h5>Periodo vicereale</h5>
          <p>La costruzione del Palazzo Reale fu affidata nel 1600 dal viceré Fernando Ruiz de Castro, conte di Lemos, all’architetto Domenico Fontana.
            Il palazzo fu residenza dei viceré (rappresentanti dei re di Spagna prima e degli imperatori asburgici poi) fino al 1734, anno in cui Carlo di Borbone divenne re di Napoli e ne fece la sua sede ufficiale.</p>
            <h5>Periodo borbonico</h5>
            <p>Il re avviò importanti lavori, ampliando il Palazzo lungo il fronte meridionale, creando un giardino pensile che guarda al Vesuvio, riorganizzando gli spazi interni,
              con particolare riguardo per gli appartamenti privati del re e della regina Maria di Sassonia. Vennero edificati due nuovi cortili e rinnovata la decorazione pittorica,
              con l’intervento di artisti quali Francesco Solimena, Francesco De Mura e Domenico Antonio Vaccaro.<br>
              Nel 1768, in occasione delle nozze di Ferdinando IV di Borbone – succeduto al padre Carlo sul trono di Napoli – con Maria Carolina d’Austria, fu inaugurato il Teatro di Corte,
              opera dell’architetto Ferdinando Fuga. Trent’anni prima, nel 1737, il capostipite della linea dei Borbone di Napoli aveva fondato, su un’area adiacente al Palazzo, il Teatro di San Carlo,
              il più antico teatro lirico del mondo.</p>
              <h5>Periodo Napoleonico</h5>
              <p>Nel periodo napoleonico la Reggia fu abitata da Gioacchino Murat, succeduto nel 1808 a Giuseppe Bonaparte, a cui Napoleone aveva affidato il Regno di Napoli.<br>
                Sua moglie Carolina, sorella minore di Napoleone, arricchì il Palazzo con mobili e suppellettili francesi provenienti dal Palazzo del Quirinale, scelto come residenza dell’imperatore a Roma.</p>
                <h5>Regno delle due sicilie</h5>
                <p>Ferdinando di Borbone rientrò a Napoli nel 1816, al termine del decennio napoleonico, con il nuovo titolo di re delle Due Sicilie.<br>
                  Il regno di Ferdinando I fu uno dei più lunghi della storia: durò oltre 65 anni, compresa la reggenza, durante i quali trasferì nell’area di Palazzo Reale la fabbrica di porcellane (1772)
                  e la manifattura degli arazzi (1778).<br>
                  L’aspetto attuale della Reggia si deve ai radicali interventi diretti dall’architetto Gaetano Genovese dopo l’incendio del 1837, negli anni in cui regnò Ferdinando II.
                  In quel periodo l’edificio raggiunse l’estensione attuale, fu demolito il preesistente palazzo vicereale (che insisteva sull’area dell’attuale piazza Trieste e Trento),
                  lo Scalone d’Onore e l’Appartamento “di Etichetta” vennero rinnovati secondo lo stile neoclassico e gli appartamenti privati furono trasferiti al secondo piano.</p>
                  <h5>Periodo sabaudo</h5>
                  <p>Con l’annessione del Regno delle Due Sicilie al Regno d’Italia (1860) il palazzo passò ai Savoia. Fu il re Umberto I a far collocare (1888) nelle nicchie della facciata principale
                    le statue degli otto sovrani delle diverse dinastie che detennero il trono di Napoli, in corrispondenza delle arcate del porticato, murate nel 1753 da Luigi Vanvitelli per consolidare la struttura.<br>
                    I Savoia furono particolarmente legati alla città, al punto da scegliere di alternare il titolo di principe di Napoli a quello di principe di Piemonte per l’erede al trono. Umberto I e la moglie
                    Margherita si stabilirono nel Palazzo Reale di Napoli dopo il loro viaggio di nozze, nel 1868; qui l’anno seguente nacque Vittorio Emanuele III.<br>
                    Curiosamente fu proprio quest’ultimo a decidere di rinunciare al palazzo come residenza, cedendolo al Demanio nel 1919 e destinando gran parte dell’edificio a una funzione pubblica:
                    vi fu quindi trasferita la Biblioteca Nazionale, precedentemente collocata nel Palazzo degli Studi (attuale Museo Archeologico Nazionale di Napoli). La nuova sede, individuata dall’allora
                    ministro della Pubblica Istruzione Benedetto Croce, fu inaugurata nel 1927.</p>
                    <h5>Oggi</h5>
                    <p>Oggi convivono all’interno di Palazzo Reale: il museo di Palazzo Reale (cui nel 2019 è stato riconosciuto lo status di museo autonomo di rilevante interesse nazionale),
                      la Biblioteca Nazionale e le due Soprintendenze per il comune e per l’area metropolitana di Napoli.</p>
                    </div>
                  </article>

                  <article>
                    <div class="descrizione_aggiuntiva">
                      <h2>Orari</h2>

                      <h4>Orari Appartamento Storico</h4>

                      <p>9,00-20,00</p>
                      <p>(ultimo ingresso 19.00)</p>
                      <p>Chiuso: mercoledì, 1 Gennaio e 25 Dicembre</p>
                      <p>(Cappella Reale e retrostanze: 12.30-15.45)</p>

                      <h4>Orari Galleria del Tempo</h4>

                      <p>10,00 ‒ 17,00</p>
                      <p>(ultimo ingresso 16.00)</p>
                      <p>Chiuso: mercoledì, 1 gennaio e 25 dicembre</p>

                      <h4>Orari Giardino Romantico</h4>

                      <p>Apertura: 9.00</p>
                      <p>Chiusura:</p>
                      <p>Da novembre a gennaio 16.30</p>
                      <p>Febbraio 17.30</p>
                      <p>Marzo e ottobre 18.00</p>
                      <p>Aprile e settembre 19.00</p>
                      <p>Da maggio ad agosto 20.00</p>

                      <h4>Orari Giardino Pensile</h4>

                      <p>Accesso senza guida (durata 15 minuti): lun-mar-gio-ven.</p>
                      <p>13.00 e 15.15, sab. 13.00 e 14.30, dom. 15.15</p>
                      <p>Visite guidate (durata 40 minuti):</p>
                      <p>sab. 17.00 e 17.45 - dom. 11.00, 11.45 e 12.30</p>
                      <p>Durante le domeniche gratuite non si effettueranno visite al Giardino Pensile</p>
                      <br>

                      <h2>Tariffe</h2>

                      <h4>Biglietti Appartamento + Galleria del Tempo + Mostre temporanee</h4>
                      <p>Intero €10</p>
                      <p>Ridotto: €2</p>
                      <p>(Cittadini CE 18-25 anni)</p>
                      <p>Gratuito minori di 18 anni</p>
                      <h4>Biglietti Giardino Pensile</h4>
                      <p>€2, oltre biglietto del museo, per accesso senza guida</p>
                      <p>€5, oltre biglietto del museo, con visita guidata</p>
                      <br>

                      <h2>Come arrivare</h2>

                      <p>Piazza del Plebiscito 1, 80132, Napoli</p>
                      <p><b>In auto:</b> <br>dall’autostrada, tangenziale, uscita Centro – Porto, percorrere Via Marina fino a Piazza Municipio. Arrivare a piedi fino a piazza del Plebiscito (10 minuti).</p>
                      <p><b>In aereo:</b> <br>dall’aeroporto Alibus fino a piazza Municipio. Arrivare a piedi fino a piazza del Plebiscito (10 minuti).</p>
                      <p><b>In treno:</b> <br>dalla stazione ferroviaria di Piazza Garibaldi prendere la metropolitana Linea 1 direzione Piscinola, scendere alla fermata Municipio. Arrivare a piedi fino a piazza del Plebiscito (10 minuti). <br>
                        Oppure da piazza Garibaldi prendere autobus R2 fino al teatro San Carlo.</p>
                        <p><b>In metropolitana:</b> <br>Linea 1 fermata Municipio.</p>
                        <p><b>In autobus:</b> <br>Da piazza Garibaldi prendere il numero R2 fino a piazza Municipio. <br>Da piazza Vittoria prendere il tram 1 fino a piazza Municipio.</p>
                        <p><b>In funicolare:</b> <br>da piazza Fuga (Vomero) prendere la Funicolare Centrale fino all’ultima fermata in piazzetta Duca d’Aosta.</p>
                      </div>
                    </article>

                    <section>
                      <div class="mappa">
                        <div class="mapouter">
                          <div class="gmap_canvas">
                            <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=piazza%20del%20Plebiscito%201,%2080132,%20Napoli&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-to.org">123movies</a><br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style>
                            <a href="https://www.embedgooglemap.net">embed google maps</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
                          </div>
                        </div>
                      </div>
                    </section>

                    <section>
                      <a name="recensioni"></a>
                      <div class="box_recensioni">
                        <h1>Recensioni sul Palazzo Reale</h1>
                        <form action="../recensione/3scrivi.php">
                          <button type="submit" id="pulsante">
                            Lascia la tua recensione
                          </button>
                        </form>
                        <div class="recensioni">

                          <?php
                          $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
                          or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
                          $sql=pg_query("SELECT commento,data,utente,stelle FROM palazzo ORDER BY id DESC;");
                          while ($array = pg_fetch_array($sql)) {
                            echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ al Palazzo Reale<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
                          }
                          ?>

                        </div>
                      </div>
                    </section>

                    <section class="cards clearfix" >
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
                    <div class="card" >
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
