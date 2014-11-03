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
<div id="catpostswidget-6" class="custom-widget-container first-widget widget_random_posts"><h3 class="custom-widget-title"><span>分类文章</span></h3><div class="unslider"><ul class=""><li><a href="http://10.1.43.52:1988/hfx/?p=1">世界，你好！<b>(2014-10-30)</b></a></li></ul></div></div>
<?php endif;//end of home-widget-1 ?>

<?php if (!dynamic_sidebar('custom_cat_3')):?>
<div id="catpostswidget-4" class="custom-widget-container last-widget widget_random_posts"><h3 class="custom-widget-title"><span>分类文章</span></h3><div class="unslider"><ul class=""><li><a href="http://10.1.43.52:1988/hfx/?p=1">世界，你好！<b>(2014-10-30)</b></a></li></ul></div></div>
<?php endif;?>


<?php if (!dynamic_sidebar('custom_cat_2')):?>
<div id="catpostswidget-7" class="custom-widget-container mid-widget widget_random_posts"><h3 class="custom-widget-title"><span>分类文章</span></h3><div class="unslider"><ul class=""><li><a href="http://10.1.43.52:1988/hfx/?p=1">世界，你好！<b>(2014-10-30)</b></a></li></ul></div></div>
<?php endif;//end of home-widget-2 ?>
<div style="clear:both;">

</div>
