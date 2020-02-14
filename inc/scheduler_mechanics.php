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
    // create SEED list
    $list_tempGen[] = $row;
  }

  $list_master_roles = array();
  $list_team_members = array();

  foreach ($list_tempGen as $null_key => $list_row) {

    // echo "<pre>";
    //   print_r($list_row);
    // echo "</pre>";

    // grab the base variables, roles and people
    // Roles
    if (!in_array($list_row['slug'], $list_master_roles)) {
      $list_master_roles[] = $list_row['slug'];
    }

    // People
    if (!in_array($list_row['post_title'], $list_team_members)) {
      $list_team_members[] = $list_row['post_title'];
    }

  } // instantiation for base arrays


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
      // add additional meeting time slots here
    );
  } // create pre-populating office hours list

  // create days list for the master time loop
  foreach ($days as $day) {
    $create_days_teaching_schedule[$day] = array(
      "1"  => "", "2"  => "", "3"  => "", "4"  => "", "5"  => "", "6"  => "", "7"  => "", "8"  => "", "9"  => "", "10" => ""
    );
  } // create pre-populating teaching schedule list


  // role create | to avoid errors
  foreach ($list_master_roles as $null_index => $role) {
    // echo $role;
    foreach ($list_tempGen as $null_key => $list_row) {
      // rewriting to empty role as string and create array
      $list_master[$role] = array();
    }
  }

// List Master | General Structure | inserting people and creating lower-level strucutre
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
                'email'             => "",
                'phone'             => "",
                'teaching_schedule' => $create_days_teaching_schedule,
                'office_hours'      => $create_days_office_hours
               );
            } // in_array (member)
          } // if slug == role
        } // list_row
      } // master

// DETAILS -- setting lower-level information: email, phone, officeHours, teachingSchedule
      foreach ($list_master_roles as $null_index => $role) {
        foreach ($list_tempGen as $null_key => $list_row) {
          $role_member = $list_row['post_title'];
          $role_title  = $list_row['slug'];
          $role_period = $list_row['meta_value'];

          // email
          if ($list_row['meta_key'] == "member-email") {
            $list_master[$role_title][$role_member]['email'] = $list_row['meta_value'];
          }
          // phone
          if ($list_row['meta_key'] == "member-phone") {
            $list_master[$role_title][$role_member]['phone'] = $list_row['meta_value'];
          }

          // teaching schedule
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

          // office hours
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
        }
      }


      // echo "<pre>";
      //   print_r($list_master);
      // echo "</pre>";


      // $master_core_four = array(
      //   "email",
      //   "phone",
      //   "office_hours",
      //   "teaching_schedule"
      // );

      function p($list) {
        echo "<pre>";
          print_r($list);
        echo "</pre>";
      }


      // make days that have scheduled events
      $list_days = array();
          foreach ($list_master as $role => $people) {
            foreach ($people as $person => $schedule) {
              foreach ($schedule as $type => $times) {

                // "teaching_schedule" => "ts"
                if ($type == "teaching_schedule") {
                  foreach ($times as $day_ts => $list_ts) {
                    foreach ($list_ts as $key_ts_slot => $value_ts_slot) {
                      if (!empty($value_ts_slot)) {
                        if (!in_array($day_ts, $list_days)) {
                          $list_days[] = $day_ts;
                        }
                      }
                    }
                  }
                } // /if teaching_schedule

                // "office_hours" => "oh"
                if ($type == "office_hours") {
                  foreach ($times as $day_oh => $list_oh) {
                    foreach ($list_oh as $key_oh_slot => $list_oh_ports) {
                      foreach ($list_oh_ports as $port => $oh_time) {
                        if (!empty($oh_time)) {
                          if (!in_array($day_oh, $list_days)) {
                            $list_days[] = $day_oh;
                          }
                        }
                      }
                    }
                  }
                } // /if office_hours


              }
            }
          }
          // need to sort


          // roles
          $list_roles = array();
          foreach ($list_master as $role => $people) {
            if (!in_array($role, $list_roles)) {
              $list_roles[] = $role;
            }
          }
          sort($list_roles);

          // people
          $list_people = array();
          foreach ($list_master as $role => $people) {
            foreach ($people as $person => $null_list) {
              if (!in_array($person, $list_people)) {
                $list_people[] = $person;
              }
            }
          }
          sort($list_people);


          // Master Show
          function show($selected_parameter) {
            global $list_master;
            foreach ($list_master as $role => $people) {
              foreach ($people as $person => $list_core) {

                // selected parameter
                if ($selected_parameter == $role) {
                  // a person kind of has to exist since scheduler's base array (after seed) is created by roles
                  echo "<h3>{$person}</h3>";
                  // if phone exists
                  if (!empty($list_core['phone'])) { ?>
                    <p><?php echo $list_core['phone']; ?></p>
                  <?php }
                  // if email exists
                  if (!empty($list_core['email'])) { ?>
                    <p><?php echo $list_core['email']; ?></p>
                  <?php }

                  // schedule factoring
                  foreach ($list_core as $core_four => $semiNull_variable_core_values) {
                    // if teaching periods exist
                    // if ($core_four == )
                    echo "<pre>";
                      print_r($core_four);
                    echo "</pre>";
                    // if office hours exist

                  }
                }
              }
            }
          }



?>
