<!DOCTYPE html>
<html>
<head>
	<title>E-Cocktails</title>
	<link rel="stylesheet" type="text/css" href="kokteli.css">
    <meta charset="utf-8">
</head>
<body>
    <div class="slika">
        <div class="prijava">
            <li><button id="login-btn">Prijava</button></li>
            <li><button id="register-btn">Registriraj se</button></li>
            <script>
                var loginBtn = document.getElementById("login-btn");
            
                loginBtn.addEventListener("click", function() {
                  window.open("Prijava.html", "_blank");
                });
                var loginBtn = document.getElementById("register-btn");
            
                loginBtn.addEventListener("click", function() {
                  window.open("Registracija.html", "_blank");
                });
              </script>
        </div>
        <header>
        <div class="container">
            <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">O nama</a></li>
                <li><a href="https://localhost/XML_Projekt/unos.php">Popis</a></li>
                <li><a href="#">Feedback</a></li>
                <?php
                    session_start();
                    if (isset($_SESSION['korisnik']) && $_SESSION['korisnik'] === 'admin') {
                        echo '<li><a href="#">Administrator</a></li>';
                    }
                ?>
            </ul>
            </nav>
        </div>
        </header>
        <div class="title">
            <div class="container">
                <h1>E-Cocktails</h1>
            </div>
        </div>
        <div class="hero">
        </div>
    </div>
    <div class="sve">
        <div class="content">
            <div class="container">
                <article>
                    <h2>Opis stranice</h2>
                    <p>Ova stranica je savršena za svakoga tko voli koktele! Osim standardnih koktela, stranica vam omogućava i da stvorite vlastiti koktel iz mnoštva različitih sastojaka. Bilo da tražite osvježavajuće ljetne koktele ili toplije zimske napitke, ovdje ćete naći nešto za sebe. Sve postojeće koktele možete pregledati i vidjeti njihove sastojke, a možete i stvoriti vlastite koktele dodavanjem ili oduzimanjem sastojaka. Sve u svemu, ovo je jedinstvena stranica za sve ljubitelje koktela!</p>
                </article>
                <aside>
                    <h2>Najistaknutiji kokteli</h2>
                    <ul class="drugalista">
                        <li>Mojito</a></li>
                        <li>Cosmopolitan</a></li>
                        <li>Cuba Libre</li>
                        <li>Negroni</li>
                        <li>Daiquiri</li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <section>
                    <h2>Izrada koktela</h2>
                    <p>Izrada koktela može biti zabavna i kreativna aktivnost za one koji vole eksperimentirati s okusima. Kako bi izradili koktel, trebat će vam nekoliko osnovnih sastojaka poput pića po vašem izboru, soka od limuna ili limete, šećera ili sirupa te leda. Za dodatni okus, možete koristiti razne vrste voća, biljaka ili začina. Važno je imati pravu opremu poput shakera, mješalice za koktele i mjerice. Uz malo kreativnosti i strpljenja, možete stvoriti nevjerojatne koktele koji će zadovoljiti vaše nepce.</p>
                </section>
                
            </div>
        </div>
        <div class="content">
            <div class="container">
                <article>
                    <h2>Prvi koktel</h2>
                    <p>Prvi ikada koktel, kao što je spomenuto u, bio je koktel Sazerac, koji je napravljen od rakije, absinta, šećera i bitera u apotekarskoj radnji u New Orleansu, vjerojatno 1830-ih. Kasnije ga je zaštitio Sazerac Co. 1900. i postao je baziran na viskiju. Ostaje klasik New Orleansa i službeni je koktel grada.
                        Prema starom američkom barmenskom almanahu, prvi koktel nastao je sasvim slučajno kao mješavina vrućeg destilata sa šećerom i limunom koji se dopunjavao raznim biterima potom rashlađivao velikim komadima leda.
                        Danas postoje na tisuće recepata sa zvučnim nazivima, pa nije nikakvo čudo da među njima često ima i onih koji se jedni od drugih razlikuju samo po imenu.
                    </p>
                </article>
                <aside>
                    <img id="magicslika" src="magic.png">
                </aside>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-text">
                <p>© Bruno Pusic</p>
            </div>
        </div>
    </footer>
    
</body>
  
</html>


