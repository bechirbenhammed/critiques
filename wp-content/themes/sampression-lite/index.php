<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sampression-Lite
 */

get_header(); ?>
<?php 
echo do_shortcode('[vc_row dt_bg_repeat="repeat-y" bg_color="#ffffff" dt_text_scheme="lighter-overlay" dt_no_mb="no-margin"][vc_column width="1/1"][rev_slider_vc alias="fullscreen-image-slider"][/vc_column][/vc_row]');
?>
<article id="post-83" class="post post-82 page type-page status-publish hentry">
<header class="post-header">
	<center><h1 class="post-title"> Gouvernement News </h1></center>
</header>
<div style="clear:both; width:100%; height:30px"></div>
<div class="entry clearfix" style="background-color:#F3F7F6;">
<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid" >
					<div class="wpb_column mobile-fb vc_column_container vc_col-sm-5" style="margin-left:3.5%;margin-top:3.5%;">
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/Presidence.tn/ social_plugin=false posts=3] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>	
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/BenGharbia.Mehdi/ social_plugin=false posts=2] ');
						?>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-1">	
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-5" style="margin-top:3.5%;">
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/PMTunisie/ social_plugin=false posts=3] ');
						?>
						<div style="clear:both; width:100%; height:30px"></div>
						<?php 
							echo do_shortcode('[facebook https://www.facebook.com/Tunisie.arp/ social_plugin=false posts=3] ');
						?>
					</div>
					
				</div>	
				<div style="clear:both; width:100%; height:50px"></div>
				<div class="wpb_column vc_column_container vc_col-sm-12"><center><a href="http://www.tunisie-critiques.com/index.php/nouveaute-des-ministres/" style="text-decoration : underline; color: #ff6600;"><h2 class="post-title"><i><?php echo(utf8_encode("Voir plus d'actualités sur les activités gouvernementales"));?>  >> </i></h2></a></center></div>	
				<div style="clear:both; width:100%; height:50px"></div>
			</div>
		</div>
	</div>
</div>
</div>
</article>
<article id="post-82" class="post post-82 page type-page status-publish hentry">
<header class="post-header">
	<center><h1 class="post-title"> Situation actuelle de la TUNISIE </h1></center>
</header>
<div style="clear:both; width:100%; height:30px"></div>
<div class="entry clearfix">
<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner ">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div style="width:100%;"><center><img id="img-genaral" style="border:1px solid;box-shadow: 10px 10px 5px #888888;padding-top: 1%;padding-left: 5%;padding-right: 5%;margin-left: -0.8%;margin-right: 0.8%;" src ="wp-content/uploads/2016/09/chiffre.png"/> </center></div>
							</div>
						</div>
					</div>
				</div>
				<div style="clear:both; width:100%; height:60px"></div>
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-4">
						<img id="img-balance"  style="margin-left:5%;border:0.5px solid;box-shadow: 10px 10px 5px #888888;padding-left:1px; padding-right:2px;" src ="wp-content/uploads/2016/09/blance.png"/>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-4">
						<img id="img-chomage"  style="margin-left:5%;border:1px solid;box-shadow: 10px 10px 5px #888888;padding-bottom: 20px;padding-left:4px; padding-right:4px;" src ="wp-content/uploads/2016/09/chomage.png"/>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-4">
						<img id="img-statg"  style="margin-left:5%; border:0.5px solid;box-shadow: 10px 10px 5px #888888;padding-bottom: 10px;"src ="wp-content/uploads/2016/09/stat_gen.png"/>
					</div>
				</div>	
				<div style="clear:both; width:100%; height:60px"></div>
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner ">
							<div class="wpb_wrapper">
								<div style="width:100%;"><center><img src ="wp-content/uploads/2016/09/dinar.jpg" style="border:1px solid;"/> </center></div>
							</div>
						</div>
					</div>
				</div>
				<div class="wpb_column vc_column_container vc_col-sm-12"><span>* Source : Institut National de la Statistique </span></div>
				<div style="clear:both; width:100%; height:20px"></div>
				<center> <h2 class="post-title"><?php echo(utf8_encode("Êtes-vous satisfaits du travail de gouvernement ?"));?> </h2>	<strong><?php if(function_exists('the_ratings')) { the_ratings(); } ?></strong></center></br/>
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<center>
						<img id="img-balance" width = "150" src ="wp-content/uploads/2016/09/goutte-6.jpg"/>
					</center>
				</div>
				<div style="clear:both; width:100%; height:20px"></div>
				<div class="vc_row wpb_row vc_inner vc_row-fluid" style="margin-top: -15%;">
					<div class="wpb_column vc_column_container vc_col-sm-6">
					<center>
						<img src ="wp-content/uploads/2016/09/infos.jpg" style="width:65%;" /></center>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-6" style="padding-top: 2% ">
						<center>				
							<h3><i>Critiquer</i></h3>
							<h3><i>Proposer vos solutions</i></h3>
							<h3><i>Publier vos avis librement</i></h3>
							<h3><i>Suiver le travail de chaque ministre</i></h3>
							<h3><i>C'est <?php echo(utf8_encode('à'));?> vous de changer la TUNISIE</i></h3>
						</center>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</div>
</article>

<section id="content" class="clearfix">
	<?php if (have_posts()) : ?>
		<div id="post-listing" class="clearfix">
			<?php
			while ( have_posts() ) : the_post();
				
				get_template_part( 'loop', 'index' );

			endwhile;
			?>
			<div class="three columns shuffle__sizer"></div>
		</div>
		<!-- #post-listing --> 
		<?php
		sampression_content_nav( 'nav-below' );
	else:
	?>
		<article id="post-0" class="no-results not-found">
			<header class="entry-header">
				<h2 class="entry-title"><?php _e( 'Nothing Found', 'sampression-lite' ); ?></h2>
			</header>
			<!-- .entry-header -->
			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'sampression-lite' ); ?></p>
			</div>
			<!-- .entry-content -->
		</article>
		<!-- #post-0 -->
	<?php endif; ?>
	<div style="clear:both"></div>
	<div id="block_contact">
		<h1 style="text-align: center;color: #FE6E41;">Laisser nous un message</h1>
		<?php echo do_shortcode("[vc_row_inner][vc_column_inner width='1/2']
							[contact-form-7 id='69']
						[/vc_column_inner][vc_column_inner width='1/2']<center><img src ='wp-content/uploads/2016/09/contactez.jpg' style='width: 55%;'/></center>[/vc_column_inner][/vc_row_inner]"); ?>
	</div>
</section>
<!-- #content -->

<?php get_footer(); ?>