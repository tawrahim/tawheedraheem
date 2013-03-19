$(document).ready(function() {
	$(".nav-text").hide();

	$(".nav-headline").hover(function() { 
	    var text = $($(this).siblings()[0]).html();
	    $("#nav-current-text").hide().html(text).fadeIn('medium');
	    window.scrollTo(0, 9999);
	}, function() {
	});

	$("#title").mouseover(function() {
	    $("#nav-current-text").html("");
	});
    });


var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20960517-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

try{ 
	clicky.init(66541617);
}catch(e){}
