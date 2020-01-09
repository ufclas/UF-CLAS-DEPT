<style type="text/css">
  .wrap {
      max-width: 1023px !important;
  }

  #page .featured-news-right a {
      font-family: "Quadon" !important;
      font-size: 1.25rem;
  }

  .featured-news-date {
      font-family: "Gentona_light", sans-serif;
      display: block;
  }

  span.edit-link {
      display: none;
  }

  .featured-individual-news > div {
    flex: 1 50%;
  }

  .featured-individual-news {
      border-bottom: 1px solid #f45a1d;
      padding-bottom: 2rem;
      margin-bottom: 1rem;
  }

  .featured-individual-news img {
    width: 414px;
    height: 275px;
    object-fit: cover;
  }

  .featured-news-excerpt {
    margin-top: 1rem;
    line-height: 1.7rem;
  }

  .featured-individual-news a img {
    width: 100%;
  }

  @media (min-width: 768px){
    .featured-individual-news {
      display: flex;
    }

    .featured-individual-news > div:not(.featured-news-right) {
      padding: 0 1rem;
    }
  }
</style>



<?php
/* This is the string which will gather all the information.*/
$lcp_display_output = '';

// Show category link:
$lcp_display_output .= $this->get_category_link('strong');

// Show the conditional title:
$lcp_display_output .= $this->get_conditional_title();

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
$lcp_display_output .= '<div class="featured-news-layout">';

/* Posts Loop
 *
 * The code here will be executed for every post in the category.  As
 * you can see, the different options are being called from functions
 * on the $this variable which is a CatListDisplayer.
 *
 * CatListDisplayer has a function for each field we want to show.  So
 * you'll see get_excerpt, get_thumbnail, etc.  You can now pass an
 * html tag as a parameter. This tag will sorround the info you want
 * to display. You can also assign a specific CSS class to each field.
*/
global $post;
while ( have_posts() ):
  the_post();?>


<?php

  $lcp_display_output .= '<div class="featured-individual-news">';

  //Post Thumbnail
  $lcp_display_output .= $this->get_thumbnail($post, 'div', 'featured-individual-news-image');

  //Right section container for featred news
  $lcp_display_output .= '<div class="featured-news-right"';

  //Show the title and link to the post:
  $lcp_display_output .= $this->get_post_title($post, 'h3', 'lcp_post');

  //Show date:
  $lcp_display_output .= ' ' . $this->get_date($post, 'span', 'featured-news-date');

  //Custom fields:
  $lcp_display_output .= $this->get_custom_fields($post);

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<div class="lcp_excerpt">The content</div>
   */
  $lcp_display_output .= $this->get_excerpt($post, 'div', 'featured-news-excerpt');

  // Get Posts "More" link:
  $lcp_display_output .= $this->get_posts_morelink($post);

  $lcp_display_output .= '</div>';

  $lcp_display_output .= '</div>';

endwhile;

// Close the wrapper I opened at the beginning:
$lcp_display_output .= '</div>';

// If there's a "more link", show it:
$lcp_display_output .= $this->get_morelink();

// Get category posts count
$lcp_display_output .= $this->get_category_count();

//Pagination div
$lcp_display_output .= '<div class="featured-news-pagination">';

//Pagination
$lcp_display_output .= $this->get_pagination();

//Pagination div
$lcp_display_output .= '</div>';

$this->lcp_output = $lcp_display_output;

?>
