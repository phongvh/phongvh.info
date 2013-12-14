<!DOCTYPE html>
<html <?php language_attributes() ?>>
	<head>
		<title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>
		<meta content="This is homepage" name="description">
		<meta content="phongvh, vu hong phong, hong phong, phong vu, phongvu" name="keywords">
		<meta content="Vu Hong Phong" property="og:site_name">
		<meta content="Welcome to my world!" property="og:title">
		<meta content="This is homepage" property="og:description">
		<meta content="http://phongvh.info/" property="og:url">		
		<meta content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" http-equiv="Content-Type">		    
		
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
		<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
		<style type="text/css">
			.wsite-elements div.paragraph, .wsite-elements p, .wsite-elements .product-block .product-title, .wsite-elements .product-description, .wsite-elements .wsite-form-field label, .wsite-elements .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
			#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
			.wsite-elements h2, .wsite-elements .product-long .product-title, .wsite-elements .product-large .product-title, .wsite-elements .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
			#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
			#wsite-title {}
		</style>
		
		<!-- <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-responsive.min.css"> -->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>		
	</head>
	<body class="landing-page wsite-theme-light wsite-page-index">
  <?php include_once("analyticstracking.php") ?>
	<div id="header-wrap">
        <div class="container">
            <table id="header">
                <tbody>
                	<tr>
										<td id="header-left">
                        <table>
                            <tbody><tr>
                            	<td class="search"></td>
															<td class="social"><div style="text-align:left;"><div style="height:0px;overflow:hidden"></div>
<span class="wsite-social wsite-social-default"></span>
<div style="height:0px;overflow:hidden"></div></div></td>
                            </tr>
                        </tbody></table>
                    </td>
                    <td id="header-right">
                        <table>
                            <tbody><tr>
                            	<td class="phone-number"><span class="wsite-text"><?php bloginfo('description')?></span></td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            </tbody></table>
        </div><!-- end container -->
    </div><!-- end header-wrap -->  

    <div id="nav-wrap">
			<div id="nav-border-top">
				<div id="nav-border-bottom">
					<div class="container">
						<table>
							<tbody><tr>
								<td id="logo"><span class="wsite-logo"><a href="/"><span id="wsite-title"><?php bloginfo('name') ?></span></a></span></td>
								<td id="nav">
										<?php wp_nav_menu() ?>
								</td>
							</tr></tbody>
						</table>
					</div><!-- end container -->
				</div><!-- end nav-border-bottom -->
			</div><!-- end nav-border-top -->
    </div><!-- end nav-wrap -->