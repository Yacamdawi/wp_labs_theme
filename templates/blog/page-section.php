	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<?php
					$args = [
						'post_type' => 'post',
						'paged' => $paged
					];
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$query = new WP_Query($args);
					while ($query->have_posts()) : $query->the_post();
						get_template_part('content', get_post_format());
					endwhile;
					?>
					<div class="page-pagination">
						<?php
						echo paginate_links(array(
							'format'  => 'page/%#%',
							'current' => $paged,
							'total'   => $query->max_num_pages,
							'prev_text'       => __('&laquo; Précedent'),
							'next_text'       => __('Suivant &raquo;')
						));
						?>
					</div>
				</div>
				<!-- Sidebar area -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
	<!-- page section end-->