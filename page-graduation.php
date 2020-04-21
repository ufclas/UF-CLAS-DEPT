<?php
  /* Template Name: 2020 Recognition */

  // h3s are the first headings (no h2s (and no h4s...))

  $date_theDay = false; // this is not being used, but it can be used as a gate to open on May 2
  $majors = array(
    "Doctoral Degrees",
    "Master's Degrees",
    "African American Studies",
    "Anthropology",
    "Astronomy / Astrophysics",
    "Biology / Botany / Zoology",
    "Chemistry / Biochemistry",
    "Classical Studies",
    "Computer Science",
    "Criminology",
    "Economics",
    "English",
    "Foreign Languages and Literatures",
    "Geography",
    "Geology",
    "History",
    "Interdisciplinary Studies",
    "International Studies",
    "Linguistics",
    "Mathematics",
    "Microbiology &amp; Cell Science",
    "Philosophy",
    "Religion",
    "Physics",
    "Political Science",
    "Psychology",
    "Religion",
    "Sociology",
    "Spanish and Portuguese",
    "Statistics",
    "Sustainability Studies",
    "Women's Studies",
  );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="<?php echo get_the_title();?>" />
	<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_ID(),'square-crop'); ?>" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="500" />
	<meta property="og:image:height" content="400" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
​
	<?php wp_head(); ?>
​
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">

</head>
<body <?php body_class(); ?>>

  <header>
    <nav>
      <ul>
        <li id="clicker_home">Home</li>
        <li id="clicker_deansMessage">Dean's Message</li>
        <li id="clicker_associateDeansMessage">Associate Dean's Message</li>
        <li id="clicker_studentHighlight">Student Message</li>
        <li id="clicker_majors">Majors</li>
        <li id="clicker_socialMedia">Social Media</li>
      </ul>
    </nav>
  </header>
​
  <script type="text/javascript">

    let jumper_home = document.querySelector("li#clicker_home").onclick = function jumpTo_home () {
      window.location = '#section_home';
    }
    let jumper_deansMessage = document.querySelector("li#clicker_deansMessage").onclick = function jumpTo_deansMessage () {
      window.location = '#section_deansMessage';
    }
    let jumper_associateDeans = document.querySelector("li#clicker_associateDeansMessage").onclick = function jumpTo_associateDeansMessage () {
      window.location = '#section_associateDeansMessage';
    }
    let jumper_studentHighlight = document.querySelector("li#clicker_studentHighlight").onclick = function jumpTo_studentHighlight () {
      window.location = '#section_studentHighlight';
    }
    let jumper_majors = document.querySelector("li#clicker_majors").onclick = function jumpTo_majors () {
      window.location = '#section_majors';
    }
    let jumper_socialMedia = document.querySelector("li#clicker_socialMedia").onclick = function jumpTo_socialMedia () {
      window.location = '#section_socialMedia';
    }

  </script>

  <main>
    <section id="section_home">
      <p>University of Florida</p>
      <h3>College of Liberal Arts and Sciences</h3>
      <p>Virtual Graduation Celebration</p>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <p>-- MAY 2, 2020 --</p>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wings.png" alt="">
    </section>
​
    <!-- 1. Dean's Message -->
    <section id="section_deansMessage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <h3>CONGRATULATIONS</h3>
      <p>from Dean David Richardson</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/jD9VJ92xyzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <!-- 2. Associate Dean's Message -->
    <section id="section_associateDeansMessage">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <h3>CONGRATULATIONS</h3>
      <p>from Associate Dean Joe Spillane</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/mhDJNfV7hjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <!-- 3. Student Highlights -->
    <section id="section_studentHighlights">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <h3>CONGRATULATIONS</h3>
      <p>from Student Highlights</p>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/PUP7U5vTMM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <!-- 4. College Majors -->
    <section id="section_majors">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <h3>CONGRATULATIONS</h3>
      <p>from College Majors</p>
      <ul>
        <?php modals_listMajors($majors); ?>
      </ul>
      <?php
        /*
          MODALS
            - have three options:

          1. a hard-coded version of the modals is in the "/inc/" folder. See commented 'include' line below)
          2. Another other option is to add them to the list above the header in this document
          3. And they can always be straight up hard-coded in the document here
        */

        /* include the hard-coded modals list */
        // include 'inc/modal_majors_hardCoded.php';
      ?>
    </section>
    <!-- 4. /College Majors -->

    <!-- 5. Social Media / "instagram" -->
    <section id="section_socialMedia">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/graphic_flair.png" alt="">
      <h3>Instagram</h3>
    </section>


  </main>​
  <script src="http://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
