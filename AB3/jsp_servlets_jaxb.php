<!--<!DOCTYPE html>
<html lang="en">
<head>-->
    <!-- header image: https://pixabay.com/photos/server-space-the-server-room-dark-2160321/ -->
  <!--<link rel="stylesheet" href="stylesheet.css" type="text/css">
  <meta charset="UTF-8">
    <script src="scroll+navicon.js"></script>-->
	<?php include_once('header_php.php'); ?>
  <title>JSP, Servlets, JAXB</title>
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
			<li ><a href="index.php">Startseite</a></li>
                    <li><a href="grundlagen.php">Grundlagen</a></li>
                    <li><a href="html5.php">HTML</a></li>
                    <li><a href="css3.php">CSS</a></li>
                    <li><a href="css3-2.php">CSS 2</a></li>
                    <li><a href="javascript.php">Javascript</a></li>
                    <li><a href="javascript2.php">Javascript (2)</a></li>
                    <li id="current"><a href="jsp_servlets_jaxb.php">JSP, Servlets, JAXB</a></li>
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
        <h1>JSP, Servlets, JAXB</h1>
	    
<h4 id="Inhalt">Links zu den Unterkapiteln</h4>
		<a href = #Kap1 style="color:white">1: Die Idee server-seitiger Skriptsprachen</a><br/>
		<a href = #Kap2 style="color:white">2: Java Server PagesJSP</a><br/>
		<a href = #Kap3 style="color:white">3: Ein JSP-Beispiel: Artikelverwaltung</a><br/>
		<a href = #Kap4 style="color:white">4: Java Servlets</a><br/>
		<a href = #Kap5 style="color:white">5: Ein Servlet-Beispiel: Artikelverwaltung</a><br/>
		<a href = #Kap6 style="color:white">6: Session-Handling</a><br/>
		<a href = #Kap7 style="color:white">7: Bilder dynamisch erzeugen und übertragen</a><br/>
		<a href = #Kap8 style="color:white">8: JSPs und Servlets im MVC / MVP</a><br/>
		<a href = #Kap9 style="color:white">9: Java Architecture for XML Binding JaxB</a><br/>
		<a href = #Kap10 style="color:white">10: Ein JaxB-Beispiel: Studentenverwaltung</a><br/>

		
<div class="textbox">
			<h2 id="Kap1">1 Die Idee server-seitiger Skriptsprachen</h2>
            <p>Die bisher bekannte Technologien...</br>• HTML unterstützt statische Seiten.</br>• CSS unterstützt das Layout im Web-Browser.</br>
				• JavaScript bietet mit DOM client-seitige Programmierung.</br>• CGI erlaubt eine server-seitige Anbindung für beliebige traditionelle 
				Programmiersprachen.</br>Probleme auf der Seite des Servers sind, dass</br>• die Web-Programmierung damit unbequem ist, da die CGI-Dateien nicht mit 
				HTML integriert sind,</br>• insbesondere da die Programmiersprachen ursprünglich nicht für dynamisches HTML entwickelt worden sind.</br>
				• Außerdem skaliert CGI schlecht, da für jeden Seitenaufruf ein neuer Prozess gestartet werden muss. <br/>

Server-seitige Skriptsprachen wurden speziell für dynamische Webseiten konzipiert:<br/>
• sie sind in die HTML-Seite eingebettet<br/>
• sie haben besondere Fähigkeiten zur Web-Programmierung<br/>
• sie haben eine schnelle Anbindung an einen Web-Server<br/>
• sie sind einfach zu <br/><br/>
Beispiele solcher server-seitiger Skriptsprachen sind:<br/>
• Java Server Pages (JSP)<br/>• PHP<br/>• Active Server Pages (ASP)<br/>• Ruby-on-Rails<br/>
• Cold-Fusion
		</p>
	</div>
        <div class="textbox">
		<h2 id="Kap2">2 Java Server Pages (JSP)</h2></br> 
		<h4>Was ist eine JSP-Datei?</h4>
            <p>• Java Server Pages (JSP) ist eine Web-Programmiersprache zur einfachen dynamischen Erzeugung von HTML- und XML-Ausgaben eines Web-Servers.<br/> • JSPs werden unter Verwendung eines speziellen JSP-Compilers in 
Java-Quellcode umgewandelt. <br/>&nbsp &nbsp • Dieser Quellcode, der einem Java Servlet entspricht, wird im Anschluss durch den Java-Compiler in Bytecode umgewandelt. <br/>&nbsp &nbsp • Die so erzeugten Java-Klassen können dann von einem mit einer Java-
Ausführungseinheit ausgestatteten Webserver ausgeführt werden.<br/> </br>• Ein Servlet ist eine Java-Klasse, die HTML-Code ausgibt: Geeignet für Backend-Entwickler!<br/> • Eine JSP-Datei ist eine HTML-Datei, die teilweise Java-Code enthält: 
Geeignet für Frontend-Entwickler!<br/><br/>
	
