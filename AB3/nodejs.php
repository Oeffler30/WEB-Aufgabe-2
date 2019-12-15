<!--<!DOCTYPE html>
<html lang="en">-->
<head>
    <!-- header image: https://pixabay.com/photos/server-space-the-server-room-dark-2160321/ -->
  <!--<link rel="stylesheet" href="stylesheet.css" type="text/css">
  <meta charset="UTF-8">
    <script src="scroll+navicon.js"></script>-->
    <?php include_once('header_php.php'); ?>
  <title>NodeJS</title>
  <?php include_once('header2_php.php'); ?>
<!--</head>
<body>
    <script>
        document.body.className = document.body.className + " js_enabled";
    </script>
    <div id="header">-->
        <!-- Cookie Banner -->
    <!--<div id="cookie-message">
        <p>
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
                    <li><a href="php.php">PHP</a></li>
                    <li id="current"><a href="nodejs.php">NodeJS</a></li>
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
        <h1>NodeJS</h1>
	<div class="textbox">
		<div class="liste">
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#was">1. Was ist NodeJS?</a></li>
				<li><a style="color:white" href="#programmieren">2. Programmieren mit NodeJS</a></li>
			</ul>
			<div class="liste"><ul style="list-style-type:none">
					<li><a style="color:white" href="#server">    2.1 Ein WebSocket-Server und ein WebServer</a></li>
					<li><a style="color:white" href="#idee">    2.2 Die Idee von NodeJS</a></li>
					<li><a style="color:white" href="#clientAction>    2.3 Aktionen des Clients</a></li>
					<li><a style="color:white" href="#serverAction>    2.4 Aktionen des Servers</a></li>
					<li><a style="color:white" href="#wasNoch">    2.5 Was muss jetzt noch bis zur fertigen Version getan werden?</a></li>
				</ul>
			</div>
			<ul style="list-style-type:none">
				<li><a style="color:white" href="#literatur">3. Weiterführende Literatur</a></li>
			</ul>
		</div>
	</div>
        <div class="textbox">
	    <h1 id="was">1. Was ist NodeJS?</h1>
            <p>NodeJS ist eine serverseitige Plattform in der Softwareentwicklung zum Betrieb von Netzwerkanwendungen. Insbesondere lassen sich Webserver damit realisieren. Node.js bietet eine ressourcensparende Architektur, die eine besonders große Anzahl gleichzeitig bestehender Netzwerk-verbindungen ermöglicht. Die Skriptsprache JavaScript gibt eine ereignisgesteuerte Architektur vor. Diese hat im Serverbetrieb den Vorteil, pro bestehender Verbindung weniger Arbeitsspeicher zu verbrauchen als bei vergleichbaren Anwendungen, die für jede geöffnete Verbindung einen eigenen Thread starten.<br><br>Node.js enthält einige Module, die direkt in das Binärpaket kompiliert wurden. Dazu gehören:<br><br></p>
            <div class="liste">
		<ul>
			<li>das Modul für asynchronen Netzwerkzugriff</li>
			<li>Adapter für das Dateisystem</li>
			<li>Puffer
			<li>Zeitgeber</li>
			<li>allgemein gehaltene Datenstrom-Klasse</li>
	    	</ul>
	    </div>
        </div>
        <div class="textbox">
            <p>Darüber hinaus können zusätzliche Module eingebunden werden, zum Beispiel über vorkompilierte Dateien mit der Dateiendung .node oder in Form einfacher JavaScript-Dateien. Zur Verwaltung der Module gibt es den Paketmanager npm, in dessen Depot sich über 475.000 Pakete befinden.<br>Einen server-seitigen Anwendungsfall für Node.JS betrachten wir anhand eines Schach-Beispiels:</p>
        </div>
        <div class="textbox">
	    <h1 id="programmieren">2. Programmieren mit NodeJS</h1>
	    <h2 id="server">2.1 Ein WebSocket-Server und ein WebServer</h2>
            <p></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/NodeJS 1.png" alt="Ein WebSocket-Server und ein Web-Server"><br>Abbildung 1: Ein WebSocket-Server und ein Web-Server</p>-->
            <pre><code>
