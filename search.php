<?php
  get_header();
  $searchfor = get_search_query(); // Get the search query for display in a headline
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <div class="wrap">
       <?php
        get_search_form();
        $key_searchTerm        = strtolower($searchfor);
        $length_searchTerm     = strlen($key_searchTerm);
        $key_searchTerm_marked = "<span class=\"bold\">".$key_searchTerm."</span>";
        $key_bold_open         = "<span class=\"bold\">";
        $key_bold_close        = "</span>";
        $length_key_bold_open  = strlen($key_bold_open);
        $pageID                = $_GET['pageID'];

        // Search results for [the searched term] on [this site]
        // isolate the Site title to avoid using bloginfo();
        echo "<h2>";
          foreach (get_sites() as $boo => $baz) {
             foreach ($baz as $one => $two) {
               if ($one == "blog_id" && $two == $pageID) {
                 foreach ($baz as $one => $two) {
                   if ($one == "path") {
                     $url       = $two;
                     $url_array = explode("/", $url);
                     $link      = array_pop($url_array);
                     $siteTitle = ucfirst(end($url_array));
                     echo "Search results for \"{$searchfor}\" on {$siteTitle}";
                   }
                 }
               }
             }
          }
         echo "</h2>";

        if (have_posts()) {
          while (have_posts()) {  the_post();
          echo "<h3><a href=\"";
          the_permalink();
          echo "\">";
          the_title();
          echo "</a></h3>";
          $value_title          = strtolower(get_the_title());
          $full_content         = get_the_content();
          $full_content         = wp_strip_all_tags($full_content);
          $value_content        = strtolower($full_content);
          $length_value_content = strlen($value_content);
          $position_title       = strpos($value_title, $key_searchTerm);
          $position_value       = strpos($value_content, $key_searchTerm);
          $starting_positions   = array();
          $middle_positions     = array();
          $ending_positions     = array();


          // if a matching value exists ANYWHERE in the content (it separates by () later)
          if ($position_value !== false) {
            $i = 0;
            $needle_head = 0;
            $positions   = array();
            while (($needle_head = strpos($value_content, $key_searchTerm, $needle_head))!== false) {
                $positions[] = $needle_head;
                $needle_head = $needle_head + (strlen($key_searchTerm) - 3);
            }

            foreach ($positions as $value) {
              $remainder = $length_value_content - $value;
              if ($value <= 90) {
                $starting_positions[] = $value;
              } else if ($remainder <= 90) {
                $ending_positions[] = $value;
              } else {
                $middle_positions[] = $value;
              }
            }

            // SECTIONS WHILE loop | this part creates sections to print
            while ($i < 4) {
                if (count($starting_positions) > 0 && $i < 4) {
                     $start_snippet = substr($value_content, 0, 90);
                     $start_snippet_marked = str_replace($key_searchTerm, $key_searchTerm_marked, $start_snippet);
                     //stictyly to capitalize the key if it starts the snippet
                     if (strpos($start_snippet_marked, $key_bold_open) == 0) {
                       $lowerCaseFirstWord = substr($start_snippet_marked, $length_key_bold_open, $length_searchTerm);
                       $explode_snippet = explode($lowerCaseFirstWord, $start_snippet_marked, 2);
                       $start_snippet_marked = $explode_snippet[0] . ucfirst($lowerCaseFirstWord) . $explode_snippet[1];
                       $i++;
                       echo  $start_snippet_marked . "...<br>";
                     } else {
                       $i++;
                       echo ucfirst($start_snippet_marked) . "...<br>";
                     }
                }

                if (count($middle_positions) > 0 && $i < 4) {
                  foreach ($middle_positions as $middle_value) {
                    if ($i < 3) {
                      if ($middle_value > 90 && $middle_value < 135) {
                        $position_split_middle_value = $middle_value;
                      } else if ($middle_value > 135) {
                        $position_split_middle_value = $middle_value - 45;
                      }
                      $position_split_middle_value = $middle_value;
                      $middle_snippet = substr($value_content, $position_split_middle_value, 90);
                      $middle_snippet_marked = str_replace($key_searchTerm, $key_searchTerm_marked, $middle_snippet);
                      $i++;
                      echo "..." . $middle_snippet_marked . "...<br>";
                    }
                  }
                }

                if (count($ending_positions) > 0 && $length_value_content > 180 && $i < 4) {
                  foreach ($ending_positions as $ending) {
                    if ($i < 3) {
                     $remainder = $length_value_content - $ending;
                     if ($remainder <= 90) {
                      $end_snippet = substr($value_content, -90);
                      $end_snippet = str_replace($key_searchTerm, $key_searchTerm_marked, $end_snippet);
                      $i++;
                      echo "..." . $end_snippet . "<br>";
                    }
                  }
                }
              }
              $i = 5; // ensures the loop ends within a reasonable ceiling
            } // end my while

          } // master, if Term is in Content
          else {
            the_excerpt();
          }

          //empty the sectional arrays that determine what parts get printed and when, these are set in order above in the SECTIONS WHILE loop
          $starting_positions = array();
          $middle_positions   = array();
          $ending_positions   = array();
          echo "<hr>";
        } // master WHILE loop ********* END, END , END *********
      } else {
       echo "<p>Sorry nothing was found</p>";
      }

      // control pagination
      global $wp_query;
      $big = 999999999; // need an unlikely integer
      echo paginate_links(
        array(
          'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format'  => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total'   => $wp_query->max_num_pages
        )
      );

      /* ********* begin OTHER SITES loop ********* */

      $query_string = esc_attr($query_string); // Escaping search queries to eliminate potential MySQL-injections

      foreach ( get_sites() as $blog ):
        if ($blog->id != $_GET['pageID']) {
          switch_to_blog($blog->id); //https://codex.wordpress.org/Function_Reference/switch_to_blog
          $search = new WP_Query($query_string);
          $count_site_name = 0;
          if ($search->found_posts > 0) {
            foreach ( $search->posts as $post ) {
              setup_postdata($post);
              $author_data = get_userdata(get_the_author_meta('ID'));
              ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                $count_site_name++;
                if ($count_site_name < 2) { ?>
                  <h2><a href='<?php echo bloginfo('url') . "/?s={$searchfor}&pageID=" . $blog->id; ?>'><?php echo get_bloginfo('name'); ?> <span class="results-number">(<?php echo $search->found_posts; ?>)</span></a></h2>
                <?php } ?>
              </div><!-- post something -->
              <?php
            }
          }
          restore_current_blog(); // Reset settings to the current blog
        } // ALEX | Omit current page
      endforeach;


      ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>
