<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Il Duomo e il Tesoro di San Gennaro</title>
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
        'url("https://i.postimg.cc/3wFty1MG/sg10.jpg")',
        'url("https://i.postimg.cc/MpRPwxdd/sg11.jpg")',
        'url("https://i.postimg.cc/cHDThJL4/sg13.jpg")',
        'url("https://i.postimg.cc/xCjtLmY4/sg14.jpg")',
        'url("https://i.postimg.cc/QtSYzb0D/sg3.jpg")',
        'url("https://i.postimg.cc/kGp1Jg0h/sg4.jpg")',
        'url("https://i.postimg.cc/Pf3FzSCz/sg5.jpg")',
        'url("https://i.postimg.cc/bN4C4dHZ/sg6.jpg")',
        'url("https://i.postimg.cc/3JkfL2pM/sg7.webp")',
        'url("https://i.postimg.cc/mrsd2qnR/sg8.jpg")',
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
      <h1>Il Duomo e il Tesoro di San Gennaro</h1>
      <p>Il legame che Napoli e i napoletani con San Gennaro va ben oltre la semplice devozione per il Santo Patrono. E’ un sentimento viscerale e condiviso, che nel
        corso dei secoli ha superato divieti e restrizioni, rafforzandosi sempre più. Nonostante San Gennaro sia considerato dalla chiesa un santo di “Serie B”, non lo è per i napoletani.
        Il tesoro è la più immediata e importante prova di questo amore per “Faccia Gialla”, il nome con cui i partenopei chiamano il Santo dovuto alla sua statua più famosa in argento dorato.
        Il Tesoro di San Gennaro si trova nel Museo dedicato al Santo, all’interno del Duomo di Napoli, e raccoglie reliquie e oggetti preziosi, diventati oracoli di fede.
        Il Tesoro comprende anche statue, candelabri e argenti vari, che i devoti hanno gelosamente protetto durante i numerosi saccheggi della città.
        Questo fa del Tesoro una delle cose da vedere senz’altro a Napoli. Testimonianza di quanto i napoletani ritengano San Gennaro una presenza vicina e confortante,
        come fosse un caro vicino di casa, a cui ricorrere nei momenti di bisogno ma anche quando si ha solo voglia di parlare un po’.</p>
        <h3>Le grazie chieste a San Gennaro</h3>
        <p>I napoletani sono un popolo molto fantasioso ed esigente e non è insolito che si rivolgano all’aldilà per ricevere le grazie più disparate e stravaganti.
          San Gennaro è uno dei santi più amati della città e spesso i napoletani si intrattengono con lui in discorsi privatissimi e molto intimi per chiedergli qualsiasi tipo di grazia:
          dall’aiuto per un goal che può risollevare la precaria posizione del Napoli in classifica, alla richiesta dei numeri vincenti, rigorosamente da ricevere tramite sogno,
          per il lotto o il superenalotto, fino a veri e propri miracoli per la guarigione da gravi malattie. La grazia più significativa che è stata chiesta a San Gennaro, è stata la
          protezione dall’impetuosa eruzione del Vesuvio: da quel momento in poi il santo è divenuto parte integrante della città e della vita dei napoletani.</p>
          <h3>La storia di San Gennaro</h3>
          <p>La storia di San Gennaro è piuttosto tormentata: tutto cominciò con una semplice visita di cortesia al diacono Sossio a Miseno, che in realtà si trasformò in un viaggio di terrore.
            Sossio venne arrestato e dopo poco anche Gennaro, a causa della persecuzione avviata dall’imperatore Diocleziano. Il santo fu condannato a morte e doveva essere sbranato dagli orsi
            insieme ad altri condannati ma, a causa di un evento inaspettato, i programmi cambiarono e fu stabilita la decapitazione dei prigionieri alla Solfatara. Le notizie storiche sulla
            vita del santo si concludono qui per lasciare spazio invece a quelle delle tradizioni e delle leggende.</p>
            <h3>Le leggende su San Gennaro</h3>
            <p>La tradizione narra che, alla morte del martire, il suo sangue sia stato raccolto da una donna molto devota che lo sistemò in varie ampolline: una storia, tra leggenda e realtà,
              che incrementa il fascino e il mistero che da sempre avvolgono il santo e la sua vita. Si racconta inoltre che il martire fu decapitato a Pozzuoli su una pietra e che il 19 settembre
              di ogni anno, giorno della sua morte, questo masso diventi di un rosso molto accesso a causa del sangue del martire che si scioglie. La grande devozione e venerazione che la gente
              nutre per San Gennaro, è strettamente legata al suo sangue che attualmente è gelosamente conservato all’interno del Duomo di Napoli, insieme con il suo busto, in cui sono situate le
              ossa che sembra appartengano al suo cranio.</p>
              <h3>Il miracolo di San Gennaro</h3>
              <p>Il miracolo di San Gennaro si svolge due volte l’anno, il 19 settembre e il sabato che precede la prima domenica di maggio, e si verifica quando il sangue del santo si liquefa.
                Napoletani e credenti sparsi in tutto il mondo attendono con ansia che il miracolo abbia luogo e valutano le sorti della città di Napoli in base al tempo che il sangue impiega a
                liquefarsi, più è lungo, più il destino appare nefasto. Il primo miracolo del sangue di San Gennaro, storicamente accertato, avvenne il 17 agosto 1389, durante le numerose dominazioni
                straniere a Napoli. Originariamente nei giorni del miracolo sedevano sulle prime panche della chiesa le cosiddette parenti di San Gennaro, ovvero donne di estrazione popolare, native
                dei quartieri del Molo Piccolo, che imploravano e sollecitavano il busto del santo affinché il miracolo avvenisse nel minor tempo possibile.</p>
                <h3>Il Tesoro di San Gennaro</h3>
                <p>I napoletani sono molto devoti al loro santo patrono e il Museo del Tesoro, dove è possibile ripercorrere la storia di San Gennaro e cogliere la sua essenza più profonda,
                  è un omaggio che questo popolo porge al proprio santo protettore. Il Museo, tra libri, oggetti e statue che gli appartenevano, è una minuziosa esibizione di tutto quello che
                  riguarda la vita del santo. Tutti i preziosi pezzi, dal grande valore affettivo e sentimentale, sono esposti sopra delle pedane o contenuti in teche molto modeste per creare un
                  suggestivo contrasto tra la pregevolezza delle opere esibite e l’umiltà dei sostegni. Per concludere il percorso in bellezza troverete una rampa di scale che vi condurrà alle Sacrestie
                  dove troverete stupende volte affrescate e meravigliosi marmi.</p>
                </div>
              </article>

              <article>
                <div class="descrizione_aggiuntiva">
                  <h2>Orari</h2>

                  <h4>Orari Tesoro di San Gennaro</h4>
                  <p>Tutti i giorni: dalle 9:30 alle 18:00 (ultimo ingresso 19.00)</p>
                  <h4>Orari Cappella del Tesoro</h4>
                  <p>Lunedì E Sabato: 09.30–13.00 (ultimo ingresso 12:30) / 15.00-18.00 (ultimo ingresso 17.30)</p>
                  <p>Domenica: 09.00–13.00 (ultimo ingresso 12:30) / 16.30–18.00 (ultimo ingresso ore 17.30)</p>
                  <br>

                  <h2>Tariffe</h2>
                  <h4>Biglietti Tesoro di San Gennaro</h4>
                  <p>Intero €10</p>
                  <p>Ridotto: €7 (over 65, accompagnatori disabili)</p>
                  <p>Gratuito minori di 12 anni, disabili, isegnanti accompagnatori</p>
                  <h4>Audioguida Cappella di San Gennaro</h4>
                  <p>Audioguida: €10</p>
                  <br>

                  <h2>Come arrivare</h2>
                  <p>Via Duomo 149, 80132, Napoli</p>
                  <p><b>In auto:</b> <br>arrivato al parcheggio autorizzato ZTL, il personale del parcheggio ti darà informazioni su come proseguire</p>
                  <p><b>In treno:</b> <br>dalla stazione centrale attrversa Piazza Garibaldi, prendi corso Umberto I e cammina per circa 650 metri fino a piazza Nicola Amore.
                    Imbocca via Duomo sulla destra della piazza e prosegui per circa 500 metri, troverai l’ingresso del museo alla tua destra, di fianco al Duomo di Napoli.
                    L’Ingresso è sotto i porticati</p>
                    <p><b>In metropolitana:</b> <br>dalla fermata Dante della Metro Linea 1, oppure dalla fermata Piazza Cavour della Metro Linea 2</p>
                  </div>
                </article>

                <section>
                  <div class="mappa">
                    <div class="mapouter">
                      <div class="gmap_canvas">
                        <iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Via%20Duomo%20149,%2080132,%20Napoli&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
                    <h1>Recensioni sul Tesoro di San Gennaro:</h1>
                    <form action="../recensione/4scrivi.php">
                      <button type="submit" id="pulsante">
                        Lascia la tua recensione
                      </button>
                    </form>
                    <div class="recensioni">
                      <?php
                      $db = pg_connect("host=localhost port=5432 dbname=TSW user=www password=tsw2022")
                      or die('Impossibile connetersi al database: ' . pg_last_error());/*accedo al database*/
                      $sql=pg_query("SELECT commento,data,utente,stelle FROM sangennaro ORDER BY id DESC;");
                      while ($array = pg_fetch_array($sql)) {
                        echo "<div class='contenitore_recensioni'>"."<div class='dati'>L'utente: <b>".$array['utente']."</b><br>Ha lasciato una recensione di ".$array['stelle']."⭐ sul Duomo e il Tesoro di San Gennaro<br>In data: ".$array['data']."</div><br><div class='commento'>".$array['commento']."</div></div>";
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
                      Ne esistono altre due copie: una nella chiesa a Potenza e l'altra a Parma.</p>
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
