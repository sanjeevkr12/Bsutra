<?php
/**
 * @package WordPress
 * @subpackage Magazeen_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/pngfix.js"></script>
	
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/effects.core.js"></script>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/functions.js"></script>
	
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>
<body>

	<div id="header">
		
		<div class="container clearfix">
		
			<div id="logo">
		
				<h2><?php /*bloginfo( 'description' );*/ ?></h2>
				<h1><span></span><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="logo.png"></a></h1>
				
			</div><!-- End logo -->
			
			<?php include_once( TEMPLATEPATH . '/searchform-header.php' ); ?>
		
		</div><!-- End Container -->
		
	</div><!-- End header -->
	
	<div id="navigation">
	
		<div class="container clearfix">
	
			<ul class="pages">
				<li<?php if( is_home() ) : ?> class="current_page_item"<?php endif; ?>><a style="text-decoration:none; outline:none;" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'title' ); ?>">Home</a></li>

<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com">BSutra Homepage</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/forum">Forum</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/ranking.php">Ranking</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/campuslife.php">Campus Life</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/downloads.php?opt=2">Downloads</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/exam.php">Exam Details</a></li>
<li><a style="text-decoration:none; outline:none;" href="http://www.bsutra.com/faq.php">MBA FAQ's</a></li>




				<?php /*wp_list_pages( 'title_li=&depth=1' );*/ ?>
			</ul>
			
			<a href="<?php bloginfo( 'rss2_url' ); ?>" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS">Subscribe</a>
			
		</div><!-- End container -->
		
	</div><!-- End navigation -->
	
	