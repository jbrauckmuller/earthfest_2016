<!DOCTYPE html>
<html>
    <head>
        <title>Earth Fest - UF</title>
<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
        <script src="/wp-content/themes/earthfest/js/script.js"></script>
    </head>
    <body>
        <section class="header-wrap">
        	<header class="header-container">
        		<div class='cssmenu'>
					<ul>
						<li class='active'><a href="<?php $url = home_url('/'); echo $url; ?>"><img src="/wp-content/themes/earthfest/images/logo-earthfest.png"></a></a></li>
						<?php wp_nav_menu(array(
                            'sort_column' => 'menu_order',
                            'container' => 'false'
                            ));?>
						<li class="bottom"><?php dynamic_sidebar('first-widget'); ?></li>
					</ul>
				</div>
        	</header>
        </section>