<h4>Zugriff auf HTML-Formularelemente</h4> • Formular-Parameter, die der Benutzer im HTML-Formular eingegeben hat, 
werden über request.getParameter(“name“); ausgelesen.</br>&nbsp &nbsp • Dieser Name muss exakt dem Namen im HTML-Formular entsprechen.
</br>&nbsp &nbsp • Dieser Parameter wird erstmal als Zeichenkette zurückgegeben.</br>&nbsp &nbsp • Handelt es sich um einen anderen primitiven Datentyp wie double, so 
muss er über eine Wrapper-Klasse konvertiert werden.<br/><br/>

<h4>Was ist eine JSP-Datei?</h4>
• Grundsätzlich lässt sich JSP als eine Art HTML-Seite mit zusätzlichen 
JSP-spezifischen Tags und Java-Code beschreiben. <br/>
• Da es sich bei einer JavaServer Page um eine dynamische Komponente 
handelt, kann diese aber auch gänzlich ohne statische Elemente 
auskommen. <br/>
• Auf diese Weise ist es möglich, über ein JSP-Dokument auch Binärdaten 
wie Bilder oder Töne zu erzeugen und an den Client zu senden.<br/>
• Eine JSP kann grob die folgenden Elemente enthalten:<br/>
&nbsp &nbsp • statischer Inhalt wie HTML, der Template Text<br/>
&nbsp &nbsp • JSP-Direktiven <br/>
&nbsp &nbsp • JSP-Skriptelemente <br/>
&nbsp &nbsp • JSP-Aktionen <br/>
&nbsp &nbsp • JSP-Tag-Bibliotheken (Tag Libraries) <br/> <br/>

<h4>Statischer Inhalt</h4>
 • Der statische Inhalt sind all jene Elemente, die vom Webserver in die 
HTTP-Response ohne Veränderung übernommen werden, </br>
z. B. HTML-Tags, aber auch JavaScript- und CSS-Code. </br>
• So wäre ein normales HTML-Dokument gänzlich ohne JSP-Elemente auch 
eine gültige JSP; denn JSP erlaubt es zwar, dynamische Daten in 
statischen Inhalt einzufügen, erzwingt dies aber nicht. </br>
• Daraus folgt, dass der Ersteller des statischen Inhalts keinerlei Java-
Kenntnisse benötigt.</br>
• Sobald HTML-Strukturen durch Java-Code erzeugt werden, geht die 
Verbindung jedoch verloren, und das Layout kann an diesen Stellen nur 
noch vom Programmierer geändert werden. </br></br>

<h4>JSP-Direktiven</h4>
• Eine Direktive dient zum Übermitteln von speziellen Seiteninformationen an 
den JSP-Compiler.</br>
&nbsp &nbsp • Dadurch kann man angeben, ob die JSP eine Tag-Library (kurz Taglib) 
einbindet oder wie im Fehlerfall weiter zu verfahren ist.</br>
• Die allgemeine Syntax für eine Direktive ist <%@ ... %>. </br></br>

• Folgende Direktiven (mit den verbreitetsten Attributen) sind vorhanden…</br>
• include</br>
&nbsp &nbsp • weist den JSP-Compiler an, den vollständigen Inhalt einer externen Datei 
in die Originaldatei zu kopieren. </br>
&nbsp &nbsp • Diese Einbettung geschieht zur „Translation Time“, also statisch einmalig 
mit der Übersetzung der JSP in ein Servlet.</br>
&nbsp &nbsp • <%@ include file="BeispielDatei.ext" %></br></br>

• page - import </br>
&nbsp &nbsp • generiert ein Java-Import-Statement in der Datei </br>
&nbsp &nbsp • <%@ page import="java.util.*" %></br></br>
• page - contentType </br>
&nbsp &nbsp • gibt die Art des Datei-Inhaltes an. </br>
&nbsp &nbsp • Sollte dann eingesetzt werden, wenn man kein HTML benutzt oder den 
Default-Zeichensatz nicht verwendet </br>
&nbsp &nbsp • <%@ page contentType="text/html" %> </br></br>

• page - errorPage </br>
&nbsp &nbsp • gibt die Seite an, die im Fehlerfall angezeigt werden soll </br>
&nbsp &nbsp • <%@ page errorPage="ErrorHandler.jsp" %> </br></br>
• page - isErrorPage </br>
&nbsp &nbsp • gibt an ob diese Seite eine Error-Page ist oder nicht; 
wenn ja, ist das exception-Objekt verfügbar </br>
&nbsp &nbsp • <%@ page isErrorPage=false %></br></br>

