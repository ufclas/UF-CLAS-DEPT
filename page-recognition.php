<?php
/*
 * Template Name: Spring 2020 Recognition
 * Template Post Type: page
 */

 $date_theDay = false;
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

	<?php wp_head(); ?>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
</head>

<body <?php body_class(); ?>>
  <div class="link-landing" id="top"></div>
	<header>
		  <div class="mobile-menu" id="menuToggle">

		    <input type="checkbox" aria-label="hamburger-menu-toggle" />

		    <span></span>
		    <span></span>
		    <span></span>

		    <div id="menu">
					<div class="top-hamburger-menu">
						<div class="uf-wordmark">
			 			 <?php get_template_part('images/recognition-ceremony/uf', 'wordmark.svg'); ?>
			 		 	</div>
			 		 <h1 class="mobile">Liberal Arts & Sciences</h1>
           <h1 class="tablet">College Liberal Arts and Sciences</h1>
				 	</div>
					<nav role="navigation">
							<ul>
								<li><a href="#top">Home</a></li>
                <li><a href="#spillane">Welcome & Associate Dean’s Message</a></li>
                <li><a href="#student">Student Messages</a></li>
                <li><a href="#alumna">Alumna Message</a></li>
                <li><a href="#dean">Dean’s Message</a></li>
                <li><a href="#majors">Major Recognition</a></li>
								<li><a href="#social-media">Social Media</a></li>
							</ul>
						</nav>
		    </div>
		  </div>

      <nav class="desktop-menu" role="navigation">
        <ul>
          <li><a href="#top">Home</a></li>
          <li><a href="#spillane">Welcome & Associate Dean’s Message</a></li>
          <li><a href="#student">Student Messages</a></li>
          <li><a href="#alumna">Alumna Message</a></li>
          <li><a href="#dean">Dean’s Message</a></li>
          <li><a href="#majors">Major Recognition</a></li>
          <li><a href="#social-media">Social Media</a></li>
        </ul>
      </nav>
  </header>

  <main>
    <section id="container_graph_headers">
      <p class="graph_header">University of Florida</p>
      <p id="graph_header_titleSlug">College <span>of</span> Liberal Arts <span>and</span> Sciences</p>
      <p class="graph_header">Virtual Graduation Celebration</p>

			<!--  Flower Icon -->
      <div class="flower-icon">
				<span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
			</div>

      <p class="ceremony-date">— MAY 2, 2020 —</p>

			<!-- replace image -->
			<div class="clas-graduation-crest">
				<?php get_template_part('images/recognition-ceremony/uf', 'clas-graduation-crest.svg'); ?>
			</div>
    </section>

    <!-- 1. Associate Dean's Message -->
    <div class="link-landing" id="spillane"></div>
		<section class="associate-deans-message section-container">
			<!--  Flower Icon -->
			<div class="flower-icon">
				<span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
			</div>

			<!-- <h3>Dean's Message</h3> -->
			<h3 class="congratulations">CONGRATULATIONS</h3>
			<p class="from-message">from Associate Dean Joe Spillane</p>
			<iframe src="https://www.youtube.com/embed/jD9VJ92xyzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Joe Spillane Video" allowfullscreen></iframe>
		</section>

    <!-- 2. Student Highlights -->
    <div class="link-landing" id="student"></div>
    <section class="student-message section-container">
      <!--  Flower Icon -->
      <div class="flower-icon">
        <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
      </div>

      <!-- <h3>Associate Dean's Message</h3> -->
      <h3 class="congratulations">CONGRATULATIONS</h3>
      <p class="from-message">from Student Highlights</p>
      <iframe src="https://www.youtube.com/embed/PUP7U5vTMM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Student Messages Video" allowfullscreen></iframe>
    </section>

    <!-- 3. Alumna Message -->
    <div class="link-landing" id="alumna"></div>
    <section class="alumna-message section-container">
      <!--  Flower Icon -->
      <div class="flower-icon">
        <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
      </div>

      <!-- <h3>Associate Dean's Message</h3> -->
      <h3 class="congratulations">CONGRATULATIONS</h3>
      <p class="from-message">from Alumna</p>
      <iframe src="https://www.youtube.com/embed/PUP7U5vTMM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Alumna Message Video" allowfullscreen></iframe>
    </section>

		<!-- 4. Dean's Message -->
    <div class="link-landing" id="dean"></div>
		<section class="deans-message section-container">
			<!--  Flower Icon -->
			<div class="flower-icon">
				<span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
			</div>

			<!-- <h3>Dean's Message</h3> -->
			<h3 class="congratulations">CONGRATULATIONS</h3>
			<p class="from-message">from Dean David Richardson</p>
			<iframe src="https://www.youtube.com/embed/jD9VJ92xyzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Dean's Message Video" allowfullscreen></iframe>
		</section>

		<!-- 5. College Majors -->
    <div class="link-landing" id="majors"></div>
		<section class="deans-message section-container">
			<!--  Flower Icon -->
			<div class="flower-icon">
				<span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
			</div>

			<!-- <h3>Associate Dean's Message</h3> -->
			<h3 class="congratulations">CONGRATULATIONS</h3>
			<p class="from-message">from College Majors</p>

			<div class="majors-container">
				<?php modals_listMajors($majors); ?>
			</div>

			<?php
				/*
					MODALS! -- 2 options
					There's a hard-coded version of the modals in the "/inc/" folder if that's easier ("linked" through 'include' below)
					Another other option is to add them to the list above the header in this document
					And they can always be straight up hard-coded in the document if that's preferable
				*/
				// include 'inc/modal_majors_hardCoded.php';
			?>
		</section>

		<!-- 3. Student Highlights -->
    <div class="link-landing" id="social-media"></div>
		<section class="student-message section-container">

      <div class="instagram-intro">
        <?php get_template_part('images/recognition-ceremony/uf', 'instagram-logo.svg'); ?>
        <p>Instagram</p>
      </div>

			<!-- <h3>Associate Dean's Message</h3> -->
			<?php echo do_shortcode('[instagram-feed]'); ?>
		</section>

	</main>

	<footer>
		<div class="clas-wordmark">
			<a href="https://clas.ufl.edu" target="_blank"><?php get_template_part('images/recognition-ceremony/uf', 'clas-wordmark.svg'); ?></a>
		</div>

		<div class="journeys-wordmark">
			<?php get_template_part('images/recognition-ceremony/uf', 'journeys.svg'); ?>
		</div>

	</footer>

	<script src="http://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>
