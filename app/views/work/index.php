<h2 id="intro" title="You like to read between the lines, huh?">
	Hi there! Welcome to my portfolio. Below you can see a few examples of cool things I've worked on. You can also find out a little more about me or get in touch, if you fancy&nbsp;it.
</h2>

<section id="project_list">
    
    <?php foreach ($project_handles as $project_handle) : ?>
    <div class="project_link" id="<?php echo $project_handle; ?>_link">
        <a href="/work/show/<?php echo $project_handle; ?>">
            <h2><?php echo Lang::get('projects.'.$project_handle.'_name'); ?></h2>
            <h3><?php echo Lang::get('projects.'.$project_handle.'_client'); ?></h3>
        </a>
    </div>
    <?php endforeach; ?>

    <?php /* <div id="side_projects">
	    <h2 title="Things wot I built out of boredom or annoyance, mostly.">
			Experiments and Side Projects
		</h2>

		<p>
			From time to time I find the time to fiddle about and make something useful or interesting. These are some of those&nbsp;things.
		</p>

		<div class="buttons">
			<div>
				<a href="/spotify" id="spotify_button" class="button" title="Get right with Spotify URIs">Spotify URI Converter</a>
			</div>

			<div>
				<a href="/spotify" id="spotify_button" class="button" title="Get right with Spotify URIs">Republic FM</a>
			</div>

			<div>
				<a href="/spotify" id="spotify_button" class="button" title="Get right with Spotify URIs">Fire drop animation</a>
			</div>
		</div>
	</div> */ ?>
    
</section>

<?php echo View::make('partials._about_link'); ?>
<?php //echo View::make('partials._side_projects'); ?>
<?php echo View::make('partials._contact'); ?>