<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.19
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

global $post;

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

$event = $post;

?>

<!-- #tribe-events-header -->
<?php do_action( 'tribe_events_after_header' ) ?>

<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>

<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="tribe-events-event-meta">
	<div class="author <?php echo esc_attr( $has_venue_address ); ?> date-location-container">

		<!-- Schedule & Recurrence Details -->
		<div class="tribe-event-schedule-details">
			<?php echo ufclas_tribe_events_event_schedule_details() ?>
		</div>

		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<div class="tribe-events-venue-details">
				<?php
					//Displays featured image if it has one
					if(has_post_thumbnail()){?>
						<div class="tribe-events-image">
			        <!-- Event Image -->
							<a class="tribe-event-url" href="<?php echo esc_url(tribe_get_event_link()); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><?php echo get_the_post_thumbnail( null, 'square-crop' ); ?></a>

							<p><a class="desktop-more" href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark" aria-label="<?php echo 'View ' . get_the_title(); ?> event"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a></p>
						</div>
				<?php }else{?>
					<div class="tribe-events-image">
						<a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><img src='<?php echo get_stylesheet_directory_uri()."/assets/images/uf-clas.png"?>' alt='UF CLAS Logo'/></a>

						<p><a class="desktop-more" href="<?php echo esc_url(tribe_get_event_link()); ?>" class="tribe-events-read-more" rel="bookmark" aria-label="<?php echo 'View ' . get_the_title(); ?> event"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a></p>
					</div>
				<?php } ?>

				<div class="tribe-events-info">
	        <h3 class="tribe-events-list-event-title">
	        	<a class="tribe-event-url" href="<?php echo esc_url(tribe_get_event_link()); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
	        		<?php the_title() ?>
	        	</a>
	        </h3>

        	<div class="time-venue-info-container">
	          <span class="tribe-events-time">
	            <?php echo tribe_get_start_date($event, true, 'g:i A');  ?>
	          </span>

						<?php if (!empty(tribe_get_venue())){ ?>
		          <span class="tribe-events-venue">
		            <?php echo ' - ' . tribe_get_venue() ?>
		          </span>
						<?php } ?>
	          <!-- Event Content -->
	          <?php do_action( 'tribe_events_before_the_content' ); ?>
	          <div class="tribe-events-list-event-description tribe-events-content description entry-summary">
	          	<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
								<a class="more-mobile" href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark" aria-label="<?php echo 'View ' . get_the_title(); ?> event"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a>
	          </div><!-- .tribe-events-list-event-description -->
        	</div>
				</div>
			</div> <!-- .tribe-events-venue-details -->
		<?php endif; ?>

	</div>
</div><!-- .tribe-events-event-meta -->

<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?>
	<div class="tribe-events-event-cost">
		<span class="ticket-cost"><?php echo tribe_get_cost( null, true ); ?></span>
		<?php
		/**
		 * Runs after cost is displayed in list style views
		 *
		 * @since 4.5
		 */
		do_action( 'tribe_events_inside_cost' )
		?>
	</div>
<?php endif; ?>

<?php do_action( 'tribe_events_after_the_meta' ) ?>


<?php
do_action( 'tribe_events_after_the_content' );
