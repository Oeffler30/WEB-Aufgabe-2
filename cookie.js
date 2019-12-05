(function start() {

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

    function init() {
        var user=getCookie("webHSMA");
        var cookieMessage = document.getElementById('cookie-message');
		var titel = document.title;
		setCookie("webHSMA", titel, 365);
			
        if (user != "") {
			cookieMessage.style.display = 'none';
            var ausgabe = document.getElementById('info');
            ausgabe.innerHTML = user;
        } else {
            //openPopUp
            cookieMessage.style.display = 'block';
            
            var ausgabe = document.getElementById('info');
            ausgabe.innerHTML = "Sie sind zum ersten Mal auf unserer Seite, viel Spaß beim Lernen";
			var titel = document.title;
            setCookie("webHSMA", titel, 365);
        }
    }

    window.addEventListener('DOMContentLoaded', init);

})();


function hide(){
	   var cookieMessage = document.getElementById('cookie-message');
	   cookieMessage.style.display = 'none';
    }