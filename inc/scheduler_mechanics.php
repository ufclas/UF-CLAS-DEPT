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

  $list_tempGen = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $list_tempGen[] = $row;
  }

  $list_master_roles = array();
  $list_team_members = array();

  foreach ($list_tempGen as $null_key => $list_row) {

    // echo "<pre>";
    //   print_r($list_row);
    // echo "</pre>";

    // 1.1 People
    if (!in_array($list_row['post_title'], $list_team_members)) {
      $list_team_members[] = $list_row['post_title'];
    }

    // 2.1 Roles
    if (!in_array($list_row['slug'], $list_master_roles)) {
      $list_master_roles[] = $list_row['slug'];
    }

  } // don't touch this, alex. It's instantiation for base arrays


// 0.1 days
  $days = array(
    "1" => "monday",
    "2" => "tuesday",
    "3" => "wednesday",
    "4" => "thursday",
    "5" => "friday",
    "6" => "saturday"
  );

  // create days list for the master time loop
  foreach ($days as $day) {
    $create_days_office_hours[$day] = array(
      "1" => array("start" => "", "end" => ""),
      "2" => array("start" => "", "end" => ""),
      "3" => array("start" => "", "end" => "")
    );
  } // create pre-populating office hours list

  // create days list for the master time loop
  foreach ($days as $day) {
    $create_days_teaching_schedule[$day] = array(
      "1"  => "", "2"  => "", "3"  => "", "4"  => "", "5"  => "", "6"  => "", "7"  => "", "8"  => "", "9"  => "", "10" => ""
    );
  } // create pre-populating teaching schedule list



// 2.2 Roles
        // role create | to avoid errors
      foreach ($list_master_roles as $null_index => $role) {
        // echo $role;
        foreach ($list_tempGen as $null_key => $list_row) {
          // rewriting to empty role as string and create array
          $list_master[$role] = array();
        }
      }

      // build $list_master" // insert PEOPLE
      // $role = either fellow, faculty, faculty adjunct -- small list of roles
      foreach ($list_master_roles as $null_index => $role) {
        foreach ($list_tempGen as $null_key => $list_row) {
          // if master lists print row == little lists role
          if ($list_row['slug'] == $role) {
            $role_member = $list_row['post_title'];
            $role_title  = $list_row['slug'];
            // if alex is not in the [role] --
            if (!in_array($role_member, $list_master[$role_title])) {
              $list_master[$role_title][$role_member] = array(
                'office_hours'      => $create_days_office_hours,
                'teaching_schedule' => $create_days_teaching_schedule
               );
            } // in_array (member)
          } // if slug == role
        } // list_row
      } // master

      foreach ($list_master_roles as $null_index => $role) {
        foreach ($list_tempGen as $null_key => $list_row) {
          $role_member = $list_row['post_title'];
          $role_title  = $list_row['slug'];
          $role_period = $list_row['meta_value'];

          // 2.2.1 office hours
          if (strpos($list_row['meta_key'], "appt") !== false) {
            $role_appt = $list_row['meta_key'];   // appt_day_slot_port
            $role_time = $list_row['meta_value']; // 16:00
            $role_appt = str_replace("appt_","", $role_appt); // saturday_3_1 | monday_1_0
            $explode_appt = explode("_", $role_appt);
            $role_appt_day  = $explode_appt['0']; // saturday
            $role_appt_slot = $explode_appt['1']; // 3
            $role_appt_port = $explode_appt['2']; // 1
            foreach ($days as $numeric => $day) {
              if ($day === $role_appt_day) {
                if ($role_appt_port == "0") {
                  $list_master[$role_title][$role_member]['office_hours'][$day][$role_appt_slot]['start'] = $role_time;
                }
                if ($role_appt_port == "1") {
                  $list_master[$role_title][$role_member]['office_hours'][$day][$role_appt_slot]['end'] = $role_time;
                }
              }
            }
          } // office Hours


          // 2.2.2 teaching schedule
          if (strpos($list_row['meta_key'], "period") !== false) {

            $role_member = $list_row['post_title'];
            $role_title  = $list_row['slug'];
            $role_period = $list_row['meta_value'];

            $role_period    = str_replace("period_","",$role_period);
            $explode_period = explode("_", $role_period);

            $period_day  = $explode_period['0'];
            $period_slot = $explode_period['1'];

            foreach ($list_master[$role_title][$role_member]['teaching_schedule'][$period_day] as $key_period => $empty_value) {
              if ($key_period == $period_slot) {
                $list_master[$role_title][$role_member]['teaching_schedule'][$period_day][$key_period] = $period_slot;
              }
            }
          } // teaching schedule
        }
      }


      // echo "<pre>";
      //   print_r($list_master);
      // echo "</pre>";


?>
