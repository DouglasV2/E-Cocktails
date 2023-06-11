<!DOCTYPE html>
<html>
<head>
    <title>Unos za PHP</title>
    <link rel="stylesheet" type="text/css" href="unos.css">
    <style>
        p.ingredients {
            color: white;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div id="wrapper">       
        <div class="navigacija">
            <nav>
            <ul>
                <li><a href="kokteli.php">Home</a></li>
                <li><a href="#">O nama</a></li>
                <li><a href="https://localhost/XML_Projekt/unos.php">Popis</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
            </nav>
        </div>        
        <div class="naslov">
            <h3>Popis najpopularnijih koktela</h3>
        </div>

        <div class="container">
            <h1></h1>
        
            <div class="image-row">
              <?php
              $xml = simplexml_load_file('kokteliXML.xml');

              foreach ($xml->cocktail as $cocktail) {
                $name = $cocktail->name;
                $image = $cocktail->image;
                $price = $cocktail->price;
                $year = $cocktail->year;
              ?>
              <div class="image-column">
                <h2><?php echo $name; ?></h2>
                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                <p>Prosjecna cijena: <b><?php echo $price; ?></b></p>
                <p class="ingredients">Sastojci:</p>
                <?php
                foreach ($cocktail->ingredients->ingredient as $ingredient) {
                  echo "<p class=\"ingredients\">" . $ingredient . "</p>";
                }
                ?>
                <p>Godina izdanja: <?php echo $year; ?></p>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
    </div>
</body>
</html>
