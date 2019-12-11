(function start() {

    function init() {
        var user=getCookie("webHSMA");
        var cookieMessage = document.getElementById('cookie-message');
		var titel = document.title;
			
        if (user != "") {
			cookieMessage.style.display = 'none';
            var ausgabe = document.getElementById('info');
			acceptCookie();
	    var link = document.createElement("a");
	    var infoText = user;
	    	if(user == "HTML") {
			user = "html5";
		} else if(user == "CSS") {
			user = "css3";
		} else if(user == "JSP, Servlets, JAXB") {
			user = "jsp_servlets_jaxb";
		} else if(user == "WEB Grundlagen") {
			user = "grundlagen";
		} else if(user == "Startseite") {
			user = "index";
		} else if(user == "Javascript (2)") {
			user = "javascript2";
		} else if(user == "Javascript") {
			user = "javascript";
		} else if(user == "PHP") {
			user = "php";
		} else if(user == "NodeJS") {
			user = "nodejs";
		} else if(user == "Datenschutz") {
			user = "datenschutz";
		} else if(user == "Impressum") {
			user = "Impressum";
		}
            
            
	    var linkText = user.toLowerCase() + ".html"
	    link.setAttribute("href", linkText);
	    var text = link.href;
	    var textNode = document.createTextNode(infoText);
	    link.appendChild(textNode);
	    ausgabe.appendChild(link);
        } else {
            //openPopUp
            cookieMessage.style.display = 'block';          
            var ausgabe = document.getElementById('info');
            ausgabe.innerHTML = "Wir haben bisher keine Informationen zu Ihren Besuch Gespeichert.";
        }
    }

    window.addEventListener('DOMContentLoaded', init);

})();


function hide(){
    var cookieMessage = document.getElementById('cookie-message');
    cookieMessage.style.display = 'none';
}

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function acceptCookie() {
    var cookieMessage = document.getElementById('cookie-message');
    cookieMessage.style.display = 'none';
    var titel = document.title;
    setCookie("webHSMA", titel, 365);
}
