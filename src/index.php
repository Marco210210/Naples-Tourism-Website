<!DOCTYPE html>
<html lang="it" class="homepage">
<head>
  <meta charset="utf-8">
  <title>Home page</title>
  <link rel="icon" type="image/png" href="logo_url.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="header/style.css">
  <link rel="stylesheet" href="footer/style.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body link="#000" vlink="#000" alink="#000" class="homepage">

  <header>
    <div>
      <?php
      session_start();
      if(isset($_COOKIE['stato'])){
        $_SESSION['login_flag']=1;
      }
      if(!isset($_SESSION['login_flag'])){
        include 'header/header.html';
      }
      if(isset($_SESSION['login_flag'])){
        include 'header/header_log.html';
      }
      ?>
      <?php if(!isset($_SESSION['nome'])){
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
    </div>
  </header>

  <section class="cover">
    <div class="cover_filter"></div>
    <section class="immagine">
      <h1 class="immagine_h1">Napoli</h1>
    </section>
    <script>
    function changeBg() {
      const images = [
        'url("https://i.postimg.cc/hjNYdNKT/1-1.jpg")',
        'url("https://i.postimg.cc/Y9090vLq/21.jpg")',
        'url("https://i.postimg.cc/s1dDTK6v/22.jpg")',
        'url("https://i.postimg.cc/K89JTCNj/12.jpg")',
        'url("https://i.postimg.cc/ydRPwxz3/13.jpg")',
        'url("https://i.postimg.cc/ncpkPnSM/14.jpg")',
        'url("https://i.postimg.cc/WzPnjV2W/15.jpg")',
        'url("https://i.postimg.cc/7Y9Vvjj9/16.jpg")',
        'url("https://i.postimg.cc/fRbvMBNN/17.jpg")',
        'url("https://i.postimg.cc/PJzM57Jt/18.jpg")',
        'url("https://i.postimg.cc/6Q2Lvqqb/19.jpg")',
        'url("https://i.postimg.cc/cLdbwRG9/2-1.jpg")',
        'url("https://i.postimg.cc/N0387trs/20.jpg")',
        'url("https://i.postimg.cc/6pz10899/4-1.jpg")',
        'url("https://i.postimg.cc/wMhwsvfY/5-1.jpg")',
        'url("https://i.postimg.cc/zfcts4b6/6.jpg")',
        'url("https://i.postimg.cc/VkPdgspD/23.jpg")',
        'url("https://i.postimg.cc/SKDRm6sv/24.jpg")',
        'url("https://i.postimg.cc/hPWwPFyq/9.jpg")',
        'url("https://i.postimg.cc/0N8rgW8S/25.jpg")',
      ]
      const section = document.querySelector('section')
      const bg = images[Math.floor(Math.random() * images.length)];
      section.style.backgroundImage = bg;
    }
    setInterval(changeBg,3000)
    </script>
  </section>

  <section class="banner clearfix">
    <div class="banner_copy">
      <div class="banner_copy_text">
        <p>Napoli deve le sue origini alla sirena Partenope. Non a caso il suo carattere ha la bizzarria dell’ibrido: bene e male, gioia e tristezza, bellezza e degrado.
          Anime contrastanti che si scontrano e convivono l’una di fianco all’altro, come si comprende non appena si mette piede in città.
          Le splendide memorie storiche del Museo di Capodimonte e del Palazzo Reale insieme ai peggiori segni della modernità, traffico e caos.
          La devozione religiosa per San Gennaro che convive con l’anima pagana della città, conservata e tramandata nella Napoli Sotterranea e nella Cappella San Severo,
          tra le “capuzzelle” dei morti e l’alchimia del Cristo Velato.
          E poi scorci di un panorama senza eguali, regole di vita che valgono soltanto qui e in nessun altro posto della terra.
          C’è tanto da vedere, e non è facile scegliere. Napoli è un vero teatro della vita, a cielo aperto, ed accessibile a tutti.
          Ma non aspettatevi solo scenette divertenti e sfondi da cartolina.
          Per scoprire la città può bastare semplicemente andarsene in giro, ma se non volete perdervi il meglio, iniziate dai principali luoghi di interesse descritti sotto.</p>
        </div>
      </div>
    </section>

    <section class="cards clearfix" >
      <?php if(isset($_SESSION['login_flag'])){
        echo '<a href="pagine/pg6.php" >';
      }
      else{
        echo '<div onclick="myFunction()">';
      }
      ?>
      <div class="card">
        <img class="card_image" src="https://i.postimg.cc/SKDRm6sv/24.jpg" alt="">
        <div class="card_copy">
          <h3>Chiostro di Santa Chiara</h3>
          <p>Esistono luoghi che contribuiscono a rendere il mondo ancora più straordinario È il caso
            del complesso monumentale di Santa Chiara a Napoli, il Monastero con quel magnifico Chiostro che incanta cittadini e viaggiatori da generazioni.</p>
          </div>
        </div>
      </div>
    </a>

    <?php if(isset($_SESSION['login_flag'])){
      echo '<a href="pagine/pg1.php" >';
    }
    else{
      echo '<div onclick="myFunction()">';
    }
    ?>
    <div class="card">
      <img class="card_image" src="https://i.postimg.cc/xC2syrNV/cri1.jpg" alt="">
      <div class="card_copy">
        <h3>Cristo velato</h3>
        <p>Il Cristo velato è una scultura marmorea di Giuseppe Sanmartino, conservata nella cappella Sansevero di Napoli ed è stata realizzata nel 1753.
          Ne esistono altre due copie: una situata a Potenza e l'altra a Parma.</p>
        </div>
      </div>
    </div>
  </a>

  <?php if(isset($_SESSION['login_flag'])){
    echo '<a href="pagine/pg4.php">';
  }
  else{
    echo '<div onclick="myFunction()">';
  }
  ?>
  <div class="card">
    <img class="card_image" src="https://i.postimg.cc/pXhNpNPx/sangennaro.jpg" alt="">
    <div class="card_copy">
      <h3>Il Duomo e il Tesoro di San Gennaro</h3>
      <p>Luogo deputato principalmente al culto di San Gennaro.
        Ricco di cappelle di potenti famiglie napoletane, il Duomo è abbellito dai dipinti di Luca Giordano che raffigurano gli Apostoli, i Padri e i Dottori della Chiesa.</p>
      </div>
    </div>
  </div>
</a>
</section>

<section class="cards clearfix">
  <?php if(isset($_SESSION['login_flag'])){
    echo '<a href="pagine/pg5.php" >';
  }
  else{
    echo '<div onclick="myFunction()">';
  }
  ?>
  <div class="card">
    <img class="card_image" src="https://i.postimg.cc/tCLK6rg6/Museo-Archeologico.jpg" alt="">
    <div class="card_copy">
      <h3>Museo Archeologico di Napoli</h3>
      <p>Prima scuola di equitazione poi sede dell’Università, il Museo Archeologico di Napoli (MANN)
        fu inaugurato nel 1816 e ad oggi è uno dei più importanti nel mondo per la qualità e la quantità delle opere che custodisce.</p>
      </div>
    </div>
  </div>
</a>

<?php if(isset($_SESSION['login_flag'])){
  echo '<a href="pagine/pg2.php">';
}
else{
  echo '<div onclick="myFunction()">';
}
?>
<div class="card">
  <img class="card_image" src="https://i.postimg.cc/Qtd7xGz3/1.jpg" alt="">
  <div class="card_copy">
    <h3>Napoli Sotterranea</h3>
    <p>Un substrato ricco di storia legato ad un patrimonio raro, se non unico nel suo genere. Nel vedere questi enormi opere di grande ingegneria civile, a 40 metri di profondità tra
      cunicoli e cisterne un visitatore di Napoli può solo emozionarsi.</p>
    </div>
  </div>
</div>
</a>

<?php if(isset($_SESSION['login_flag'])){
  echo '<a href="pagine/pg3.php">';
}
else{
  echo '<div onclick="myFunction()">';
}
?>
<div class="card">
  <img class="card_image" src="https://i.postimg.cc/y8dRvh7P/1.jpg" alt="">
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
    <?php include 'footer/footer.html'; ?>
  </div>
</footer>

</body>
</html>

<script type="text/javascript">
function myFunction(){
  alert("Accedi per vedere altri contenuti");
}
</script>
