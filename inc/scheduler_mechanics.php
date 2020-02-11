<?php

// js office hours finesse
// NEED TO CONVERT TO WORK ON LOCALHOST AND SERVER AND SERVER

// $host = "ls-web-data01.clas.ufl.edu";
// $user = "clasdev";
// $pass = "QsQWoGbqymP=bZQ";
// $data = "clas_test";

$host = "localhost";
$user = "root";
$pass = "";
$data = "alex";

$link = mysqli_connect($host, $user, $pass, $data);
if (!$link) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

  $current_blog_id = get_current_blog_id();

  $count    = "SELECT ";
    $count .= "ID, post_title, ";
    $count .= "object_id, term_taxonomy_id, ";
    $count .= "term_id, name, slug, ";
    $count .= "post_id, meta_key, meta_value ";

  $count   .= "FROM ";
    $count .= "wp_posts, ";
    $count .= "wp_term_relationships, ";
    $count .= "wp_terms, ";
    $count .= "wp_postmeta ";

  $count   .= "WHERE ";
    $count .= "post_type = 'clas_team_members' AND post_status = 'publish' ";
    $count .= "AND ";
    $count .= "wp_posts.ID = wp_term_relationships.object_id ";
    $count .= "AND ";
    $count .= "wp_term_relationships.term_taxonomy_id = wp_terms.term_id ";
    $count .= "AND ";
    $count .= "wp_postmeta.post_id = wp_term_relationships.object_id";

  $query = mysqli_query($link, $count);

  $list_master = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $list_master[] = $row;
  }

  $list_master_roles = array();
  $list_team_members = array();

  foreach ($list_master as $null_key => $list_row) {

    // echo "<pre>";
    //   print_r($list_row);
    // echo "</pre>";

    // 1. Roles
    if (!in_array($list_row['name'], $list_master_roles)) {
      $list_master_roles[] = $list_row['name'];
    }

    // 2. People
    if (!in_array($list_row['post_title'], $list_team_members)) {
      $list_team_members[] = $list_row['post_title'];
    }



  }

  $days = array(
    "1" => "monday",
    "2" => "tuesday",
    "3" => "wednesday",
    "4" => "thursday",
    "5" => "friday",
    "6" => "saturday"
  )




?>
