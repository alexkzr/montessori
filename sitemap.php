<div class="siteMap">
	<div class="container">
		<h2>Меню по сайту:</h2>
		<div class="tag-cloud">
			<?php
			wp_nav_menu( 
				$menuParameters = array(
				'theme_location'  => '',
				'menu'            => 'Secondary', 
				'container'       => '', 
				'echo'            => false,
				'items_wrap'      => '%3$s',
				'depth'           => 0,
				'walker'          => '',
				));
				echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
				?>
		</div>
	</div>
</div>
