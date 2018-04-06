<?php get_template_part('content','header'); ?>
<?php the_post(); ?>

<main id="faq">
	<section>
		<div class="container">
			<h1>FAQ</h1>

		<?php 
			$faq_query = array(
				'numberposts' => -1,
				'post_status' => 'publish',
				'post_type'	=> 'faq',
				'orderby'=>'menu_order',
				'order'=>'ASC'
			);		
			$faq = get_posts($faq_query);
			foreach ($faq as $group){ ?> 
				
				<article>
					<div class="question"><span><?php echo $group->post_title; ?></span></div>
					<div class="answer"><?php echo apply_filters('the_content',$group->post_content); ?></div>
				</article>

			<? } ?>

		</div>		
	</section>
	
</main>

<?php get_template_part('content','footer'); ?>