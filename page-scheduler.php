<?php
/* Template Name: Scheduler */
  // set timezone to local time (a little unsure about relying on this method)
  date_default_timezone_set("America/New_York");
  // pair: person => schedule
  include("inc/scheduler_mechanics.php");

  // echo "<pre>";
    // print_r($days);
    // print_r($terms);
    // print_r($list_teamMembers);
    // print_r($list_master_schedule);
    // print_r($list_master_positions);
  // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style media="screen">
      a, .user_information_toggle {
        color: #2A5DB0;
      }
    </style>
  </head>
  <body>

    <p><a href="#">Available now</a> <?php if (false) {echo "next available"; } ?></p>

    <hr>
    <form class="" action="<?php echo the_permalink(); ?>" method="post">
      <input type="text" name="search_schedules" value="" placeholder="search">
      <input type="submit" name="search_schedule_submit" value="search">
    </form>

    <?php
      if (isset($_POST['search_schedule_submit'])) {
        echo "<p><i>&quot;";
        echo $_POST['search_schedules'];
        echo "&quot;</i></p>";
      }
    ?>

    <hr>

    <!--

      Sort No. 1: Days of the Week | Days of the Week | Days

    -->

    <ul>
      <?php
      foreach ($days as $key_day_numeric => $value_day_verbal) { ?>
        <li><a href=\"#\"><?php echo $value_day_verbal; ?></a></li>

        <?php
          foreach ($list_master_schedule as $id => $vars) {

          }

      } // End DAYS loop

       ?>
    </ul>



  <hr>





<?php
  echo "<ul>";
    // scheduler_mechanics | 119
    foreach ($list_master_positions as $position) {
      echo "<li>{$position}</li>";
      echo "<i>javascript</i>";
    }
  echo "</ul>";
?>

<hr>

<?php
    echo "<ul>";
    foreach ($list_teamMembers as $key_user_id => $value_user_name) {
      echo "<li class=\"user_information_toggle\">{$value_user_name}</li>";
    }
    echo "</ul>";
?>
