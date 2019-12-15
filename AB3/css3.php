<!--<!DOCTYPE html>
<html lang="en">
<head>-->
    <!-- header image: https://pixabay.com/photos/server-space-the-server-room-dark-2160321/ -->
  <!--<link rel="stylesheet" href="stylesheet.css" type="text/css">
  <meta charset="UTF-8">
    <script src="scroll+navicon.js"></script>
    <style>
      a:link, a:visited
    {
    color: white;
    }
    
    
    a:active, a:hover
    {
    color: white;
    }
    </style>-->
    <?php include_once('header_php.php'); ?>
  <title>CSS</title>
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
                    <li id="current"><a href="css3.php">CSS</a></li>
                    <li><a href="css3-2.php">CSS 2</a></li>
                    <li><a href="javascript.php">Javascript</a></li>
                    <li><a href="javascript2.php">Javascript (2)</a></li>
                    <li><a href="jsp_servlets_jaxb.php">JSP, Servlets, JAXB</a></li>
                    <li><a href="php.php">PHP</a></li>
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
        <h1>CSS</h1>

        <div class="textbox">
          <h2>Inhalt</h2>
          <br/>
          <ul>
            <li style="text-indent:1em"><a href="css3.html#Grundlegendes">Grundlegendes</a></li>
            <li style="text-indent:2em"><a href="css3.html#Geschichte">Geschichte von CSS3</a></li>
            <li style="text-indent:2em"><a href="css3.html#Neuerungen">Neuerungen in CSS3</a></li>
            <li style="text-indent:2em"><a href="css3.html#Idee">Die Idee von Cascading Style Sheets</a></li>
            <li style="text-indent:1em"><a href="css3.html#Aufbau">Aufbau einer CSS Datei</a></li>
            <li style="text-indent:2em"><a href="css3.html#Selektoren">Selektoren</a></li>
            <li style="text-indent:3em"><a href="css3.html#Universalselektor">Universalselektor</a></li>
            <li style="text-indent:3em"><a href="css3.html#Elementselektor">Elementselektor</a></li>
            <li style="text-indent:3em"><a href="css3.html#IdundKlassen">Id- und Klassenselektoren</a></li>
            <li style="text-indent:3em"><a href="css3.html#Eltern">Eltern- und Kindselektoren</a></li>
            <li style="text-indent:2em"><a href="css3.html#Pseudoklassen">Pseudoklassen</a></li>
            <li style="text-indent:2em"><a href="css3.html#Deklarationen">Deklarationen</a></li>
            <li style="text-indent:2em"><a href="css3.html#Kommentare">Kommentare</a></li>
            <li style="text-indent:2em"><a href="css3.html#Gerüst">Gerüst einer CSS Datei am Beispiel</a></li>
            <li style="text-indent:1em"><a href="css3.html#Wichtig">Die wichtigsten Deklarationen, die für eine CSS Datei benötigt werden</a></li>
            <li style="text-indent:2em"><a href="css3.html#Background">Background</a></li>
            <li style="text-indent:2em"><a href="css3.html#Border">Border</a></li>
            <li style="text-indent:2em"><a href="css3.html#Color">Color</a></li>
            <li style="text-indent:3em"><a href="css3.html#Farbdeklarationen">Wichtigste Deklarationen</a></li>
            <li style="text-indent:3em"><a href="css3.html#Hexwert">Farbdefinition als hexadezimaler Wert</a></li>
            <li style="text-indent:3em"><a href="css3.html#RGB">Farbdefinition über RGB</a></li>
            <li style="text-indent:3em"><a href="css3.html#hsl">Farbdefinition über hsl/hsla</a></li>
            <li style="text-indent:2em"><a href="css3.html#Column">Column</a></li>
            <li style="text-indent:2em"><a href="css3.html#Abmessungen">Abmessungen</a></li>
            <li style="text-indent:2em"><a href="css3.html#Font">Font</a></li>
            <li style="text-indent:2em"><a href="css3.html#Margin">Margin</a></li>
            <li style="text-indent:2em"><a href="css3.html#Padding">Padding</a></li>
            <li style="text-indent:2em"><a href="css3.html#Listen">Listen</a></li>
            <li style="text-indent:2em"><a href="css3.html#Tabellen">Tabellen</a></li>
            <li style="text-indent:2em"><a href="css3.html#Texte">Texte</a></li>
            <li style="text-indent:1em"><a href="css3.html#Shorthand">Shorthand Eigenschaften von CSS</a></li>
            <li style="text-indent:1em"><a href="css3.html#Integration">Die Integration von CSS in HTML</a></li>
            <li style="text-indent:2em"><a href="css3.html#Quellcode">Integration von CSS direkt im Quellcode</a></li>
            <li style="text-indent:2em"><a href="css3.html#Anfang">Integration von CSS am Anfang einer HTML Datei</a></li>
            <li style="text-indent:2em"><a href="css3.html#Extern">Integration von CSS als externe Datei</a></li>
            <li style="text-indent:2em"><a href="css3.html#Wann">Wann man CSS auf welche Art integrieren sollte</a></li>
            <li style="text-indent:1em"><a href="css3.html#IdvsClass">Id vs Class</a></li>
            <li style="text-indent:1em"><a href="css3.html#Responsive">Responsives Webdesign</a></li>
            <li style="text-indent:1em"><a href="css3.html#Liquid">Liquid Layout</a></li>
            <li style="text-indent:1em"><a href="css3.html#Relative">Relative Maßeinheiten</a></li>
            <li style="text-indent:1em"><a href="css3.html#Mäuse">Mäuse vs Touchscreens</a></li>
            <li style="text-indent:1em"><a href="css3.html#Navigation">Responsive Navigationsleiste</a></li>
            <li style="text-indent:1em"><a href="css3.html#Links">Nützliche Links zum Thema</a></li>
          </ul>
        </div>

        <div class="textbox">
          <a name="Grundlegendes"/>
          <h2>Grundlegendes zu CSS3</h2>
          <br/>
          <a name="Geschichte"/>
          <h3> Die Geschichte von CSS3 </h3>
            <p>CSS steht für Cascading Style Sheets und wurde im Jahre 1995 von Hakon Wium Lee und Bert Bos im Namen des World Wide Web Consortiums (W3C) entwickelt. Es wurde 1994 von Hakon Wium Lee vorgeschlagen. Bert Bos damals an dem Darstellungsprogramm „Argo“, für welches er eine eigene Stilvorlagensprache verwendete. Die beiden entschieden sich zusammen zu arbeiten und CSS zu entwickeln. 1995 wurde dann das W3C auf  CSS aufmerksam und zeigte Interesse an dem Konzept.<br/> Zu der Zeit gab es bereits weitere Sprachen mit dem gleichen Ziel, doch CSS bot mit der Idee Regeln zu definieren, die über mehrere Stilvorlagen hinweg vererbt  werden können, eine entscheidende Neuerung. Im Jahre 1996 wurde dann die erste Version von CSS publiziert. Heute unterstützt nahezu jeder Browser CSS und es ist fast auf  jeder Website zu finden.<br/> Die aktuelle Version ist CSS Level 3 oder kurz CSS3.</p>
            <br/>
            <a name="Neuerungen"/>
            <h3> Neuerungen in CSS3 </h3>
            <p>CSS3 ist modular aufgebaut. Das heißt, dass es nicht als Gesamtpaket erscheint, sondern in einzelnen Modulen, wie z.B. Selectors oder Colors. Die ersten Module erschienen 2011. Auch heute werden noch neue CSS3 Module veröffentlicht, bspw. Das Images Modul, welches im Oktober 2019 erschien. Jedes Modul beinhaltet Zahlreiche Neuerungen zu seinem Vorgänge.<br/> Diese können im Detail unter der <a href="https://www.w3.org/Style/CSS/current-work"> Webseite des W3C </a> nachgelesen werden.</p>
            <br/>
            <a name="Idee"/>
            <h3> Die Idee von Cascading Style Sheets </h3>
            <p>Zur Strukturierung von Inhalten einer Website dient HTML. Doch es wird auch eine Möglichkeit zu deren Formatierung benötigt. Hierzu dient CSS. Es kann auch für XML-Dokumente verwendet werden. Cascading Style Sheets heißt übersetzt kaskadierende Stilvorlagen. Eine Definition von kaskadierend lautet „das stufenförmige Anordnen von Bauelementen“3. Dieser Begriff wird verwendet, da in CSS mehrere Angaben auf ein Element verwendet werden können, wie in folgendem Beispiel:<br/>
              p{<br/>
                  font-size: 16pt;<br/>   font-color: blue;<br/>  background-color: white;<br/>   margin: 2px;<br/>
              }<br/>
            Hier werden mehrere stilistische Angaben auf das p-Tag verwendet. Das Wort Stilvorlagen ist etwas konkreter und wird verwendet, da in CSS der Stil einer Website beschrieben wird.<br/> Ein CSS Dokument kann in mehrere HTML Dokumente eingebunden werden. Somit wird sichergestellt, dass eine Webseite mit all ihren Unterseiten ein einheitliches Layout verwendet. Dies erleichtert auch die Wartungsarbeiten an einer Webseite, denn eine stilistische Änderung muss so nur an einer Stelle durchgeführt werden und nicht für jede Unterseite einzeln.</p>
            <br/>
        </div>
        <div class="textbox">
          <a name="Aufbau"/>
          <h2> Aufbau einer CSS Datei </h2>
          <br/>
          <a name="Selektoren"/>
          <h3>Selektoren</h3>
          <br/>
          <a name="Universalselektor"/>
          <h4>Universalselektor</h4>
            <p>Der erste Teil einer Style Anweisung innerhalb einer CSS Datei ist immer der Selektor. Er zeigt welches Element einer HTML- oder XML-Datei von den Stil Anweisungen betroffen sein soll<br/>
              Es gibt verschiedenste Arten von Selektoren. Die allgemeinste wäre der Universalselektor *. Wird dieser verwendet, so wirken sich die darin befindlichen Anweisungen auf alle Elemente in der Datei aus, in der das css eingebunden ist. Eine häufige Anwendung hierfür sieht wie folgt aus<br/>
              *{<br/>
                margin: 0;<br/>
                padding: 0;<br/>
              }<br/>Hierdurch werden sämtliche vordefinierten Abstände auf 0 gesetzt.
            </p>
            <br/>
            <a name="Elementselektor"/>
            <h4>Elementselektor</h4>
            <p>Eine weiter Art von Selektoren sind die Elementselektoren. Sie sprechen ein bestimmtes Element in der HTML/XML Datei an, z.b. ein p Selektor für einen Paragraphen.6 Dies kann folgendermaßen aussehen:<br/>
              p{<br/>
                font-size: 14pt;<br/>
                text-allign: center;<br/>
                color: blue;<br/>
              }<br/>
              Dies würde die Schriftgröße auf 14 setzen, den Text zentriert ausrichten und blau Färben.
            </p>
            <br/>
            <a name="IdundKlassen"/>
            <h4>Id- und Klassenselektoren</h4>
            <p>Zuletzt gibt es noch die ID- und Klassenselektoren. In HTML gibt es die Möglichkeit einem Element, mittels eines ID- oder eines class-Attributes, eine  Id oder eine Klasse zu verleihen. Diese lassen sich dann in CSS ansprechen.7 In dem folgenden Anwendungsbeispiel sehen Sie einen Beispielhaften HTML Auszug, in dem sowohl ein ID, als auch ein class Attribut verwendet wird:<br/>
              &ltdiv class=&quotnavbar&quot&gt<br/>
              &ltul&gt<br/>
                 &ltli id=&quotcurrent&quot&gt&lta href=&quotindex.html&quot&gtStartseite&lt/a&gt&lt/li&gt<br/>
                 &ltli&gt&lta href=&quotseite1.html&quot&gtUnterseite 1&lt/a&gt&lt/li&gt<br/>
                 &ltli&gt&lta href=&quotseite2.html&quot&gtUnterseite 2&lt/a&gt&lt/li&gt<br/>
             &lt/ul&gt<br/>
             &lt/div&gt<br/>
             Dieser HTML Ausschnitt stellt eine beispielhafte Navigationsleiste dar, die mit CSS angesprochen werden kann. Dieses kann wie folgt aussehen:<br/>
             div.navbar{<br/>
               position: absolute;<br/>
               bottom: 0;<br/>
               width: 100%;<br/>
               background-color: #2f3136;<br/>
             }<br/>
             #current a{<br/>
               background-color: red;<br/>
             } <br/>
             Der obere Selektor spricht das div Element mit der Klasse navbar an und bestimmt dessen Position, Breite und Farbe. <br/>
             Der untere Selektor spricht die ID current an, sucht in dem Element mit dieser ID ein a Element und Färbt dessen Hintergrund rot. In diesem Fall dient dies dem Zweck, dass die Unterseite, auf der man sich aktuell befindet, in der Navigationsleiste rot eingefärbt wird.
            </p>
            <br/>
            <a name="Eltern"/>
            <h4>Eltern- und Kindselektoren</h4>
            <p>Selektoren lassen sich auch verschachteln, sodass Elternselektoren und Kinderselektoren entstehen.
              Möchte man eine Kindselektor ansprechen so schreibt man zunächst die Elternselektoren hin und durch ein Leerzeichen getrennt den Kindselektor. Beispiel:<br/>
              div ul li a{<br/>
                background-color: red;<br/>
              }<br/>
              Der Elternselektor von a ist hier li, dessen Elternselektor ist ul und dessen Elternselektor ist div. Hier werden alle a-Elemente angesprochen, die sich in einem Listenelement eine ungeordneten Liste befinden, welche von einem div Block umschlossen wird. Ein Elternselektor kann auch mehrere Kindselektoren haben, die sich auf gleicher Ebene befinden. Möchte man mehrere Kindselektoren auf der gleichen Ebene ansprechen, so werden diese durch ein + getrennt, z.b. div ul + ol{…}.
            </p>
            <br/>
            <br/>
            <a name="Pseudoklassen"/>
            <h3>Pseudoklassen</h3>
            <p>Es gibt in CSS auch sogenannte Pseudoklassen. Diese stellen keine tatsächlichen Elemente im HTML Dokument dar, sondern werden in der Regel für zustände benutzt. Sie werden durch einen Doppelpunkt hinter dem angesprochenen Element eingeleitet. Es wird zum Beispiel verwendet um das Verhalten eines Element beim darüber hovern mit der Maus zu beschreiben oder um das Verhalten eines Links zu beschreiben, wenn dieser angeklickt wurde. Dies kann folgendermaßen aussehen:<br/>
              a:hover{<br/>
                color: purple;<br/>
              }<br/>
              a:visited{<br/>
                color: grey;<br/>
              }<br/>
              a:active{<br/>
                color: red;<br/>
            }<br/>
            Dieser CSS Ausschnitt sorgt dafür, dass Links beim darüber hovern mit der Maus lila werden, sie grau angezeigt werden, wenn sie schon besucht wurden und sie rot sind sofern sie gerade aktiv sind.
            </p>
            <br/>
            <a name="Deklarationen"/>
            <h3>Deklarationen</h3>
            <p>Des Weiteren besteht eine CSS Datei aus Deklarationen. Dies sind die Anweisungen, welche in den geschweiften Klammern eines Selektors stehen. Sie geben eine Beschreibung darüber, wie das jeweilige Segment gestaltet werden soll. Jede Deklaration besteht aus einem oder mehreren Key-value-Paaren, abgeschlossen durch ein Semikolon, wie in folgendem Beispiel zu sehen:<br/>
              *{<br/>
                margin: 0;<br/>
                padding: 0;<br/>
                background-color: grey;<br/>
              }<br/>
              Die drei Anweisungen zwischen den geschweiften Klammern sind die Deklarationen. Dabei ist beispielsweise margin der Key mit dem value 0. Hier werden die äußeren Abstände der gesamten Datei standardmäßig auf 0 gesetzt und die Hintergrundfarbe auf Grau.
            </p>
            <br/>
            <a name="Kommentare"/>
            <h3>Kommentare</h3>
            <p>In CSS kann es, wie auch in anderen Sprachen, hilfreich sein seinen Code gut  zu Kommentieren. Kommentare werden in CSS durch /* eingeleitet und mit */ beendet. Alles dazwischen bildet den Kommentar. Üblicherweise schreibt man seinen Kommentar über den zu kommentierenden Code Block.</p>
            <br/>
            <a name="Gerüst"/>
            <h3>Gerüst einer CSS Datei am Beispiel</h3>
            <p>
              Aus den Elementen, welche wir im vorgehenden Unterkapitel gesehen haben kann man nun eine CSS Datei bauen. Eine solche kann wie folgt aussehen:<br/>
              /*Zunächst werden die äußeren Abstände standardmäßig auf 0 gesetzt*/<br/>
              *{<br/>
                padding: 0;<br/>
                margin: 0;<br/>
              }<br/>
              /*Dann werden Farben und Schriften für den Body der html Datei festgelegt*/<br/>
              body{<br/>
                background-color: #36393f;<br/>
                color: white;<br/>
                font-family: Calibri;<br/>
              }<br/>
              /*Hier werden einige Einstellungen für den Kopf der Website vorgenommen*/<br/>
              #header {<br/>
                height:13em;<br/>
                width: 100%;<br/>
                position: fixed;<br/>
                top: 0;<br/>
                margin-top: -5px;<br/>
                overflow-y: hidden;<br/>
                transition: 0.5s;<br/>
              }<br/>
              /*Hier wird die Navigationsleiste Formatiert*/<br/>
              #navbar{<br/>
                position: absolute;<br/>
                bottom: 0;<br/>
                width: 100%;<br/>
                background-color: #2f3136;<br/>
              }<br/>
              /*Hier werden Einstellungen für die Fußleiste vorgenommen*/<br/>
              #footer {<br/>
                margin: 0;<br/>
                padding: 0;<br/>
                list-style-type: none;<br/>
                width: 50%;<br/>
                height: 100%;<br/>
                margin-left: auto;<br/>
                margin-right: auto;<br/>
              }<br/>
              So kann ein Gerüst für eine CSS Datei aussehen. Im Anwendungsfall werden dann in der Regel noch einzelne Designs für die verschiedenen Einzelelemente festgelegt.
            </p>
            <br/>
        </div>
        <div class="textbox">
          <a name="Wichtig"/>
          <h2>Die wichtigsten Deklarationen, die für eine CSS Datei benötigt werden</h2>
          <br/>
          <a name="Background"/>
          <h3>Background</h3>
            <p>Es gibt in CSS einige Einstellungen die man für den Hintergrund einer Website vornehmen kann. Dabei gehören die folgenden zu den wichtigsten:<br/>
              background: …; fasst mehrere Eigenschaften für den Hintergrund zusammen<br/>
              background-attachment: fixed; sorgt dafür dass der Hintergrund feststeht oder mitscrollt (hier feststehend)<br/>
              background-color: grey; legt die Hintergrundfarbe fest (hier grau)<br/>
              background-image: url(image.jpg); legt ein Hintergrundbild fest<br/>
              background-origin: padding-box; setzt Reichweite und Position des Hintergrundes festgelegt<br/>
              background-position: left top; positioniert den Hintergrund<br/>
              background-size: cover; passt die Größe des Hintergrundes an (deckt hier die gesamte Seite ab)</p>
              <br/>
              <a name="Border"/>
              <h3>Border</h3>
              <p>Eine  Webseite wird oft in Form verschiedener Boxen strukturiert. Für diese lassen sich in CSS Einstellungen für die Rahmen festlegen. Dafür sind die folgenden Einstellungen besonders wichtig:<br/>
                border:…; fasst mehrere Einstellungen für die Rahmen zusammen<br/>
                border-color: blue; gibt die Farbe der Rahmen an (hier Blau)<br/>
                border-style: dotted; gibt das Aussehen des Rahmen an (hier gepunktet)<br/>
                border-width: 20px; gibt die Breite des Rahmens an (hier 20 Pixel)<br/>
                border-radius: 10px; rundet die Ecken des Rahmens zu einem gewissen Faktor ab<br/>
                border-bottom:…; fasst Einstellungen für den unteren Rand zusammen<br/>
                border-top:…; fasst Einstellungen für den oberen Rand zusammen<br/>
                border-right:…; fasst Einstellungen für den rechten Rand zusammen<br/>
                border-left:…; fasst Einstellungen für den linken Rand zusammen<br/>
                Durch aneinanderreihen der verschiedenen Border Elemente lassen sich spezifischere Einstellungen vornehmen, wie z.B. border-top-left-radius: 10px;, was die linke obere Ecke abrundet.</p>
                <br/>
                <a name="Color"/>
              <h3>Color</h3>
              <br/>
              <a name="Farbdeklarationen"/>
              <h4>Wichtigste Deklarationen</h4>
              <p>Es gibt in CSS auch die Möglichkeit Farben für verschiedene Elemente anzugeben. Dazu können unter anderem folgende Deklarationen verwendet werden:<br/>
                color: black; gibt die Farbe des  Textes eines Elements an (hier Schwarz)<br/>
                background-color: blue; gibt die Hintergrundfarbe des Elementes an (hier Blau)<br/>
                font-color: white; gibt die Schriftfarbe an (hier Weiß)<br/>
                opacity: 0.5; gibt den Grad der Transparenz eines Elementes an<br/>
                Im obigen wurde für die Farben eine Definition über die Farbnamen verwendet. Dies ist die simpelste Variante Farben zu definieren, jedoch nicht immer die Beste. Es gibt mehrere unterschiedliche Varianten dies zu tun. Dabei lassen sich Farben wesentlich genauer definieren als nur über die Farbnamen.
              </p>
              <br/>
              <a name="Hexwert"/>
              <h4>Farbdefinition als hexadezimaler Wert</h4>
              <p>Farben lassen sich ebenfalls über einen hexadezimalen Wert definieren. Dieser wird immer mit einem # eingeleitet. Tabellen für die verschiedenen Farben als Hexwert gibt es online und dort lassen sich sogar Hexwerte für eigene Farben generieren. Wichtige Farben als Hexadezimalwert sind:<br/>
                Schwarz: #000000<br/>
                Weiß: #FFFFFF<br/>
                Grau: #888888<br/>
                Rot: #FF0000<br/>
                Grün: #00FF00<br/>
                Blau: #0000FF</p><br/>
                <a name="RGB"/>
              <h4>Farbdefinition über RGB</h4>
              <p>Farben lassen sich außerdem über die rgb Variante definieren. Dies steht für den Rot-, Grün- und Blauanteil, den die Farbe enthält. Dies lässt sich prozentual oder durch Nummern von 1 bis 255 angeben. Auch hier finden sich Farbtabellen online und es lassen sich die Werte für eigene Farben generieren. Die wichtigsten Farben hier sind:<br/>
                Schwarz: rgb(0%, 0%, 0%) oder rgb(0, 0, 0)<br/>
                Weiß: rgb(100%, 100%, 100%) oder rgb(255, 255, 255)<br/>
                Grau: rgb(50%, 50%, 50%) oder rgb(136, 136, 136)<br/>
                Rot: rgb(100%, 0%, 0%) oder rgb(255, 0, 0)<br/>
                Grün: rgb(0%, 100%, 0%) oder rgb(0, 255, 0)<br/>
                Blau: rgb(0%, 0%, 100%) oder rgb(0, 0, 255)<br/>
                Das RGB-Modell lässt sich auch noch um ein a erweitern, das die Deckkraft der Farbe angibt. Das a steht für den Alpha Wert. Dies kann dann z.B. für Blau wie folgt aussehen:<br/>
                rgba(0, 0, 255, 0.5)</p>
                <br/>
                <a name="hsl"/>
              <h4>Farbdefinition über hsl/hsla</h4>
              <p>Eine ähnliche Variante wie rgb bietet die hsl Variante. Dabei steht h für „hue“, also die Gradzahl im Farbkreis, s steht für „saturation“, also den Grad der Farbsättigung und l steht für „lightness“, also die Helligkeit in Prozent. Auch hsl kann, wie rgb,  noch durch ein a erweitert werden für die Deckkraft.<br/>
                Die wichtigsten Farben in hsl: <br/>
                Schwarz: hsl(0, 0%, 0%)<br/>
                Weiß: hsl(360, 100%, 100%)<br/>
                Grau: hsl(360, 0%, 50%)<br/>
                Rot: hsl(360, 100%, 50%)<br/>
                Grün: hsl(120, 50%, 50%)<br/>
                Blau: hsl(235, 100%, 50%)<br/>
                Auch hierfür finden sich online Tabellen und Farbgeneratoren.
              </p>
              <br/>
              <a name="Column"/>
              <h3>Column</h3>
              <p>In CSS lassen sich mit column verschiedene Formatierungen für spalten definieren. Die wichtigsten Deklarationen zu diesem Zweck sind die folgenden:<br/>
                columns:…; hiermit lassen sich mehrere Informationen in der Kurzschreibweise zusammenfassen<br/>
                column-width: 20px; gibt die Breite eine Spalte an (hier 20 Pixel)<br/>
                column-count: 3; gibt die Anzahl der Spalten (hier 3)<br/>
                column-fill: balance;  gibt an auf welche Art die Spalten zu füllen sind (hier werden alle Spalten mit etwa der gleichen Menge an Content gefüllt)<br/>
                column-rule:...; sorgt dafür dass die Spalten durch eine senkrechte Linie getrennt sind.  Es handelt sich hierbei um eine kurzschreibweise, die mehrere Werte verwenden kann<br/>
                column-rule-width: 2px; gibt die Breite der senkrechten Linie an (hier 2 Pixel)<br/>
                column-rule-style: dotted; gibt die Art der Linie an (hier gepunktet)<br/>
                column-span: all; gibt die Zahl der Spalten an über die ein Objekt spannt (hier Alle)</p>
              <br/>
              <a name="Abmessungen"/>
              <h3>Abmessungen</h3>
              <p>Für Abmessungen gibt es in CSS height und width. Damit können im allgemeinen Höhe und Breite von Elementen bestimmt werden. Mit max-height und max-width können Maximale Höhe und Breite eines Elementes bestimmt werden. Außerdem gibt es mehrere Maßeinheiten, die man in CSS wählen kann um Höhen und Breiten anzugeben. Es existieren die folgenden Maßeinheiten:<br/>
                Basiseinheit:<br/>
              <ul><li style="text-indent:5em">px – ein Pixel, also ein Bildpunkt auf dem Monitor des Betrachters, z.B. font-size: 20px;</li></ul><br/>
              Absolute Maße:<br/>
              <ul>
                <li style="text-indent:5em">in – Zoll, also 2,54cm, z.B. margin-right: 1in;</li>
                <li style="text-indent:5em">pc – Pica, also ein sechstel Zoll, z.B. padding: 2pc;</li>
                <li style="text-indent:5em">pt – Punkt, also ein zweiundsiebzigstel Zoll, z.B. font-size: 14pt;</li>
                <li style="text-indent:5em">cm – Zentimeter, z.B. margin-left: 2cm;</li>
                <li style="text-indent:5em">mm – Millimeter, z.B. padding: 3mm;</li>
              </ul><br/>
              Relative Maße:<br/>
              <ul>
                <li style="text-indent:5em">em – eine vom Browser berechnete Schriftgröße, z.B. font-size: 1.5em;</li>
                <li style="text-indent:5em">rem – entspricht der Schriftgöße, die für das Wurzelelement in der html Datei festgelegt wurde, z.B. font-size: 1.5rem;</li>
                <li style="text-indent:5em">ex – entspricht der Größe des Kleinbuchstabens x im Browser, z.B. margin: 1ex;</li>
                <li style="text-indent:5em">ch – entspricht der Breite der Ziffer 0, z.B. padding: 0.5ch;</li>
                <li style="text-indent:5em">vw – ein hundertstel der Breite des Viewports, z.B. column-width: 20vw;</li>
                <li style="text-indent:5em">vh  - ein hundertstel der Höhe des Viewports, z.B. </li>
                <li style="text-indent:5em">vmin – ein hundertstel der Höhe oder der Breite des Viewports, je nach dem welches der kleinere Wert ist, z.B. width: 10vmin;</li>
                <li style="text-indent:5em">vmax - ein hundertstel der Höhe oder der Breite des Viewports, je nach dem welches der größere Wert ist, z.B. height: 10vmax;</li>
              </ul><br/></p>
              <br/>
              <a name="Font"/>
              <h3>Font</h3>
              <p>Font in CSS bietet verschiedene Möglichkeiten zur Formatierung von Schriften. Dabei sind die folgenden besonders wichtig:<br/>
                font:…; ist eine Kurzfassung für alle Schrifteigenschaften<br/>
                font-family: Arial; bestimmt die Schriftart (hier Arial)<br/>
                font-size: 14pt; bestimmt die Schriftgröße<br/>
                font-size-adjust: 0.5; hilft durch Justieren die Lesbarkeit des Textes zu erhalten<br/>
                font-style: italic; gibt den Schriftstil an (hier italic)<br/>
                font-variant: small-caps; legt fest wie die Schrift sein soll (hier wird in kleinen Großbuchtstaben geschrieben)<br/>
                font-weight:  500; bietet Abstufungen der Fettschrift</p>
              <br/>
              <a name="Margin"/>
              <h3>Margin</h3>
              <p>Mit margin lassen sich in CSS die Abstände eines Blockes zu seiner Umgebung bestimmen. Dazu gibt es das allgemeine Schlüsselwort margin, das den Abstand zusammenfassend für alle Seiten festlegt. Möchte man an den verschiedenen Seiten unterschiedliche Abstände haben, so kann man margin-top, margin-bottom, margin-left und margin-right verwenden. Beispiele:<br/>
                margin: 5px;<br/>
                margin-top: 3em;<br/>
                margin-bottom: 5pt;<br/>
                margin-left: 1vw;<br/>
                margin-right: 1vmin;</p>
              <br/>
              <a name="Padding"/>
              <h3>Padding</h3>
              <p>Mit Padding lassen sich die Abstände des Inhalts zum Rand des Blockes bestimmen. Wie bei margin steht auch hier ein einfaches padding allgemein für alle vier Seiten. Im Einzelnen lassen diese sich definieren indem man -top, -bottom, -left und -right anhängt. Beispiele:<br/>
                padding: 5px;<br/>
                padding-top: 3em;<br/>
                padding-bottom: 5pt;<br/>
                padding-left: 1vw;<br/>
                padding-right: 1vmin;</p><br/>
              <a name="Listen"/>
              <h3>Listen</h3>
              <p>Listen haben in html vordefinierte Arten etwas aufzuzählen, wie z.B. ausgefüllte Kreise für ungeordnete Listen. Dies lässt sich jedoch mittels CSS ändern und zwar wie folgt:<br/>
                list-style:…; ist eine Kurzschreibweise für mehrere Eigenschaften, die eine Liste haben kann<br/>
                list-style-image: url(image.jpg); verwendet das Bild aus der angegebenen URL als Aufzählungspunkt<br/>
                list-style-position: outside; positioniert die Listenaufzählung<br/>
                list-style-type: lower-alpha; verwendet einen der verschiedenen vorgefertigten Aufzählungspunkten</p><br/>
              <a name="Tabellen"/>
              <h3>Tabellen</h3>
              <p>Wie Listen haben auch Tabellen einen vorgefertigten Stil in HTML, welcher sich mit Hilfe von CSS verändern lässt. Dazu gibt es folgende Schlüsselworte:<br/>
                border-collapse: separate; gibt den Raum zwischen Tabellenrahmen an (hier mit ein wenig Raum dazwischen)<br/>
                border-spacing:12px 10px; bietet eine weiter Möglichkeit den Raum zwischen Tabellenrahmen anzugeben<br/>
                caption-side: bottom; gibt die Positionierung der Tabellenbeschriftung an (hier unterhalb der Tabelle)<br/>
                empty-cells: hide; gibt an wie mit leeren Zellen in der Tabelle umzugehen ist (hier werden sie versteckt)<br/>
                table-layout: fixed; gibt die Breite der Tabelle an (hier ist diese fest)</p><br/>
              <a name="Texte"/>
              <h3>Texte</h3>
              <p>Auch zur Formatierung von ganzen Texten gibt es in CSS eine Vielzahl von Möglichkeiten. Es folgen die am häufigsten benötigten:<br/>
                text-allign: center; gibt die Ausrichtung des Textes an (hier mittig)<br/>
                text-decoration: line; gibt eine Textdekoration an (hier unterstrichen)<br/>
                text-indent: 3px; gibt an wie weit der Text eingerückt sein soll<br/>
                text-overflow: hidden; gibt an wie mit Texten umgegangen werden soll, die zu lang für ein Element sind (hier wird der Überlauf versteckt)<br/>
                text-shadow: 3px; setzt einen Schatten hinter den Text<br/>
                text-transform: uppercase; wandelt den Text entsprechend der Regel um (hier in Großbuchstaben<br/>
                line-height: 1.5; gibt den Abstand der übereinanderliegenden Zeilen an<br/>
                vertical-allign: top; gibt die vertikale Ausrichtung relativ zur Grundlinie an<br/>
                letter-spacing: 1px; gibt den Abstand zwischen den Buchstaben an<br/>
                word-spacing: 2px; gibt den Abstand zwischen den einzelnen Worten an<br/>
                white-space: pre-wrap; gibt die Art um wie mit Leerzeichen umgegangen werden soll<br/>
                word-wrap: break-word; gibt an wie mit Wörtern umgegangen werden soll, die über den Rand des Blockes hinaus gehen (hier sollen diese getrennt werden)</p><br/>
        </div>
        <div class="textbox">
          <a name="Shorthand"/>
          <h2>Shorthand Eigenschaften von CSS</h2>
            <p>Die Shorthand Eigenschaften von CSS dienen zur kurzen Schreibweise verwandter Deklarationen und machen dem CSS Entwickler das Leben einfacher. In Kapitel 3 sind für die angegebenen Deklarationen die jeweiligen Kurzschreibweisen mit angegeben. Zum Beispiel kann man statt:<br/> padding-top: 10px;<br/> padding-right: 10px;<br/> padding-bottom: 10px;<br/>
              padding-left: 10px;<br/> auch schreiben:<br/> padding: 10px;<br/> Möchte man unterschiedliche Werte für die einzelnen Seiten verwenden, kann man dennoch die Kurzschreibweise verwenden, indem man die Werte hintereinander schreibt:<br/> padding: 1px 2px 5px 3px;<br/> Die Reihenfolge dabei ist für die jeweilige Deklaration vorgegeben und kann auf  der Seite des W3C unter der CSS Rubrik nachgelesen werden. Für die meisten Deklarationen in CSS existieren Kurzschreibweisen, deren Verwendung viel Zeit sparen kann.<br/> Bei den Kurzschreibweisen müssen nicht alle Werte angegeben werden. Dennoch ist zu beachten, dass einige der Kurzschreibweisen Pflichtangaben haben, die man nicht weg lassen kann. Für ausgelassene Werte gelten dann die Standardwerte.</p></br>
        </div>
        <div class="textbox">
          <a name="Integration"/>
          <h2>Die Integration von CSS in HTML</h2>
          <br/>
          <a name="Quellcode"/>
          <h3>Integration von CSS direkt im Quellcode</h3>
            <p>HTML bietet einige universelle Attribute an. Eines davon ist das style Attribut. Dieses Attribut kann man direkt in einem öffnenden HTML verwenden mit style=“...“. Innerhalb der Ausrufezeichen kann man dann die gewünschten CSS Argumente angeben, wie in folgendem Beispiel :<br/>
              &ltp style=&quottext-align: center; color: green; font-size: 12pt&quot&gt Dieser Absatz wird über ein style-Attribut formatiert. &lt/p&gt<br/>
              Dieses Style Attribut sorgt nun dafür, dass der Text innerhalb der Paragraph-Tags grün ist und und zentriert wird. Seine Schriftgröße ist hier 12.<br/> Diese Art der Formatierung wiegt stärker als CSS3, das auf eine andere Art eingebunden ist und überschreibt diese somit.</p><br/>
          <a name="Anfang"/>
          <h3>Integration von CSS3 am Anfang einer HTML Datei</h3>
          <p>CSS3 kann auch durch ein internes Stylesheet am Anfang einer HTML Datei einegebunden werden. Hierzu gibt es in HTML das Style-Tag. Im öffnenden Tag muss der MIME Typ des Stylesheets angegeben werden. Für CSS sieht dies folgendermaßen aus: type=“text/css“. Verwendet man XHTML, so muss der XML-MIME Typ angegeben werden, welcher jedoch weitaus strenger ist.29 Eine Formatierung mittels style-Tag kann folgendermaßen aussehen:<br/>
            &lt!doctype html&gt<br/> &lthtml lang=&quotde&quot&gt <br/> &lthead&gt  <br/>  &ltstyle type=&quottext/css&quot&gt <br/>
            h1 { <br/>       background-color: green; <br/>      color: white;  <br/>  }  <br/>  p {  <br/>  text-align: center;  <br/>   color: green;  <br/>  }<br/>
            &lt/style&gt <br/> &lt/head&gt<br/>
            Dieses Style-Tag sorgt dafür, dass im gesamten Dokument die Überschriften erster Ordnung weiß sind und einen grünen Hintergrund haben und sämtliche Paragraphen mittig ausgerichtet sind und eine grüne Schrift haben.</p><br/>
          <a name="Extern"/>
          <h3>Integration von CSS3 als externe Datei</h3>
          <p>Eine CSS Datei kann auch als externe Datei in ein HTML Dokument integriert werden. Das CSS selbst sieht dann genau so aus, wie das was man auch innerhalb eines Style-Tags findet. Jedoch befindet sich das CSS in einer anderen Datei. In der HTML Datei findet man lediglich eine Verknüpfung zur CSS Datei. Die CSS Datei nennt man häufig stylesheet.css oder general-styles.css. Der Vorteil dabei ist, dass dieses Stylesheet in mehrere HTML Dateien eingebunden werden kann, was für      eine einheitliche Optik sorgt.<br/>
            Das einbinden selbst funktioniert durch ein link-Tag im Kopf der HTML Datei. Dabei müssen zwei Attribute mit angegeben werden, nämlich das rel Attribut und das href Attribut. Das rel Attribut definiert den logischen Beziehungstyp, also die Art dessen was eingebunden werden soll. Das href Attribut referenziert auf die einzubindende Datei. Liegt die CSS Datei im gleichen Ordner wie die HTML Datei, so muss lediglich der Dateiname angegeben werden. Ansonsten muss man den Pfad zur Datei angeben. Ein solches link-Tag kann folgendermaßen aussehen:<br/>
            &ltlink rel=&quotstylesheet&quot href=&quotstylesheet.css&quot&gt</p><br/>
            <a name="Wann"/>
            <h3>Wann man CSS3 auf welche Art integrieren sollte</h3>
            <p>Das Einbinden des Universalattributes „style“ bindet wie bereits erwähnt am stärksten und lässt sich gut verwenden an Stellen, an denen das Design einmalig vom gesamten Design der Webseite abweicht.<br/>
              Die Verwendung eines Style-Tags am Anfang der HTML Datei kann man machen, wenn der verwendete Stil tatsächlich nur auf eine einzige Seite zutrifft.<br/>
              Generell ist jedoch die beste Variante das Einbinden durch eine externe Datei. Die beiden anderen Varianten erhöhen den Wartungsaufwand, da dadurch Änderungen nicht zentral vorgenommen werden können, während sie die Flexibilität verringern. Außerdem widerspricht vor allem die Variante des „Inline-Styles“ über das Attribut dem Grundsatz der strikten Trennung zwischen Content in HTML und Darstellung in CSS.<br/>
              Nach Möglichkeit sollte man also das stylesheet durch eine externe Datei einbinden.
            </p><br/>
        </div>
        <div class="textbox">
          <a name="IdvsClass"/>
          <h2>ID vs Class</h2>
            <p>In HTML können id und class als Bezeichner für bestimmte Elemente verwendet werden durch  id=“idName“ und class=“Klassenname“. Diese können dann in CSS gezielt  angesprochen werden. Dabei
              kommt die Frage nach dem Unterschied zwischen den beiden auf. Der Unterschied liegt darin, dass id nur einzigartig verwendbar ist. Sie weist also ganz gezielt auf genau ein Element der Webseite hin. Eine Klasse hingegen kann mehreren Elementen zugewiesen werden auf die dann ein Satz an Regeln gesammelt verwendet wird. <br/>
              Wann also id und wann class verwenden?<br/>
              Class wird verwendet wenn Formatierungen gleicher Art wiederholt an unterschiedlichen Stellen auf der Webseite auftauchen. Möchten man beispielsweise in unterschiedlichen Texten auf der Webseite mehrere Textstellen hervorheben, so kann man den hervorzuhebenden Stellen die gleiche Klasse verleihen und diese Zentral in der CSS Datei hervorheben  (z.B. durch background-color: yellow;).<br/>
              Id wird verwendet für Elemente, die es nur ein einziges Mal gibt. So kann man sich sicher sein, dass die Formatierung auch wirklich nur für dieses eine Element angewendet wird. Ein Beispiel dafür wäre die Navigationsleiste, welche ja einzigartig auf der Seite ist.<br/>
              Man kann sich nun fragen warum man nicht immer den class Selektor verwendet. Dies zeugt nicht von gutem Stil. Man macht sich selbst und anderen die den Code lesen das Leben einfacher wenn man immer auf Anhieb erkennt welche Selektoren einmalig sind und welche mehrfach vorkommen können.</p><br/>
        </div>
        <div class="textbox">
          <a name="Responsive"/>
          <h2>Responsives Webdesign</h2>
            <p>Ein responsives Webdesign dient dazu eine Webseite auf allen möglichen Viewports gleich gut sichtbar zu machen. Dies soll nach Möglichkeit geschehen ohne mehrere Website Layouts für unterschiedliche Viewports zu verwenden. Es entwickelte sich nach und nach ein adaptives Design, dass sich mit Hilfe von media queries an die unterschiedlichen Geräte anpasst. Dabei geht es nicht nur um Höhe und Breite der Webseite, sondern auch darum die Art der Navigation dem Gerät anzupassen. In CSS gibt es dazu mehrere Mittel, die wir im Folgenden kennen lernen werden.</p><br/>
          <a name="Liquid"/>
          <h2> Liquid Layout</h2>
          <p>Der Begriff Liquid Layout sagt aus, dass das Layout einer Webseite nicht starr ist sondern sich an die Größe des Gerätes anpasst. Eine Webseite sollte man immer so schreiben, dass ein Liquid Layout gegeben ist. Dies wird dadurch erreicht, dass man für Höhe und Breite der Webseite keine feste Größe wie Pixel verwendet, sondern diese prozentual angibt. Die kann folgendermaßen aussehen: height: 80%; width: 80%;. Sind, wie hier, sowohl Höhe als auch Breite der Webseite in Prozenten angegeben, so nennt man das Layout „Fluid Layout“.</p><br/>
          <a name="Relative"/>
          <h2>Relative Maßeinheiten</h2>
          <p>Wir haben bereits sowohl die festen als auch die relativen Maßeinheiten in CSS kennen gelernt. Das Verwenden von festen Maßeinheiten kann bei unterschiedlichen Viewports zu Problemen führen. Um ein responsives Webdesign zu gewährleisten sind daher immer relative Maßeinheiten wie em oder rem zu verwenden. Beispielsweise sollte man für font-size nicht die Maßeinheit px verwenden, sondern em.</p><br/>
          <a name="Mäuse"/>
          <h2>Mäuse vs Touchscreens</h2>
          <p>Wie wir bereits gesehen haben kann man bei verschiedenen Elementen das Verhalten beispielsweise beim darüber hovern festlegen. Solche Funktionen können jedoch logischerweise auf Touch Geräten nicht funktionieren. CSS bietet uns die Möglichkeit beim Programmieren touch Events mit einzubauen. Dies kann z.B. das Event touch-action: manipulation; sein, welches dafür sorgt, dass die Größe eines Objektes durch ein Ziehen mit dem Finger manipulierbar ist. Weitere touch Events können in der CSS Sektion auf der Webseite des W3C nachgelesen werden.</p><br/>
          <a name="Navigation"/>
          <h2>Responsive Navigationsleiste</h2>
          <p>Eine normale Navigationsleiste, wie wir sie auf Monitoren bei Desktop PCs haben wird bei kleineren Geräten schnell unschön.  Daher ist es für ein responsives Webdesign notwendig der Navigationsleiste einen responsive Modus zu geben, in den sie ab einer gewissen Breite wechselt. In CSS kann man mit @media screen and (max-width: 600px){…} die Pixelbreite des Gerätes prüfen. Hier wird bei einer Breite von maximal 600 Pixeln  etwas unternommen. Man kann sich nun aus dem Internet ein sogenanntes Hamburger Icon holen und dieses in seine HTML Datei verlinken. Standarmäßig kann  man die normale Navigationsleiste über das Hamburger icon legen.  Schreibt man nun @media screen and (max-width: 600px){.navbar{display: none;}}, so wird die Navigationsleiste bei einer Breite von weniger als 600 Pixeln versteckt und das Hamburger Icon wird sichtbar. Nun kann man sich eine Javascript Funktion schreiben, die den Namen der Id der Navigationsleiste bei Klick auf das Burger Icon ändert, z.B. von navbar in navbarResponsive. In der CSS Datei kann man dann eine eigene Formatierung für diese Id festlegen, die nur in Kraft tritt wenn das Hamburger Icon angeklickt wird. Diese kann man nun so schreiben, dass beim Klick auf das Burger Icon die Navigationsleiste untereinander und in etwas größeren Blöcken angezeigt wird. Hat man die Javascript Funktion nun so geschrieben, dass sie den Namen beim Aufruf wieder in navbar ändert  sofern der aktuelle Name navbarResponsive ist, so wird bei einem weiteren Klick auf das Icon die Navigationsleiste wieder versteckt. Die Javascript Funktion kann folgendermaßen aussehen:
            <br/>
            function navbarResponsive() {<br/>  var x = document.getElementById("navbar");<br/>  if (x.className === "navbar") { <br/>   x.className += " Responsive";<br/>  } else { <br/>   x.className = "navbar"; <br/> }<br/> } <br/>
            im HTML Dokument muss die Navigation dann folgendermaßen eingeleitet sein:<br/>
            &ltdiv class=&quotnavbar&quot id=&quotnavbar&quot&gt<br/>
            In der CSS Datei wird dann das Burger Icon standardmäßig versteckt durch:<br/>
            .icon{ display: none;}<br/>
            Bei einer Breite von weniger als 500 Pixeln zeigen wir dann das Icon und verstecken die normale Navigationsleiste z.B. wie folgt:<br/>
            @media screen and (max-width: 600px){<br/>
              .navbar{display: none;}<br/>
              .icon{display: block;}<br/>
            }<br/>
            Jetzt kann in der CSS Datei die Navigationsleiste für den responsicve Modus wie gewünscht formatiert werden durch: <br/>
           .navbar.Responsive{…}<br/>
           Der Funktionsaufruf der Javascript Funktion findet sich in der HTML Datei und kann folgendermaßen aussehen: <br/>
           &lta href=&quotjavascript:void(0);&quot class=&quoticon&quot onclick=&quotnavbarResponsive()&quot&gt<br/>
          </p><br/>
        </div>
        <div class="textbox">
          <a name="Links"/>
          <h2>Nützliche Links zum Thema</h2>
            <ul>
              <li style="text-indent:5em"><a href="https://de.wikibooks.org/wiki/Websiteentwicklung:_CSS:_Geschichte">Wikibooks</a></li>
              <li style="text-indent:5em"><a href="https://www.w3.org/Style/CSS/">W3C</a></li>
              <li style="text-indent:5em"><a href="https://www.wortbedeutung.info/kaskadieren/">Wortbedeutungen</a></li>
              <li style="text-indent:5em"><a href="https://little-boxes.de/">Little Boxes</a></li>
              <li style="text-indent:5em"><a href="http://www.script-inside.de/">Script inside</a></li>
              <li style="text-indent:5em"><a href="https://www.mediaevent.de/">Mediaevent</a></li>
              <li style="text-indent:5em"><a href="https://www.webmasterpro.de/">Webmasterpro</a></li>
              <li style="text-indent:5em"><a href="https://wiki.selfhtml.org/">Selfhtml</a></li>
              <li style="text-indent:5em"><a href="https://www.w3schools.com/">W3Schools</a></li>
              <li style="text-indent:5em"><a href="https://www.edv-lehrgang.de/">EDV Lehrgang</a></li>
              <li style="text-indent:5em"><a href="https://www.html-seminar.de/">HTML Seminar</a></li>
              <li style="text-indent:5em"><a href="https://alistapart.com/">Alistapart</a></li>
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
