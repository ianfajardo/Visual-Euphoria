$("#gallery-menu-trigger").click(function(){var i=$(".gallery-menu");i.is(":visible")?i.slideUp("slow"):i.slideDown("slow")}),$("#menu-icon").on("click",function(){$(".navigation").toggle()}),$(window).on("resize",function(){$(window).width()>992?$(".navigation").show():$(".navigation").hide()});