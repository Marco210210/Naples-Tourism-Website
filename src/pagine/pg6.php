<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Chiostro di Santa Chiara</title>
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
        'url("https://i.postimg.cc/sf92c3J4/csc1.webp")',
        'url("https://i.postimg.cc/PrSrgK9L/csc2.jpg")',
        'url("https://i.postimg.cc/8z3k5c1N/csc3.jpg")',
        'url("https://i.postimg.cc/J4rzYS6V/csc4.jpg")',
        'url("https://i.postimg.cc/sg1Ds7CT/csc5.jpg")',
        'url("https://i.postimg.cc/7L2HT467/csc6.jpg")',
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
      <h1>Chiostro di Santa Chiara</h1>
      <p>Il 14 agosto 1943 Napoli subì il più violento bombardamento aereo  dall’inizio della guerra. La ferita più devastante fu la distruzione del complesso medievale di Santa Chiara,
        ridotto ad un ammasso di rovine. In pochi attimi scomparve l’esempio più importante e significativo della architettura gotica a Napoli. Tutto ciò che restava di questo splendido
        capolavoro erano le mura perimetrali, la facciata con il grande rosone e il portale.<br>
        Santa Chiara era nata per volontà di Roberto d’Angiò e Sancia di Maiorca, la sua seconda moglie. I due sovrani dotarono la città di Napoli di numerose chiese e conventi e desideravano
        una cappella di corte degna del loro rango da dedicare al Santissimo Sacramento, con accanto un convento francescano per accogliere i frati che si occupavano delle funzioni liturgiche
        e un monastero per l’Ordine di clausura delle Clarisse. Proprio grazie alle Clarisse questo complesso, che comprendeva la chiesa, un monastero, un chiostro monumentale e una torre campanaria,
        prese il nome di Santa Chiara.</p>
        <h3>Una grande stalla?</h3>
        <p>L’edificazione della chiesa ebbe inizio nel 1310 e 18 anni dopo, nel 1328, fu ultimato tutto il complesso monumentale ad eccezione del campanile. La chiesa fu costruita da Gagliardo
          Primario che, nel rispetto del clima mistico in cui si era sviluppata l’arte gotica in Europa, completò l’opera all’insegna della pura semplicità dei principi francescani: una sola
          navata lunga 82 metri, larga 13 e alta 46 sulla quale si dischiudono dieci cappelle per lato. Si narra che re Roberto chiedendo al figlio Carlo un parere su come fosse l’aspetto della
          costruzione finita, ebbe la seguente risposta: Mi sembra una grande stalla con delle mangiatoie ai lati.</p>
          <h3>Gli interni della Chiesa di Santa Chiara</h3>
          <p>Santa Chiara nacque, quindi, come cappella di corte e fu il centro naturale delle manifestazioni religiose e civili del periodo angioino a Napoli. Nel suo grembo, inoltre. trovarono
            sepoltura i regnanti della dinastia, i loro discendenti e anche i più importanti dignitari della corte. Primo fra tutti re Roberto, il cui maestoso sepolcro è opera dei fiorentini Giovanni
            e Pacio Bertini, autori anche dell’altare maggiore e del pulpito. Successivamente. anche i Borbone furono sepolti in questa bellissima chiesa.  A Tino da Camaino e alla sua scuola si
            devono i sepolcri di Maria di Valois e del figlio di Roberto, Carlo di Calabria, morto prematuramente. Il sontuoso monumento funebre del 1777, ad opera di Giuseppe Sanmartino, stato
            fatto edificare da Carlo III per il suo primogenito Filippo, morto a soli 30 anni.<br>
            Poche testimonianze sopravvivono dei bellissimi affreschi di Giotto e della sua bottega napoletana, che secondo il Vasari un tempo rivestivano l’intera chiesa. Per oltre quattro secoli
            Santa Chiara resta immutata nel suo aspetto austero, proprio come la vollero i primi Angioini. In seguito, quando nel 1742 Ferdinando Sanfelice e Domenico Vaccaro iniziarono a lavorarci,
            cambiò completamente immagine. Insieme ad un vasto gruppo di decoratori e architetti, scardinarono le antiche strutture, distrussero archi e finestroni, trifore e bifore, pavimentazione
            e altari e riempirono l’interno di ornamenti barocchi che sconvolsero l’aspetto autentico della chiesa per il desiderio di volerla abbellire. Ma fu proprio questa la chiesa che le bombe
            rasero al suolo nel 1943. Adesso la struttura, restaurata completamente nel dopoguerra, ha il suo aspetto originario medievale, affascinante ed elegante, anche se non possiede più alcune
            delle sue inestimabili opere d’arte.</p>
            <h3>Il Chiostro Maiolicato del Complesso di Santa Chiara</h3>
            <p>Non è facile ricostruire la storia del Chiostro, una vera oasi di pace proprio nel centro di Napoli. Dell’antico Chiostro trecentesco è rimasto invariato il colonnato con 66 archi,
              mentre l’aspetto attuale del giardino è opera del Vaccaro che, su commissione della badessa Ippolita Carmignano, ristrutturò il Chiostro sistemando la parte centrale del cortile in quattro
              grandi aiuole, suddivise a loro volta da vialetti interni, e innalzò 64 pilastrini impreziositi da maioliche dipinte a mano. La celebre decorazione è opera degli artigiani Donato e Giuseppe
              Massa: maioliche policrome dipinte con un gioco di prospettive e colori, che si armonizzano perfettamente con le sfumature della natura circostante.</p>
              <h3>Museo dell'Opera di Santa Chiara</h3>
              <p>Questo Museo conta 4 sale espositive: la Sala Archeologica, che accoglie i reperti rinvenuti nel corso degli scavi, la Sala della Storia, che illustra l’evoluzione e i cambiamenti
                artistici di tutto il complesso monumentale, la Sala dei Marmi e la Sala dei Reliquiari, che espone pregiate urne sacre. Aperto nel 1995, questo Museo si colloca in alcuni ambienti
                del Monastero dove in origine vi erano gli appartamenti delle monache e illustra gli eventi storico-artistici della cittadella francescana. Al suo interno sono esibiti reperti
                provenienti dalla Chiesa, dal Chiostro e dal Monastero, in particolare quelli scampati al disastroso incendio del 1943. Il museo accoglie opere di elevato valore artistico come
                il trecentesco Fregio di S. Caterina dei fratelli Bertini e l’Ecce Homo di Giovanni da Nola, il più rinomato scultore cinquecentesco napoletano.</p>
                <h3>L'Area Archeologica di Santa Chiara</h3>
                <p>Questa zona archeologica si contraddistingue per la presenza di un complesso termale su cui si sono sovrapposti gli ambienti occidentali del convento e piccoli vani di servizio.
                  Il complesso termale databile nel periodo che si colloca tra la met e la fine del I secolo d. C. Il Presepe del ‘700. All’interno del monastero vi custodito uno dei presepi realizzati
                  a Napoli nel periodo del regno di Ferdinando IV di Borbone. Il re era un grande appassionato e collezionista di presepi e assegnava ai più importanti scultori dell’epoca la realizzazione
                  delle figure.</p>
                </div>
              </article>

              <article>
                <div class="descrizione_aggiuntiva">
                  <h2>Orari</h2>

                  <p>Lun-Sab 9:30 – 17:30</p>
                  <p>Dom 10:00 – 14:30</p>
                  <p>Ultimo ingresso 30 min. prima della chiusura</p>
                  <h4>Orari di apertura Basilica</h4>
                  <p>Lun-Sab 8:00 – 12:45 / 16:30 – 20:00</p>
                  <p>Dom 9:00 – 12:45 / 16:30 – 20:00​</p>
                  <br>

                  <h2>Tariffe</h2>

                  <p>Tariffa Intera 6,00€</p>
                  <p>Tariffa Ridotta 4,50€ (Insegnanti – Studenti Universitari under 30 – Over 65, con documento – ArteCard)</p>
                  <p>Tariffa Speciale 3,50€ (Ragazzi dai 8 ai 18 anni , soci FAI)​</p>
                  <br>

                  <h2>Come arrivare</h2>

                  <p>Via Santa Chiara 49c, Napoli, 80147</p>
                  <p>Nel centro storico di Napoli in Piazza del Gesù.</p>
                  <p><b>Metro:</b><br>potete scegliere tra la linea 1 e la linea 2.</p>
                  <p><b>Treno:</b><br>dalla linea 1 più vicina è quella di Piazza Dante. Dalla fermata, proseguite su Via Toledo. Al bivio, continuate tenendo la sinistra su Via Sant’Anna dei
                    Lombardi, fino a raggiungere Spaccanapoli. Appena superata Piazza del Gesù Nuovo, sulla vostra destra troverete l’ingresso del Monastero di Santa Chiara.</p>
                    <p><b>Treno:</b><br>dalla linea 2, invece, vi consiglio di scendere alla stazione di Montesanto. Da Piazza Montesanto, imboccate Via Portamedina, poi Via Forno Vecchio
                      ed infine Via Maddaloni. Sempre dritto, troverete sulla vostra destra il Monastero. Il chiostro maiolicato si trova all’interno del complesso.</p>
                    </div>
                  </article>

                  <section>
                    <div class="mappa">
                      <div class="mapouter">
                        <div class="gmap_canvas">
                          <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Via%20Santa%20Chiara%2049c,%20Napoli,%2080147&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                          <a href="https://123movies-to.org"></a><br>
                          <style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style>
                          <a href="https://www.embedgooglemap.net">how to add a map to wordpress</a>
                          <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style>
                        </div>
                      </div>
                    </div>
                  </section>

                  <section>
                    <a name="recensioni"></a>
                    <div class="box_recensioni">
                      <h1>Recensioni sul Chiostro di Santa Chiara</h1>
                      <form action="../recensione/6scrivi.php">
                        <button type="submit" id="pulsante">
                          Lascia la tua recensione
                        </button>
                      </form>
                      <div class="recensioni">
                        <?php
                        $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
                        or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
                        $sql=pg_query("SELECT commento,data,utente,stelle FROM santachiara ORDER BY id DESC;");
                        while ($array = pg_fetch_array($sql)) {
                          echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ al Chiostro di Santa Chiara<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
                        }
                        ?>
                      </div>
                    </div>
                  </section>

                  <section class="cards clearfix">
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
                      fu inaugurato nel 1816 e ad oggi è uno dei più importanti nel mondo per la qualità e la quantità delle opere che custodisce.</p>
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