<h4>JSP-Standardvariablen</h4>
• Die folgenden Variablen können in jeder JSP verwendet werden;
Sie werden auch als implizite Objekte bezeichnet:</br></br>
• application </br>
&nbsp &nbsp • ist das globale Anwendungsobjekt; es lebt, solange der Server läuft. </br>
• out</br>
&nbsp &nbsp • der JSPWriter, der die Daten in den HTTP-Response-Stream schreibt </br>
• config</br>
&nbsp &nbsp • eine Konfigurationsschnittstelle </br>
• page</br>
&nbsp &nbsp • das Servlet selbst </br>

• pageContext</br>
&nbsp &nbsp • ist eine Instanz des PageContext, welche die Daten der gesamten Seite 
enthält </br>
• request</br>
&nbsp &nbsp • ist das HTTP-Request-Objekt, also die eingehende Anfrage vom Client an 
den Server.</br>
• response</br>
&nbsp &nbsp • ist das HTTP-Response-Objekt, also die ausgehende Antwort vom Server 
an den Client. </br>
• session</br>
&nbsp &nbsp • ist das HTTP-Session-Objekt. </br>
&nbsp &nbsp • Es kann dazu benutzt werden, um Information über den Benutzer von 
einem Request zum nächsten weiterzureichen. </br></br>

<h4>Deklarationen & Ausdrücke</h4>
• Deklarationen dienen zur Definition von Variablen und Methoden, die von 
anderen Elementen in der JSP verwendet werden können. </br>
&nbsp &nbsp • Deklarationen erzeugen keine Ausgabe innerhalb der JSP.</br>
&nbsp &nbsp • <%! int variableMeinerKlasse = 0; %></br></br>
• Ausdrücke werden dazu verwendet, Variablen oder Methoden direkt in den 
HTML- oder XML-Ausgabestrom zu integrieren.</br>
&nbsp &nbsp• Die Klassenvariable ist <%= variableMeinerKlasse %></br></br>

<h4>Skriptlets & Kommentare</h4>
• JSP-Skriptlets können zur Implementierung der Ablauflogik sowie der 
Erzeugung der HTML- oder XML-Ausgabe eingesetzt werden. Der Skriptlet-
Code wird in das generierte Servlet eingefügt.</br>
<% int variable = 0;&nbsp out.println &nbsp ("Der Wert der Variable ist: "+variable); %></br>
• Kommentare sind nur innerhalb der originalen JSP sichtbar, sie werden 
nicht in den Ausgabestrom geschrieben.
&nbsp &nbsp • <%-- Kommentar innerhalb einer JSP --%> </br></br>

<h4>JSP-Aktionen</h4>
• JSP-Aktionen sind XML-Tags, welche die eingebaute Funktionalität von 
Webservern einbinden. Unter anderem sind die folgenden Aktionen 
verfügbar…</br></br>
• jsp:include</br>
&nbsp &nbsp • Die angegebene JSP wird vom Java-Servlet aufgerufen, dabei werden der 
Request und der Response übergeben. </br>
&nbsp &nbsp • Ist die angegebene JSP abgearbeitet, kommt die Steuerung zur 
gegenwärtigen JSP zurück. </br>
&nbsp &nbsp • Diese JSP-Aktion bewirkt, dass der eingebettete JSP-Code von allen 
einbettenden JSPs gemeinsam genutzt und nicht kopiert wird:</br>
&nbsp &nbsp Der Code ist ohne & anzuwenden:</br>&nbsp &nbsp <&jsp:include page="mycommon.jsp"></br>
&nbsp &nbsp &nbsp &nbsp <&jsp:param name="extraparam" value="myvalue"/></br>
&nbsp &nbsp <&/jsp:include></br></br>
• jsp:forward </br>
&nbsp &nbsp • Der Request und der Response werden an eine andere JSP oder ein 
Servlet übergeben. </br>
&nbsp &nbsp • Die Steuerung kommt nicht zur gegenwärtigen JSP zurück.</br>
&nbsp &nbsp Der Code ist ohne & anzuwenden:</br>
&nbsp &nbsp <&jsp:forward page="subpage.jsp"></br>
&nbsp &nbsp &nbsp &nbsp <&jsp:param name="forwardedFrom" value="this.jsp"/></br>
&nbsp &nbsp <&/jsp:forward></br></br>

