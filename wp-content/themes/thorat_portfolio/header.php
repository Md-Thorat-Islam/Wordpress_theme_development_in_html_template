<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/img/favicon.png" type="image/png">
        <?php wp_head();?>
    </head>
    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<a class="navbar-brand logo_h" href="index.html"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent mt-5">
                             <?php 
                             wp_nav_menu(array(
                                'theme_location'    => 'main-menu',
                                'container'         => 'ul',
                                'menu_id'           => 'menu-primary',
                                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'menu_class'        =>'nav navbar-nav menu_nav ml-auto'
                                
                            ));
                            
                            ?>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->