<?php

$host = "ls-web-data01.clas.ufl.edu";
$user = "clasdev";
$pass = "QsQWoGbqymP=bZQ";
$data = "clas_test";
$link = mysqli_connect($host, $user, $pass, $data);
if (!$link) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

$current_blog_id = get_current_blog_id();


  $terms = array();
  $count_terms = "SELECT * FROM wp_".$current_blog_id."_terms";
  $query_terms = mysqli_query($link, $count_terms);

  while ($row = mysqli_fetch_assoc($query_terms)) {
    $terms[$row['term_id']] = $row['slug'];
  }

  // echo "<pre>";
  //   print_r($terms);
  // echo "</pre>";

$args = array(
  'post_type' => 'clas_team_members',
  'order'     => 'ASC'
);
// The Query
$the_query = new WP_Query( $args );
$list_teamMembers = array();
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $list_teamMembers[get_the_id()] = get_the_title();
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

  $count = "SELECT * FROM wp_".$current_blog_id."_postmeta";
  $query = mysqli_query($link, $count);

  $list_teamMembers; // [0000] = User Name
  $list_master_schedule = array();

  // merge (id/name, schedule, position)
  while ($row = mysqli_fetch_assoc($query)) {
    // pre $row here
    foreach ($list_teamMembers as $key_user_id => $value_user_name) {
      if ($row['post_id'] == $key_user_id) {

        // get position from _category_permalink
        if ($row['meta_key'] == "_category_permalink") {

          $positionString = $row['meta_value'];

          // two explode versions try to ensure both values are the same before setting
          // semi method
          $explode_semi = explode(";", $positionString);
          $semi_string = $explode_semi[1];
          $explode_semi_string = explode(":", $semi_string);
          $semi = str_replace("\"","", $explode_semi_string[2]);
          $semi;
          // quote method
          $explode_quot = explode("\"", $positionString);
          $quot = $explode_quot[3];
          $quot;

          if ($quot == $semi) {
            $list_master_schedule[$key_user_id]['position'] = $semi;
            // switch: numeric to verbal term for user position
            foreach ($terms as $key_code => $value_code) {
              if ($key_code == $semi) {
                $list_master_schedule[$key_user_id]['position'] = $value_code;
              }
            }
          } else {
            $list_master_schedule[$key_user_id]['position'] = "There's an error in the scheduler mechanics document mishandling the user position processing.";
          }
        } // get position from _category_permalink

        // "period" | teaching schedule
        if (strpos($row['meta_key'], "period") !== false) {
          $list_master_schedule[$key_user_id]['period'][] = $row['meta_value'];
        }

        // "appt" office hours
        if (strpos($row['meta_key'], "appt_") !== false) {
           $list_master_schedule[$key_user_id]['appt'][$row['meta_key']] = $row['meta_value'];
        }

        // name = value_name from $list_teamMembers | it's probably doing this 30 times a person -- but i think it's worth not writing the delimitating statement
        $list_master_schedule[$key_user_id]['name'] = $value_user_name;
      }
    }
  }

  $list_master_positions = array();
  foreach ($list_master_schedule as $key_user_id => $value_user_information) {
    if (!in_array($value_user_information['position'], $list_master_positions)) {
      $list_master_positions[] = $value_user_information['position'];
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


  /* key structure: alex catalano, 2/5/2020
  ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ----
    $list_master_schedule (

      [1205] => Array (
        [name]     => Albert Gator
        [position] => graduate-student
        [period]   => Array(
          [0] => period_monday_1
          [1] => period_monday_2
        )
        [appt] => Array(
          [appt_wednesday_1_0] => 13:00
          [appt_wednesday_1_1] => 01:15
          [appt_saturday_1_0]  => 14:59
          [appt_saturday_1_1]  => 16:00
          [appt_monday_1_0]    => 13:00
          [appt_monday_1_1]    => 13:03
          [appt_monday_2_0]    => 16:00
          [appt_monday_2_1]    => 16:03
        )
      )

    );

  ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ----

    $days                   (index => day)
    $terms                  (index => category)
    $list_teamMembers;      (id    => name)
    $list_master_schedule   (id    => name,position,period,appt)
    $list_master_positions  (key   => position_verbal)

  ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ---- ----- ----- ----- ----


    Array (
      [meta_id]    => 7662
      [post_id]    => 1198
      [meta_key]   => period_saturday_2
      [meta_value] => period_saturday_2
    )

    Array (
      [meta_id]    => 8332
      [post_id]    => 1198
      [meta_key]   => appt_wednesday_1_0
      [meta_value] => 13:00
    )
*/




?>
