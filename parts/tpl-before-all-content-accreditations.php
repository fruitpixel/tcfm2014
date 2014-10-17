
<div class="row">
	<div class="small-12 columns">
		<nav class="breadcrumbs" role="navigation" aria-label="breadcrumbs">
		    <li role="menuitem"><a href="/about-us/">About us</a></li>
		    <?php if ( have_posts() ) : ?>
				<?php while( have_posts() ) : the_post(); ?>
		    		<li role="menuitem" class="current"><?php the_title(); ?></li>
		    	<?php endwhile; ?>
		    	<?php rewind_posts(); ?>
			<?php endif; ?>
		</nav>
	</div>
</div>



