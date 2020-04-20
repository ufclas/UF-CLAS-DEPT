<?php

// ADMIN PAGES FOR CONFIGURING THEME OPTIONS
class MySettingsPage
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );
    }

    /**
     * Add options page
     */
    public function add_plugin_page()
    {
        // This page will be under "Settings"
        add_theme_page(
            'Settings Admin',
            'CLAS DEPT Theme Settings',
            'manage_options',
            'my-setting-admin',
            array( $this, 'create_admin_page' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page()
    {
        // Set class property
        $this->options = get_option( 'my_option_name' );
        ?>
        <div class="wrap">
            <h1>Theme Settings</h1>
            <form method="post" action="options.php">
            <?php
                // This prints out all hidden setting fields
                settings_fields( 'my_option_group' );
                do_settings_sections( 'my-setting-admin' );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {
        register_setting(
            'my_option_group', // Option group
            'my_option_name', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID
            'CLAS DEPT Theme Settings', // Title
            array( $this, 'print_section_info' ), // Callback
            'my-setting-admin' // Page
        );

        add_settings_field(
            'dept_address', // ID
            'Department Address', // Title
            array( $this, 'dept_address_callback' ), // Callback
            'my-setting-admin', // Page
            'setting_section_id' // Section
        );

        add_settings_field(
            'title',
            'Footer Title',
            array( $this, 'title_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'fb',
            'Facebook Link',
            array( $this, 'fb_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'twitter',
            'Twitter Link',
            array( $this, 'twitter_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'instagram',
            'Instagram Link',
            array( $this, 'instagram_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'youtube',
            'Youtube Link',
            array( $this, 'youtube_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

        add_settings_field(
            'rss',
            'RSS Link',
            array( $this, 'rss_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        add_settings_field(
            'email',
            'Email Link',
            array( $this, 'email_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );
        add_settings_field(
            'linkedin',
            'Linked In Link',
            array( $this, 'linkedin_callback' ),
            'my-setting-admin',
            'setting_section_id'
        );

    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $input )
    {
        $new_input = array();
        if( isset( $input['dept_address'] ) )
            $new_input['dept_address'] =  $input['dept_address'] ;

        if( isset( $input['title'] ) )
            $new_input['title'] = sanitize_text_field( $input['title'] );

        if( isset( $input['fb'] ) )
            $new_input['fb'] = sanitize_text_field( $input['fb'] );

        if( isset( $input['twitter'] ) )
            $new_input['twitter'] = sanitize_text_field( $input['twitter'] );

        if( isset( $input['instagram'] ) )
            $new_input['instagram'] = sanitize_text_field( $input['instagram'] );

        if( isset( $input['youtube'] ) )
            $new_input['youtube'] = sanitize_text_field( $input['youtube'] );

        if( isset( $input['rss'] ) )
            $new_input['rss'] = sanitize_text_field( $input['rss'] );

        if( isset( $input['email'] ) )
            $new_input['email'] = sanitize_text_field( $input['email'] );

        if( isset( $input['linkedin'] ) )
            $new_input['linkedin'] = sanitize_text_field( $input['linkedin'] );

        return $new_input;
    }

    /**
     * Print the Section text
     */
    public function print_section_info()
    {
        print 'Enter your settings below:';
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function dept_address_callback()
    {
        printf(
            '<textarea id="dept_address" rows="10" cols="40" name="my_option_name[dept_address]"  placeholder="Enter department address here">%s</textarea>',
            isset( $this->options['dept_address'] ) ? esc_attr( $this->options['dept_address']) : ''
        );
    }

    /**
     * Get the settings option array and print one of its values
     */
    public function title_callback()
    {
        printf(
            '<input type="text" id="title" name="my_option_name[title]" value="%s" />',
            isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
        );
    }


    public function fb_callback()
    {
        printf(
            '<input type="text" id="fb" name="my_option_name[fb]" value="%s" />',
            isset( $this->options['fb'] ) ? esc_attr( $this->options['fb']) : ''
        );
    }

    public function twitter_callback()
    {
        printf(
            '<input type="text" id="twitter" name="my_option_name[twitter]" value="%s" />',
            isset( $this->options['twitter'] ) ? esc_attr( $this->options['twitter']) : ''
        );
    }
    public function instagram_callback()
    {
        printf(
            '<input type="text" id="instagram" name="my_option_name[instagram]" value="%s" />',
            isset( $this->options['instagram'] ) ? esc_attr( $this->options['instagram']) : ''
        );
    }
    public function youtube_callback()
    {
        printf(
            '<input type="text" id="youtube" name="my_option_name[youtube]" value="%s" />',
            isset( $this->options['youtube'] ) ? esc_attr( $this->options['youtube']) : ''
        );
    }
    public function rss_callback()
    {
        printf(
            '<input type="text" id="rss" name="my_option_name[rss]" value="%s" />',
            isset( $this->options['rss'] ) ? esc_attr( $this->options['rss']) : ''
        );
    }
    public function email_callback()
    {
        printf(
            '<input type="text" id="email" name="my_option_name[email]" value="%s" />',
            isset( $this->options['email'] ) ? esc_attr( $this->options['email']) : ''
        );
    }
    public function linkedin_callback()
    {
        printf(
            '<input type="text" id="linkedin" name="my_option_name[linkedin]" value="%s" />',
            isset( $this->options['linkedin'] ) ? esc_attr( $this->options['linkedin']) : ''
        );
    }

}


// Only display for sites where the option exists
if( is_admin() && (!get_option('my_option_name')) ){
	$my_settings_page = new MySettingsPage();
}

/**
 * Adds a warning and a link to customizer
 *
 * @since 1.9.3
 * @author priscillamc
 */
function ufclas_emily_admin_notice_error() {
    $screen = get_current_screen();
	if ( 'appearance_page_my-setting-admin' == $screen->id ){
		$class = 'notice notice-error';
		$message = __( 'These theme options below are not longer used. The options have been moved to the Customizer.', 'ufclas-emily' );

		printf( '<div class="%s"><p>%s <a href="%s">%s</a></p></div>',
			   esc_attr( $class ),
			   esc_html( $message ),
			   admin_url( '/customize.php?autofocus[panel]=ufclas_emily_theme_options' ),
			   __( 'View the Customizer.', 'ufclas-emily' )
		);
	}
}
add_action( 'admin_notices', 'ufclas_emily_admin_notice_error' );
