<div id="topnav-container">
	<div class="row">
		<div class="small-12 columns">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name"></li>
		            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		        </ul>
		     	<section id="nav-container" class="contain-to-grid top-bar-section">
					<?php if ( has_nav_menu( 'primary-menu' ) ) { wp_nav_menu(array('container' => '', 'theme_location' => 'primary-menu', 'menu_class' => 'left', 'walker' => new themeslug_walker_nav_menu() )); } ?>
					<ul class="right">
						<li class="has-form">
							<div class="row collapse">
								<div class="large-12 small-12 columns">
									<?php get_search_form( true ); ?>
								</div>
							</div>
						</li>
					</ul>
				</section>
			</nav>				
		</div>
	</div>	
</div>
