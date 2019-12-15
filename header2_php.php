<?php

    echo '<script src="cookie.js"></script>
    <style>
        ul { 
            padding-left: 1em;
        }
    </style>
</head>
<body>
    <script>
        document.body.className = document.body.className + " js_enabled";
    </script>

    <div id="header">
        <!-- Cookie Banner -->
        <div id="cookie-message">
            <p>
                Diese Webseite benutzt einen Cookie um dir eine individualisierte Webseite präsentieren zu können.
                <a href="datenschutz.html" title="View our Cookie Policy">Finde mehr heraus über Cookies und Datenschutz</a>
            </p>
            <form>
                <input id="knopf" type="button" value="Nicht Einverstanden" onclick="hide()">
                <input id="knopf" type="button" value="Einverstanden" onclick="acceptCookie()">
            </form>
        </div>
        <div id="header-image"></div>';

?>