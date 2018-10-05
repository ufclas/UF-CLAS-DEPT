<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>




<style>



</style>


 <div class="slides" id="homepageSlideshow" >
      <?php 
      $query1 = new WP_Query( array( 'category_name' => 'homepage-slideshow' ) );

      if ( $query1->have_posts() ) {
      // The Loop
         while ( $query1->have_posts() ) {
         $query1->the_post();
     
            


         $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );

         //apply_filters( 'the_title', $post->post_title, $post->ID );  
         


      ?>

      <div class="slide">

         <?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
         ?>

         <div class="slideImage" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>)  ">
			<div class="slideImage-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>           
	
          </div>

            <div class="slideCaption" ><?php echo the_content();  ?></div>  
      </div>  


   <?php
         }// end while		
	 wp_reset_postdata(); /* Restore original Post Data  */
      }
   ?>
 <div class="controls">
            <div class="inner">       




        <div class="btn prev previous-arrow"></div>
               <div class="btn next next-arrow"></div>
            </div>
         </div>
      </div><!-- END SLIDES -->

      <div class="blueBox">
         <div class="wrap1440 ">
          
              
          
         </div>
      </div>

<div class="wrap1440">

<?php echo do_shortcode('[STARTROW class="grid-123 X-stories"]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>

<div class="X-tile">   
   <div class="X-tile-img"> 
    
      <img src="https://test.clas.ufl.edu/themedev/files/2018/08/Nick_Nyiragongo-768x768.jpeg" alt="" class="alignnone size-thumbnail-crop wp-image-64" />
      <div class="X-tile-txt"><a href="https://publications.clas.ufl.edu/college-newsletter/las-winter-2018/renaissance-man/" class="">Nick Dowhaniuk PhD’21</a></div>
   </div>  
   <div class="X-tile-desc"> 
<p>Pursuing both a PhD in geography and a Master of Health Science degree at UF means that Dowhaniuk indeed does quite a bit of office work, but he is no stranger to adventure. A National Geographic Explorer, Dowhaniuk studies the sociocultural and spatial effects of oil development in Uganda, as well as conservation issues there and in South Africa. His dissertation research serves his career goal of founding an NGO devoted to community-based health intervention.</p>


 <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/college-newsletter/las-winter-2018/renaissance-man/">Read More About Nick</a>
    </div>
</div>

<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
   <div class="X-tile-img"> 
      <img src="https://t.publications.clas.ufl.edu/wp-content/uploads/2018/01/20160319_NYT_KeyLargo_Day2_1601-768x768.jpg" alt="" class="alignnone size-thumbnail-crop wp-image-63" />
      <div class="X-tile-txt"><a href="">Andrea Dutton</a></div>
   </div>  
    <div class="X-tile-desc"> 
<p>Before Andrea Dutton was a geologist, she was an amateur gymnast. So, when her field research on sea level rise requires her to free-climb granite cliffs in search of fossil corals, while carrying a surveyor’s tripod, a drill, and a jug of seawater, that ingrained nimbleness is a big help. On the beaches of the Seychelles Islands off the coast of Africa, Dutton and colleagues looked for intact corals that once grew just below the surface of the Indian Ocean some 125,000 years ago.</p>
     

    <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/ytori-magazine/ytori-fall-2016/of-islands-and-ice/">Read More About Andrea</a>
   </div>
</div>
<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[STARTCOL class="p33"]'); ?>
<div class="X-tile">
     <div class="X-tile-img"> 
      <img src="https://test.clas.ufl.edu/themedev/files/2018/08/2017-04-04_Mindfulness_talk-3625-1440x2160-768x768.jpg" alt=""  class="alignnone size-thumbnail-crop wp-image-62" />

      <div class="X-tile-txt"><a href="https://publications.clas.ufl.edu/college-newsletter/las-summer-2017/in-the-moment/">Trish Ring MS'93, PhD'96</a></div>
   </div>  
  <div class="X-tile-desc"><p>
 Trish Ring draws a distinction between “sorrow and suffering,” believing the first is part of life and the second is unnecessary. She’s a Certified Equus Coach who has her clients talk through their concerns in a round pen with horses, which are very sensitive to human emotions. Her program takes place at Blue Star Ranch, which she and her husband, Carl, created out of “several derelict plots of land” to create a refuge for people to enjoy nature and seek self-improvement. 
 </p>

 <a class="read-more" style="text-transform:uppercase;" href="https://publications.clas.ufl.edu/college-newsletter/las-summer-2017/in-the-moment/">Read More About Trish</a>
</div>
</div>
<?php echo do_shortcode('[ENDCOL]'); ?>
<?php echo do_shortcode('[ENDROW]'); ?>



         </div><!-- END wrap -->

 </div>


<div class="table grid-123-b">

   

      <div class="table-cell p40 color1">
         <div class="table-cell-1">
            <div class="table-cell-1-num"><span>743</span></div> <div class="table-cell-1-txt"><span>FACULTY</span></div>
         </div>
      </div>

      <div class="table-cell p20 color2">
         <div class="table-cell-2">
            <div class="table-cell-2-num"><span>42</span></div> <div class="table-cell-2-txt"><span>Majors</span></div>
         </div>
      </div>

      <div class="table-cell p40 color3">
         <div class="table-cell-3">
            <div class="table-cell-3-num"><span>9</span></div> <div class="table-cell-3-txt"><span>NATIONAL ACADEMY OF SCIENCES MEMBERS</span></div>
      </div>
      </div>




      <div class="table-cell p30 color4">
         <div class="table-cell-4">
            <div class="table-cell-4-num"><span>11,000</span></div> <div class="table-cell-4-txt"><span>Undergraduates</span></div>
         </div>
      </div>

      <div class="table-cell p40 color5">
         <div class="table-cell-5">
            <div class="table-cell-5-num"><span>3,500</span></div> <div class="table-cell-5-txt"><span>Degrees Awarded Annually</span></div>
         </div>
      </div>

      <div class="table-cell p30 color6">
         <div class="table-cell-6">
            <div class="table-cell-6-num"><span>1,800</span></div> <div class="table-cell-6-txt"><span>Graduates</span></div>
         </div>
      </div>



</div>

    




<!-- CONTENT -->
 
<?php get_footer();