• jsp:setProperty
&nbsp &nbsp • Diese Aktion setzt ein Property in der definierten Java-Bean </br>
&nbsp &nbsp Der Code ist ohne & anzuwenden:</br>
&nbsp &nbsp <&jsp:setProperty name="myBean" property="lastChanged" value="<%= new Date()%>" /></br></br>
• jsp:getProperty </br>
&nbsp &nbsp • Diese Aktion holt sich ein Property von der definierten Java-Bean. </br>
&nbsp &nbsp <&jsp:getProperty name="myBean" property="lastChanged" /></br></br>
• jsp:useBean</br>
&nbsp &nbsp • Diese Aktion erstellt oder verwendet eine Java-Bean wieder. </br>
&nbsp &nbsp • Ist eine Bean vom definierten Typ nicht vorhanden, wird sie also initial neu 
erstellt. </br>
&nbsp &nbsp • Das optionale Attribut scope gibt an, wie lange die Bean zur Verfügung 
steht, d. h. in welchem Gültigkeitsbereich die Bean hinterlegt wird.</br>
&nbsp &nbsp • Folgende Werte können dabei definiert werden... </br></br>

<h4>Was ist eine Bean?</h4>
• Eine Java Bean ist eine gewöhnliche Java-Klasse, die sich jedoch an 
bestimmte Regeln hält:</br>
&nbsp &nbsp • Eine Bean besitzt einen öffentlich sichtbaren Standardkonstruktor 
(default constructor).</br>
&nbsp &nbsp • Der Name der Klasse endet auf „Bean“.</br>
&nbsp &nbsp • Die Klasse ist serialisierbar.</br>
&nbsp &nbsp  • Die Zugriffsmethoden auf die Eigenschaften (getter und setter) sind öffentlich sichtbar.</br>
&nbsp &nbsp  • Diese Regeln sind u.a. notwendig, damit Applicationserver Beans 
dynamisch per Reflection erzeugen und aus einer Datenbank befüllen können.</br>
&nbsp &nbsp  • Aufgrund dieser Eigenschaften eignen sich JavaBeans auch als Datenobjekte für Persistenz-Frameworks (Enterprise JavaBeans).</br></br>

<h4>JSP-Aktionen: Bean-Scopes</h4>
• request</br>
&nbsp &nbsp • Die Attribute sind nur solange verfügbar, wie der Request existiert. </br>
• page</br>
&nbsp &nbsp • Die Attribute sind nur für die gegenwärtige JSP verfügbar. (Standard)</br>
• session</br>
&nbsp &nbsp • Die Attribute sind nur solange verfügbar, wie die Benutzer-Session 
existiert.</br>
• application</br>
&nbsp &nbsp • Die Attribute sind immer verfügbar. </br>
&nbsp &nbsp Der Code ist ohne & anzuwenden:</br>
&nbsp &nbsp <&jsp:useBean id="myBean" </br>
&nbsp &nbsp &nbsp &nbsp &class="com.foo.MyBean" scope="session">     </br>
&nbsp &nbsp <&/jsp:useBean></br></br>

<h4>JSP-Aktionen: Bean-Scopes - Was heisst verfügbar?</h4>
• „Verfügbar“ heißt hier, wie lange bzw. von wo der Entwickler auf die Bean 
zugreifen kann. </br>
• Ist die Bean beispielsweise im Request-Scope, so kann der Entwickler mit 
dieser Bean sowohl innerhalb der aktuellen JSP als auch in nachgelagerten 
(inkludierten) arbeiten. </br>
• Page-Scope beschränkt den möglichen Zugriff auf die aktuelle JSP-Seite. </br>
• Session-Scope beschreibt alle Requests einer Benutzersitzung zu dieser 
Web-Anwendung. </br>
• Application-Scope sind alle Requests aller Benutzer der gleichen 
Web-Anwendung dieses Web-Servers.</br></br> 

<h4>HalloWelt-JSP</h4>

• Glassfish- oder TomCat-Server installieren und als Server in Eclipse 
integrieren.</br>
• Neues „dynamisches Web-Projekt“ anlegen.</br>
• Im Ordner WebContent eine neue JSP anlegen mit folgendem Code...</br>
<img src="JSPimages/F23-HalloWeltJSP.png" alt="CodeBeispiel" width="60%" height="40%" align="center"></br></br>


• Diesen Code auf dem Server ausführen und anzeigen lassen.</br>
• Eclipse ist auch ein Web-Browser!</br>
<img src="JSPimages/F24-HalloWeltJSP.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br></br>

• System.out ist der Server!</br>
<img src="JSPimages/F25-HalloWeltJSP.png" alt="CodeBeispiel" width="80%" height="60%" align="center"></br></br>

• Alternativ kann auch jeder andere Web-Browser verwendet werden...
<img src="JSPimages/F26-HalloWeltJSP.png" alt="CodeBeispiel" width="70%" height="60%" align="center"></br></br>