var WebSocketServer = require(&#x27;ws&#x27;).Server;
var wss = new WebSocketServer({host: &#x27;127.0.0.1&#x27;,port: 8000});
var weiss = null; <span class="gruen">// permanente Verbindung Server -&#x3E; 2 Clients</span>
var schwarz = null;
console.log(&#x27;WebSocket-Server horcht auf http://127.0.0.1:8000...&#x27;);
var http = require(&#x22;http&#x22;);
var fs = require(&#x22;fs&#x22;);
http.createServer(
    &#x9;function(req,resp){ <span class="gruen">// ...&#xE4;hnlich zu einem Java-Servlet</span>
        &#x9;resp.writeHead(200,{&#x27;Content-Type&#x27;:&#x27;text/html;charset=UTF-8&#x27;});
        &#x9;var content=&#x22;&#x22;;
        &#x9;content+=fs.readFileSync(&#x27;header.html&#x27;,&#x27;utf8&#x27;);
        &#x9;content+=getBrett(); <span class="gruen">// Spielbrett senden</span>
        &#x9;content+=fs.readFileSync(&#x27;eingabe.html&#x27;,&#x27;utf8&#x27;);
        &#x9;resp.end(content);
    &#x9;}
).listen(80);
console.log(&#x27;Web-Server horcht auf http://127.0.0.1:80...&#x27;);
            </code></pre>
            <p><br>Ein WebSocket-Server und ein Web-Server<br></p>
        </div>
        <div class="textbox">
            <p>Das Schachbrett selbst wird in HTML aufgebaut:</p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/NodeJS 2.png" alt="Das Layout und die Randfelder werden umgesetzt"><br>Abbildung 2: t<br><br></p>-->
            <div id="cont">
            <div id="side1">
            <pre><code>    
&#x3C;table&#x3E;
    &#x3C;tbody&#x3E;
        &#x3C;tr&#x3E;
        <span class="gruen">&#x3C;!--1. Zeile --&#x3E;</span>
            &#x3C;td style=&#x27;background:#CF8F4F;&#x27;&#x3E;
            <span class="gruen">&#x3C;!--1. Zelle oben links ist leer --&#x3E;</span>
            &#x3C;/td&#x3E;
            &#x3C;td style=&#x27;background:#CF8F4F;&#x27;&#x3E;
                a
            &#x3C;/td&#x3E;
            &#x3C;td style=&#x27;background:#CF8F4F;&#x27;&#x3E;
                b
            &#x3C;/td&#x3E;
            &#x3C;td style=&#x27;background:#CF8F4F;&#x27;&#x3E;
                c
            &#x3C;/td&#x3E;
            [...]
        &#x3C;/tr&#x3E;
    [...]
            </code></pre>
                <img class="nodeBild" src="Bilder/Schachbrett 26.png" alt="Layout1">
            </div>
            <div id="side2">
                <pre><code>
    &#x3C;tr&#x3E; <span class="gruen">&#x3C;!--2. Zeile --&#x3E;</span>
    &#x9;&#x3C;td style=&#x27;background:#CF8F4F;&#x27;&#x3E;
    &#x9;&#x9;8
    &#x9;&#x3C;/td&#x3E;
    &#x9;&#x3C;td style=&#x27;background:#F4DCA2;&#x27;&#x3E;
    &#x9;&#x9;&#x3C;img src=&#x27;T-S.gif&#x27;/&#x3E;
    &#x9;&#x3C;/td&#x3E;
    &#x9;&#x3C;td style=&#x27;background:#AD7646;&#x27;&#x3E;
    &#x9;&#x9;&#x3C;img src=&#x27;S-S.gif&#x27;/&#x3E;
    &#x9;&#x3C;/td&#x3E;
    &#x9;&#x3C;td style=&#x27;background:#F4DCA2;&#x27;&#x3E;
    &#x9;&#x9;&#x3C;img src=&#x27;L-S.gif&#x27;/&#x3E;
    &#x9;&#x3C;/td&#x3E;
[....]
            </code></pre>
                <img class="nodeBild" src="Bilder/Schachbrett 26.png" alt="Layout2">
            </div>
            </div>
            <p><br>Das Layout und die Randfelder werden umgesetzt<br></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/NodeJS 3.png" alt="Die Randfelder werden beschriftet"><br>Abbildung 3: Die Randfelder werden beschriftet<br><br></p>-->
            <pre><code>
function getBrett() {
    &#x9;var content = &#x22;&#x22;;
    &#x9;content += &#x22;&#x3C;table&#x3E;&#x3C;tbody&#x3E;&#x22;;
    &#x9;<span class="gruen">// Kopf der Tabelle:</span>
    &#x9;content += &#x22;&#x3C;tr&#x3E;&#x22;; // 1. Zeile
    &#x9;for(var i=1; i&#x3C;=10; i++){ <span class="gruen">// 10 Spalten</span>
    &#x9;&#x9;<span class="gruen">// Zelle</span>
    &#x9;&#x9;content += &#x22;&#x3C;td style=&#x27;background:&#x22;+brettFeldRand+&#x22;;&#x27;&#x3E;&#x22;;
    &#x9;&#x9;if ( (i&#x3E;=2)&#x26;&#x26;(i&#x3C;=9) ) content+=String.fromCharCode(95+i);
    &#x9;&#x9;content += &#x22;&#x3C;/td&#x3E;&#x22;;
    &#x9;}
    &#x9;content += &#x22;&#x3C;/tr&#x3E;&#x22;;
[...] <!--NodeJS Bild 2-->

for(var j=8; j>=1; j--){ // das Brett
	content += "<tr>"; // Zeilen & Zellen...
	content += "<td
		style='background:"+brettFeldRand+"'>"
		+j+"</td>"; <!--NodeJS Bild 3-->
            </code></pre>
            <div style="text-align:center;"><img class="nodeBild" src="Bilder/Schachbrett 28.png" alt="Randfelder">
            <p><br>Die Randfelder werden beschriftet<br></p></div>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 4.png" alt="Den Spielfeldern wird der passende Hintergrund zugewiesen"><br>Abbildung 4: Den Spielfeldern wird der passende Hintergrund zugewiesen</p>-->
            <pre><code>
for(var j=8; j&#x3E;=1; j--){ // das Brett
&#x9;
&#x9;<span class="gruen">// i ungerade/gerade &#x26; j gerade/ungerade:
&#x9;// Feld ist hell!</span>
&#x9;for(var i=1; i&#x3C;=8; i++){
&#x9;&#x9;if (((i%2!=0)&#x26;&#x26;(j%2==0))
&#x9;&#x9;||((i%2==0)&#x26;&#x26;(j%2!=0)))
&#x9;&#x9;&#x9;content += &#x22;&#x3C;td style=&#x27;background:&#x22;+brettFeldHell+&#x22;;&#x27;&#x3E;&#x22;;
&#x9;&#x9;else
&#x9;&#x9;&#x9;content += &#x22;&#x3C;td style=&#x27;background:&#x22;+brettFeldDunkel+&#x22;&#x27;&#x3E;&#x22;;
            </code></pre>
            <div style="text-align:center;"><img class="nodeBild" src="Bilder/Schachbrett 29.png" alt="Hintergrund zugewiesen">
            <p>Den Spielfeldern wird der passende Hintergrund zugewiesen</p></div>
        </div>
        <div class="textbox">
            <p>Das Schachbrett mit dessen Figuren kann man direkt in HTML in Fleißarbeit fest erstellen. Man kann das Schachbrett mit dessen Figuren auch in JavaScript per document.write(content) mit wenigen Schleifen erstellen. Alternativ dazu kann man das Schachbrett auch in JavaScript durch Zugriff auf den DOM-Baum erstellen mit<br><br></p>
	    <div class="liste">
		<ul>
			<li><code>document.createElement("table / tr / td")</code></li>
			<li><code>appendChild("tr / td")</code></li>
			<li><code>td.setAttribute("style","background:#CF8F4F;")</code></li>
		</ul>
	    </div>
        </div>
        <div class="textbox">
            <p>Wenn Sie Designer sind, können Sie auch das ganze Brett incl. Beschriftung auch als Bild auch in PhotoShop zeichnen und per CSS als Hintergrund der Tabelle einblenden.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 5.png" alt="Das Schachbrett als Hintergrundbild"><br>Das Schachbrett als Hintergrundbild<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 25.png" alt="Das Schachspiel in Aktion"><br>Das Schachspiel in Aktion</p>
        </div>
        <div class="textbox">
	    <h2 id="idee">2.2 Die Idee von NodeJS</h2>
            <p>Damit mehrere Spieler zusammen spielen können, brauchen wir entweder eine (eher untypische) Peer-to-Peer Architektur oder einen Server. Im Frontend sind HTML5 und CSS3 etabliert. Beides sind jedoch keine Programmiersprachen. Zusätzlich hat sich auf der Seite des Clients JavaScript als einzige turing-vollständige und leicht verständliche Programmiersprache etabliert. Wieso soll man auf dem Server eine andere Sprache verwenden? Nehmen wir doch auch dort JavaScript!</p>
        </div>
        <div class="textbox">
            <p>Was brauchen wir noch für das Spiel?<br><br></p>
	    <div class="liste">
		    <ol>
			<li>eine Datenstruktur: Wie speichere ich das aktuelle Schachbrett im laufenden Spiel?</li>
			<li>die Schach-Regeln: Wer darf welche Figur wohin ziehen?</li>
			<li>die Vorgänge, wie man eine Figur konkret zieht und wie man das Schachbrett aktualisiert, wenn der andere gezogen hat</li>
		    </ol>
	    </div>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 6.png" alt="Eine mögliche Datenstruktur"><br>Eine mögliche Datenstruktur<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 7.png" alt="Erlaubte Züge des Springers müssen implementiert werden"><br>Erlaubte Züge des Springers müssen implementiert werden</p>
        </div>
        <div class="textbox">
            <p>Die Regeln sind abhängig vom Typ der Figur: T,S,L,D,K,B. Die Regeln für jede Figur kann man in je einer JavaScript-Funktion hinterlegen. So kann der Springe auf <span class="rot">g1</span> bzw. auf <span class="rot">7/1</span> auf die folgenden Felder gezogen werden. Ein Array dieser Felder, also <span class=“rot“>6/3</span> und <span class=“rot“>8/3</span> ist dann die Rückgabe der Funktion. Wieso kann der Springer <span class=“rot“>nicht auf e2</span> ziehen.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 8.png" alt="Abfragen der erlaubten Züge"><br>Abfragen der erlaubten Züge<br><br></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 9.png" alt="Funktion zum Abfragen der erlaubten Züge"><br>Abbildung 9: Funktion zum Abfragen der erlaubten Züge<br><br></p>-->
            <pre><code>
function getErlaubteZuegeOhneSchach(x,y) {
    &#x9;var zuege=[];
    &#x9;figur=getFigur(x,y);
    &#x9;if (figur.typ==&#x27;S&#x27;)
    &#x9;&#x9;zuege = getErlaubteZuegeSpringerOhneSchach(x,y,figur.farbe);
    &#x9;[...]
    &#x9;return zuege;
}
            </code></pre>
            <p>Funktion zum Abfragen der erlaubten Züge</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 12.png" alt="Erlaubte Züge des Springers"><br>Erlaubte Züge des Springers<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 11.png" alt="Hinzufügen der möglichen Züge"><br>Hinzufügen der möglichen Züge<br><br></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 13.png" alt="Implementation der Zugmöglichkeiten"><br>Abbildung 12: Implementation der Zugmöglichkeiten</p>-->
            <pre><code>
function addZug(xNeu,yNeu,weiss,zuege){
    &#x9;<span class="gruen">// Zielfeld ist ungueltig:</span>
    &#x9;if ((xNeu&#x3C;1)||(xNeu&#x3E;8)||(yNeu&#x3C;1)||(yNeu&#x3E;8)) 
    &#x9;&#x9;return false;
    &#x9;var figur = getFigur(xNeu,yNeu);
    &#x9;if (figur != null){
    &#x9;&#x9;<span class="gruen">// Zielfeld ist mit einer Figur belegt</span>
    &#x9;&#x9;if (weiss == figur.istWeiss){
    &#x9;&#x9;&#x9;<span class="gruen">// Zielfeld ist mit eigener Figur belegt</span>
    &#x9;&#x9;&#x9;return false;
    &#x9;&#x9;}
    &#x9;}
    &#x9;<span class="gruen">// OK:</span>
    &#x9;zuege.push(&#x27;&#x27;+xNeu+&#x27;-&#x27;+yNeu);
    &#x9;return true;
}
            </code></pre>
            <div style="text-align:center;"><img class="nodeBild" src="Bilder/Schachbrett 30.png" alt="Zugmöglichkeiten">
            <p>Implementation der Zugmöglichkeiten</p></div>
        </div>
        <div class="textbox">
            <p>Auf dieselbe Art kann man die Regeln der anderen Figuren einbinden.<br>Doch wie bekommt man das JavaScript nun auf einen NodeJS-Server?</p>
        </div>
        <div class="textbox">
	    <h2 id="clientAction">2.3 Aktionen des Clients</h2>
            <p></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 14.png" alt="Modellhafte Verbindung zwischen den Clients und dem Server"><br>Modellhafte Verbindung zwischen den Clients und dem Server<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 15.png" alt="Eingaben im Footer des Clients (eingabe.hmtl)"><br>Eingaben im Footer des Clients (eingabe.hmtl)<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 16.png" alt="Senden der Eingaben im Head des Clients"><br>Senden der Eingaben im Head des Clients<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 17.png" alt="Auswerten der Antwort des Servers"><br>Auswerten der Antwort des Servers<br><br></p>
        </div>
        <div class="textbox">
	    <h2 id="serverAction">2.4 Aktionen des Servers</h2>
            <p></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 18.png" alt="server.js als Kern des Servers"><br>Abbildung 17: server.js als Kern des Servers<br><br></p>-->
            <pre><code>
var WebSocketServer = <span class="rot">require('ws').Server</span>;
var <span class="rot">wss = new WebSocketServer</span>({host: '127.0.0.1',port: <span class="rot">8000</span>});
var weiss = null;  <span class="gruen">// permanente Verbindung Server -> Clients</span>
var schwarz = null;
console.log('WebSocket-Server horcht auf http://127.0.0.1:8000...');
                                    
var http = <span class="rot">require("http")</span>;
var fs = <span class="rot">require("fs")</span>;
eval(fs.readFileSync('<span class="rot">backend-spiel.js</span>')+''); <span class="gruen">// Verbindung zum Backend</span>
http.<span class="rot">createServer</span>(
    <span class="rot">function(req,resp)</span> {<span class="gruen">// ...ähnlich zu einem Java-Servlet</span>
                                    
    resp.<span class="rot">writeHead(200</span>,{
        'Content-Type':'text/html;
        charset=UTF-8'
    });
    var content="";
    content+=fs.readFileSync('<span class="rot">header.html'</span>,'utf8');
    content+=<span class="rot">getBrett()</span>; <span class="gruen">// Spielbrett senden</span>
    content+=fs.readFileSync('<span class="rot">eingabe.html</span>','utf8');
    resp.end(content);
                                    
}).listen(<span class="rot">80</span>);
            </code></pre>
            <p>server.js als Kern des Servers</p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 19.png" alt="neue Socket-Verbindung auf Port 8000"><br>Abbildung 18: neue Socket-Verbindung auf Port 8000<br><br></p>-->
            <pre><code>
<span class="rot">wss.on(&#x27;connection&#x27;</span>, function(ws){
&#x9;if ((weiss!=null)&#x26;&#x26;(schwarz!=null)){
&#x9;&#x9;sendeMeldung(ws,&#x27;ES SIND <span class="rot">BEREITS 2 SPIELER VORHANDEN</span>!&#x27;);
&#x9;&#x9;return;
&#x9;}
&#x9;if (weiss==null){ <span class="gruen">// der zuerst kommt, spielt Weiss</span>
&#x9;&#x9;weiss=ws;
&#x9;&#x9;console.log(&#x27;Client verbunden! <span class="rot">Dieser Client spielt WEISS</span>.&#x22;);
&#x9;&#x9;ws.send(&#x27;Willkommen! Sie spielen WEISS.&#x27;);
&#x9;}
&#x9;else{
&#x9;&#x9;schwarz=ws;
&#x9;&#x9;console.log(&#x27;Client verbunden! <span class="rot">Dieser Client spielt SCHWARZ</span>.&#x22;);
&#x9;&#x9;ws.send(&#x27;Willkommen! Sie spielen SCHWARZ.&#x27;);
&#x9;}
[...]
            </code></pre>
            <p>Neue Socket-Verbindung auf Port 8000</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 20.png" alt="Anbindung des Spiels"><br>Anbindung des Spiels<br><br></p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 21.png" alt="Allen Clients mitteilen, wer gerade am Zug ist"><br>Allen Clients mitteilen, wer gerade am Zug ist</p>
        </div>
        <div class="textbox">
            <p>Die Zugeingabe über ein Textfeld ist altmodisch. Besser ist es, bei der Erzeugung des Bretts jede Tabellen-Zelle anklickbar zu machen & eine JavaScript-Funktion aufzurufen, die dann die entsprechenden Koordinaten zum Server sendet. Die server.js generiert dann Folgendes für jedes Schachfeld:<br><br>
<span class=”textCode”>content+="<td onclick='klick("+i+","+j+");'>"; // klick(4,1)</span><br><br>Die Klick-Funktion in der header.html schaut nach, ob es der erste Klick „d2-“ oder der zweite Klick „d2-d3“ auf ein Feld war und sendet die Anfrage in beiden Fällen an den Server.</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/Schachbrett 22.png" alt="Senden des Zugs vom Client an den Server"><br>Senden des Zugs vom Client an den Server<br><br></p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 23.png" alt="Der Server lädt und speichert die Spieldaten mit LowDB im JSON-Format"><br>Abbildung 22: Der Server lädt und speichert die Spieldaten mit LowDB im JSON-Format<br><br></p>-->
            <pre><code>
var lowdb = require(&#x27;<span class="rot">lowdb</span>&#x27;); [...]
function speichern(){
&#x9;fs.unlinkSync(&#x27;<span class="rot">spiel.json</span>&#x27;); // alte Datei l&#xF6;schen
&#x9;var db=lowdb(&#x27;<span class="rot">spiel.json</span>&#x27;);
&#x9;<span class="gruen">// globale Parameter des Spiels</span>
&#x9;db.set(&#x27;anzZuege&#x27;,anzZuege).value();
&#x9;[...]
&#x9;<span class="gruen">// Brett nach Figuren absuchen...</span>
&#x9;for(var j=8;j&#x3E;=1;j--){
&#x9;&#x9;for(var i=1;i&#x3C;=8;i++){
&#x9;&#x9;&#x9;var figurSpeichern=getFigur(i,j);
&#x9;&#x9;&#x9;if (figurSpeichern!=null){ // auf dem Feld ist eine Figur...
&#x9;&#x9;&#x9;&#x9;<span class="gruen">// figur-i-j: key, figurSpeichern: value</span>
&#x9;&#x9;&#x9;&#x9;db.set(&#x27;figur-&#x27;+i+&#x27;-&#x27;+j,figurSpeichern).value();
&#x9;&#x9;&#x9;}
&#x9;&#x9;}
&#x9;}
}
            </code></pre>
            <p>Der Server lädt und speichert die Spieldaten mit LowDB im JSON-Format</p>
        </div>
        <div class="textbox">
            <!--<p><img class="nodeBild" src="Bilder/Schachbrett 24.png" alt="Die im JSON-Format gespeicherten Spieldaten"><br>Abbildung 23: Die im JSON-Format gespeicherten Spieldaten</p>-->
            <pre><code>
{
&#x9;&#x22;anzZuege&#x22;: 0,
&#x9;[...]
&#x9;&#x22;figur-<span class="rot">1-8</span>&#x22;: {
&#x9;&#x9;&#x22;<span class="rot">typ&#x22;: &#x22;T</span>&#x22;,
&#x9;&#x9;&#x22;<span class="rot">istWeiss&#x22;: false,</span>
&#x9;&#x9;&#x22;istBewegt&#x22;: false
&#x9;},
&#x9;&#x22;figur-<span class="rot">2-8</span>&#x22;: {
&#x9;&#x9;&#x22;<span class="rot">typ&#x22;: &#x22;S</span>&#x22;,
&#x9;&#x9;&#x22;<span class="rot">istWeiss&#x22;: false,</span>
&#x9;&#x9;&#x22;istBewegt&#x22;: false
&#x9;},
[...]
}
            </code></pre>
            <div style="text-align:center;"><img class="nodeBild" src="Bilder/Schachbrett 31.png" alt="json">
            <p>Die im JSON-Format gespeicherten Spieldaten</p></div>
        </div>
        <div class="textbox">
        <h2 id="wasNoch">2.5 Was muss jetzt noch bis zur fertigen Version getan werden?</h2>
            <p>Die Regeln der anderen Figuren sind einzubinden. Ich darf nur ziehen, wenn ich durch meinen Zug nicht selbst im Schach stehe: Es ist also zusätzlich eine globale Sicht auf das Brett notwendig! Bei einer Rochade werden 2 Figuren gleichzeitig bewegt! Gelangt ein Bauer zu dem anderen Ende des Bretts, so kann er wahlweise in eine Dame, Turm, Läufer oder Springer umgewandelt werden. Bei „en passant“ schlägt ein Bauer auf ein leeres Feld, nachdem der Gegner einen Doppelschritt seines Bauern getätigt hat. Das Spielende:<br><br></p>
	    <div class="liste">
		<ul>
			<li>Wann hat man verloren (Matt)?</li>
			<li>Wann ist es unentschieden (Remis / Patt)?</li>
	       </ul>
        </div>
        </div>
        <div class="textbox">
	    <h1 id="literatur">3. Weiterführende Literatur</h1>
            <p>Node.js: Professionell hochperformante Software entwickeln; Robert Prediger, Ralph Winzinger; Hanser-Verlag; 2015; Print-ISBN: 978-3-446-43722-7; E-Book-ISBN: 978-3-446-43758-6</p>
        </div>
        <div class="abbildung">
            <p><img class="nodeBild" src="Bilder/NodeJS Buch.png" alt="Weiterführende Literatur"><br>Weiterführende Literatur</p>
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
