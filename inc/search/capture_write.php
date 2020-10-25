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


    $searchfor  = sanitize_searchEntry($searchfor);
    // y tho?
    $searchterm = $searchfor;
    if (strlen($searchterm) > 299) {
      $searchterm = substr($searchterm, 0, 255);
    }
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
    // time updated through timestamp in column
    $count = "INSERT INTO search_capturequeries (searchterm, ip, user_agent, searched_sitename, site_uri, query_str, our_server, i_inside, i_outside) VALUES ('{$searchterm}', '{$user_ip}', '{$user_agent}', '{$searched_sitename}', '{$site_uri}', '{$query_str}', '{$our_server}', '{$i_total_this}', '{$i_total_outside}')";

    $query = mysqli_query($connection, $count);
    if (!$query) {
      die("Failed to update search capture queries table <br>" . mysqli_error($connection));
      // die(mysqli_error($connection));
    }

?>
