<?php
/*
  fixlist:
    - NEED TO CONVERT TO WORK ON LOCALHOST AND SERVER AND SERVER
    - timeslots print in the order they're inserted -- this could be rearranged programatically
    - office hour times can also conflict with teaching periods without warning
*/

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
          // website
          if ($list_row['meta_key'] == "member-website") {
            $list_master[$role_title][$role_member]['website'] = $list_row['meta_value'];
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

      // ease-of-use back-end function
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


          // echo "<pre>";
          //   print_r($list_master);
          // echo "</pre>";
          // echo "<pre>";
          // print_r($list_master['faculty']);
          // echo "</pre>";


// Function: "People" for displaying page i, drop down through JavaScript
// Function: "People" for displaying page i, drop down through JavaScript



          function list_master_person($selected_parameter) {
            global $list_master;
            $list_master_teaching_schedule = array();
            foreach ($list_master as $role => $people) {

              // echo "<pre>";
              // print_r($people);
              // echo "</pre>";
                foreach ($people as $person => $list_core) {
                  // selected parameter


                  // $role = "foo";
                  if ($person == $selected_parameter) {

                    foreach ($list_master as $role_role => $role_people) {
                      foreach ($role_people as $role_person => $role_list_core) {
                        if ($role_person == $selected_parameter) {
                          // it's struggling with this (role setting) because the person is the subset of the role -- so role > person > person deets, so it's defaulting from the loop
                          // to the point that this is kind of redundant because the person wont exist in the system if they dont have a role because roles are the master keys
                          $role_baz = !empty($role_role) ? $role_role : "";
                        }
                      }
                    }
                    $email    = !empty($list_core['email'])   ? $list_core['email']   : "";
                    $phone    = !empty($list_core['phone'])   ? $list_core['phone']   : "";
                    $website  = !empty($list_core['website']) ? $list_core['website'] : "";



                    foreach ($list_core as $core => $variable_values) {
                      if ($core == "teaching_schedule") {
                        foreach ($variable_values as $day => $list_slots_check) {
                          foreach ($list_slots_check as $slot => $check) {
                            if (!empty($check)) {
                              $list_master_teaching_schedule['teaching_schedule'][$day][] = $check;
                            }
                          }
                        }
                      }
                      if ($core == "office_hours") {
                        foreach ($variable_values as $day => $list_slots_check) {
                          foreach ($list_slots_check as $slot => $list_port_time) {
                            foreach ($list_port_time as $port => $time) {
                              if (!empty($time)) {
                                $list_master_teaching_schedule['office_hours'][$day][$slot][$port] = $time;
                              }
                            }
                          }
                        }
                      }
                    }
                  } // if person == parameter
                } // loop details
              } // master loop

             $super_list = array(
               "role"     => $role_baz,
               "email"    => $email,
               "phone"    => $phone,
               "website"  => $website,
               "schedule" => $list_master_teaching_schedule
             );

             foreach ($super_list as $key => $value) {
               // if (!empty($value)) {
                 $list_person[$key] = $value;
               // }
             }

             return $list_person;


            } // / list master person function ()


// Function: "days" for displaying page ii
// Function: "days" for displaying page ii
// Function: "days" for displaying page ii
          function days_details($selected_parameter) {
            global $list_master;
            $list_master_days = array();
            foreach ($list_master as $role => $people) {
              foreach ($people as $person => $list_core) {
                foreach ($list_core as $core => $variable_values) {
                  if ($core == "teaching_schedule") {
                    foreach ($variable_values as $day => $list_slot_check) {
                      foreach ($list_slot_check as $slot => $check) {
                        if (!empty($check) && $day == $selected_parameter) {
                          $list_master_days[$person]['teaching_schedule'][] = $check;
                        }
                      }
                    }
                  }

                  if ($core == "office_hours") {
                    foreach ($variable_values as $day => $list_slot_port) {
                      foreach ($list_slot_port as $slot => $list_port) {
                        foreach ($list_port as $port => $time) {
                          if (!empty($time) && $day == $selected_parameter) {
                            $list_master_days[$person]['office_hours'][$slot][$port] = $time;
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
            return $list_master_days;
          } // / Function by Days



// Function: "Roles" for displaying page ii
          function schedule_details($selected_parameter) {
            global $list_master;
            foreach ($list_master as $role => $people) {
              foreach ($people as $person => $list_core) {
                // selected parameter
                if ($selected_parameter == $role) {
                  // a person kind of has to exist since scheduler's base array (after seed) is created by roles
                  echo "<h3>{$person}</h3>";
                  // if phone exists
                  if (!empty($list_core['phone'])) {
                    echo "<p>".$list_core['phone']."</p>";
                  }
                  // if email exists
                  if (!empty($list_core['email'])) {
                    echo "<p>".$list_core['email']."</p>";
                  }
                  // if email exists
                  if (!empty($list_core['website'])) {
                    echo "<p><a href=\"".$list_core['website']."\" target=\"_blank\">".$list_core['website']."</a></p>";
                  }

                  $list_master_teaching_schedule = array();
                  $list_master_office_hours = array();
                  // schedule factoring "schedule times" should be cool because its only being practically called here and for the two schedules
                  foreach ($list_core as $core_one => $schedule_times) {
                    // try to find teaching times
                    if ($core_one == "teaching_schedule") {
                      foreach ($schedule_times as $day => $list_period_structure) {
                        foreach ($list_period_structure as $nullCheck_key_period => $scheduled_period) {
                          if (!empty($scheduled_period)) {
                            $list_master_teaching_schedule['teaching_schedule'][$day][] = $scheduled_period;
                          }
                        }
                      }
                    } // /teaching schedule

                    // if office hours exist
                    if ($core_one == "office_hours") {
                      foreach ($schedule_times as $day => $list_period_structure) {
                        foreach ($list_period_structure as $slot => $list_ports) {
                          foreach ($list_ports as $port => $time) {
                            if (!empty($time)) {
                              $list_master_office_hours[$day][$slot][$port] = $time;
                            }
                          }
                        }
                      }
                    } // /office hours
                  }// schedule factoring


                if (!empty($list_master_teaching_schedule)) {
                  echo "<h4>Teaching Schedule</h4>";
                  echo "<table>";
                  foreach ($list_master_teaching_schedule as $null_name => $list_dayTime) {
                    foreach ($list_dayTime as $day => $list_period) {
                      echo "<tr>";
                      echo     "<td>{$day}</td>";
                      echo     "<td>";
                      foreach ($list_period as $period_slot => $value_period) {
                        if (!empty($value_period)) {
                          echo $value_period;
                          if ($value_period !== end($list_period)) {
                            echo ", ";
                          }
                        }
                      }
                      echo    "<td>";
                      echo "</tr>";
                    }
                  }
                  echo "</table>";
                }

                  // print office hours
                  if (!empty($list_master_office_hours)) {
                    echo "<h4>Office Hours</h4>";
                    foreach ($list_master_office_hours as $day => $list_slot) {
                      echo "<h5>{$day}</h5>";
                      foreach ($list_slot as $slot => $list_port) {
                        foreach ($list_port as $port => $time) {
                          $time = date('g:i a', strtotime($time));
                          echo $time;
                          if ($port == "start") {
                            echo " to ";
                          }
                          if ($port == "end") {
                            echo "<br>";
                          }
                        }
                      }
                    }
                  } // print office hours
                } // if argument == argument
              } // loop role people
            } // loop list_master
          } // /end show(function)


          function aggitate_teaching_schedule($masterList) {
            foreach ($masterList as $day => $list_periods) {
                  echo "<h5>{$day}</h5>";
                  echo "<p>";
                  foreach ($list_periods as $null_index => $period) {
                    echo $period;
                    if ($period !== end($list_periods)) {
                      echo ", ";
                    }
                  }
                  echo "</p>";
                }
          }


          function aggitate_office_hours ($masterList) {
            foreach ($masterList as $day => $list_slot) {
              echo "<h5>{$day}</h5>";
              foreach ($list_slot as $slot => $list_port) {
                foreach ($list_port as $port => $time) {
                  $time = date('g:i a', strtotime($time));
                  echo $time;
                  if ($port == "start") {
                    echo " to ";
                  }
                  if ($port == "end") {
                    echo "<br>";
                  }
                }
              }
            }
          } // function aggitate office hours



// function search, search, search
          function search ($list_of_keys) {
            global $list_master;

            // echo "<pre>";
            //   print_r($list_master);
            // echo "</pre>";

            // cycle keys with search_key
            foreach ($list_of_keys as $search_key) {
              // list_master
              foreach ($list_master as $role => $people) {
                foreach ($people as $person => $details) {
                  if ($search_key == $person) {
                    // they have to be exact because originations
                    $list[$person] = array();
                  }
                  foreach ($details as $core => $variable_values) {
                    // clear gate [string]
                    if (is_string($variable_values)) {
                      if (strpos($variable_values, $search_key) !== false) {
                        //calling search_term to replace / highlight
                        // dont do this
                        // $variable_values = str_replace("{$search_term}","<span class=\"strong\">{$search_term}</span>",$variable_values);
                        // you dont really need to add the complexity to the list since the name[key] will become the trigger
                        $list[$person][$core] = $variable_values;
                      }
                    }
                  }
                }
              }
            }
            if (!empty($list)) {
              ksort($list);
            } else {
              $list = array();
            }
            return $list;
          } // end function (search)

// final function parse search results and prepare for javascript
// this is fragile because it's specific to be called within the overall search function looping through the keysList
          function parse_search($name, $list_master_person) {
            echo "<h4>{$name}</h4>";

            foreach ($list_master_person as $core => $variable_values) {

              if (!empty($variable_values)) {
                if (is_string($variable_values)) {
                  echo "<li>{$variable_values}</li>";
                }
                if (is_array($variable_values)) {

                  foreach ($variable_values as $schedule_type => $list_variables) {

                    if ($schedule_type == "teaching_schedule") {

                      echo "<li>Teaching Schedule</li>";
                      echo "<table>";
                      foreach ($list_variables as $day => $list_periods) {
                        echo "<tr><td>{$day}</td>";
                        foreach ($list_periods as $slot => $period) {
                          echo "<td>{$period}";
                          if ($period !== end($list_periods)) {
                            echo ", ";
                          }
                          echo "</td>";
                        }
                        echo "</tr>";
                      }
                      echo "</table>";
                    }
                    if ($schedule_type == "office_hours") {
                      echo "<li>Office Hours</li>";
                      foreach ($list_variables as $day => $list_slot) {
                        echo "<p>{$day}</p>";
                        foreach ($list_slot as $slot => $list_port) {
                          foreach ($list_port as $port => $time) {
                            $time = date('g:i a', strtotime($time));
                            echo $time;
                            if ($port == "start") {
                              echo " to ";
                            }
                            if ($port == "end") {
                              echo "<br>";
                            }
                          }
                        }
                      }
                    }
                  }



                }
              } // if !empty values
            }

          }



// function /search, /search, /search



?>
