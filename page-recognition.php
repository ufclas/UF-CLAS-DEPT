<?php
/*
 * Template Name: Spring 2020 Recognition
 * Template Post Type: page
 */
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

	<?php wp_head(); ?>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon.ico' ?>" >
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-180.png' ?>">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri().'/assets/images/favicon/favicon-144.png' ?>">
</head>

<?php
 $date_theDay = false;
$majors = array(
	"Doctoral Degrees" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/zd1uO7yXres",
    "modal_string" => "modal_doctoraldegrees",
  ),

	"Master&#8217;s Degrees" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/cthwl1hgoeQ",
    "modal_string" => "modal_mastersdegrees",
  ),

	"African American Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/7F2j0tJzctE",
    "modal_string" => "modal_africanamericanstudies",
  ),

	"Anthropology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/cEhe3RkohFw",
    "modal_string" => "modal_anthropology",
  ),

	"Astronomy / Astrophysics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/MOyuSagUHOk",
    "modal_string" => "modal_astronomyastrophysics",
  ),

	"Biology / Botany / Zoology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/T0V9EuPYP_0",
    "modal_string" => "modal_biologybotanyzoology",
  ),

	"Chemistry / Biochemistry" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/cKBQTKAuyMc",
    "modal_string" => "modal_chemistrybiochemistry",
  ),

	"Classical Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/6IFLVE5su5c",
    "modal_string" => "modal_classicalstudies",
  ),

	"Computer Science" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/hpvlGxuDVVA",
    "modal_string" => "modal_computerscience",
  ),

	"Criminology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/oEy6_asBhcw",
    "modal_string" => "modal_criminology",
  ),

	"Economics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/hVJaTb0C16c",
    "modal_string" => "modal_economics",
  ),

	"English" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/kW7vtWB_0eE",
    "modal_string" => "modal_english",
  ),

	"Foreign Languages and Literatures" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/5gG5ZFbQWjY",
    "modal_string" => "modal_foreignlanguagesandliteratures",
  ),

	"Geography" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/QM30A9UZ2PY",
    "modal_string" => "modal_geography",
  ),

	"Geology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/M6Mx2Pl-Png",
    "modal_string" => "modal_geology",
  ),

	"History" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/7JWJ0Gzeq7k",
    "modal_string" => "modal_history",
  ),

	"Interdisciplinary Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/B63CAcoLMts",
    "modal_string" => "modal_interdisciplinarystudies",
  ),

	"International Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/1cdJv7nkyQA",
    "modal_string" => "modal_internationalstudies",
  ),

	"Linguistics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/2_VZF3mN84s",
    "modal_string" => "modal_linguistics",
  ),

	"Mathematics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/gI2ak8PiFDE",
    "modal_string" => "modal_mathematics",
  ),

	"Microbiology &amp; Cell Science" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/u02AHOztKbs",
    "modal_string" => "modal_microbiologycellscience",
  ),

	"Philosophy" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/TuwvAalUnjk",
    "modal_string" => "modal_philosophy",
  ),

	"Physics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/weRfjPrWh7U",
    "modal_string" => "modal_physics",
  ),

	"Political Science" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/LMsU5F0FiiI",
    "modal_string" => "modal_politicalscience",
  ),

	"Psychology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/ZbD7bhMB7cw",
    "modal_string" => "modal_psychology",
  ),

	"Religion" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/aLOmm5Hrlsw",
    "modal_string" => "modal_religion",
  ),

	"Sociology" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/oEfTuY0-YCk",
    "modal_string" => "modal_sociology",
  ),

	"Spanish / Portuguese" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/0OiLXDpFAWA",
    "modal_string" => "modal_spanishportuguese",
  ),

	"Statistics" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/2iuHv0udCfU",
    "modal_string" => "modal_statistics",
  ),

	"Sustainability Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/H2IyG5aOV6s",
    "modal_string" => "modal_sustainabilitystudies",
  ),

	"Women&#8217;s Studies" => array(
    "image"        => "",
    "video"        => "https://www.youtube.com/embed/L_2BlaVnNB0",
    "modal_string" => "modal_womensstudies",
  ),
);
?>

