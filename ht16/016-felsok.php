<!doctype html>
<html lang="sv">
<meta charset="utf-8" />
<title>Felsök</title>

<!-- Mithril HTML Slideshow styles -->
<link href="../css/mithril-slideshow.css" rel="stylesheet" />

<!-- Code formatting using highlight.js -->
<link rel="stylesheet" href="../css/default.css">
<link rel="stylesheet" href="../css/tomorrow.css">
<script src="../js/highlight.pack.js"></script>

<!-- Text formatting using Markdown through showdown.js -->
<script src="../js/showdown.min.js"></script>



<!-- Here comes the slides in order -->
<script data-role="slide" data-markdown type="text/html">
#Felsök
##HTML, CSS, PHP
###Mikael Roos, dbwebb
</script>


<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Agenda

* Tekniker vid felsökning

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Synliga fel

<img src="img/synliga-fel.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Osynliga fel

<img src="img/osynliga-fel.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Osynliga fel...

<img src="img/visa-kallkod.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Skumma fel 1

<img src="img/skumma-fel-1.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Skumma fel 2

<img src="img/skumma-fel-2.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Skumma fel 3

<img src="img/skumma-fel-3.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Jobba med problemet

<img src="img/jobba-med-problemet.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Felsök med avbryt

* `exit` eller `die("why?")`
* vid redirect
* vid många inludes

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Felsök med sessioner

* Skriv ut inkommande och utgående
* Är värdena som du förväntar dig?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Validera

* Validera HTML
* Validera CSS

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Kolla källkoden

* Högerklicka och visa källkod i webbläsaren

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Devtools

* HTML
* CSS

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Devtools

* Network (alla resurser laddade?)

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#[PHP visa felmeddelanden](https://dbwebb.se/coachen/visa-felmeddelanden-pa-din-php-sida)

```
// Set the error reporting.
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#PHP output buffering

`php.ini`

```
output_buffering: 0   # Do not buffer output
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Radnummer

* `dbwebb publishpure`

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Radnummer...

> Notice: A session had already been started - ignoring session_start() in /home/saxon/students/20162/magi16/www/dbwebb-kurser/htmlphp/me/kmom04/stylechooser/chooser.php on line 2

Den raden i den filen använder inte session_start().

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Radnummer...

```
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30); session_name($name); session_start(); $stylesheets = [ "default" => "css/│
```

Koden minifierad.

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Radnummer...

* `dbwebb publishpure`
* Publisera koden som icke minifierad.

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#1. Formulera frågan

* Vad gör du?
    * (Länka till instruktionen)
* Vilket resultat får du?
* Vilket resultat förväntar du dig?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#2. Återskapa felet

* Hur gör man för att återskapa felet
    * Testfall

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#3. Isolera problemområdet

* Jobba strukturerat
* echo, var_dump, kommentarer, die("why?")
* Avgränsa programdel, fil, funktion, rad
* Finns ingen magi

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utmanande felsökning

* HTML, CSS, PHP (JavaScript)
* Webbläsaren, webbservern
* Filer lokalt, på servern
* Databasen, Cachade delar
* Koppling klient, server, databas

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Skriv testprogram

* Osäker på om/hur saker funkar?
* Fråga - Gissa - Testa
* Lär dig skriva små korta testprogram

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Träna dig på att ställa frågan

<img src="img/stall-fragan.png" style="width: 1024px">

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Undvik gissningar

> Inte tro, inte gissa - testa, visa och se med egna ögon

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Avslutningsvis

* Frågor på det?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
</script>



<!-- include essential js-script -->
<script src="../js/mithril.min.js"></script>
<script src="../js/mithril-slideshow.js"></script>
