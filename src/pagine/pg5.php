<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Museo archeologico Napoli</title>
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
        'url("https://i.postimg.cc/s2vkM4TN/man.jpg")',
        'url("https://i.postimg.cc/d0pzrZXt/man.jpg")',
        'url("https://i.postimg.cc/yYT4tdJv/man2.jpg")',
        'url("https://i.postimg.cc/XY7Sbbd3/man3.jpg")',
        'url("https://i.postimg.cc/WpCw1CDK/man4.jpg")',
        'url("https://i.postimg.cc/65ZL2cnQ/man5.jpg")',
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
      <h1>Museo archeologico nazionale di Napoli</h1>
      <p>Prima scuola di equitazione poi sede dell’Università, il Museo Archeologico di Napoli venne inaugurato nel 1816 e ad oggi è uno dei più importanti nel
        mondo per la qualità e la quantità delle opere che custodisce. Il Re Ferdinando IV intendeva creare a Napoli un imponente istituto per le arti e, a distanza
        di oltre due secoli, si può dire che le sue ambizioni siano state realizzate. Il Museo Archeologico, oltre a contenere i ritrovamenti degli scavi di Pompei,
        ospita reperti dell’età greco-romana, le antichità egizie ed etrusche della collezione Borgia e le monete antiche della collezione Santangelo.
        Da non perdere il “Gabinetto segreto” che raccoglie affreschi e sculture antiche dedicate al tema dell’erotismo.</p>
        <h3>Collezione Farnese</h3>
        <p>Ad Alessandro Farnese, divenuto poi Papa con il nome di Paolo III, e agli altri membri della sua famiglia, si deve la creazione di questa collezione.
          Lasciti, confische, acquisti e commerci permisero di racimolare un’ingente quantità di oggetti antichi e moderni, sculture, pitture e gemme per abbellire
          il Palazzo Farnese di Roma. Dopo la morte di tutti gli uomini della famiglia, questa preziosa raccolta passò nelle mani di Carlo di Borbone, grazie al
          lascito della madre Elisabetta Farnese. Divenuto Re di Napoli, nonostante il disaccordo del Papato, Carlo di Borbone trasferì l’intera collezione, dai
          palazzi romani al nascente Museo di Napoli.</p>
          <h3>Le sculture delle Terme di Caracalla</h3>
          <p>Dopo gli scavi cominciati sotto il pontificato di Sisto IV, Paolo Farnese fu il promotore di nuovi scavi alle Terme di Caracalla, per portare alla luce materiali
            che abbellissero il proprio palazzo in Campo de’ Fiori a Roma. Col trasferimento a Napoli, molte opere sono state disperse nei vari musei d’Italia e del mondo.
            Al Museo Archeologico di Napoli restano comunque custodite numerose opere scultoree provenienti dalle Terme. I gruppi scultorei non appartengono tutti allo stesso periodo,
            formano un insieme eterogeneo ma organizzato armonicamente in base alla dimensioni, alla composizione e alle tematiche. Tra le diverse opere, le più celebri il Toro e l’Ercole.</p>
            <h3>Galleria degli Imperatori</h3>
            <p>Nucleo fondamentale del collezionismo rinascimentale, erano i ritratti degli Imperatori romani, espressione del potere assoluto all’epoca.
              I Farnese, avvalendosi della collaborazione del bibliotecario Orsini, riuscirono ad accaparrarsi diversi ritratti scultorei dei più celebri Imperatori.
              Le opere erano esposte nella Sala Grande e nella Sale degli Imperatori del Palazzo Farnese, ma con il trasferimento a Napoli, la collezione subì diversi restauri,
              preservando, comunque, la sua importanza. Tra le varie sculture, di grande interesse sono i colossali busti di Giulio Cesare e di Vespasiano e una statua di Alessandro
              Severo in nudità eroica.</p>
              <h3>Gemme della Collezione Farnese</h3>
              <p>Sempre alla Collezione Farnese appartiene la meravigliosa raccolta di gemme antiche e moderne. Più di duemila pezzi di altissima qualità artistica abbelliscono due sale
                al pianterreno del Museo. Le gemme provengono da altre collezioni private e dagli antichi centri della Campania, e tra esse le più antiche sono quelle del Pontefice veneziano
                Paolo II Barbo e di Lorenzo il Magnifico, risalenti al 400 e ricche di esemplari unici. La collezione venne ereditata da Carlo di Borbone, e dopo aver dimorato nel Palazzo Reale di Napoli
                prima e nel Museo di Capodimonte poi, è giunta nel Museo Archeologico napoletano nel 1817.</p>
                <h3>Affreschi Pompeiani</h3>
                <p>Alcune sale del primo piano del Museo accolgono gli affreschi della collezione Pompeiana: si tratta di pitture staccate dalle ville e dalle case delle
                  città sommerse dall’eruzione del Vesuvio nel 79 d.C. Gli affreschi rappresentano una ricca testimonianza della pittura dell’età romana, e l’esposizione è
                  organizzata secondo criteri non solo cronologici, ma anche tematici. I soggetti raffigurati spaziano, infatti, da scene di vita quotidiana a temi mitologici e
                  religiosi a nature morte e paesaggi. Questa sezione presenta anche una pittura più “popolare” ma decisamente più pratica (insegne di botteghe, decorazione di taverne…).</p>
                  <h3>Mosaici Pompeiani</h3>
                  <p>Mentre i primi mosaici ritrovati tra le macerie di Pompei ed Ercolano furono accorpati agli affreschi, man mano che i ritrovamenti si facevano più cospicui
                    le due raccolte vennero separate, assumendo la collocazione attuale. I mosaici, ora, sono racchiusi nell’ammezzato occidentale del Museo, divisi per tecnica e
                    materia e testimoniano l’arte musiva tra il II secolo a.C. e il I secolo d.C. Tra i vari mosaici che rivestivano le colonne, le fontane e i pavimenti delle più
                    sfarzose ville pompeiane, degno di nota è quello della Battaglia di Isso che raffigura la vittoria di Alessandro Magno su Dario.</p>
                    <h3>Collezione Egizia</h3>
                    <p>La collezione Egizia del Museo Archeologico di Napoli, dopo quella dei Musei Vaticani e del Museo Egizio di Torino, è terza in Italia per ordine d’importanza.
                      Costituitasi tra il secondo e terzo decennio dell’800, la raccolta contiene materiali rinvenuti dagli scavi della zona vesuviana e flegrea e provenienti da collezioni private.
                      Nucleo principale della sezione è la collezione Borgia, ricca di oggetti e manoscritti provenienti dall’Egitto, seguita dalla collezione Picchianti, che comprende oggetti
                      funerari ed accessori di uso quotidiano. Oltre a custodire importanti reperti archeologici, la collezione ha un notevole valore storico.</p>
                      <h3>Villa dei Papiri</h3>
                      <p>Tra il 1750 e il 1764, grazie ad un articolato sistema di pozzi e cunicoli sotterranei, fu rinvenuta la Villa dei Papiri, una delle più ricche e sontuose ville romane.
                        Nel Museo sono custoditi busti, statue e teste di bronzo provenienti dalla Villa. È possibile ammirare, per esempio, piccoli busti di filosofi e letterati, cinque statue
                        raffiguranti le “danzatrici” (donne condannate a vita ad attingere l’acqua per aver ucciso gli sposi), due celebri statue in bronzo di corridori, nonché due papiri carbonizzati
                        e srotolati ed alcune riproduzioni di papiri collocati nella Biblioteca Nazionale di Napoli, per essere studiati.</p>
                        <h3>Salone della Meridiana</h3>
                        <p>Quest’enorme salone seicentesco si trova al primo piano del Museo. Per via della sua instabilità statica, nel corso del Seicento, non fu quasi mai aperto al pubblico,
                          fino a quando il re Carlo di Borbone affidò i lavori di restauro all’architetto Giovanni Antonio Medrano. Il Medrano, per rafforzare la copertura del Salone, utilizzò
                          l’escamotage del doppio tetto: un interno di travi sovrastate da un secondo ordine di capriate. Sulla volta si può ancora ammirare l’affresco di Pietro Bardellino che celebra
                          il re Ferdinando IV e sua moglie Maria Carolina, come protettori delle arti.</p>
                        </div>
                      </article>

                      <article>
                        <div class="descrizione_aggiuntiva">
                          <h2>Orari</h2>

                          <p>Tutti i giorni: 9.00 - 19.30 (ultimo ingresso 19:00)</p>
                          <p>Chiuso il martedì</p>
                          <p>Festivi: 25 dicembre 2021 ore 9-14, 1 gennaio 2022 ore 14-19.30</p>

                          <h2>Tariffe</h2>

                          <p>Biglietto ordinario: € 15,00</p>
                          <p>Ridotto: € 2,00 (cittadini europei 18-25 anni)</p>
                          <p>Famiglia: € 26.00 (due adulti)</p>
                          <p>Gratuito minori di 12 anni, disabili, isegnanti accompagnatori</p><br>

                          <h2>Come arrivare</h2>

                          <p>Piazza Museo 19, 80135 Napoli</p>
                          <p>Dall’aeroporto di Capodichino, Alibus fino alla stazione centrale + Metro (linea 1 o 2)</p>
                          <p>Dalla stazione centrale prendere Metro linea 1 fermata Museo oppure Metro linea 2 fermata Cavour</p>
                        </div>
                      </article>

                      <section>
                        <div class="mappa">
                          <div class="mapouter">
                            <div class="gmap_canvas">
                              <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Piazza%20Museo%2019,%2080135%20Napoli&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                          <h1>Recensioni sul Museo archeologico nazionale di Napoli:</h1>
                          <form action="../recensione/5scrivi.php">
                            <button type="submit" id="pulsante">
                              Lascia la tua recensione
                            </button>
                          </form>
                          <div class="recensioni">
                            <?php
                            $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
                            or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
                            $sql=pg_query("SELECT commento,data,utente,stelle FROM musarcheologico ORDER BY id DESC;");
                            while ($array = pg_fetch_array($sql)) {
                              echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ al Museo archeologico nazionale di Napoli<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
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
