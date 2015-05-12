<?php
global $base_url;
$template_path = $base_url.'/'.drupal_get_path('theme', 'chuang');

/**
 * @file
 * Chuang's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/chuang.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 * 
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see chuang_process_page()
 * @see html.tpl.php
 */

 ?>
<div class="main_wrapper">

            <!-- header srats here -->
          <?php  //include_once("sites/all/includes/data/header.php");   ?>

            <!-- header ends here --> 
            <div class="main_slider">
                <div class="container">
				
				<div class="news-section-container newsdetail">
                    <input type="hidden" value="<?php echo $template_path; ?>" class="basepath"/>
					<div class="news-section">
					<h3><?php   print $title;   ?></h3>
					  <?php if ($display_submitted): ?>
							<div class="meta submitted">
							  <?php //print $user_picture; ?>
							  <?php print $submitted; ?>
							  <ul class='social-outer'>
                                        <li><a href="#" class='fb1'></a></li>
                                        <li><a href="#" class='tw1'></a></li>
                                        <li><a href="#" class='in1'></a></li>
                                        <li><a href="#" class='gp'></a></li>

                                    </ul>
							</div>
					  <?php endif; ?>
					  
						<!-- banner block starts here-->
						<?php 
					
							$ifid = strip_tags($fields['field_wallpaper']->content);
							$imgpath = file_load($field_news_image[0]['fid'])->uri;
							$imgUrl =  file_create_url($imgpath); ?>
							<?php print theme('image_style',array('style_name' => 'news_detail', 'path' => $imgpath));	?>
							<div class="news-content"><?php   print $body[0]['value']  ?></div>
							<div class="comment-textarea"><div id="comment-error"></div><div class="comment_inner"><!--<img src="<?php echo $template_path.'/images/user_default.jpg'; ?>" />--><?php
							global $user;
							//if($user->uid != 0){
							print drupal_render(drupal_get_form("comment_node_{$node->type}_form", (object) array('pid' => $pid, 'nid' => $node->nid)));
							//}

?></div></div>
<?php 
	//echo '<pre>'; print_r($node); die();

?>
<?php
unset($content['comments']['comment_form']);
 //$comments = array_reverse ($content['comments']);
 //print render($content['comments']);   //die(); ?>
 <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper comment-login-link">
      <?php //print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
					</div>
					
					<div class="right-panel">
                            <!-- discussion block -->
                            <div class="list-group discussion-group">
                               <!-- <h4 class="list-group-item title blue-text">
                                    Discussion
                                </h4>-->
								<?php //print render($page['home_discussion']); ?>
                            </div>
							 <div class="list-group discussion-group update">
                                <h4 class="list-group-item title blue-bg">
                                    Updates
                                </h4>
                                <a href="#" class="list-group-item">
                                    <ul>
                                        <li><img src="<?php echo $template_path;?>/images/img-s1.jpg" alt=""/></li>
                                        <li>Musicyou Raises A Seed Round For Its Private Music Sharing Platform</li>
                                    </ul>
                                </a>
                                <a href="#" class="list-group-item">
                                    <ul>
                                        <li><img src="<?php echo $template_path;?>/images/img-s1.jpg" alt=""/></li>
                                        <li>Musicyou Raises A Seed Round For Its Private Music Sharing Platform</li>
                                    </ul>
                                </a>
                                <a href="#" class="list-group-item">
                                    <ul>
                                        <li><img src="<?php echo $template_path;?>/images/img-s1.jpg" alt=""/></li>
                                        <li>Musicyou Raises A Seed Round For Its Private Music Sharing Platform</li>
                                    </ul>
                                </a>
                                <a href="#" class="list-group-item">
                                    <ul>
                                        <li><img src="<?php echo $template_path;?>/images/img-s1.jpg" alt=""/></li>
                                        <li>Musicyou Raises A Seed Round For Its Private Music Sharing Platform</li>
                                    </ul>
                                </a>
                                 <a href="#" class="list-group-item">
                                    <ul>
                                        <li><img src="<?php echo $template_path;?>/images/img-s1.jpg" alt=""/></li>
                                        <li>Musicyou Raises A Seed Round For Its Private Music Sharing Platform</li>
                                    </ul>
                                </a>
                            </div>
					</div>
                </div>
                <!-- footer grey ends here -->
            </div>
           
        </div>