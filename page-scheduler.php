<?php
/* Template Name: Scheduler */
  // set timezone to local time (a little unsure about relying on this method)
  date_default_timezone_set("America/New_York");
  include("inc/scheduler_mechanics.php");
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

    </style>
  </head>
  <body>

    <p><a href="<?php echo the_permalink(); ?>">Available now</a> <?php if (false) {echo "next available"; } ?></p>

    <hr>
    <form action="<?php echo the_permalink(); ?>" method="post">
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

    <h2>Days</h2>
    <ul>
      <?php
      foreach ($days as $key_day_numeric => $value_day_verbal) { ?>
        <li><a href="<?php echo the_permalink(); ?>"><?php echo $value_day_verbal; ?></a></li>
      <?php } // End DAYS loop ?>
    </ul>

    <hr>

    <h2>Roles</h2>

    <?php
      foreach ($list_role_master as $role => $people) {
        echo "<h3>{$role}</h3>";
        echo "<ul>";
        foreach ($people as $null_list => $person) {
          echo "<li>{$person}</li>";
        }
        echo "</ul>";
      }
    ?>

    <hr>

    <h2>People</h2>
    <ul>
    <?php
      foreach ($list_team_members as $person) {
        echo "<li>{$person}</li>";
      }
    ?>
    </ul>

    <hr>

    <h2>Schedule Builder</h2>
    <form action="<?php echo the_permalink(); ?>" method="get">
      <?php $i = 0; foreach ($list_team_members as $person) { ?>
        <input id="person_<?php echo $i; ?>" type="checkbox" name="person_<?php echo $i; ?>" value="<?php echo $person; ?>">
        <label for="person_<?php echo $i; ?>"><?php echo $person; ?></label>
        <br>
      <?php $i++; } ?>
      <input type="submit" name="submit" value="create schedule list">
    </form>

    <script type="text/javascript">

    </script>
