<?php
$workshopname = $_GET['workshopname'];
$workshopslug = $_GET['workshopslug'];
if(isset($_GET['ausfall'])) { 
  die('<div class="alert alert-warning" role="alert">No Workshop.</div><meta http-equiv="refresh" content="0; URL=/signup/ausfall.html">');
 }
 if(!isset($_GET['workshopname']) || !isset($_GET['workshopslug'])) { //if theres a code or userid missing, say so & die 
  die('<div class="alert alert-warning" role="alert">Invalid Workshop.</div><meta http-equiv="refresh" content="0; URL=/">');
 }
?>
<!doctype html>
<html lang="de" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Jugend hackt Lab Isenbuettel Workshop Signup</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    <link rel="icon" href="/favicon.ico">

    <!-- Bootstrap core CSS -->
<link href="/res/css/bootstrap.min.css" rel="stylesheet">
<link href="/res/css/custom.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="/res/css/buttons.css" rel="stylesheet">
    <link href="/res/css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div><a class="lead" href="/">
      <h3 class="float-md-start mb-0"><img src="/res/img/alpaka.svg" height="7%" width="7%"/>  Jugend hackt Lab Isenbuettel  <img src="/res/img/logo.svg" height="25%" width="25%"/></h3>
    </a><nav class="nav nav-masthead justify-content-center float-md-end">
        
      </nav>
    </div>
  </header>

  <main class="px-3">
    <p class="lead">Klicke hier um dich f&uuml;r den <b><?php echo $workshopname; ?></b> Workshop anzumelden.</p>
    <p class="lead">Click here to signup for the <b><?php echo $workshopname; ?></b> workshop.</p>
    <p class="lead">
      <a href="https://anmeldung.jugendhackt.org/jh-lab-isenbuettel/<?php echo $workshopslug; ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-red"><?php echo $workshopname; ?> Workshop Sign-Up / Anmeldung</a>
      <br /> <br/>
      <a href="https://anmeldung.jugendhackt.org/jh-lab-isenbuettel/" class="btn btn-lg btn-secondary fw-bold border-white bg-white">All Sign-Ups / Alle Anmeldungen</a>
    </p>

    <?php
 $exists = file_exists('/online/'.$workshopslug.'.html') && !is_dir('/online/'.$workshopslug.'.html'); 
 if ($exists) {
   echo '<iframe src="/online/<?php echo $workshopslug; ?>.html" frameborder="0" width="100%" height="100%"></iframe>';
 } else {
      echo '<iframe src="/online/nocontent.html" frameborder="0" width="100%" height="100%"></iframe>';
 }      
 ?>
    
  </main>

  <footer class="mt-auto text-white-50">
    <a href="https://jugendhackt.org/lab/isenbuettel/" class="text-white">Jugend hackt Lab Isenbuettel</a> | <a href="https://rabenspass.de" class="text-white">Jugendfoerderung Samtgemeinde Isenbuettel</a>.</p>
    <a href="https://rabenspass.de/impressum/" class="text-white">Impressum</a> | <a href="https://rabenspass.de/datenschutzerklaerung" class="text-white">Datenschutzerklaerung</a>
  </footer>
</div>


    
  </body>
</html>
