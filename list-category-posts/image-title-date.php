<style type="text/css">
  .wrap {
      max-width: 1023px !important;
  }

  .image-news-layout {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
  }

  #page .individual-news h3 a {
      font-family: "Quadon" !important;
      font-size: 1.25rem;
  }

  .news-date {
      font-family: "Gentona_light", sans-serif;
  }

  .individual-news h3 {
      padding: .5rem 0;
  }

  .individual-news-text {
    padding: 0 1rem;
}

  .news-excerpt {
      margin-top: 1rem;
      line-height: 1.7rem;
      border-top: 1px solid #f45a1d;
      padding-top: 1rem;
  }

  .news-pagination {
      text-align: center;
  }

  .news-pagination li.lcp_currentpage {
      background: #00285e;
      color: white !important;
      font-family: "Quadon_Bold" !important;
  }

  .news-pagination ul.lcp_paginator li {
      border: none;
      padding: .2rem .6rem;
      margin-top: 1rem;
  }

  #page .news-pagination a {
      font-family: "Quadon_Bold" !important;
      font-size: 1.2rem !important;
  }

  .entry-content .news-pagination ul li:before {
    display: none;
  }

  span.edit-link {
      display: none;
  }

  .individual-news img {
    max-height: 230px;
    object-fit: cover;
  }

  .individual-news {
    margin: 1rem;
    border: 1px solid #a9dcda;
    padding-bottom: 2rem;
    flex: 1 45%;
    max-width: 345px;
  }

  @media (min-width: 768px){
    .individual-news {
      flex: 1 25%;
      margin: 5px;
    }
  }
</style>



<?php
/* This is the string which will gather all the information.*/
$lcp_display_output = '';


// Show the conditional title:
$lcp_display_output .= $this->get_conditional_title();

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
$lcp_display_output .= '<div class="image-news-layout">';

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

  $lcp_display_output .= '<div class="individual-news">';

  //Post Thumbnail
  $lcp_display_output .= $this->get_thumbnail($post, 'div', 'individual-news-image');

  //container for the text content
  $lcp_display_output .= '<div class="individual-news-text">';

  // Show category link:
  $lcp_display_output .= $this->get_category_link();

  //Show the title and link to the post:
  $lcp_display_output .= $this->get_post_title($post, 'h3', 'lcp_post');

  //Show date:
  $lcp_display_output .= ' ' . $this->get_date($post, 'span', 'news-date');

  //Custom fields:
  $lcp_display_output .= $this->get_custom_fields($post);

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<div class="lcp_excerpt">The content</div>
   */
  $lcp_display_output .= $this->get_excerpt($post, 'div', 'news-excerpt');

  $lcp_display_output .= '</div>';

  // Get Posts "More" link:
  $lcp_display_output .= $this->get_posts_morelink($post);

  $lcp_display_output .= '</div>';

endwhile;

// Close the wrapper I opened at the beginning:
$lcp_display_output .= '</div>';

// If there's a "more link", show it:
$lcp_display_output .= $this->get_morelink();

// Get category posts count
$lcp_display_output .= $this->get_category_count();

//Pagination div
$lcp_display_output .= '<div class="news-pagination">';

//Pagination
$lcp_display_output .= $this->get_pagination();

//Pagination div
$lcp_display_output .= '</div>';

$this->lcp_output = $lcp_display_output;

?>