<h4>Was ist eine Bean?</h4>
• Eine Java Bean ist eine gewöhnliche Java-Klasse, die sich jedoch an 
bestimmte Regeln hält:</br>
&nbsp &nbsp • Eine Bean besitzt einen öffentlich sichtbaren Standardkonstruktor (default constructor).</br>
&nbsp &nbsp • Der Name der Klasse endet auf „Bean“.</br>
&nbsp &nbsp • Die Klasse ist serialisierbar.</br>
&nbsp &nbsp • Die Zugriffsmethoden auf die Eigenschaften (getter und setter) sind öffentlich sichtbar.</br>
• Diese Regeln sind u.a. notwendig, damit Applicationserver Beans dynamisch per Reflection erzeugen und aus einer Datenbank befüllen 
können.</br>
• Aufgrund dieser Eigenschaften eignen sich JavaBeans auch als Datenobjekte für Persistenz-Frameworks (Enterprise JavaBeans).</br></br>

		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			</p>
        </div>
       

	   <div class="textbox">
		<p>
		<h2 id="Kap3">3 Ein JSP-Beispiel:Artikelverwaltung</h2></br>
		
		<h4>Die Beispielaufgabe...</h4>			
• Es soll eine bestehende Artikelverwaltungsklasse mit einem 
Servlet-Frontend versehen werden. Dabei sollen <br/> 
&nbsp &nbsp • neue Artikel hinzugefügt,<br/> 
&nbsp &nbsp • der Artikelstamm von einer Datenquelle (Datenbank via JDBC/JPA, serialisierte Datei, CSV-Datei, XML-Datei) eingelesen,<br/> 
&nbsp &nbsp • der Artikelstamm in eine Datenquelle (Datenbank via JDBC/JPA, serialisierte Datei, CSV-Datei, XML-Datei) abgespeichert,<br/> 
&nbsp &nbsp • der Artikelstamm angesehen,<br/> 
&nbsp &nbsp • Artikel gesucht und<br/> 
&nbsp &nbsp • Artikel gelöscht werden können.<br/> <br/> 

<h4>Die Hauptseite</h4>
<img src="JSPimages/F30-Beispielaufgabe.png" alt="CodeBeispiel" width="70%" height="50%" align="center"></br></br>

<h4>Die Hauptseite</h4>
<img src="JSPimages/F31-Beispielaufgabe.png" alt="CodeBeispiel" width="70%" height="40%" align="center"></br></br>

<h4>Header & Footer</h4>
<img src="JSPimages/F32-Beispielaufgabe.png" alt="CodeBeispiel" width="70%" height="60%" align="center"></br></br>

<h4>Das Menu</h4>
<img src="JSPimages/F33-Beispielaufgabe.png" alt="CodeBeispiel" width="70%" height="60%" align="center"></br></br>

<h4>Tipp: Denken Sie ans Republishing!</h4>
<img src="JSPimages/F34-Beispielaufgabe.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>

<h4>Neuen Artikel anlegen</h4>
<img src="JSPimages/F35-Beispielaufgabe.png" alt="CodeBeispiel" width="80%" height="70%" align="center"></br></br>

<h4>Neuen Artikel anlegen</h4>
<img src="JSPimages/F36-Beispielaufgabe.png" alt="CodeBeispiel" width="70%" height="60%" align="center"></br></br>

<h4>Neuen Artikel anlegen: Das konkrete Anlegen über die Bean</h4>
<img src="JSPimages/F37-Beispielaufgabe.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Neuen Artikel anlegen: Weiterleitung auf die Artikelliste</h4>
<img src="JSPimages/F38-Beispielaufgabe.png" alt="CodeBeispiel" width="60%" height="50%" align="center"></br></br>

<h4>Alle Artikel auflisten</h4>
<img src="JSPimages/F39-Beispielaufgabe.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Alle Artikel auflisten</h4>
<img src="JSPimages/F40-Beispielaufgabe.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
 
 		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

 </p>
    
</div>
        
		
		
		<div class="textbox">
		<p>
		<h2 id="Kap4">4 Java Servlets</h2><br/> 
		
		<h4>Was sind Servlets?</h4>
• Als Servlets bezeichnet man Java-Klassen, deren Instanzen innerhalb eines Java Web-Servers Anfragen von Clients entgegen nehmen & 
beantworten.<br/> 
• Weiterhin sind sie Bestandteil aller Java-EE-Anwendungsserver. <br/> 
• Die Servlet-Komponenten müssen immer die Schnittstelle javax.servlet.Servlet oder eine davon abgeleitete implementieren.<br/> 
• Normalerweise wird eine Klasse erstellt, die von der Klasse javax.servlet.http.HttpServlet abgeleitet wird, welche wiederum 
javax.servlet.Servlet implementiert. <br/> 
• Der Inhalt der Antworten kann dabei dynamisch, also im Moment der Anfrage, erstellt werden und muss nicht bereits statisch in Form einer 
HTML-Seite verfügbar sein.<br/> 
• JSPs und Servlets werden wir uns als etablierte Basis-Technologien des Backends genauer ansehen!<br/> <br/> 

