<?php
add_action( 'admin_menu', 'fse_education_school_getting_started' );
function fse_education_school_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fse-education-school'), esc_html__('Get Started', 'fse-education-school'), 'edit_theme_options', 'fse-education-school-guide-page', 'fse_education_school_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function fse_education_school_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'fse_education_school_admin_theme_style');

//guidline for about theme
function fse_education_school_test_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'fse-education-school' );
?>
<div class="wrapper-info">
	<div class="intro">
			<h3><?php esc_html_e( 'Welcome to FSE Education School
 WordPress Theme', 'fse-education-school' ); ?></h3>
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
		</div>
	<div class="col-left">
		<div class="started">
			<hr>
			<div class="centerbold">
				<h4><?php esc_html_e('Pro version of our theme', 'fse-education-school'); ?></h4>
				<p><?php esc_html_e('Are you exited for our theme? Then we will proceed for pro version of theme.', 'fse-education-school'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( FSE_EDUCATION_SCHOOL_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'fse-education-school'); ?></a>
				<hr>
				<h4><?php esc_html_e('Check Our Demo', 'fse-education-school'); ?></h4>
				<p><?php esc_html_e('Here, you can view a live demonstration of our theme.', 'fse-education-school'); ?></p>
				<a class="bg-color" href="<?php echo esc_url( FSE_EDUCATION_SCHOOL_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Theme Demo', 'fse-education-school'); ?></a>
				<hr>
				<h4><?php esc_html_e('Theme Documentation', 'fse-education-school'); ?></h4>
				<p><?php esc_html_e('Need more details? Please check our full documentation for detailed theme setup.', 'fse-education-school'); ?></p>
				<a href="<?php echo esc_url( FSE_EDUCATION_SCHOOL_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'fse-education-school'); ?></a>
				<hr>
				<h4><?php esc_html_e('Need Help?', 'fse-education-school'); ?></h4>
				<p><?php esc_html_e('Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'fse-education-school'); ?></p>
				<a href="<?php echo esc_url( FSE_EDUCATION_SCHOOL_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'fse-education-school'); ?></a>
				<hr>
				<h4><?php esc_html_e('Leave us a review', 'fse-education-school'); ?></h4>
				<p><?php esc_html_e('Are you enjoying our theme? We would love to hear your feedback.', 'fse-education-school'); ?></p>
				<a href="<?php echo esc_url( FSE_EDUCATION_SCHOOL_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'fse-education-school'); ?></a>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-inner"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/get-started/images/screenshot.png" alt="" />
		</div>
	</div>
</div>
<?php } ?>