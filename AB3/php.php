<!--<!DOCTYPE html>
<html lang="en">
    <head>-->
        <!-- header image: https://pixabay.com/photos/server-space-the-server-room-dark-2160321/ -->
        <!--<link rel="stylesheet" href="stylesheet.css" type="text/css">
        <meta charset="UTF-8">
        <script src="scroll+navicon.js"></script>-->
        <?php include_once('header_php.php'); ?>
        <title>PHP</title>
        <?php include_once('header2_php.php'); ?>
        <!--<style>
            ul { 
                padding-left: 1em;
            }
            ol { 
                padding-left: 1em;
            }
            h2 {
                padding-top: 1em;
            }
            .codebox {
                color: #F5F5F5;
                padding:10px;
                padding-left: 25px;
                background-color: #282828;
                font-style: italic;
            }
            .inhaltverzeichnis {text-decoration: none;}

            p { margin-top: 1em; margin-bottom: 1em;}
            .codebox {
                color: #F5F5F5;
                padding:10px;
                padding-left: 25px;
                background-color: #282828;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <script>
            document.body.className = document.body.className + " js_enabled";
        </script>
        <div id="header">-->
            <!-- Cookie Banner -->
            <!--<div id="cookie-message">
                <p style="margin-top: 0em; margin-bottom: 0em;">
                    Diese Webseite benutzt einen Cookie um dir eine individualisierte Webseite präsentieren zu können.
                    <a href="datenschutz.html" title="View our Cookie Policy">Finde mehr heraus über Cookies und Datenschutz</a>
                </p>
                <form>
                    <input id="knopf" type="button" value="Nicht Einverstanden" onclick="hide()">
                    <input id="knopf" type="button" value="Einverstanden" onclick="acceptCookie()">
                </form>
            </div>
            <div id="header-image"></div>-->
            <div id="navbar">
                <div id="nav">
                    <ul>
                        <li><a href="index.php">Startseite</a></li>
                        <li><a href="grundlagen.php">Grundlagen</a></li>
                        <li><a href="html5.php">HTML</a></li>
                        <li><a href="css3.php">CSS</a></li>
                        <li><a href="css3-2.php">CSS 2</a></li>
                        <li><a href="javascript.php">Javascript</a></li>
                        <li><a href="javascript2.php">Javascript (2)</a></li>
                        <li><a href="jsp_servlets_jaxb.php">JSP, Servlets, JAXB</a></li>
                        <li id="current"><a href="php.php">PHP</a></li>
                        <li><a href="nodejs.php">NodeJS</a></li>
                    </ul>
                </div>
                <a class="icon">
                    <hr>
                    <hr>
                    <hr>
                </a>
            </div>
        </div>
        <div class="content-container">            
            <div class="textbox">
                <h1 style="font-size: 2.5em" id="verzeichnis">PHP - Hypertext Preprocessor</h1>
                <h1>Inhaltsverzeichnis</h1>
                <div class="content">
                    <a class="inhaltverzeichnis" href=#kapitel1>1&emsp;Was ist PHP?</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel2>2&emsp;Prozedurale PHP-Grundlagen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel21>&emsp;2.1&emsp;Konstanten</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel22>&emsp;2.2&emsp;Variablen & Datentypen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel23>&emsp;2.3&emsp;HalloWelt in PHP</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel24>&emsp;2.4&emsp;Konstanten, Variablen & Datentypen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel25>&emsp;2.5&emsp;Existenz von Variablen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel26>&emsp;2.6&emsp;Zeichenketten</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel27>&emsp;2.7&emsp;Einbinden externer Dateien</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel28>&emsp;2.8&emsp;Beenden eines Skripts</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel29>&emsp;2.9&emsp;Arrays</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel210>&emsp;2.10&emsp;die for-each Schleife</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel211>&emsp;2.11&emsp;Operatoren</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel212>&emsp;2.12&emsp;Verzweigungen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel213>&emsp;2.13&emsp;Schleifen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel214>&emsp;2.14&emsp;eigene Funktionen</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel215>&emsp;2.15&emsp;Funktionen für HTML-Formulare</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel216>&emsp;2.16&emsp;Die PHP-Auswertung</a><br>



                    <a class="inhaltverzeichnis" href=#kapitel3>3&emsp;Lesen & Schreiben von Dateien</a><br>

                    <a class="inhaltverzeichnis" href=#kapitel4>4&emsp;Session-Handling und Weiterleitung</a><br> 

                    <a class="inhaltverzeichnis" href=#kapitel5>5&emsp;Datenbankzugriff in PHP</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel51>&emsp;5.1&emsp;Datenbankzugriff via MySQL-Extension</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel52>&emsp;5.2&emsp;Datenbankzugriff via MySQLi-Extension</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel53>&emsp;5.3&emsp;Datenbankzugriff via PDO-Klassen</a><br>


                    <a class="inhaltverzeichnis" href=#kapitel6>6&emsp;Exception-Handling in PHP</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel61>&emsp;6.1&emsp;die, exit oder @</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel62>&emsp;6.2&emsp;Exceptions</a><br>
                    <a class="inhaltverzeichnis" href=#kapitel63>&emsp;6.3&emsp;eigene Exceptions</a><br>
                </div>
            </div>






            <div class="textbox" id="kapitel1">
                <h1>Was ist PHP?</h1>
                <p>PHP: Hypertext Preprocessor, ursprünglich Personal Home Page Tools (PHP) ist eine server-seitige Skriptsprache mit einer an C und Perl angelehnten Syntax, die hauptsächlich zur Erstellung dynamischer Webseiten oder Web-Anwendungen verwendet wird.</p>
                <p>PHP kommt auf ca. 83% aller Websites als server-seitige Programmiersprache zum Einsatz. PHP ist dynamisch typisiert.</p>
                <p>PHP zeichnet sich durch eine:</p>
                <ul>
                    <li>&nbsp;breite Datenbankunterstützung,</li>
                    <li>Internet-Protokolleinbindung sowie durch</li>
                    <li>die Verfügbarkeit zahlreicher Funktionsbibliotheken aus.</li>
                </ul>
                <p>Eine PHP-Datei wird vom PHP-Interpreter ausgeführt!</p>
                <ul>
                    <li>Sie ist keine HTML-Datei für den Browser des Clients!</li>
                    <li>Sie wird vom Web-Server an den PHP-Interpreter übergeben!</li>
                    <li>Die Ausgabe des PHP-Interpreters ist normalerweise eine HTML-Seite.</li>
                </ul>
                <p>Der Text außerhalb von wird in die Ausgabe kopiert und damit zum Client gesendet. Auch Leerzeichen und Zeilenumbrüche werden in die Ausgabe kopiert!</p>
                <p>Der Aufruf einer .php-Datei über den Client sorgt im Gegensatz zu einem .html-Aufruf nicht dafür, dass der Inhalt der Datei direkt an den Client in Form einer HTTP-Response zurückgegeben wird. Die .php-Datei wird statt dessen an einen PHP-Interpreter auf dem Server geleitet. Dessen Ausgabe wird dann erst in Form eines HTTP-Responses an den Client gesendet.</p>
            </div>


            <div class="textbox" id="kapitel2">
                <h1>Prozedurale PHP-Grundlagen</h1>
                <h2 id="kapitel21">Konstanten</h2>
                <ul>
                    <li>Konstanten können wie folgt definiert werden:
                        <ul>
                            <li>define ("GREETING", "Hallo");</li>
                        </ul>
                    </li>
                    <li>der Zugriff erfolgt über den Namen, ohne $</li>
                    <li>Konstanten sind superglobal, d.h. überall sichtbar</li>
                    <li>der Wert der Konstanten lässt sich nicht mehr ändern</li>
                    <li>ein erneutes define() führt zu einer Fehlermeldung</li>
                    <li>Konstanten können nicht mehr entfernt werden</li>
                </ul>

                <h2 id="kapitel22">Variablen &amp; Datentypen</h2>
                <ul>
                    <li>es gibt keine unmittelbar sichtbaren Datentypen</li>
                    <li>es ist keine Variablendeklaration nötig</li>
                    <li>Variablennamen beginnen immer mit $</li>
                    <li>PHP typisiert die Variablen intern dynamisch
                        <ul>
                            <li>Boolean - bool mit den beiden Konstanten true und false</li>
                            <li>Ganzzahl - int, integer, long • Fließkommazahl - float, real, double</li>
                            <li>Zeichenkette - string</li>
                            <li>Arrays - array (indiziert oder assoziativ)</li>
                            <li>Objekt-Datentyp</li>
                        </ul>
                    </li>
                </ul>

                <h2 id="kapitel23" >HalloWelt in PHP</h2>

                <div class="codebox">
                    <pre><code>
&lt;?php
    $wert='Hallo';
    header('Content-type: text/html');
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&lt;?php echo($wert);?&gt;&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;&lt;?php echo($wert);?&gt;&lt;/h1&gt;
    &lt;/body&gt;
&lt;/html&gt;                 
</code></pre><p><br>Quellcode von HalloWelt in PHP</p>  
                </div>
                <br>
                <div class="codebox">
                    <pre><code>
&lt;?php
$wert="Hallo";
header("Content-type: text/html");
echo "&lt;!DOCTYPE html&gt;";
echo "&lt;html&gt;";
echo "&lt;head&gt;";
echo "&lt;title&gt;".$wert."&lt;/title&gt;";
echo "&lt;/head&gt;";
echo "&lt;body&gt;";
echo "&lt;h1&gt;".$wert."&lt;/h1&gt;";
echo "&lt;/body&gt;";
echo "&lt;/html&gt;";
?&gt;                
</code></pre><p><br>Alternative HalloWelt Quellcode in PHP</p>  
                </div>

                <h2 id="kapitel24">Konstanten, Variablen &amp; Datentypen</h2>
                <ul>
                    <li>der Typ Boolean hat Besonderheit
                        <ul>
                            <li>1 ist true (Zahl 1)</li>
                            <li>"" ist false (leerer String)</li>
                        </ul>
                    </li>
                    <li>Man kann den Datentyp einer Variablen prüfen mit...
                        <ul>
                            <li>is_bool($var) - Boolean</li>
                            <li>is_integer($var) - Ganzzahl</li>
                            <li>is_real($var) - Fließkomma</li>
                            <li>is_numeric($var) - Ganzzahl oder Fließkomma</li>
                            <li>is_string($var) - String</li>
                            <li>is_array($var) - Array</li>
                            <li>is_object($var) - Objekt</li>
                            <li>gettype($var) - Liefert den Typ als String</li>
                        </ul>
                    </li>
                </ul>
                <h2 id="kapitel25">Existenz von Variablen</h2>
                <ul>
                    <li>Der Zugriff auf nicht initialisierte Variablen ist verboten!</li>
                    <li>Mit isset kann man Variable prüfen, es liefert
                        <ul>
                            <li>true, wenn diese Variable einen Wert hat.</li>
                            <li>false, falls die Variable nicht gesetzt wurde.</li>
                        </ul>
                    </li>
                    <li>Mit unset kann man eine Variable löschen</li>
                </ul>
                <p>PHP löscht Variablen automatisch am Ende der Sichtbarkeit.</p>
                <br>

                <div class="codebox">
                    <pre><code>
define("PI", 3.14159265);
echo PI; // -&gt; 3.14159265

function flaeche($radius) {
return PI * $radius * $radius;
}

echo flaeche(2); // -&gt; 12.5663706           
</code></pre><p><br>Eine einfache Funktion und dessen Aufruf</p>  
                </div>
                <br>
                <div class="codebox">
                    <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;
&lt;?php
$a=4;
echo(var_dump($a));
echo('&lt;br/&gt;');
$a=9.9;
echo(var_dump($a));
echo('&lt;br/&gt;');
$a=FALSE;
echo(var_dump($a));
echo('&lt;br/&gt;');
?&gt;
&lt;/body&gt;&lt;/html&gt;         
</code></pre><p><br>Variablen auslesen mit var_dump</p>  
                </div>

                <h2 id="kapitel26">Zeichenketten</h2>
                <ul>
                    <li>Begrenzer für Strings ist " oder '</li>
                    <li>"...": Variablen und Sonderzeichen darin werden ausgewertet
                        <ul>
                            <li>echo ("Anzahl: $anzahl");</li>
                        </ul>
                    </li>
                    <li>'...': Variablen und Sonderzeichen werden nicht ausgewertet</li>
                    <li>Strings können Strings mit dem jeweils anderem Begrenzer enthalten
                        <ul>
                            <li>echo("");</li>
                            <li>echo('');</li>
                        </ul>
                    </li>
                    <li>Ab PHP-Version 5.6 wurde der Standardzeichensatz von ISO-8859-1 auf UTF-8 geändert.</li>
                    <li>Stringverkettung mit .
                        <ul>
                            <li>$greeting = "Hello " . $name;</li>
                        </ul>
                    </li>
                    <li>Zugriff auf einzelne Character (beginnt bei 0)
                        <ul>
                            <li>$zeichen = $greeting[4];</li>
                        </ul>
                    </li>
                    <li>Typischer Fehler
                        <ul>
                            <li>"Hello " + "World" ergibt 0</li>
                        </ul>
                    </li>
                </ul>
                <p>"Hello " . "World" ergibt "Hello World"</p>





                <h2 id="kapitel27">Einbinden externer Dateien</h2>
                <ul>
                    <li>Klassen oder Funktionen können aus anderen Dateien in eine PHP-Datei eingebunden werden per
                        <ul>
                            <li>require_once "php-datei"; oder per</li>
                            <li>include_once "php-datei";</li>
                        </ul>
                    </li>
                    <li>Dies ist vergleichbar mit #include in C++.</li>
                    <li>Eine bedingte Einbindung ist über eine if-Anweisung möglich.</li>
                    <li>Auch der Dateiname kann zur Laufzeit berechnet werden.</li>
                    <li>Jede Datei wird dabei nur einmal inkludiert.</li>
                    <li>Eine fehlende Datei bewirkt
                        <ul>
                            <li>einen Abbruch bei require_once bzw.</li>
                            <li>eine Warnung bei include_once.</li>
                        </ul>
                    </li>
                    <li>Die Variablen darin sind übergreifend sichtbar</li>
                </ul>
                <br>
                <div class="codebox">
                    <pre><code>
&lt;?php include_once('header.inc.php'); ?&gt; 
&lt;h2&gt; Herzlich Willkommen!&lt;/h2&gt; 
&lt;p&gt; Dies ist der Content dieser Web-Seite. Ist der HTML-Code nicht sehr
übersichtlich gehalten? Das kann doch jeder editieren, oder?&lt;/p&gt; 
&lt;?php include_once('footer.inc.php'); ?&gt;       
</code></pre><p><br>Einbinden von Header und Footer in HTML</p>  
                </div>




                <h2 id="kapitel28">Beenden eines Skripts</h2>
                <ul>
                    <li>Skripte können an beliebiger Stelle per Kommando unmittelbar beendet werden:
                        <ul>
                            <li>exit; beendet das Skript.</li>
                            <li>exit(); beendet das Skript.</li>
                            <li>exit($code); beendet das Skript mit Fehlercode.</li>
                            <li>exit($string); beendet das Skript und gibt den Fehlerstring aus.</li>
                            <li>die; ist ein Synonym für exit.</li>
                        </ul>
                    </li>
                </ul>




                <h2 id="kapitel29">Arrays</h2>
                <ul>
                    <li>Arrays in PHP sind dynamisch; es ist keine Deklaration erforderlich.</li>
                    <li>Die Elemente werden automatisch an das Ende angehängt:
                        <ul>
                            <li>$a[] = 17;</li>
                        </ul>
                    </li>
                    <li>Arrays in PHP sind wahlweise assoziativ oder indiziert.</li>
                    <li>Der Zugriff auf Array-Element erfolgt über
                        <ul>
                            <li>den Schlüssel: $a["key"]</li>
                            <li>oder den Index mit Index (0..count-1): $array[0]</li>
                        </ul>
                    </li>
                </ul>
                <br>
                <div class="codebox">
                    <pre><code>
&lt;!DOCTYPE html&gt; 
&lt;html&gt; &lt;head&gt; &lt;/head&gt; &lt;body&gt; 
&lt;?php
// Erzeugen eines indizierten Arrays
$a[] = 1; $a[] = 2; $a[] = 3;
echo $a[1]; // -&gt;  2
echo count($a); // -&gt;  3
$a[1] = "ersetzt";
echo $a[1]; // -&gt;  ersetzt
// iterieren über das Array mittels for-Schleife
for ($i=0; $i &lt; count($a); $i++) {
echo ($a[$i]);
}
?&gt; 
&lt;/body&gt; &lt;/html&gt;       
</code></pre><p><br>Beispiel eines indizierten Arrays</p>  
                </div>



                <h2 id="kapitel210">die for-each Schleife</h2>
                <ul>
                    <li>sie durchläuft elementweise das Array</li>
                    <li>die Elemente dürfen von beliebigem Typ sein</li>
                    <li>sie funktioniert sowohl für indizierte, als auch für assoziative Arrays</li>
                    <li>Syntax: foreach ($array as $element) {...}</li>
                </ul>
                <br>
                <div class="codebox">
                    <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;
&lt;?php
// assoziatives Array
$b["gehen"] = "go";
$b["schlafen"] = "sleep";
echo $b["gehen"].' '; // -&gt; go
// assoziatives Array
$c = array('gehen' =&gt; 'go', 'schlafen' =&gt; 'sleep');
echo $c["gehen"].' '; // -&gt; go
// iterieren über assoziatives Array mittels for-each Schleife
foreach ($c as $key =&gt; $value) {
echo $key, "-&gt;", $value.' ';
}
?&gt;
&lt;/body&gt;&lt;/html&gt;      
</code></pre><p><br>Beispiel eines assoziativen Arrays</p>  
                </div>

                <br>
                <div class="codebox">
                    <pre><code>
$kunden=array(
array('Frank','Dopatka'),
array('Uli','Müller'),
array('Max','Mustermann')
);
echo($kunden[0][0].' '.$kunden[0][1].'&lt;br/&gt;');
echo($kunden[1][0].' '.$kunden[1][1].'&lt;br/&gt;');
echo($kunden[2][0].' '.$kunden[2][1].'&lt;br/&gt;');


$kunden=array(
'K1'=&gt;array('VN'=&gt;'Frank','NN'=&gt;'Dopatka'),
'K2'=&gt;array('VN'=&gt;'Uli','NN'=&gt;'Müller'),
'K3'=&gt;array('VN'=&gt;'Max','NN'=&gt;'Mustermann')
);
echo($kunden['K1']['VN'].' '.$kunden['K1']['NN'].'&lt;br/&gt;');
echo($kunden['K2']['VN'].' '.$kunden['K2']['NN'].'&lt;br/&gt;');
echo($kunden['K3']['VN'].' '.$kunden['K3']['NN'].'&lt;br/&gt;');     
</code></pre><p><br>Mehrdimensionale Arrays</p>  
                </div>





                <h2 id="kapitel211">Operatoren</h2>
                <ul>
                    <li>
                        <h3>Zuweisungsoperatoren</h3>
                        <ul>
                            <li>$z = $x + $y -&gt; Addition von $x und $y in die Variable $z</li>
                            <li>$z = $x - $y -&gt; Subtraktion von $x und $y &nbsp;und Speicherung in die Variable $z</li>
                            <li>$z = $x * $y -&gt; Multiplikation von $x und $y in die Variable $z</li>
                            <li>$z = $x / $y -&gt; Division von $x und $y und Speicherung in die Variable $z</li>
                            <li>$z = $x % $y -&gt; Rest der Ganzzahldivision von $x und $y in die Variable $z</li>
                            <li>$z = $x . $y -&gt; Aneinanderreihen der Zeichenketten von $x und $y in die Variable $z</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Kombinierte Zuweisungsoperatoren</h3>
                        <ul>
                            <li>$x = $y -&gt; Inhalt der Variable $y wird nach $x kopiert</li>
                            <li>$x = &amp;$y -&gt; Speicheradresse der Variablen $y wird auf die Speicheradresse der Variablen $x gesetzt</li>
                            <li>$x += $y -&gt; Addition von $y zur Variablen $x</li>
                            <li>$x -= $y -&gt; Subtraktion von $y von der Variablen $x</li>
                            <li>$x *= $y -&gt; Multiplikation von $x mit $y</li>
                            <li>$x /= $y -&gt; Division von $x mit $y</li>
                            <li>$x %= $y -&gt; Rest der Ganzzahldivision von $x und $y</li>
                            <li>$x .= $y -&gt; Hinzufügen der Zeichenkette $y zu der Zeichenkette $x</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Vergleichsoperatoren</h3>
                        <ul>
                            <li>$a&nbsp;==&nbsp;$b -&gt;&nbsp;Dieser Vergleich ist erfüllt, falls $a und $b den selben Wert beinhaltet. Sind die Typen der Variablen verschieden, so werden die konvertiert.</li>
                            <li>$a&nbsp;===&nbsp;$b -&gt;&nbsp;Dieser Vergleich ist erfüllt, falls $a und $b den selben Typ und den Inhalt besitzen. Wäre ein Wert vom Typ int und der andere from Typ String, so würde&nbsp;<em>false</em> zurück gegeben werden.</li>
                            <li>$a&nbsp;!=&nbsp;$b -&gt;&nbsp;Dieser Vergleich ist erfüllt, falls $a und $b nicht den selben Wert beinhaltet. Sind die Typen der Variablen verschieden, so werden die konvertiert.</li>
                            <li>$a&nbsp;!==&nbsp;$b -&gt;&nbsp;Dieser Vergleich ist erfüllt, falls $a und $b einen unterschiedlichen Typ haben oder einen unterschiedlichen Wert.</li>
                            <li>$a &lt; $b&nbsp;-&gt;&nbsp;$a muss kleiner als $b sein.</li>
                            <li>$a&nbsp;&lt;=&nbsp;$b -&gt;&nbsp;$a muss kleiner oder gleich $b sein.</li>
                            <li>$a&nbsp;&gt;&nbsp;$b -&gt;&nbsp;$a muss größer als $b sein.</li>
                            <li>$a &gt;= $b -&gt; $a muss größer oder gleich $b sein.</li>
                        </ul>
                    </li>
                    <li>
                        <h3>Bit-Operatoren</h3>
                        <ul>
                            <li>
                                <code><strong>$a &amp; $b -&gt;&nbsp;</strong></code>Bits, die in 
                                <var>$a</var> und 
                                <var>$b</var> gesetzt sind, werden gesetzt.
                            </li>
                            <li>
                                <code><strong>$a | $b -&gt;&nbsp;</strong></code>Bits, die in 
                                <var>$a</var> oder 
                                <var>$b</var> gesetzt sind, werden gesetzt.
                            </li>
                            <li>
                                <code><strong>$a ^ $b -&gt;&nbsp;</strong></code>Bits, die entweder in 
                                <var>$a</var> oder 
                                <var>$b</var>, jedoch nicht in beiden gesetzt sind, werden gesetzt.
                            </li>
                            <li>
                                <code><strong>~ $a -&gt;&nbsp;</strong></code>Bits, die in 
                                <var>$a</var> nicht gesetzt sind, werden gesetzt, und umgekehrt.
                            </li>
                            <li>
                                <code><strong>$a &lt;&lt; $b -&gt;&nbsp;</strong></code>Verschiebung der Bits von 
                                <var>$a</var> um 
                                <var>$b</var> Stellen nach links (jede Stelle entspricht einer Mulitplikation mit zwei).
                            </li>
                            <li>
                                <code><strong>$a &gt;&gt; $b -&gt;&nbsp;</strong></code>Verschiebung der Bits von 
                                <var>$a</var> um 
                                <var>$b</var> Stellen nach rechts (jede Stelle entspricht einer Division durch zwei).
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h3>Inkrement und Dekrement</h3>
                        <ul>
                            <li>++$a -&gt; Erhöht 
                                <var>$a</var> um eins, und gibt dann 
                                <var>$a</var> zurück.
                            </li>
                            <li>$a++ -&gt; Gibt 
                                <var>$a</var> zurück, und erhöht dann 
                                <var>$a</var> um eins.
                            </li>
                            <li>--$a -&gt; Vermindert 
                                <var>$a</var> um eins, und gibt dann 
                                <var>$a</var> zurück.
                            </li>
                            <li>$a-- -&gt; Gibt 
                                <var>$a</var> zurück, und erniedrigt dann 
                                <var>$a</var> um eins.
                            </li>
                        </ul>
                        <p>&nbsp;</p>




                        <h2 id="kapitel212">Verzweigungen</h2>
                        <ul>
                            <li>
                                <h3>if-then-else</h3>
                            </li>
                            <li>
                                <h3>if-elseif-else</h3>
                            </li>
                            <li>
                                <h3>Das Fragezeichen</h3>
                            </li>
                            <li>
                                <h3>Switch</h3>
                            </li>
                            <li>
                                <h3>switch - fall through</h3>
                            </li>
                        </ul>
                        <p>&nbsp;</p>




                        <h2 id="kapitel213">Schleifen</h2>
                        <ul>
                            <li>
                                <h3>Die for-Schleife</h3>
                            </li>
                            <li>
                                <h3>Die for-each-Schleife</h3>
                            </li>
                            <li>
                                <h3>Die while-Schleife</h3>
                            </li>
                            <li>
                                <h3>Die do-while-Schleife</h3>
                            </li>
                            <li>
                                <h3>break &amp; suchen</h3>
                            </li>
                        </ul>

                        <h2 id="kapitel214">eigene Funktionen</h2>
                        <ul>
                            <li>Eigene Funktionen werden mit function definiert:
                                <ul>
                                    <li>function greet1($vorname, $nachname) { ... }</li>
                                </ul>
                            </li>
                            <li>Optionale Parameter sind am Ende der Parameterliste möglich:
                                <ul>
                                    <li>function greet2($name, $greeting = "Hallo") { ... }</li>
                                </ul>
                            </li>
                            <li>PHP unterstützt in Funktionen per Default Call-by-Value, jedoch auch Call-by-Reference in einer C-ähnlichen Syntax:
                                <ul>
                                    <li>function promotion(&amp;$nombre) { ... }</li>
                                </ul>
                            </li>
                            <li>Globale Variablen sind nicht automatisch in Funktionen sichtbar!</li>
                            <li>Sie müssen mit Schlüsselwort global bekannt gemacht werden!</li>
                        </ul>





                        <h2 id="kapitel215">Funktionen für HTML-Formulare</h2>
                        <ul>
                            <li>Ein typischer Anwendungsfall für PHP-Skripte liegt in der Auswertung von ausgefüllten HTML-Formularen, um die Daten des Formulars in eine Datenbank einzutragen.</li>
                            <li>Im ersten Schritt wird ein HTML-Formular benötigt, das für den Testfall aus
                                <ul>
                                    <li>einem Textfeld,</li>
                                    <li>einer Checkbox,</li>
                                    <li>einer DropDown-Box</li>
                                    <li>drei verschiedenen Schaltflächen zum Senden der Daten an ein PHP-Formular besteht.</li>
                                </ul>
                            </li>
                        </ul>





                        <h3 id="kapitel216">Die PHP-Auswertung</h3>
                        <ul>
                            <li>Das assoziative Array $_GET beinhaltet die per HTTP-GET vom Client an den Server gesendeten Daten: https://www.php.net/manual/de/reserved.variables.get.php</li>
                            <li>Analog dazu gibt es ein assoziatives Array $_POST für Daten, die via HTTP-POST übertragen wurden: https://www.php.net/manual/de/reserved.variables.post.php</li>
                            <li>Das assoziative Array $_REQUEST beinhaltet sowohl per HTTP-GET, als auch per HTTP-POST übertragene Daten sowie auch die Daten der client-seitigen Cookies: 
                                <a href="https://www.php.net/manual/de/reserved.variables.request.php">https://www.php.net/manual/de/reserved.variables.request.php</a>
                            </li>
                        </ul>

                    </div>




                <div class="textbox" id="kapitel3">
                    <h2>Lesen &amp; Schreiben von Dateien:</h2>
                    <h3>Ein Counter</h3>
                    <ul>
                        <li>Hier wird vorgestellt, wie Sie Dateien im Datei-System des Web-Servers auslesen und schreiben können.</li>
                        <li>Dies macht dann Sinn, wenn sich eine komplexe Datenbank-Anbindung nicht lohnt. • Als Beispiel wird im Folgenden eine typische Anwendung eines Zählers der Besucher auf eine Homepage erstellt.</li>
                        <li>Dieser einzelne Wert müsste sonst in einer eigenen Datenbank-Tabelle abgelegt werden.</li>
                        <li>Dabei wird zunächst versucht, eine Datei mit dem Namen counter.txt aus demselben Ver-zeichnis, in dem das Skript ausgeführt wird, auszulesen.</li>
                        <li>Diese Datei ist beim ersten Aufruf noch nicht vorhanden, so dass der fopen-Befehl FALSE zurückgibt.</li>
                        <li>Wenn die Datei existiert, wird in der Variablen $datei eine Referenz auf die offene Datei abgelegt</li>
                        <li>Diese Referenz nennt man auch Ressource oder Handle.</li>
                        <li>Wenn die Datei existiert, liest der Befehl fgets bis zum nächsten Zeilenumbruch, bis zum Ende der Datei oder 10 Zeichen (in dieser Reihenfolge) aus.</li>
                        <li>Die ausgelesenden Daten wer-den dann in $counter gespeichert.</li>
                        <li>In dem Fall, dass die Datei noch nicht existierte, ist $counter=““.</li>
                        <li>Dann setzt PHP den Wert auf 0. In jedem Fall wird der Zähler erhöht und die geöffnete Datei wieder geschlossen.</li>
                        <li>Danach wird die Datei wieder geöffnet, diesmal mit Schreibzugriff.</li>
                    </ul>
                    <p>Mit dem Befehl fwrite wird der erhöhte Wert des Counters in der Datei server-seitig gespeichert und die Datei ab-schließend wieder geschlossen.</p>

                </div>




                <div class="textbox" id="kapitel4">
                    <h1>Session-Handling und Weiterleitung</h1>
                    <h2>Weiterleitung ins System:</h2>
                    <ul>
                        <li>PHP legt einen vergebenen Session-ID im Ordner \xampp\tmp\ an, eine Datei mit dem Namen
                            sess_66656 wenn Ihre Session-ID 66656 ist</li>
                        <li>Diese Datei hat dann folgenden Inhalt:
                            <ul><li>USER|s:0:"";Pass|s:0:"";Auth|i:0;</li></ul>                            
                        </li>
                        <li>Speichern Sie also NIE Passwörter in einer Session:
                            Die liegen dann im Klartext in der Dateistruktur des Servers!</li>
                        <li>Wenn Sie bereits HTML-Code an den Client gesendet haben, beispielsweise nur , dann können Sie den HTTPHeader nicht mehr modifizieren, da er bereits zum Client gesendet wurde!</li>
                        <li>Alle Prüfungen müssen also erfolgen, bevor die erste Ausgabe an den Client erfolgt.</li>
                        <li>HTTP ist zustandslos:
                            <ul>
                                <li>Bei jeder einzelnen Seite im Portal muss man jetzt immer prüfen, ob derjenige auch für diesen Zugriff befugt ist!</li>
                                <li>Ein direkter Aufruf auf eine Seite „hinter“ dem Login durch Kenntnis der URL darf NICHT möglich sein!</li>
                                <li>Ein möglicher Angriff auf das System wäre ein Session-Hijacking!</li>
                            </ul>
                        </li>

                        <li>Session Funktionen:
                            <ul>
                                <li>session_start() –&gt; startet eine neue Session oder übernimmt eine bereits vorhandene</li>
                                <li>$erg=session_id() -&gt; gibt den eindeutigen Identifier der eigenen, aktuellen Session zurück</li>
                                <li>%erg=session_encode() -&gt; liefert eine Liste mit allen abgespeicherten Variablen der aktuellen Session</li>
                                <li>session_unregister(''name'') -&gt; entfernt eine Variable mit dem Namen ''name'' aus der Liste der Variablen einer Session</li>
                                <li>session_unset -&gt; löscht den Inhalt aller Variablen, die in der aktuellen Session deklariert wurden, die Session selbst bleibt jedoch bestehen</li>
                                <li>session_destroy -&gt; beendet eine Session und löscht alle Daten, die in der aktuellen Session verwendet wurden, die Session-ID wird wieder freigegeben</li>
                            </ul>
                        </li>

                    </ul>
                </div>





                <div class="textbox" id="kapitel5">
                    <h1>Datenbankzugriff in PHP</h1>
                    <h2>Verschiedene Arten des Datenbankzugriffs</h2>
                    <ul>
                        <li>PHP bietet fertige Schnittstellen zu vielen Datenbanken
                            <ul>
                                <li>MySQL: kompliziertes Lizensierungsmodell mit der Alternative MariaDB</li>
                                <li>PostgreSQL: kostenlos unter BSD-Lizenz</li>
                                <li>SQLite: Open Source</li>
                                <li>viele kommerzielle Datenbanken wie von IBM, MS oder SAP</li>
                            </ul>
                        </li>
                        <li>Häufig wird PHP im Bundle geliefert
                            <ul>
                                <li>LAMP: Linux + Apache + MySQL + PHP</li>
                                <li>WAMP: Windows + Apache + MySQL + PHP</li>
                                <li>XAMPP: x + Apache + MySQL + PHP + Perl</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="textbox">
                        <ul>
                            <li id="kapitel51">1. Datenbankzugriff via MySQL-Extension
                                <ul>
                                    <li>dies ist die historisch älteste Schnittstelle&nbsp;</li>
                                    <li>sie ist immer noch häufig im Einsatz&nbsp;</li>
                                    <li>sie ist rein prozedural und verwendet keine Objekte&nbsp;</li>
                                    <li>sie wird empfohlen für alte MySQL-Versionen (&lt;4.1.3)</li>
                                </ul>
                            </li>
                            <li id="kapitel52">2. Datenbankzugriff via MySQLi-Extension
                                <ul>
                                    <li>dieser Zugriff wird oft auch als MySQL improved bezeichnet&nbsp;</li>
                                    <li>sie bietet eine prozedurale und objektorientierte Schnittstelle&nbsp;</li>
                                    <li>für neuere MySQL-Versionen (&gt;= 4.1.3) empfohlen&nbsp;</li>
                                    <li>viele Verbesserungen
                                        <ul>
                                            <li>Prepared Statements&nbsp;</li>
                                            <li>Multiple Statements&nbsp;</li>
                                            <li>Transaktionen&nbsp;</li>
                                            <li>verbessertes Debugging&nbsp;</li>
                                            <li>uvm.&nbsp;</li>
                                        </ul>
                                    </li>
                                    <li>Verwendung von MySQLi&nbsp;
                                        <ul>
                                            <li>Verbindung zur Datenbank aufbauen&nbsp;
                                                <ul>
                                                    <li>$con=new MySQLi($host, $user, $pwd, $dbName);&nbsp;</li>
                                                    <li>$con-&gt;set_charset("UTF-8");&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>SQL-Statement vorbereiten&nbsp;
                                                <ul>
                                                    <li>$pstm = $con-&gt;prepare(...);&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Parameter und Rückgabevariablen binden&nbsp;
                                                <ul>
                                                    <li>$pstm-&gt;bind_param("s", $name);&nbsp;</li>
                                                    <li>$pstm-&gt;bind_result($id, $nachname, $vorname);&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Statement ausführen&nbsp;
                                                <ul>
                                                    <li>$pstm-&gt;execute();</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>Verwendung von MySQLi&nbsp;
                                        <ul>
                                            <li>Über die Ergebnisliste iterieren&nbsp;
                                                <ul>
                                                    <li>while ($pstm-&gt;fetch()) { ... }&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Statement schließen&nbsp;
                                                <ul>
                                                    <li>$pstm-&gt;close();&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Verbindung schließen&nbsp;
                                                <ul>
                                                    <li>$con-&gt;close();</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="kapitel53">3. Datenbankzugriff via PDO-Klassen
                                <ul>
                                    <li>PHP Data Objects (PDO)&nbsp;</li>
                                    <li>abstrahieren vollständig von der Datenbank&nbsp;</li>
                                    <li>bilden eine einheitliche Schnittstelle unabhängig von der Datenbank&nbsp;</li>
                                    <li>erlauben den Austausch der Datenbank geringem Aufwand&nbsp;</li>
                                    <li>schränken die verfügbare Funktionalität durch kleinsten gemeinsamen Nenner ein</li>
                                    <li>PDO Klassen&nbsp;
                                        <ul>
                                            <li>PDO&nbsp;
                                                <ul>
                                                    <li>Verwaltung und Aufbau von Verbindungen&nbsp;</li>
                                                    <li>Verbindungskonfiguration (z.B. SSL)&nbsp;</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>PDOStatement&nbsp;
                                        <ul>
                                            <li>Verwaltung von Abfrage (prepared statement)&nbsp;</li>
                                            <li>Verknüpfung von Variablen mit Abfragen&nbsp;</li>
                                            <li>Verwaltet die Ergebnisse einer Anfrage&nbsp;</li>
                                            <li>Muss nach Verwendung wieder freigegeben werden</li>
                                        </ul>
                                    </li>
                                    <li>Verwendung von PDO&nbsp;
                                        <ul>
                                            <li>Verbindung zur Datenbank aufbauen&nbsp;
                                                <ul>
                                                    <li>$dbh=new PDO("mysql:host=$host;dbname=$dbName", $user,$pwd);&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>SQL-Statement vorbereiten&nbsp;
                                                <ul>
                                                    <li>$stmt = $dbh-&gt;prepare(...);&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Parameter setzen&nbsp;
                                                <ul>
                                                    <li>$stmt-&gt;bindValue(1, "Meier");&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Statement ausführen&nbsp;
                                                <ul>
                                                    <li>$stmt-&gt;execute();</li>
                                                </ul>
                                            </li>
                                            <li>Über die Ergebnisliste iterieren&nbsp;
                                                <ul>
                                                    <li>while ($row = $stmt-&gt;fetch()) { ... }&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Statement schließen&nbsp;
                                                <ul>
                                                    <li>$stmt = null;&nbsp;</li>
                                                </ul>
                                            </li>
                                            <li>Verbindung schließen&nbsp;
                                                <ul>
                                                    <li>$dbh = null; </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>


                </div>





                <div class="textbox" id="kapitel6">
                    <h1>Exception-Handling in PHP</h1>
                    <h2 id="kapitel61">die, exit oder @</h2>
                    <ul>
                        <li>Häufig findet man folgende Fehlerbehandlung in PHP-Skripten...
                            <ul>
                                <li>sofortiger Abbruch mit die oder exit oder
                                    <ul>
                                        <li>die("Wenden Sie sich an den Administrator");</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Unterdrückung von Fehlermeldungen mit @
                            <ul>
                                <li>@$f = fopen("myfile.txt","r");</li>
                            </ul>
                        </li>
                        <li>beide Arten bringen Probleme mit sich...
                            <ul>
                                <li>eine unvollständige Seite wird zum Browser geschickt</li>
                                <li>es entstehen leere Seiten oder Layout-Katastrophen</li>
                                <li>der Anwender erhält keine Rückmeldung</li>
                            </ul>
                        </li>
                    </ul>
                    <h2 id="kapitel62">Exceptions</h2>
                    <ul>
                        <li>PHP bietet nun eine echte Ausnahmebehandlung
                            <ul>
                                <li>Fehler können mit try/catch behandelt werden</li>
                                <li>in den neueren PHP-Versionen existiert auch try/catch/finally sowie try/finally</li>
                                <li>dabei können sinnvolle Meldungen ausgegeben werden</li>
                                <li>die Web-Seite kann ordentlich abgeschlossen werden</li>
                            </ul>
                        </li>
                    </ul>
                    <h2 id="kapitel63">eigene Exceptions</h2>
                    <ul>
                        <li>die Basisklasse aller Ausnahmen ist die Klasse Exception
                            <ul>
                                <li>beliebige eigene Ausnahmen sind daraus ableitbar</li>
                                <li>es gibt aber keine vordefinierten Exception-Klassenhierarchie in PHP, also nicht sowas wie NullPointerException in Java</li>
                            </ul>
                        </li>
                        <li>noch problematischer ist jedoch: Keine der vorhandenen PHP-Funktionen wirft Ausnahmen!</li>
                    </ul>
                </div>

                <?php include_once('footer_php.php'); ?>
            <!--</div>
            <div class="footer-container">
                <ul id="footer">
                    <li><a href="datenschutz.html">Datenschutz</a></li>
                    <li><a href="Impressum.html">Impressum</a></li>
                </ul>
            </div>
            <script src="cookie.js"></script>
            </body>
        </html>-->
