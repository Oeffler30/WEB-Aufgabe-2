<?php include_once('header_php.php'); ?>
<title>Kontakt</title>
<?php include_once('header2_php.php'); ?>
<?php include 'form_handler.php'; ?>

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
                        <li><a href="nodejs.php">NodeJS</a></li>
                        <li id="current"><a href="kontakt.php">Kontakt</a></li>
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
            <h1>Kontakt</h1>


            <div class="textbox">
                <h2>Zuletzt gesehen: <span id="info"></span></h2>
            </div>

            <div class="textbox">
                <form action="" method="post" id="datenformular">
                    <fieldset>
                        Felder, die mit <span class="rot">*</span> gekennzeichnet sind, sind Pflichtfelder!<br>
                    </fieldset>
                    <fieldset>
                        <legend>Ihre Kontaktdaten</legend>
                        Vorname: <input type="text" id="vname" name="vorname"><br>
                        Nachname: <input type="text" id="nname" name="nachname"><br>
                        E-Mail<span class="rot">*</span>: <input type="text" id="mail" name="email" required><br>
                        Anliegen<span class="rot">*</span>:<br>
                        <input type="radio" name="anliegen" value="informationen">Informationsanfrage<br>
                        <input type="radio" name="anliegen" value="verbesserung">Verbesserungsvorschlag<br>
                        <input type="radio" name="anliegen" value="anderes">Anderes<br>
                        <textarea id="message" name="text"></textarea>
                        <input type="submit" name="submit" value="Absenden">
                    </fieldset>
                </form>
            </div>
            <div class="textbox">

<?php include_once('footer_php.php'); ?>