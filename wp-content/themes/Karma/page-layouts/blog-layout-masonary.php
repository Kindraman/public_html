<?php get_header(); ?>
</div><!-- END header-area -->
</div><!-- END header-overlay -->
</div><!-- END header-holder -->
</header><!-- END header -->

<?php
global $ttso;
//$ka_blogtitle             = $ttso->ka_blogtitle;
//$ka_searchbar             = $ttso->ka_searchbar;
//$ka_crumbs                = $ttso->ka_crumbs;
$ka_blogbutton            = $ttso->ka_blogbutton;
$ka_blogbutton_color      = $ttso->ka_blogbutton_color;
$ka_blogbutton_size       = $ttso->ka_blogbutton_size;
$ka_posted_by             = $ttso->ka_posted_by;
$ka_post_date             = $ttso->ka_post_date;
$ka_dragshare             = $ttso->ka_dragshare;
//$show_tools_panel         = $ttso->ka_tools_panel;
$content_default          = $ttso->ka_tt_content_default;


//pre-define values for backward compatibility
if ('' == $ka_blogbutton_color): 'black'  == $ka_blogbutton_color; endif;
if ('' == $ka_blogbutton_size):  'small'  == $ka_blogbutton_size;  endif;
if ('' == $content_default):     'false'  == $content_default;     endif;

//format "continue reading" button
$formatted_size    =  strtolower($ka_blogbutton_size);
$formatted_button  =  $formatted_size.'_button '.$formatted_size.'_'.$ka_blogbutton_color;
?>

<?php truethemes_before_main_hook();// action hook ?>

<div id="main">

<div class="tt-masonry-wrap" id="tt-blog-container">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					// The following determines what the post format is and shows the correct file accordingly
                    $format = get_post_format();
                    get_template_part( 'post-formats/'.$format );
                        
                    if($format == '')
                    get_template_part( 'post-formats/standard' );
				?>

			<?php endwhile; endif; ?>

</div><!-- .container-fluid.masonry-section-wrap -->

<section id="tt-karma-masonry-pagination">
	<?php
	if(function_exists('wp_pagenavi')) { 
	wp_pagenavi(); 
	} else {
	//do not remove this function...needed for theme_check 
	paginate_links(); 
	} 
	?>
</section>

<?php get_footer(); ?>