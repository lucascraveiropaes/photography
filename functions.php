<?php
	add_theme_support('category-thumbnails');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );

	// Variable with the template URL
	$template_url = get_template_directory_uri();

	//Function to get the styles on header
	function get_styles() { 
		$template_url .= "/assets/css"; ?>

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
		<!-- Animate -->
		<link rel="stylesheet" href="<?php echo $template_url ?>/animate.css">
		<!-- Icomoon -->
		<link rel="stylesheet" href="<?php echo $template_url ?>/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="<?php echo $template_url ?>/bootstrap.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="<?php echo $template_url ?>/magnific-popup.css"> <?php
	}

	//Function to get the scripts on footer
	function get_scripts() {
		$template_url .= "/assets/js"; ?>
		<!-- jQuery -->
		<script src="<?php echo $template_url ?>/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?php echo $template_url ?>/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo $template_url ?>/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?php echo $template_url ?>/jquery.waypoints.min.js"></script>
		<!-- Magnific Popup -->
		<script src="<?php echo $template_url ?>/jquery.magnific-popup.min.js"></script>
		<!-- Main JS -->
		<script src="<?php echo $template_url ?>/main.js"></script>
		<!-- Modernizr JS -->
		<script src="<?php echo $template_url ?>/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="<?php echo $template_url ?>/respond.min.js"></script>
		<![endif]--> <?php
	}

	//Function to get the social share icons
	function social_share() { ?>
		<ul class="fh5co-social">
			<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
			<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
			<li><a href="#"><i class="icon-instagram-with-circle"></i></a></li>
			<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
		</ul> <?php
	}

 	// Changing Post Into Ensaio
	function postLabelToEnsaio() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Ensaio';
	    $submenu['edit.php'][5][0] = 'Ensaios';
	    $submenu['edit.php'][10][0] = 'Adicionar Ensaio';
	    echo '';
	}

	function postIntoEnsaio() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Ensaios';
	    $labels->singular_name = 'Ensaio';
	    $labels->add_new = 'Adicionar Ensaio';
	    $labels->add_new_item = 'Adicionar Ensaio';
	    $labels->edit_item = 'Editar Ensaio';
	    $labels->new_item = 'Ensaio';
	    $labels->view_item = 'Ver Ensaio';
	    $labels->search_items = 'Buscar Ensaios';
	    $labels->not_found = 'Nenhum Ensaio Encontrado';
	    $labels->not_found_in_trash = 'Nenhum Ensaio Encontrado no Lixo';
	    $labels->all_items = 'Todos as Ensaios';
	    $labels->menu_name = 'Ensaios';
	    $labels->name_admin_bar = 'Ensaios';
	    $wp_post_types['post']->menu_icon = 'dashicons-format-gallery';
	}
	 
	add_action( 'admin_menu', 'postLabelToEnsaio' );
	add_action( 'init', 'postIntoEnsaio' );

 	// Hiding Help Box
	function hide_help() {
	    echo '<style type="text/css">
	            #contextual-help-link-wrap { display: none !important; }
	          </style>';
	}

	add_action('admin_head', 'hide_help');

 	// Adding Credits
	function addCredits () {
	  	echo 'Developed By <a href="http://lucascraveiropaes.com" target="_blank">Lucas Craveiro Paes</a>';
	}
	add_filter('admin_footer_text', 'addCredits');

	// Removing Comments
	function removeCommentFromAdminMenu() {
	    remove_menu_page( 'edit-comments.php' );
	}

	function removeCommentSupport() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}

	function removeCommentFromTheme() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}

	add_action( 'admin_menu', 'removeCommentFromAdminMenu' );
	add_action('init', 'removeCommentSupport', 100);
	add_action( 'wp_before_admin_bar_render', 'removeCommentFromTheme' );
?>