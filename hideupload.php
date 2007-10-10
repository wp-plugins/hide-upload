<?php
 /*
   * Plugin Name: Hide upload
   * Plugin URI: http://findingmyself.net/wp/wpplugins/hideupload
   * Description: Hide upload section
   * Version: 0.1.0
   * Author: painnick
   * Author URI: http://findingmyself.net/wp/
   */

	function hideupload_admin_footer()
	{
		if (
				preg_match('/(post\.php|post\.php)/i', $_SERVER['SCRIPT_NAME'])
		or	preg_match('/(post\.php|post-new\.php)/i', $_SERVER['SCRIPT_NAME'])
		or	preg_match('/(post\.php|page\.php)/i', $_SERVER['SCRIPT_NAME'])
		or	preg_match('/(post\.php|page-new\.php)/i', $_SERVER['SCRIPT_NAME'])
		)
		{
?>

	<script type="text/javascript">
	//<![CDATA[
		var uploading = document.getElementById('uploading');
		uploading.style.display = 'none';
	//]]>
	</script>
<?php
		}
	}

	add_action('admin_footer', 'hideupload_admin_footer');
?>
