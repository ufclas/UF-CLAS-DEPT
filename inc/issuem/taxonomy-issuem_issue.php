<?php
/**
 * Issue Page
 *
 * @package UFCLAS_emily
 *
 */
get_header(); ?>

<?php get_template_part('inc/issuem/issuem','header'); ?>

<div id="main" class="container main-content">
<div class="row">
  <div class="col-sm-12">
    <?php


    //Display term description if there is one
    echo term_description();


		// Change the query if this is an issue page
		if ( issuem_is_articles_page() ){
			$issue_args = array(
				'post_type' => 'article',
				'orderby' => 'menu_order date',
				'order' => 'ASC',
				'posts_per_page' => -1,
				'tax_query' => array(
					'relation' => 'AND',
					array(
						'taxonomy' => 'issuem_issue',
						'field' => 'slug',
						'terms' => get_active_issuem_issue()
					),
				),
			);
			$issue_query = new WP_Query( $issue_args );
		}
		else {
			$issue_query = $wp_query;
		}

		 /* Display each article */
		while( $issue_query->have_posts() ) : $issue_query->the_post();

		if( has_post_thumbnail() ){
			$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
			$article_background = ' style="background-image: url(' . $image_url[0] . ');"';
		}
		else {
			$article_background = '';
		}
	?>

  <article id="issuem-article-<?php the_ID(); ?>" class="issuem-article col-lg-4 col-md-6" aria-label="<?php echo get_the_title(); ?>">
    <a href="<?php echo get_permalink(); ?>">
      <div class="big-stat-wrap big-stat-img four gradient-bg"<?php echo $article_background; ?>>
        <div class="big-stat-copy">
            <h2 style="color:white; font-family: Quadon_Regular; font-size: 1.4rem; letter-spacing: 1px;"><?php the_title( ); ?></h2>
        </div>
      </div>
    </a>
  </article>
    <?php endwhile; ?>
  </div>
</div>
</div>

<?php get_footer(); ?>