<h4>HTML-Formular, das ein Servlet aufruft</h4>
<img src="JSPimages/F43-JSPServlet.png" alt="CodeBeispiel" width="80%" height="90%" align="center"></br></br>

<h4>Das erste Servlet</h4>
<img src="JSPimages/F44-JSPServlet.png" alt="CodeBeispiel" width="80%" height="90%" align="center"></br></br>

<h4>Das erste Servlet</h4>
<img src="JSPimages/F45-JSPServlet.png" alt="CodeBeispiel" width="80%" height="90%" align="center"></br></br>

<h4>Das Java-Servlet: Interaktion</h4>
<img src="JSPimages/F46-JSPServlet.png" alt="CodeBeispiel" width="80%" height="90%" align="center"></br></br>

<h4>Neue Servlets in Eclipse</h4>
• Fügen Sie nie ein Servlet über File->New->Class in den Eclipse-Workspace ein.</br>
&nbsp &nbsp • Dieses Servlet wird dann nicht als Servlet registriert!</br>
• Das Servlet wird nur dann ordnungsgemäß registriert, wenn Sie es in 
Eclipse über File->New->Other->Servlet anlegen!</br></br>

<h4>Funktionsweise eines Servlet-Aufrufs</h4>
<img src="JSPimages/F48-JSPServlet.png" alt="CodeBeispiel" width="100%" height="90%" align="center"></br></br>

<h4>HTML & Servlets</h4>
• Statt System.out.println wird bei einem Servlet in den HTTP-Ausgabestrom out geschrieben, um dem Client zu antworten.</br>
&nbsp &nbsp • Dieser ist identisch zu dem JSPWriter out.</br>
&nbsp &nbsp • System.out.println schreibt auf die Konsole des Servers!</br>
• Aus Sicht von Java ist der gesamte HTML-Code eine Zeichenkette. </br>
&nbsp &nbsp • Dies gilt auch für JavaScript- und CSS-Code, der zum Client gesendet wird.</br>
• Die Interaktion verläuft ggf. über mehrere Servlets und/oder statische HTML-Dateien, die sich gegenseitig über Links und/oder Formulare 
aufrufen.</br></br>

		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>
</p>
</div>


<div class="textbox">
		<p>
		
<h2 id="Kap5">5 Ein Servlet-Beispiel: Artikelverwaltung</h2></br>

<h4>Die Hauptseite</h4>
<img src="JSPimages/F51-Servletbsp.png" alt="CodeBeispiel" width="80%" height="70%" align="center"></br></br>

<img src="JSPimages/F52-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<img src="JSPimages/F53-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Header & Footer im Framework</h4>
<img src="JSPimages/F54-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Das Menu im Framework</h4>
<img src="JSPimages/F55-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Die Hauptseite</h4>
<img src="JSPimages/F56-Servletbsp.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br></br>

<h4>Neuen Artikel anlegen</h4>
<img src="JSPimages/F57-Servletbsp.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br></br>

<img src="JSPimages/F58-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<h4>Neuer Artikel anlegen: Das konkrete Anlegen über die Bean</h4>
<img src="JSPimages/F59-Servletbsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

<img src="JSPimages/F60-Servletbsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

<h4>Neuer Artikel anlegen: Weiterleitung auf die Artikelliste</h4>
<img src="JSPimages/F61-Servletbsp.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

<h4>Alle Artikel auflisten</h4>
<img src="JSPimages/F62-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<img src="JSPimages/F63-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

<img src="JSPimages/F64-Servletbsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

</p>
  </div>
		
		
        <div class="textbox">
            <p>
			<h2 id="Kap6">6 Session-Handling</h2></br>
			
		<h4>Was ist nochmal eine Session?</h4>
• Eine Session bezeichnet in der EDV eine stehende Verbindung eines Clients mit einem Server. </br>
• Den Anfang einer Sitzung bezeichnet man als Login, das Ende als Logout.</br>
• Problem: HTTP ist zustandslos; es existiert keine stehende Verbindung zwischen Client und Server. </br>
&nbsp &nbsp • Nachdem die Antwort auf eine Anfrage erfolgte, ist der Client für den Server wieder anonym. </br>
• Wie kann man nun dafür sorgen, dass der Server den Client länger kennt? </br>
&nbsp &nbsp • Überträgt man alle betreffenden Informationen auf den Client, so könnten Sie manipuliert werden! </br>
&nbsp &nbsp • Die Kontrolle muss also beim Server bleiben!</br></br>

