<div id="topnav-container">
	<div class="row">
		<div class="small-12 columns">
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name"></li>
		            <li class="toggle-topbar"><a href="#"> </a></li>
		        </ul>
		     	<section id="nav-container" class="contain-to-grid top-bar-section">
					<?php if ( has_nav_menu( 'primary-menu' ) ) { wp_nav_menu(array('container' => '', 'theme_location' => 'primary-menu', 'menu_class' => 'left' )); } ?>
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
