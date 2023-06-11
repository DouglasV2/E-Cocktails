<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $korisnicko_ime = $_POST['korisnicko_ime'];
  $lozinka = $_POST['lozinka'];

  $xml = simplexml_load_file('korisnici.xml');

  $pronadjen = false;
  $je_admin = false;

  foreach ($xml->korisnik as $korisnik) {
    if ((string)$korisnik->korisnicko_ime === $korisnicko_ime && (string)$korisnik->lozinka === $lozinka) {
      $pronadjen = true;

      if ((string)$korisnik->korisnicko_ime === 'admin') {
        $je_admin = true;
      }

      break;
    }
  }

  if ($pronadjen) {
    echo 'Prijava uspješna!';

    $_SESSION['korisnik'] = $korisnicko_ime;

    if ($je_admin) {
      header('Location: kokteli.php');
      exit();
    } else {
      header('Location: kokteli.php');
      exit();
    }
  } else {
    echo 'Neuspješna prijava. Provjerite korisničko ime i lozinku.';
  }
}

?>
