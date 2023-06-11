<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $korisnicko_ime = $_POST['korisnicko_ime'];
    $lozinka = $_POST['lozinka'];

    $xml = simplexml_load_file('korisnici.xml');

    foreach ($xml->korisnik as $postojeci_korisnik) {
      if ((string)$postojeci_korisnik->korisnicko_ime === $korisnicko_ime) {
        echo 'Korisničko ime već postoji. Odaberite drugo korisničko ime.';
        exit; 
      }
    }

    $korisnik = $xml->addChild('korisnik');
    $korisnik->addChild('korisnicko_ime', $korisnicko_ime);
    $korisnik->addChild('lozinka', $lozinka);

    $xml->asXML('korisnici.xml');

    echo 'Registracija uspješna!';
    header("Location: kokteli.php");
  }
?>
