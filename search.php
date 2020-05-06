<?php  // 200409_7 throw exceptions version 1.3.0
  get_header();
  function p($list) {
    echo "<pre>";
    print_r($list);
    echo "</pre>";
  }
  $searchfor    = get_search_query(); // Get the search query for display in a headline
  $searchfor    = trim($searchfor);
  $empty_search = false;
  if ($searchfor === "" || empty($searchfor) || $searchfor == false) {
    $empty_search = true;
  }

  global $wpdb;
  $host = $wpdb->dbhost;
  $user = $wpdb->dbuser;
  $pass = $wpdb->dbpassword;
  $data = $wpdb->dbname;

  $connection = mysqli_connect($host, $user, $pass, $data);

  if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  // what the user searched for
  $searchterm = $searchfor;
  // user's IP address
  $user_ip    = $_SERVER['REMOTE_ADDR'];
  $user_ip    = mysqli_real_escape_string($connection, $user_ip);
  // user's Browser Environment
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  $user_agent = mysqli_real_escape_string($connection, $user_agent);
  // our site's URI to prompt comparison to the query string
  $site_uri   = $_SERVER['REQUEST_URI'];
  $site_uri   = mysqli_real_escape_string($connection, $site_uri);
  // the GET string to copare to the request URI above
  $query_str  = $_SERVER['QUERY_STRING'];
  $query_str  = mysqli_real_escape_string($connection, $query_str);
  // just to double check the server
  $our_server = $_SERVER['SERVER_ADDR'];
  $our_server = mysqli_real_escape_string($connection, $our_server);
  $searched_sitename = get_current_blog_id();
  // time updated through timestamp in column
  $count = "INSERT INTO search_capturequeries (searchterm, user_ip, user_agent, searched_sitename, site_uri, query_str, our_server) VALUES ('$searchterm', '$user_ip', '$user_agent', '$searched_sitename', '$site_uri', '$query_str', '$our_server')";
  $query = mysqli_query($connection, $count);
  if (!$query) {
    die("Failed to update search capture queries table");
    // die(mysqli_error($connection));
  }

  $value_location = "";
  $exception_injected = false;
  $exceptionInjection = "\$exceptionInjection";

  include("inc/list_exceptions.php");
  // DEPARTMENTS Needle Filter
  /*

    only searching through departments right now, so something like "ids" won't have an exception (until it's wrtten BEYOND version 1.3.0)

  */
  foreach ($departments as $key_department => $value_department) {
    // keyDepartment = "biology" ||| starting out by checking each name before diving into the department details
    if (strpos($key_department, $searchfor) !== false) {
      $exception = "exception_department";
      $value_location = $value_department['location'];
      break;
    } else if (strpos(strtolower($value_department['location']), $searchfor) !== false) {
      $exception = "exception_building";
      $value_location = $value_department['location'];
      break;
    } else {
      $exception = false;
    }
  } // Needle Filter

  // BUILDINGS
  foreach ($list_locations as $key_location => $value_building) {
    if ($value_location == $key_location) {
      $bldg = $value_building['bldg'];
    }
  }

  // building address
  foreach ($list_locations as $key_location => $value_building) {
    if ($key_location == $value_department['location']) {
      $exception_building_address = ucwords(strtolower($value_building['address']));
    }
  }
?>

<style media="screen">

  #container_master_searchResults {
    display: flex;
    background: gold;
  }

  #container_listResults {
    background: gold;
  }

  #container_injectedException {
    background: red;
  }

  #container_exception {
    background: green;
  }

  #container_exception img, #container_exception iframe {
    max-width: 300px;
  }

  #graph_alertMediaServicesOfChange {
    font-style: italic;
    font-size: .8rem;
  }

</style>


