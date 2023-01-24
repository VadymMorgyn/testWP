<?php 
/*TempLate Name: home
*/
?>
<?php get_header(); ?>
<div class="page">
	<section class="testimonials container_testimonials">
		<div class="title">
			<h2>Testimonials</h2>
			<p>Excepteur sint occaecat cupidatat non proident</p>
		</div>
		<div class="slider">

			<?php
			global $post;

				$myposts = get_posts([ 
					'numberposts' => -1
				]);

				if( $myposts ){
					foreach( $myposts as $post ){
						setup_postdata( $post );
						?>
			<!-- Вывод постов, функции цикла: the_title() и т.д. -->
			<div class="item">
				<div class="item_child">
					<div class="text">
						<p>
							<?php the_field('testimonials'); ?>
						</p>
					</div>
					<div class="user">
						<div class="user_image">
							<img src="<?php the_field('testimonials-img'); ?>" alt="erorr">
						</div>
						<div class="user_name">
							<h4><?php the_field('testimonials-name'); ?></h4>
							<p><?php the_field('testimonials-profession'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<?php 
					}
				}

				wp_reset_postdata(); // Сбрасываем $post
			?>


		</div>
	</section>
	<section class="question">
		<div class="container">
			<div class="question_box">
				<div class="question_text">
					<div class="title">
						<h2><?php the_field('title-question'); ?></h2>
						<p><?php the_field('sub-title-question'); ?></p>
					</div>
					<div class="accordion">
						<div class="accordion-item">
							<div class="accordion-item-header">
								<?php the_field('title-acord-1'); ?>
							</div><!-- /.accordion-item-header -->
							<div class="accordion-item-body">
								<div class="accordion-item-body-content">
									<?php the_field('text-acord-1'); ?>
								</div>
							</div><!-- /.accordion-item-body -->
						</div><!-- /.accordion-item -->

						<div class="accordion-item">
							<div class="accordion-item-header">
								<?php the_field('title-acord-2'); ?>
							</div><!-- /.accordion-item-header -->
							<div class="accordion-item-body">
								<div class="accordion-item-body-content">
									<?php the_field('text-acord-2'); ?>
								</div>
							</div><!-- /.accordion-item-body -->
						</div><!-- /.accordion-item -->

						<div class="accordion-item">
							<div class="accordion-item-header">
								<?php the_field('title-acord-3'); ?>
							</div><!-- /.accordion-item-header -->
							<div class="accordion-item-body">
								<div class="accordion-item-body-content">
									<?php the_field('text-acord-3'); ?>
								</div>
							</div><!-- /.accordion-item-body -->
						</div><!-- /.accordion-item -->

					</div>
				</div>
				<div class="question_img">
					<img src="<?php the_field('img-acord'); ?>" alt="erorr">
				</div>
			</div>
		</div>
	</section>
	<section class="contact">
		<div class="container">
			<div class="contact_block">
				<div class="title">
					<h2><?php the_field('contact-title'); ?>
					</h2>
				</div>
				<div class="contact_btn">
					<a class="open_modal" href="#open"><?php the_field('contact-btn'); ?></a>
				</div>
				<div id="modal" class="modal bounceIn">
					<div class="modal_body">
						<div class="modal_head">
							<h2><?php the_field('form-name'); ?></h2>
							<div id="close_modal">+</div>
						</div>
						<div class="form">
							<form action="/action_page.php">
								<div class="full_name">
									<input type="text" class="fname modal_input" placeholder="<?php the_field('input-1'); ?>">
									<input type="text" class="lname modal_input" placeholder="<?php the_field('input-2'); ?>">
								</div>

								<input type="text" class="mail modal_input" placeholder="<?php the_field('input-3'); ?>">
								<input type="text" class="company_name modal_input" placeholder="<?php the_field('input-4'); ?>">
								<input type="text" class="enqiry modal_input" placeholder="<?php the_field('input-5'); ?>">

								<input type="checkbox" id="conditions" name="conditions" value="conditions_check">
								<label class="conditions_label" for="conditions"><?php the_field('checkbox-label'); ?></label>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

</div>
<?php get_footer(); ?>