<h4>Wie kann man eine Session realisieren?</h4>
• In der Praxis wird z.B. nach einem Login ein eindeutiger Identifier vom Server zum Client gesendet, der dort bleibt. </br>
&nbsp &nbsp • Dieser Identifier wird normalerweise in Form eines Cookies verwaltet. </br>
&nbsp &nbsp • Der Identifier bekommt dort einen Namen und kann vom Internet-Browser des Clients verwaltet werden. </br>
&nbsp &nbsp • Sendet der Client einen HTTP-Request an den Server, so wird der Identifier mitgesendet. </br>
&nbsp &nbsp • Der Server kann also bei einer Anfrage die Existenz dieses Identifiers prüfen und ihm somit einem Kontext (z.B. einem Warenkorb) zuordnen.</br>

<h4>Die erste HTML-Datei führt zu einem Servlet...</h4>
<img src="JSPimages/F68-Sessionhandling.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

<img src="JSPimages/F69-Sessionhandling.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

	
<h4>Mit dem Servlet beginnt die Session...</h4>
		<img src="JSPimages/F70-Sessionhandling.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

		<img src="JSPimages/F71-Sessionhandling.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
	
<h4>Mit dem Servlet beginnt die Session und es kommen Daten hinzu...</h4>
		<img src="JSPimages/F72-Sessionhandling.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

<h4>Alle Daten können über die Sessionweiterhin verwendet werden!<h4>
		<img src="JSPimages/F73-Sessionhandling.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
		
		<img src="JSPimages/F74-Sessionhandling.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
		
		<img src="JSPimages/F75-Sessionhandling.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

<h4>Sehr ähnlich gehts mit JSPs!</h4>
• In den JSPs ist das HTTP-Session-Objekt ja schon als Standard-Variable session verfügbar.</br>
&nbsp &nbsp • Eine session-basierte Anwendung ist daher auch unter Verwendung von JSPs realisierbar.</br>
&nbsp &nbsp • Ebenso ist eine Mischung aus JSPs und Servlets möglich:</br>
• Beide Sprachen verwenden denselben Server, und die Session-Verwaltung obliegt dem Server! </br>
&nbsp &nbsp • Derselbe User im Frondend erzeugt also im Backend nur eine Session, die sowohl mit JSPs, als auch mit Servlets beliebig aufgerufen und/oder 
verändert werden kann.</br>
&nbsp &nbsp • Dies gilt übrigens auch für den Application-Kontext, der ja auch in einer JSP über die Standard-Variable application zugreifbar ist. </br>
&nbsp &nbsp &nbsp &nbsp • JSPs und Servlets können also auch dieselbe ArtikelverwaltungsBean avb verwenden!	</br></br>	

		<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>
			
			
			</p>
        </div>
        
	<div class="textbox">
        <p>
		<h2 id="Kap7">7 Session-Handling</h2></br>

		<h4>Bilder in einer HTML-Datei</h4>
• Wenn Sie statische Bilder wie JPG-, GIF- oder PNG-Dateien über ein Servlet übertragen wollen, so fügen Sie einfach den entsprechenden 
HTML-Befehl <img src=... /> in den Ausgabestrom ein.</br>
• Der Web-Browser des Clients interpretiert die Referenz auf das Bild, welches sich noch auf dem Server befindet. </br>
• Daraufhin startet der Client einen neuen HTTP-Request, der das Bild vom Server anfordert. </br>
• Sobald das Bild als HTTP-Response, z.B. mit Content-Type: image/jpeg, angekommen ist, so wird es in den 
Kontext der HTML-Seite eingebunden und dargestellt.</br></br>
		
		<h4>Bilder dynamisch erzeugen: Das HTML-Formular</h4>
		<img src="JSPimages/F79-Bilddynamisch.png" alt="CodeBeispiel" width="60%" height="70%" align="center"></br></br>

		<h4>Bilder dynamisch erzeugen: Das HTML-Formular & die Antwort</h4>
				<img src="JSPimages/F80-Bilddynamisch.png" alt="CodeBeispiel" width="70%" height="70%" align="center"></br></br>
	
		<h4>Bilder dynamisch erzeugen: 	Das bild-generierende Servlet</h4>
		<img src="JSPimages/F81-Bilddynamisch.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
		<img src="JSPimages/F82-Bilddynamisch.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

					<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			
			</p>
        </div>
    
	
		
		<div class="textbox">
        <p>
		<h2 id="Kap8">8 JSPs und Servlets im MVC / MVP</h2></br>
		
		<h4>MVC mit JSPs und Servlets</h4>
		<img src="JSPimages/F84-JSPMVC.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

		<h4>MVC mit JSPs und Servletsversus Struts</h4>

