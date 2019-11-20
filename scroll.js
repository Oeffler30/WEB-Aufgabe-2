document.addEventListener("DOMContentLoaded", function () {
    //wait until document is fully loaded
    function scroll_set_header() {

        //set the threshold when this function shall do something
        var threshold = 65;
        //get the vertical scrollbar position in this document
        var st = document.documentElement.scrollTop;

        if (window.innerWidth > 578) {// if the device is a phone, don't do anything with the header

            //select the header
            var header = document.querySelector("#header");

            // if the scrollbar is beyond 65 px, add the collapsed class
            if (st > threshold) {
                header.setAttribute("class", "header_scroll_collapsed");
            } else if (header.classList.contains("header_scroll_collapsed")) {
                    //but if it already has the collapsed class, remove it
                    header.setAttribute("class","");
            }
        }
    }

    //now do it every time the user scrolls or resizes window
    window.addEventListener('scroll', function (event) {
        scroll_set_header();
    });
    window.addEventListener('resize', function () {
        scroll_set_header();
    });
});