<?php

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


    $db_table_searchQuery = "search_query";
    $table_exists = false;
    if ($wpdb->query( 'SELECT * FROM ' . $db_table_searchQuery) === false) {} else {
      $table_exists = true;
    }


    // Admin Processing
    $current_user = wp_get_current_user();
    if (user_can($current_user, 'administrator')) {

      // check if table exists
      if ($searchfor === "admin::check?table=search_query") {
        if ($table_exists) {
          echo "<p style=\"text-align: center; font-size: 2rem;\"><a href=\"index.php\">yes " . $db_table_searchQuery . " table</a></p>";
          exit;
        } else {
          echo "<p style=\"text-align: center; font-size: 2rem;\"><u><a href=\"index.php\">no " . $db_table_searchQuery . " table</a></u></p>";
          exit;
        }
      }

      // Drop the Table
      if ($searchfor === "admin::drop?table=search_query") {
        // unnecesary but sures up the search string is the identifier
        $explode    = explode("?table=", $searchfor);
        $table_drop = $explode[1];
        $wpdb->get_results('DROP TABLE ' . $table_drop);
        echo "your DROP table query has been attempted and likely succeeded";
        echo "<br><br><a href=\"index.php\">home</a>";
        exit;
      }

      // Create Table
      if ($wpdb->query( 'SELECT * FROM ' . $db_table_searchQuery) === false && $searchfor === "admin::create?table=search_query") {
        // make the table
        $count  = "CREATE TABLE search_query ";
        $count .= "(id INT(11) NOT NULL AUTO_INCREMENT, term VARCHAR(555) NULL, ip VARCHAR(90) NULL, site INT(6) NULL, i_inside INT(6) NULL, i_outside INT(6) NULL, user_agent VARCHAR(400) NULL, site_uri VARCHAR(400) NULL, query_string VARCHAR(400) NULL, our_server VARCHAR(100) NULL, ts INT(14) NOT NULL, PRIMARY KEY (id))";
        $query = mysqli_query($connection, $count);
        // echo "table created";
        // echo "no table " . $db_table_searchQuery;
      }

    } // if admin
    // if admin
    // if admin

    $searchfor  = sanitize_searchEntry($searchfor);

    // y tho?
    $searchterm = $searchfor;
    if (strlen($searchterm) > 299) {
      $searchterm = substr($searchterm, 0, 255);
    }


    if ($table_exists) {

      // user's IP address
      $user_ip    = $_SERVER['REMOTE_ADDR'];
      $user_ip    = mysqli_real_escape_string($connection, $user_ip);

      // user's Browser Environment
      $user_agent = $_SERVER['HTTP_USER_AGENT'];
      $user_agent = mysqli_real_escape_string($connection, $user_agent);

      // our site's URI to prompt comparison to the query string
      $site_uri   = $_SERVER['REQUEST_URI'];
      if (strlen($site_uri) > 100) {
        $site_uri = substr($site_uri, 0, 90);
      }
      $site_uri   = mysqli_real_escape_string($connection, $site_uri);
      // the GET string to copare to the request URI above

      $query_str  = $_SERVER['QUERY_STRING'];
      if (strlen($query_str) > 100) {
        $query_str = substr($query_str, 0, 90);
      }
      $query_str  = mysqli_real_escape_string($connection, $query_str);

      // just to double check the server
      $our_server = $_SERVER['SERVER_ADDR'];
      $our_server = mysqli_real_escape_string($connection, $our_server);

      $searched_sitename = get_current_blog_id();

      $ts = $_SERVER['REQUEST_TIME'];

      $count = "INSERT INTO search_query (term, ip, site, i_inside, i_outside, user_agent, site_uri, query_string, our_server, ts) VALUES ('{$searchterm}', '{$user_ip}', '{$searched_sitename}', '{$i_total_this}', '{$i_total_outside}', '{$user_agent}', '{$site_uri}', '{$query_str}', '{$our_server}', '{$ts}')";

      $query = mysqli_query($connection, $count);
      if (!$query) {
        die("Failed to update search capture queries table <br>" . mysqli_error($connection));
      }
    }

?>
