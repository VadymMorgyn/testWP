<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>





</head>

<body>
	<header class=" header">
		<div class="container">
			<div class="nav_menu">
				<div class="logo">
					<div class="burger-menu">
						<a href="" class="burger-menu_button">
							<spun class="burger-menu_lines"></spun>
						</a>
						<nav class="burger-menu_nav">
							<a href="<?php the_field('link-1'); ?>" class="burger-menu_link"><?php the_field('name-link-1'); ?></a>
							<a href="<?php the_field('link-2'); ?>" class="burger-menu_link"><?php the_field('name-link-2'); ?>
								<div class="sub_link">
									<a href="<?php the_field('url_sublink'); ?>"><?php the_field('url_sublink'); ?></a>
									<a href="<?php the_field('url_sublink2'); ?>"><?php the_field('url_sublink2'); ?></a>
									<a href="<?php the_field('url_sublink3'); ?>"><?php the_field('url_sublink3'); ?></a>
									<a href="<?php the_field('url_sublink4'); ?>"><?php the_field('url_sublink4'); ?></a>
									<a href="<?php the_field('url_sublink5'); ?>"><?php the_field('url_sublink5'); ?></a>
								</div>
							</a>
							<a href="<?php the_field('link-3'); ?>" class="burger-menu_link"><?php the_field('name-link-3'); ?></a>
							<a href="<?php the_field('link-4'); ?>" class="burger-menu_link"><?php the_field('name-link-4'); ?></a>
							<a href="<?php the_field('link-5'); ?>" class="burger-menu_link"><?php the_field('name-link-5'); ?></a>
							<div class="tel">
								<a href="tel:<?php the_field('number-link'); ?>" class=""><?php the_field('number-phone'); ?></a>
							</div>
						</nav>
						<div class="burger-menu_overlay"></div>
					</div>
					<img src="<?php bloginfo('template_url'); ?>/assets/img/Logo.png" alt="">
				</div>
				<div class="menu_bar">
					<nav>
						<ul class="menu">
							<li><a href="<?php the_field('link-1'); ?>"><?php the_field('name-link-1'); ?></a></li>
							<li><a href="<?php the_field('link-2'); ?>"><?php the_field('name-link-2'); ?></a>
								<div class="hover"></div>
								<ol>
									<li class=""><a href="<?php the_field('url_sublink'); ?>"><?php the_field('name-sublink'); ?></a></li>
									<li class="border_line"><a
											href="<?php the_field('url_sublink2'); ?>"><?php the_field('name-sublink2'); ?></a></li>
									<li class="border_line"><a
											href="<?php the_field('url_sublink3'); ?>"><?php the_field('name-sublink3'); ?></a></li>
									<li class="border_line"><a
											href="<?php the_field('url_sublink4'); ?>"><?php the_field('name-sublink4'); ?></a></li>
									<li class="border_line"><a
											href="<?php the_field('url_sublink5'); ?>"><?php the_field('name-sublink5'); ?></a></li>
								</ol>
							</li>
							<li><a href="<?php the_field('link-3'); ?>"><?php the_field('name-link-3'); ?></a></li>
							<li><a href="<?php the_field('link-4'); ?>"><?php the_field('name-link-4'); ?></a></li>
							<li><a href="<?php the_field('link-5'); ?>"><?php the_field('name-link-5'); ?></a></li>
							<li class="tel"><a href="tel:<?php the_field('number-link'); ?>"><?php the_field('number-phone'); ?></a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="number">
					<a href="tel:<?php the_field('number-link'); ?>"><?php the_field('number-phone'); ?></a>
				</div>
			</div>
		</div>
	</header>