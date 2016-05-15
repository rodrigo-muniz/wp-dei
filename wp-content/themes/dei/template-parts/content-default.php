<div id="main-content" class="col-sm-12 col-md-8 col-lg-8">
	<div class="row page-content-wrapper body-content">
		<div class="page-content">
			<div class="content">
				<div class="col-md-offset-1 col-md-11 col-lg-offset-2 col-lg-9">
					<div class="page-content-text">
						<span class="first-letter visible-lg"></span>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
						endwhile; else: ?>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<?php endif; ?>
					</div>		
				</div>
			</div>

			<!-- <script src="js/home.js"></script> -->

		</div>
	</div>
</div>