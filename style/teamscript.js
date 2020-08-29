$(document).ready(function() {
    "use strict";
	$(".team-list").on("click", "a", function(a) {
        a.preventDefault();
        var e = $(this).data("team");
        $(".team-single").removeClass("active"), $(".team-list li").removeClass("active"), $("#" + e).addClass("active"), $(this).parent().addClass("active")
    });
	
});