• Die MVC-Realisierung mittels JSPs und Servlets wird als Model-1-Architektur beschrieben.</br>
&nbsp &nbsp • Die JSPa können jedoch unüberschaubar werden und setzen Entwickler voraus, die sowohl HTML- als auch Java-Kenntnisse besitzen. </br>
&nbsp &nbsp • Zwar mildert die Verwendung von Tag-Bibliotheken wie JSTL dieses Problem etwas, weil kein Java-Code mehr benötigt wird. </br>
&nbsp &nbsp • Das konzeptionelle Grundproblem der Vermischung von Präsentation mit fachlicher Funktionalität bleibt jedoch bestehen.</br>
• Aus diesen Nachteilen entstand die Model-2-Architektur für Webanwendungen, die ihren Einsatz im Struts-Framework gefunden hat.</br></br>
		
				<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

		</p>
        </div>
	
		
		<div class="textbox">
            <p>
			<h2 id="Kap9">9 Java Architecture for XML Binding JaxB</h2></br>

			<h4>Was ist JaxB?</h4>

• Java Architecture for XML Binding (JaxB) ist eine Programmschnittstelle in Java, die es ermöglicht, Daten 
aus einer XML-Datei heraus automatisch an Java-Klassen zu binden und aus XML-Datensätzen Java-Objekte zu 
erzeugen und umgekehrt.</br>
• Diesen Vorgang nennt man XML-Datenbindung.</br>
• Somit ist ein Arbeiten mit XML-Dokumenten möglich, ohne dass der Programmierer direkt die Parser-Schnittstellen zur Verarbeitung von XML 
(SAX oder DOM) verwenden muss.</br>
• JAXB 2.0 ist Teil der Java Platform, Enterprise Edition 5.0 und der Standard Edition 6.0.</br></br>
		
		<h4>Java-Objekte <-> XML</h4>

• Marshalling bedeutet die Generierung eines XML-Dokumentes aus einem Baum von Java-Objekten. </br>
&nbsp &nbsp • Dies ist eine spezielle Form der Serialisierung. </br>
&nbsp &nbsp • Anwendungsfälle für diese Umwandlung sind beispielsweise Persistierung in einer Datei oder Übertragung über ein Netzwerk. </br>
• Der umgekehrte Weg heißt Unmarshalling als spezielle Form der Deserialisierung. </br>
&nbsp &nbsp • Hierbei wird aus einem gegebenen XML-Dokument wieder ein Baum von Java-Objekten generiert. </br>
		<img src="JSPimages/F88-JavaXML.png" alt="CodeBeispiel" width="50%" height="60%" align="center"></br></br>

		
				<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

		</p>
        </div>
	
	
	
		<div class="textbox">
            <p>
			<h2 id="Kap10">10 Ein JaxB-Beispiel: Studentenverwaltung</h2></br>

		<h4>Eine Studentenverwaltung...</h4>
• Eine Studentenverwaltung verwaltet beliebig viele Studenten. </br>
• Jeder Student hat einen Namen, einen Vornamen, eine Matr.Nr. und eine beliebig lange Liste von Veranstaltungen. </br>
• Die Daten der Studentenverwaltung sollen als XML-Datei exportiert werden können. </br>
• Zusätzlich soll der Datenstamm wieder in eine Studentenverwaltung importiert werden können.</br></br>

		<h4>Der Student</h4>
		<img src="JSPimages/F91-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>
		<img src="JSPimages/F92-JaxBBsp.png" alt="CodeBeispiel" width="50%" height="60%" align="center"></br></br>
		<img src="JSPimages/F93-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>


		<h4>Die Veranstaltung</h4>
		<img src="JSPimages/F94-JaxBBsp.png" alt="CodeBeispiel" width="50%" height="60%" align="center"></br></br>
		<img src="JSPimages/F95-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>


		<h4>Die Verwaltungsklasse</h4>
		<img src="JSPimages/F96-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

			<h4>Test zum Schreiben</h4>
		<img src="JSPimages/F97-JaxBBsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>
		<img src="JSPimages/F98-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

			<h4>Test zum Schreiben: Die Konsolenausgabe</h4>
		<img src="JSPimages/F99-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

			<h4>Test zum Schreiben: Die Ausgabe als XML-Datei</h4>
		<img src="JSPimages/F100-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>

		
			<h4>Test zum Lesen</h4>
		<img src="JSPimages/F101-JaxBBsp.png" alt="CodeBeispiel" width="70%" height="80%" align="center"></br></br>
		<img src="JSPimages/F102-JaxBBsp.png" alt="CodeBeispiel" width="80%" height="80%" align="center"></br></br>

			<h4>Test zum Lesen: Die Konsolenausgabe</h4>
		<img src="JSPimages/F103-JaxBBsp.png" alt="CodeBeispiel" width="60%" height="60%" align="center"></br></br>

				<a href = #Inhalt style="color:white">Zurück zum Anfang</a><br/>

			</p>
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
