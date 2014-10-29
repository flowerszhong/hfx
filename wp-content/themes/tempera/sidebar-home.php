<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>

<?php if (!dynamic_sidebar('custom_cat_1')):?>
	<div class="widget-wrapper">

	<div class="widget-title-home"><h3><?php _e('Home Widget 1', 'responsive');?></h3></div>
	<div
	class="textwidget"><?php _e('This is your first home widget box. To edit please go to Appearance > Widgets and choose 6th widget from the top in area 6 called Home Widget 1. Title is also manageable from widgets as well.', 'responsive');?></div>

	</div><!-- end of .widget-wrapper -->
<?php endif;//end of home-widget-1 ?>

<?php if (!dynamic_sidebar('custom_cat_3')):?>
<div class="widget-wrapper">

<div class="widget-title-home"><h3><?php _e('Home Widget 3', 'responsive');?></h3></div>
<div
class="textwidget"><?php _e('This is your third home widget box. To edit please go to Appearance > Widgets and choose 8th widget from the top in area 8 called Home Widget 3. Title is also manageable from widgets as well.', 'responsive');?></div>

</div>
<?php endif;?>


<?php if (!dynamic_sidebar('custom_cat_2')):?>
<div class="widget-wrapper">

<div class="widget-title-home"><h3><?php _e('Home Widget 2', 'responsive');?></h3></div>
<div
class="textwidget"><?php _e('This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.', 'responsive');?></div>

</div><!-- end of .widget-wrapper -->
<?php endif;//end of home-widget-2 ?>
<div style="clear:both;">

</div>
