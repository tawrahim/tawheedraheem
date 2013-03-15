<!doctype html>
<html>
    <head>
	<meta name="google-site-verification" content="e6XS2fQy7YKgfq8tkMLZx_GFJq8E1cfqsIvI8Daswec" />
        <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection"> 
        <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print"> 
        <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]--> 
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"> 
        <link rel="stylesheet" href="css/fonts/fonts.css" type="text/css" media="screen, projection"> 
        <title>Tawheed Abdul-Raheem</title>
        <link href="/asset/tawheed.jpeg" rel="Shortcut Icon" type="image/x-icon" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <script>

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

        </script>
        <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-20960517-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        </script>

		<script src="//static.getclicky.com/js" type="text/javascript"></script>
		<script type="text/javascript">try{ clicky.init(66541617); }catch(e){}</script>
		<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66541617ns.gif" /></p></noscript>

    </head>
    <body>
        <div class="container">
            <div id="title" class="span-24 last chunk">
                <div id="tawheed">Tawheed A. Raheem</div>
                <div id="developer">I'm a <a href="https://github.com/tawrahim" target="_blank">developer</a></div>
                <div id="educator">and an <a href="http://www.raheemacademy.appspot.com" target="_blank">educator.</a></div>
            </div>
           <div id="nav" class="museo-sans span-24 last">
                    <div class="span-5 prepend-1">
                        <div class="nav-headline"><a href="about.php">About</a></div>
                        <div class="nav-text">A little note about me!</div>
                    </div>
                    <div class="span-6">
                        <div class="nav-headline"><a href="https://github.com/tawrahim" target="_blank">Projects</a></div>
                        <div class="nav-text">Projects that I am working on.</div>
                    </div>
                    <div class="span-6">
                        <div class="nav-headline"><a href="http://tawheedraheem.tumblr.com/" target="_blank">Blog</a></div>
                        <div class="nav-text">More like a journal...</div>
                    </div>
                    <div class="span-5 last">
                        <div class="nav-headline"><a href="http://raheemacademy.appspot.com" target="_blank">Teaching</a></div>
                    <div class="nav-text">I teach my cousins how to code in python.</div>
                    </div>
                    <div class="span-23 prepend-1 last" id="nav-current">
                        <div id="nav-current-text"></div>
                    </div>
                </div>
        </div>
    </body>
</html>
