<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */

get_header(); ?>

<?php if(!strpos($_SERVER['REQUEST_URI'],'nouveaute-des-ministres')) { ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="content" class="columns nine" role="main">
  <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="featured-img">
      <?php the_post_thumbnail( 'featured' ); ?>
	  
    </div>
    <!-- .featured-img -->
    <?php } else { ?>
		<?php if(!strpos($_SERVER['REQUEST_URI'],'nouveaute-des-ministres')) {?><center><img src ="http://www.tunisie-critiques.com/wp-content/uploads/2016/09/image-forum.png"/> </center>
		<?php } ?>
	<?php } ?>
    <header class="post-header">
      <h2 class="post-title">
        <?php the_title(); ?>
      </h2>
       
    </header>
   
    <div class="entry clearfix">
      <?php the_content(); ?>
      
      <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'sampression-lite' ) . '</span>', 'after' => '</div>' ) ); ?>
      
      <?php if(is_user_logged_in()){ ?>
       <div class="meta">
      	<div class="edit genericon-edit"><?php edit_post_link( __( 'Edit', 'sampression-lite' ) ); ?> </div>
       </div>
	  <?php } ?>
    </div>
    <?php comments_template( '', true ); ?>
  </article>
  
</section>
<!-- #content -->

<?php endwhile; endif; ?>
<?php get_sidebar('right'); ?>
<?php } else { ?>
<div class="entry clearfix" style="background-color:#F3F7F6;">
<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid" >
					<div class="column one-third" >
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/Presidence.tn/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/ministere.interieur.tunisie/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/Selma.Elloumi/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/riadhmouakher.afektounes/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/mar.gov.tn/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/MinistereTCEN/ social_plugin=false posts=2] ');
						?>
						
					</div>
					<div class="column one-third">	
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/Tunisie.arp/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/industrie.tn/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/NejiJaloul/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/IyedDahmaniAyadAldhmany/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/ministere.justice.tunisie/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/BenGharbia.Mehdi/ social_plugin=false posts=2] ');
						?>
					</div>
					<div class="column one-third">
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/PMTunisie/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/samir.taieb.officielle/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/santetunisie.rns.tn/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/MDEAF.GOV.TN/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/m.imedhammami/ social_plugin=false posts=2] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/KhemaiesJhinaoui/ social_plugin=false posts=2] ');
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>
</div>
<?php } ?>
<?php get_footer(); ?>