<div id="primary" class="content-area">


  <main id="main" class="site-main">
    <div class="entry-content">
      <div class="wrap search-page">
      <?php
      $key_searchTerm        = strtolower($searchfor);
      $length_searchTerm     = strlen($key_searchTerm);
      $key_searchTerm_marked = "<span class=\"bold\">".$key_searchTerm."</span>";
      $key_bold_open         = "<span class=\"bold\">";
      $key_bold_close        = "</span>";
      $length_key_bold_open  = strlen($key_bold_open);
      $pageID                = $_GET['pageID'];

      get_search_form();

      $args_test = array(
        'number' => 400
      );

      // Search results for [the searched term] on [this site]
      // bloginfo() depreciated, using foreach to isolate the Site title to avoid using;
      foreach (get_sites($args_test) as $indexNumber => $wp_site_obj) {
        foreach ($wp_site_obj as $key_description => $value_detail) {
          if ($key_description == "blog_id" && $value_detail == $pageID) {
            foreach ($wp_site_obj as $key_description => $value_detail) {
              if ($key_description == "path") {
                $url       = $value_detail;
                $url_array = explode("/", $url);
                $link      = array_pop($url_array);
                $siteTitle = strtolower(get_bloginfo('name'));
                $siteTitle = ucwords($siteTitle);
              //  echo "<h2>Search results for \"{$searchfor}\" on {$siteTitle}</h2>";
              }
            }
          }
        }
      }

      if (!$empty_search) {
        ?>

        <!-- page break  --> <!-- page break  -->    <!-- page break  -->
        <!-- page break  --> <!-- page break  -->    <!-- page break  -->

        <div id="container_master_searchResults">
          <div id="container_listResults">

            <?php if ($exception_injected) { ?>
              <div id="container_injectedException">
                <p><?php echo $exceptionInjection; ?></p>
              </div>
              <!-- injected exception container -->
            <?php } ?>

            <div class="container-current-site">
          <?php
          $store_titles = array("title_foo");
          if (have_posts()) {
            // title count lets the first iteration print the H3 title H3 because it hasn't been added to the lists
            $titleCount = 0;
            while (have_posts()) {  the_post();
              // CLEAN the title for equivalence | convert the title to lowercase and decode html formatting
              $value_title = strtolower(html_entity_decode(get_the_title()));
              // remove non-alphanumeric characters to equalize
              $value_title = preg_replace("/[^A-Za-z0-9 ]/", '', $value_title);

              // this if in array: prevents the page from printing the same result (heading) twice
              if (!in_array($value_title, $store_titles)) {
                $store_titles[] = $value_title;
                foreach ($store_titles as $single_title) {
                  if ($single_title === $value_title) {
                    echo "<h3><a href=\"";
                    the_permalink();
                    echo "\">";
                    the_title();
                    echo "</a></h3>";
                    $full_content         = get_the_content();
                    $full_content         = wp_strip_all_tags($full_content);
                    $value_content        = strtolower($full_content);
                    $length_value_content = strlen($value_content);
                    $position_title       = strpos($value_title, $key_searchTerm);
                    //return the position of the needle in the haystack
                    $position_value       = strpos($value_content, $key_searchTerm);
                    $starting_positions   = array();
                    $middle_positions     = array();
                    $ending_positions     = array();
                    // MASTER SNIPPET IF STATEMENT any matching value exists ANYWHERE in $value_content
                    if ($position_value !== false) {
                      $needle_head = 0;
                      $needle_positions    = array();
                      while (($needle_head = strpos($value_content, $key_searchTerm, $needle_head)) !== false) {
                        $needle_positions[] = $needle_head;
                        // $needle_head = $needle_head + ($length_searchTerm - 3);
                        $needle_head = $needle_head + $length_searchTerm;
                      }
                      //these positions are just numbers saying where the searched for term is located
                      foreach ($needle_positions as $value) {
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
                      $i_positions_ceiling = 0;

                      while ($i_positions_ceiling < 4) {
                        // array to prevent double snippet posting
                        $store_snippets = array();
                        // if there is a needle or more in the starting positions list
                        if (count($starting_positions) > 0 && $i_positions_ceiling < 4) {
                          $start_snippet        = substr($value_content, 0, 90);
                          $start_snippet_marked = str_replace($key_searchTerm, $key_searchTerm_marked, $start_snippet);
                          //stictyly to capitalize the key if it starts the snippet
                          if (strpos($start_snippet_marked, $key_bold_open) == 0) {
                           $lowerCaseFirstWord = substr($start_snippet_marked, $length_key_bold_open, $length_searchTerm);
                           $explode_snippet = explode($lowerCaseFirstWord, $start_snippet_marked, 2);
                           $start_snippet_marked = $explode_snippet[0] . ucfirst($lowerCaseFirstWord) . $explode_snippet[1];
                           $i_positions_ceiling++;
                           if (strpos($start_snippet_marked, "gallery") !== false) {
                             echo "<a href=\"";
                             the_permalink();
                             echo "\">view image gallery</a>";
                           } else {
                             if (!in_array($start_snippet_marked . "...<br>", $store_snippets)) {
                               $store_snippets[] = $start_snippet_marked . "...<br>";
                             }
                           }
                          } else {
                          $i_positions_ceiling++;
                          if (strpos($start_snippet_marked, "gallery") !== false) {
                            echo "<a href=\"";
                            the_permalink();
                            echo "\">view image gallery</a>";
                          } else {
                              if (!in_array(ucfirst($start_snippet_marked) . "...<br>", $store_snippets)) {
                                $store_snippets[] = ucfirst($start_snippet_marked) . "...<br>";
                              }
                            }
                          }
                        } // end starting positions

                        if (count($middle_positions) > 0 && $i_positions_ceiling < 4) {
                          foreach ($middle_positions as $middle_value) {
                            if ($i_positions_ceiling < 3) {
                              if ($middle_value > 90 && $middle_value < 135) {
                                $position_split_middle_value = $middle_value;
                              } else if ($middle_value > 135) {
                                $position_split_middle_value = $middle_value - 45;
                              }
                              $position_split_middle_value = $middle_value;
                              $middle_snippet = substr($value_content, $position_split_middle_value, 90);
                              $middle_snippet_marked = str_replace($key_searchTerm, $key_searchTerm_marked, $middle_snippet);
                              $i_positions_ceiling++;
                              if (!in_array("..." . $middle_snippet_marked . "...<br>", $store_snippets)) {
                               $store_snippets[] = "..." . $middle_snippet_marked . "...<br>";
                              }
                            }
                          }
                        }

                        if (count($ending_positions) > 0 && $length_value_content > 180 && $i_positions_ceiling < 4) {
                          foreach ($ending_positions as $ending) {
                            if ($i_positions_ceiling < 3) {
                              $remainder = $length_value_content - $ending;
                              if ($remainder <= 90) {
                                $end_snippet = substr($value_content, -90);
                                $end_snippet = str_replace($key_searchTerm, $key_searchTerm_marked, $end_snippet);
                                $i_positions_ceiling++;
                                if (!in_array("..." . $end_snippet . "<br>", $store_snippets)) {
                                  $store_snippets[] = "..." . $end_snippet . "<br>";
                                }
                              }
                            }
                          }
                        }
                        $i_positions_ceiling = 5; // creates a ceiling to force the loop to end in case there are less than $i_positions_ceilingresults;
                      } // end position allocation | count and add snippets to beggining middle and end

                      // MASTER snippet LOOP
                      foreach ($store_snippets as $snippet) {
                        // REGEX CLEANING
                        // remove non-printable / ascii characters
                        $snippet = preg_replace('/[^[:print:]]/', ' ', $snippet);
                        // remove all things between square brackets
                        $snippet = preg_replace('/\[(.*?)\]/', ' ', $snippet);
                        echo $snippet;
                      }
                    } else {
                      if (empty(the_excerpt())) {

                        if (strpos(get_the_content(), "table") !== false) {
                          echo "<a href=\"";
                          the_permalink();
                          echo "\">";
                          echo "View the ";
                          the_title();
                          echo " table";
                          echo "</a>";
                          echo "<hr>";
                          break;
                        }

                        if (get_post_type() === "tribe_events") {
                          echo "<a href=\"";
                          echo get_the_permalink();
                          echo "\">Go to this event's page</a>";
                          echo "<hr>";
                          break;
                        }
                        // echo "This page appears to be empty";
                      } else {
                        echo get_the_excerpt();
                      }
                    }

                    //empty the sectional arrays that determine what parts get printed and when, these are set in order above in the SECTIONS WHILE loop
                    // UNSET() another option;
                    $store_snippets     = array();
                    $starting_positions = array();
                    $middle_positions   = array();
                    $ending_positions   = array();
                    echo "<hr>";
                  } // if single title equals title value
                }
              }
            } // master WHILE loop ********* END-END-END *********
          } else {
            echo "<p>Sorry nothing was found</p>";
            if ($empty_search) {
              $setVarsForEmpty = true;
              echo "<span class=\"bold\">Did you know your search was empty?</span> <br> Are you looking for a Site map?";
            }
          }
          ?>
          <div class="search-pagination">
            <?php
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
            ); ?>
          </div>
          <!-- pagination -->
        </div>
        <!-- container current site -->

        <?php

        /* ********* begin OTHER SITES loop ********* */
        /* ********* begin OTHER SITES loop ********* */
        /* ********* begin OTHER SITES loop ********* */

        $query_string = esc_attr($query_string); // Escaping search queries to eliminate potential MySQL-injections
        $end_container_other_sites  = false;
        $incrementer_for_no_results = 0;
        $unset_incrementer          = 0;
        $other_sites_byTitle        = array();
        $other_sites_map            = array();

        // search only Explicity public sites
        $public_arguments = array(
          'public' => 1
        );

        foreach ( get_sites($public_arguments) as $blog ):
          if ($blog->id != $_GET['pageID']) {
            switch_to_blog($blog->id); //https://codex.wordpress.org/Function_Reference/switch_to_blog
            @$search = new WP_Query($query_string);
            $count_site_name = 0;
            if ($search->found_posts > 0) {
              //incrementer counts how many results were found on a site
              ++$incrementer_for_no_results;
              if ($incrementer_for_no_results > 0 && $unset_incrementer < 1) { ?>
                <div class="container-other-sites">
                  <h2>Your term "<?php echo $searchfor; ?>" was also found on the following CLAS websites</h2>
                  <p>Click on a link below to view search results</p>
                  <?php
                  $unset_incrementer++;
                  $end_container_other_sites = true;
                }
                foreach ( $search->posts as $post ) {
                  setup_postdata($post);
                  $author_data = get_userdata(get_the_author_meta('ID'));
                  $count_site_name++;
                  $key_otherSiteResults = false;
                  if ($count_site_name < 2) {
                    $key_otherSiteResults = true;
                    $other_title = get_bloginfo('name');
                    $other_url   = get_bloginfo('url') . "/?s={$searchfor}&pageID=" . $blog->id;
                    $other_count = $search->found_posts;
                    // make a singular, simple array for clean alphabatized sorting
                    $other_sites_byTitle[] = $other_title;
                    // make a multidimensional mess to be called by the clean key
                    $other_sites_map[$other_title] = [$other_url, $other_count];
                  }
                } // site-based, need better comment
              }
              restore_current_blog(); // Reset settings to the current blog
            } // ALEX | Omit current page
          endforeach;
          // end the other sites container
          // two-part loop. after ordered, loop and use titles as key for looping the map / multidimensional array
          sort($other_sites_byTitle);
          foreach ($other_sites_byTitle as $value) {
            foreach ($other_sites_map as $siteName => $siteData) {
              if ($value === $siteName) { ?>
                <div class="container-other-sites-single">
                  <ul>
                    <li>
                      <a href='<?php echo $siteData[0]; ?>'>
                        <?php echo $siteName; ?>
                        <span class="results-number" title="Number of results in other websites">
                          (<?php echo $siteData[1]; ?> result<?php if ($siteData[1] > 1) {echo "s";} ?> found)
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
                <?php
              }
            }
          }
          if ($end_container_other_sites) {
            echo "</div><!-- end Other Sites Container -->";
          }
      } else {
        echo "Did you know your search was empty?<br><br>Want a Sitemap?<br><br>
        <img src=\"https://campusmap.ufl.edu/library/photos/stars/B0267.jpg\">
        <hr>
        ";
      }
      ?>

      </div>
      <!-- container Results List -->
      <!-- container Results List --><!-- container Results List -->
      <!-- container Results List -->
      <?php if ($exception) { ?>
        <div id="container_exception">
          <?php
          // STARS has inconsistent naming conventions for its images and hasn't provided an API key to query these, so exceptions have to be written
          $imageExceptions = array("0092", "0747", "0497");
          foreach ($imageExceptions as $value_imageException) {
              if ($bldg == $value_imageException) {
                $graph_imageExtension = "JPG";
                break;
              } else {
                $graph_imageExtension = "jpg";
              }
          } ?>
          <img src="https://campusmap.ufl.edu/library/photos/stars/B<?php echo $bldg.".".$graph_imageExtension; ?>" alt="<?php echo $value_building['fullName']; ?>">
          <iframe src="https://campusmap.ufl.edu/#/index/<?php echo $bldg; ?>/17" width="100%" height="200"></iframe>

            <?php
              if ($exception == "exception_department") {
                echo "<h3>".ucwords($key_department)."</h3>";
                echo "<p>{$exception_building_address}</p>";


              } else if ($exception == "exception_building") {
                echo "<h3>".$value_department['location']."</h3>";
              }
            ?>
            <!-- <p id="graph_alertMediaServicesOfChange">Need to change this information?</p> -->
        </div>
        <!-- contianer exception -->
        <!-- contianer exception -->
        <!-- contianer exception -->
      <?php } ?>
      </div>
      <!-- master search results container -->
    </div>
  </main>
</div>
<!-- entry content -->

<?php get_footer(); ?>
