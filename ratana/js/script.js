$(document).ready(function() {
    $("a.top_menu").each(function() {
        // checks if its the same on the address bar
        var url = window.location.href;
        if (url == (this.href)) {
            $(this).addClass("active");
            return false;
        }
    });
    var menu = $("a.nav_text.active").attr("menu");
    $("a.top_menu").each(function() {
        var name = $(this).attr("menu");
        if (name.indexOf(menu) >= 0) {
            $(this).addClass("active");
            return false;
        }
    });


});

