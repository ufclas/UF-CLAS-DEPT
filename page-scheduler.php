<?php
/* Template Name: Scheduler */
  // set timezone to local time (a little unsure about relying on this method)
  date_default_timezone_set("America/New_York");
  include("inc/scheduler_mechanics.php");

  $unlock = false;
  // steady processing
  if (isset($_GET['menu'])) {
    $unlock = true;
    $menu = $_GET['menu'];
    $show = $_GET['show'];
  }

  $search_term = "";

  if (isset($_GET['exception'])) {
    $search_term = $_GET['search'];
  }


  // if (isset($_POST['search_schedule_submit'])) {
  //   echo "<p><i>&quot;";
  //   echo $_POST['search_schedules'];
  //   echo "&quot;</i></p>";
  // }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style media="screen">

      body {
        width: 400px;
        margin: auto;
      }

      a, .user_information_toggle {
        color: #2A5DB0;
      }

      .menu_nav li a {
        text-decoration: none;
      }

      a.highlight_list_item {
        font-weight: bold;
        text-decoration: underline;
      }

      /* .container_personsDetails {
        display: none;
      } */

      /* javascript javascript javascript */

      .toggs {display: none;}

      .cursorPointer {
        text-decoration: none;
        cursor: pointer;
      }

      .cursorPointer:hover {
        text-decoration: underline;
      }

    </style>
  </head>
  <body>

    <?php if (!$unlock) { ?>

      <p><a href="<?php echo the_permalink(); ?>">Available now</a> <?php if (false) {echo "next available"; } ?></p>

      <hr>
      <form action="<?php echo the_permalink(); ?>" method="post">
        <input type="text" name="search_schedules" value="<?php echo $search_term; ?>" placeholder="search">
        <input type="submit" name="search_schedule_submit" value="search">
      </form>
      <hr>
      <h2>Days</h2>
      <ul class="menu_nav">
        <?php
        foreach ($days as $numeric_day => $verbal_day) {
          foreach ($list_days as $null_index => $day) {
            if ($verbal_day == $day) { ?>
              <li><a href="<?php the_permalink(); ?>?menu=days&show=<?php echo $day; ?>"><?php echo $day; ?></a></li>
            <?php }
          }
        } ?>

      </ul>
      <hr>
      <h2>Roles</h2>
      <ul class="menu_nav">
        <?php
          foreach ($list_roles as $role) { ?>
            <li><a href="<?php the_permalink(); ?>?menu=roles&show=<?php echo $role; ?>"><?php echo $role; ?></a></li>
        <?php } ?>
      </ul>
      <hr>
      <h2>People</h2>
      <ul class="menu_nav">
          <?php $i = 1; ?>
         <?php foreach ($list_people as $person) { ?>
           <li class="cursorPointer" id="remote<?php echo $i; ?>"><?php echo $person; ?></li>
           <!-- <li class="cursorPointer" id="remote<?php echo $i; ?>"><a href="<?php echo the_permalink(); ?>?showPerson=<?php echo urlencode($person); ?>"><?php echo $person; ?></a></li> -->
           <?php// p(list_master_person($person)); ?>
            <div class="container_personsDetails toggs" id="toggle_<?php echo $i; ?>">
              <ul>
                <?php $n = 0;

                  // it's not writing the default faculty for amber?
                  // it's not writing the default faculty for amber?
                  // it's not writing the default faculty for amber?
                  // it's not writing the default faculty for amber?

                ?>
              <?php foreach (list_master_person($person) as $core => $list_values_variable) { ?>
                <?php if (!empty($list_values_variable)) { ?>
                   <li><?php  echo $list_values_variable; ?></li>

                <?php
              } else {
                  $n++;
                  if ($n > 5) {
                    echo $person . " doesn't have any details";
                  }
                }
                ?>


              <?php } ?>
              </ul>
            </div>
            <!-- Toggs toggle | container persons details -->
            <?php $i++; $count = $i; ?>
         <?php } ?>
      </ul>
      <hr>

<!-- page 2 -->
<!-- page 2 -->
<!-- page 2 -->

  <?php } else {
    $menu;
    $show;
  ?>
    <p><a href="<?php the_permalink(); ?>">back</a></p>
    <h2><?php echo ucfirst($menu); ?></h2>

    <?php if ($menu == "days") { ?>

      <ul class="menu_nav">
        <?php
        foreach ($days as $numeric_day => $verbal_day) {
          foreach ($list_days as $null_index => $day) {
            if ($verbal_day == $day) { ?>
              <li><a <?php if ($day == $show) {echo "class=\"highlight_list_item\" "; } ?>href="<?php the_permalink(); ?>?menu=days&show=<?php echo $day; ?>"><?php echo $day; ?></a></li>
          <?php }
          }
        } ?>
      </ul>
      <!-- menu nav -->

      <?php
      if (!empty(days_details($show))) {
        foreach (days_details($show) as $person => $list_schedule) {
          echo "<h3>{$person}</h3>";
          foreach ($list_schedule as $schedule_type => $list_details) {
            if ($schedule_type == "teaching_schedule") {
              echo "<h4>Teaching Periods</h4>";
              echo "<p>";
              foreach ($list_details as $null_index => $period) {
                echo "{$period}</li>";
                if ($period !== end($list_details)) {
                  echo ", ";
                }
              }
              echo "</p>";
            }
            if ($schedule_type == "office_hours") {
              echo "<h4>Office Hours</h4>";
              foreach ($list_details as $null_index => $list_port) {
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
      } else {
        echo "There are no events scheduled for " . ucfirst($show) . ".";
        echo "<br><br>";
        echo "Would you like to search for <a href=\"";
        the_permalink();
        echo "?search={$show}&exception=wildcard\">{$show}</a>?";
      }
      ?>

    <?php } ?>


    <!-- // ROLES ROLES ROLES  -->
    <?php if ($menu == "roles") { ?>
      <ul class="menu_nav">
        <?php
          foreach ($list_roles as $role) { ?>
            <li><a <?php if ($role == $show) {echo "class=\"highlight_list_item\"";} ?> href="<?php the_permalink(); ?>?menu=roles&show=<?php echo $role; ?>"><?php echo $role; ?></a></li>
            <?php schedule_details($show); ?>
        <?php } ?>
      </ul>
    <?php } // end days ?>


  <?php } // END ?>



    <script type="text/javascript">
      <?php for ($i = 1; $i < $count; $i++) { ?>
        let clicker<?php echo $i; ?> = document.querySelector("#remote<?php echo $i; ?>").onclick = function toggs<?php echo $i; ?> () {
          document.querySelector("#toggle_<?php echo $i; ?>").classList.toggle("toggs");
        }
      <?php } ?>
    </script>
