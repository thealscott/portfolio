<h2 id="intro" title="You like to read between the lines, huh?">
	Sick and tired of having to manually construct Spotify URIs when an HTTP link opens in the web player? Then you are in the right place!
</h2>

<section>
    
	<h2>
		Spotify URI Converter
	</h2>

	<p>
		For reasons unknown to mankind, HTTP links for Spotify <a href="http://open.spotify.com/user/alscott/playlist/4hFkuhNtPi07LgibIrXrg7" target="blank" title="HipHop-o-cratic Oath">(like&nbsp;this)</a> always try to open the web player, even if you have the native app. This bookmarklet will convert the URL into a Spotify URI and attempt to open it in the native&nbsp;app.
	</p>

	<h3>Drag this link to your bookmarks</h3>

	<a href="javascript:{var%20pathArray=window.location.pathname.split('/');var%20newPathname="spotify";for(i=1;i<pathArray.length;i++){newPathname+=":";newPathname+=pathArray[i];}window.location.replace(newPathname);};void(0);" 
		class="button large_button"
		title="Spotify URI">
		Spotify URI
	</a>
    
</section>