document.addEventListener("DOMContentLoaded", function () {
    function scroll_set_header() {
        var threshold = 65;
        var st = document.documentElement.scrollTop;

        if (window.innerWidth > 768) {
            var header = document.querySelector("#header");

            if (st > threshold) {
                header.setAttribute("class", "header_scroll_collapsed");
            } else if (header.classList.contains("header_scroll_collapsed")) {
                    header.setAttribute("class","");
            }
        }
    }

    window.addEventListener('scroll', function () {
        scroll_set_header();
    });
    window.addEventListener('resize', function () {
        scroll_set_header();
    });

    var icon = document.querySelector(".icon");
    icon.addEventListener("click", function () {
        var header = document.querySelector("#header");
        var content = document.querySelector(".content-container");
        var nav = document.querySelector("#nav");

        if(header.classList.contains("not-collapsed")
        && content.classList.contains("not-collapsed")
        && nav.classList.contains("not-collapsed")){
            header.setAttribute("class", "");
            content.setAttribute("class", "content-container");
            nav.setAttribute("class", "");
        } else {
            header.setAttribute("class", "not-collapsed");
            nav.setAttribute("class", "not-collapsed");
            content.setAttribute("class", "content-container not-collapsed");
        }
    })
});