<script src="//vjs.zencdn.net/4.2/video.js"></script>
<script type="text/javascript">
// todo: clean this up and implement in a more robust way
// This serves to set a minimum display time for the loading state.
// if the onload event fires before 1s, it will add a 1s delay.
var tooQuick = true;

setTimeout(function(){
	tooQuick = false;
}, 500);

window.onload = function(){
	if (tooQuick) {
		setTimeout(function(){
			html.classList.remove('loading');
			html.classList.add('loaded');
		}, 500);
	}
	else {
		html.classList.remove('loading');
		html.classList.add('loaded');
	}
}
</script>