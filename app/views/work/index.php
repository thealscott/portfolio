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
    
</section>

<?php echo View::make('partials._about_link'); ?>
<?php echo View::make('partials._contact'); ?>