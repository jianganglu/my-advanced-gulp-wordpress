<?php
/*
 *Template Name: page1
 */
get_header_custom(array(''), 'page1');
?>

<div id="page1-content" class="container">
	<div class="col-xs-2">
		<?php require_once('sidebar.php'); ?>
	</div>
	<div class="col-xs-10">
		<div class="row" id="content-text">
			<ul>
			<?php
				$postargs = call_gen_posts($slug, $page_gen);
				//获取分页数据
				$paged = get_query_var('paged');
				//当前为第几页
				$postargs["paged"] = $paged;
				$postargs["posts_per_page"] = 2;
				$post_lists = new WP_Query($postargs);
			
				while($post_lists->have_posts()) {
					$post_lists->the_post();
			?>
				<li>
					<a href="<?php the_permalink(); ?>"><?php the_title();?>
						<span><?php the_time("Y-m-d"); ?></span>
					</a>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
		<div id="wp_pagenavi">	
			<?php
				if ($post_lists->have_posts()) {
					if (function_exists('wp_pagenavi')) {
						wp_pagenavi(array('query' => $post_lists));
					}
					wp_reset_query();
				}
			?>
		</div>
	</div>
</div><!-- .site-content -->

<?php get_footer(); ?>

<script src="<?php get_themes_url('/build/js/view/fixNav.js'); ?>"></script>
