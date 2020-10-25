<?php if ($exception) { ?>
  <div id="container_exception">
    <?php
    // STARS has inconsistent naming conventions for its images and hasn't provided an API key to query these, so exceptions have to be written
    $imageExceptions = array("0092", "0747", "0497");
    foreach ($imageExceptions as $value_imageException) {
        if ($bldg == $value_imageException) {
          $graph_imageExtension = "JPG";
          break;
        } else {
          $graph_imageExtension = "jpg";
        }
    } ?>
    <img src="https://campusmap.ufl.edu/library/photos/stars/B<?php echo $bldg.".".$graph_imageExtension; ?>" alt="<?php echo $value_building['fullName']; ?>">
    <iframe src="https://campusmap.ufl.edu/#/index/<?php echo $bldg; ?>/17" width="100%" height="200"></iframe>

      <?php
        if ($exception == "exception_department") {
          echo "<h3>".ucwords($key_department)."</h3>";
          echo "<p>{$exception_building_address}</p>";


        } else if ($exception == "exception_building") {
          echo "<h3>".$value_department['location']."</h3>";
        }
      ?>
      <!-- <p id="graph_alertMediaServicesOfChange">Need to change this information?</p> -->
  </div>
  <!-- contianer exception -->
  <!-- contianer exception -->
  <!-- contianer exception -->
<?php } ?>
