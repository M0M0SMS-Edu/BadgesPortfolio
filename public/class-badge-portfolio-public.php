<?php
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @since      1.0.0
 * @package    Badge_Portfolio
 * @subpackage Badge_Portfolio/public
 * @author     Yigit Yesilpinar <yigityesilpinar@gmail.com>
 */
class BadgePortfolio_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $badge_portfolio    The ID of this plugin.
	 */
	private $badge_portfolio;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $badge_portfolio       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $badge_portfolio, $version ) {

		$this->badge_portfolio = $badge_portfolio;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in BadgePortfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The BadgePortfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->badge_portfolio, plugin_dir_url( __FILE__ ) . 'css/badge-portfolio-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in BadgePortfolio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The BadgePortfolio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		
                wp_enqueue_script( $this->badge_portfolio, plugin_dir_url( __FILE__ ) . 'js/jquery-ui.min.js', array( 'jquery' ), $this->version, false );
                wp_enqueue_script( $this->badge_portfolio.'1', plugin_dir_url( __FILE__ ) . 'js/Underscore.js', array( 'jquery' ), $this->version, false );
                wp_enqueue_script( $this->badge_portfolio.'2', plugin_dir_url( __FILE__ ) . 'js/badge-portfolio-public.js', array( 'jquery' ), $this->version, false );

	}

}
