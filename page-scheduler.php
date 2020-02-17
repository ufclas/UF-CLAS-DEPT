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

    </style>
  </head>
  <body>

    <?php if (!$unlock) { ?>

      <p><a href="<?php echo the_permalink(); ?>">Available now</a> <?php if (false) {echo "next available"; } ?></p>

      <hr>
      <form action="<?php echo the_permalink(); ?>" method="post">
        <input type="text" name="search_schedules" value="" placeholder="search">
        <input type="submit" name="search_schedule_submit" value="search">
      </form>
      <hr>
      <h2>Days</h2>
      <ul class="menu_nav">
        <?php
          foreach ($list_days as $day) { ?>
            <li><a href="<?php the_permalink(); ?>?menu=days&show=<?php echo $day; ?>"><?php echo $day; ?></a></li>
          <?php } ?>
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
      <ul>
        <?php
          foreach ($list_people as $person) {
            echo "<li>{$person}</li>";
          }
        ?>
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
          foreach ($list_days as $day) { ?>
            <li><a <?php if ($day == $show) {echo "class=\"highlight_list_item\" "; } ?>href="<?php the_permalink(); ?>?menu=days&show=<?php echo $day; ?>"><?php echo $day; ?></a></li>
          <?php } ?>
      </ul>
      <!-- menu nav -->

      <?php
        foreach (days_details($show) as $person => $list_schedule) {
          echo "<h3>{$person}</h3>";
          p($list_schedule);
        }
      ?>

    <?php } ?>


    <!-- // ROLES ROLES ROLES  -->
    <?php if ($menu == "roles") { ?>
      <ul class="menu_nav">
        <?php
          foreach ($list_roles as $role) { ?>
            <li><a <?php if ($role == $show) {echo "class=\"highlight_list_item\"";} ?> href="<?php the_permalink(); ?>?menu=roles&show=<?php echo $role; ?>"><?php echo $role; ?></a></li>
        <?php } ?>
      </ul>
      <?php schedule_details($show); ?>
    <?php } // end days ?>


  <?php } // END ?>