<body <?php body_class(); ?>>
  <img class="background" src="<?php echo get_stylesheet_directory_uri().'/images/recognition-ceremony/century-tower-background.jpg'?>" alt="Century Tower background image with blue overlay" />
  <div class="link-landing" id="top"></div>
	<header>
    <div class="fixed-header">
      <div class="top-mobile-header">
        <div class="uf-wordmark">
         <?php get_template_part('images/recognition-ceremony/uf', 'wordmark.svg'); ?>
         <span class="SVGaltText">University of Florida</span>
        </div>
       <h1>
         <span class="mobile"><?php get_template_part('images/recognition-ceremony/uf', 'clas-wordmark-mobile.svg'); ?><span class="SVGaltText">College of Liberal Arts and Sciences</span></span>
         <span class="tablet">College of Liberal Arts and Sciences</span>
       </h1>
      </div>
    </div>

		  <div class="mobile-menu" id="menuToggle">

		    <input type="checkbox" aria-label="hamburger-menu-toggle" />

        <div class="hamburger-menu-icon">
  		    <span></span>
  		    <span></span>
  		    <span></span>
        </div>

		    <div id="menu">
          <div class="top-hamburger-menu">
            <div class="uf-wordmark">
             <?php get_template_part('images/recognition-ceremony/uf', 'wordmark.svg'); ?>
             <span class="SVGaltText">University of Florida</span>
            </div>
           <span class="mobile"><?php get_template_part('images/recognition-ceremony/uf', 'clas-wordmark-mobile.svg'); ?><span class="SVGaltText">College of Liberal Arts and Sciences</span></span>
           <span class="tablet">College of Liberal Arts and Sciences</span>
          </div>
					<nav role="navigation">
							<ul>
								<li><a href="#top">Home</a></li>
                <li><a href="#spillane">Welcome Message</a></li>
                <li><a href="#student">Student Messages</a></li>
                <li><a href="#alumna">Alumna Message</a></li>
                <li><a href="#dean">Dean’s Message</a></li>
                <li><a href="#majors">Major Recognition</a></li>
								<li><a href="#social-media">Social Media</a></li>
							</ul>
						</nav>
          <div class="tablet-banner">
            <p>Graduation — Spring 2020</p>
          </div>
		    </div>
		  </div>

      <nav class="desktop-menu" role="navigation">
        <ul>
          <li><a href="#top">Home</a></li>
          <li><a href="#spillane">Welcome Message</a></li>
          <li><a href="#student">Student Messages</a></li>
          <li><a href="#alumna">Alumna Message</a></li>
          <li><a href="#dean">Dean’s Message</a></li>
          <li><a href="#majors">Major Recognition</a></li>
          <li><a href="#social-media">Social Media</a></li>
        </ul>
      </nav>
  </header>
  <div class="header-divider"></div>
  <main>
    <section id="container_graph_headers">
      <div class="inner-container">
        <h2 class="visuallyhidden">Introduction</h2>
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
      </div>
    </section>

    <!-- 1. Associate Dean's Message -->
    <div class="link-landing" id="spillane"></div>
		<section class="associate-deans-message section-container">
      <div class="inner-container">
  			<!-- <h3>Dean's Message</h3> -->
  			<h2 class="congratulations">WELCOME MESSSAGE</h2>
  			<p class="from-message">from Associate Dean Joe Spillane</p>
  			<iframe src="https://www.youtube.com/embed/25tG9Hu5EVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Joe Spillane Video" allowfullscreen></iframe>

        <!--  Flower Icon -->
        <div class="flower-icon">
          <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
        </div>
      </div>
    </section>

    <!-- 2. Student Highlights -->
    <div class="link-landing" id="student"></div>
    <section class="student-message section-container">
      <div class="inner-container">
        <!-- <h3>Student Message</h3> -->
        <h2 class="congratulations">CONGRATULATIONS</h2>
        <p class="from-message">from Carlotta Ricolfi</p>
        <iframe src="https://www.youtube.com/embed/IYc4lb7XEpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Student Messages Video" allowfullscreen></iframe>

        <!-- <h3>Student Message</h3> -->
        <h2 class="congratulations">CONGRATULATIONS</h2>
        <p class="from-message">from Annika Ramnath</p>
        <iframe src="https://www.youtube.com/embed/Dd5TMnOmyR8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Student Messages Video" allowfullscreen></iframe>
        <!--  Flower Icon -->
        <div class="flower-icon">
          <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
        </div>
      </div>
    </section>

    <!-- 3. Alumna Message -->
    <div class="link-landing" id="alumna"></div>
    <section class="alumna-message section-container">
      <div class="inner-container">
        <!-- <h3>Associate Dean's Message</h3> -->
        <h2 class="congratulations">CONGRATULATIONS</h2>
        <p class="from-message">from Domonique Worship</p>
        <iframe src="https://www.youtube.com/embed/sLdf59N4Jzg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Alumna Message Video" allowfullscreen></iframe>

        <!--  Flower Icon -->
        <div class="flower-icon">
          <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
        </div>
      </div>
    </section>

		<!-- 4. Dean's Message -->
    <div class="link-landing" id="dean"></div>
		<section class="deans-message section-container">
      <div class="inner-container">
  			<!-- <h3>Dean's Message</h3> -->
  			<h2 class="congratulations">CONGRATULATIONS</h2>
  			<p class="from-message">from Dean David Richardson</p>
  			<iframe src="https://www.youtube.com/embed/89AY-kZovXM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="Dean's Message Video" allowfullscreen></iframe>

        <!--  Flower Icon -->
        <div class="flower-icon">
          <span class="border-before-after"><?php get_template_part('images/recognition-ceremony/uf', 'flower-icon.svg'); ?></span>
        </div>
      </div>
    </section>

		<!-- 5. College Majors -->
    <div class="link-landing" id="majors"></div>
		<section class="major-recognition section-container">
      <div class="inner-container">
  			<!-- <h3>Associate Dean's Message</h3> -->
  			<h2 class="congratulations">CONGRATULATIONS</h2>
  			<p class="from-message">from College Majors</p>

  			<div class="majors-container">
  				<?php modals_listMajors($majors); ?>
  			</div>
      </div>
		</section>

		<!-- 3. Student Highlights -->
    <div class="link-landing" id="social-media"></div>
  		<section class="social-media section-container">
        <h2 class="visuallyhidden">Social Media</h2>
        <div class="inner-container">
          <div class="instagram-intro">
            <?php get_template_part('images/recognition-ceremony/uf', 'instagram-logo.svg'); ?>
            <p>Instagram</p>
          </div>

    			<!-- <h3>Associate Dean's Message</h3> -->
    			<?php echo do_shortcode('[instagram-feed whitelist="1"]'); ?>
        </div>
  		</section>
	</main>

	<footer>
		<div class="clas-wordmark">
			<a href="https://clas.ufl.edu" target="_blank"><?php get_template_part('images/recognition-ceremony/uf', 'clas-wordmark-footer.svg'); ?></a>
		</div>

		<div class="journeys-wordmark">
			<?php get_template_part('images/recognition-ceremony/uf', 'journeys.svg'); ?>
		</div>

	</footer>

	<script src="http://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
// this stops the video from playing in the iframe after the modal is closed
<?php foreach ($majors as $key => $list_value) { ?>
  jQuery("#<?php echo $list_value['modal_string']; ?>").on('hidden.bs.modal', function (e) {
      jQuery("#<?php echo $list_value['modal_string']; ?> iframe").attr("src", jQuery("#<?php echo $list_value['modal_string']; ?> iframe").attr("src"));
  });
<?php } ?>
</script>
</body>
</html>
