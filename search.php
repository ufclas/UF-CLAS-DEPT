<?php // 201028: capture queries, DENY exceptions, count instances, improve empty

  get_header();

  $searchfor    = get_search_query(); // Get the search query for display in a headline
  $searchfor = trim($searchfor);

  $empty_search = false;

  if ($searchfor === "" || empty($searchfor) || $searchfor == false) {
    $empty_search = true;
  }

  // list exceptions
  //include("inc/search/list_exceptions.php");
  $value_location     = "";
  $exception_injected = false;
  $exceptionInjection = "\$exceptionInjection";

?>

      <main id="main" class="site-main">
        <div id="primary" class="content-area">
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
                          if (!$empty_search) {
                            echo "<h2>Search results for \"{$searchfor}\" on {$siteTitle}</h2>";
                          } else {
                            echo "<h2>Searching for space on " . ucwords($siteTitle) . "</h2>";
                          }
                        }
                      }
                    }
                  }
                }

                if (!$empty_search) {
                  include("inc/search/processing_core.php");
                } else {
                  echo "Did you know your search was empty? Try again?!";
                  // echo "<br><br>Want a Sitemap?<br><br> // .<img src=\"https://campusmap.ufl.edu/library/photos/stars/B0267.jpg\">
                  // <hr>
                }
              ?>
            </div>
            <!-- container Results List -->
            <?php //include("inc/search/hold_exceptionContainer.php"); ?>
          </div>
        <!-- master search results container -->
        </div>
      <!-- id="primary" class="content-area" -->
      </main>
    </div>
</div>
<!-- entry content -->

<?php
  // write to the database table "search_capturequeries";
  if (!$empty_search) {
    include("inc/search/capture_write.php");
  }
?>


<?php get_footer(); ?>
