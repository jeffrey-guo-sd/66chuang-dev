<?php

	global $base_url,$template_path;
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
<?php  include_once("sites/all/includes/data/header.php");   ?>

            <!-- header ends here --> 
            <div class="main_slider">
                <div class="container">
                    <!-- banner block starts here-->
                    <div class="banner-block">
                        <!-- banner starts here -->

                        <div class="banner-outer">
                            <img src="<?php echo $template_path;?>/images/banner.jpg" alt=""/>
                            <div class="banner-content-outer">
                                <div class="banner-content-blocks">
                                    <div class="col-sm-4 col-xs-12 block-unit">
                                        <div class="inner">
                                            <div class="content">
                                                <img src="<?php echo $template_path;?>/images/pg_logo.jpg" alt=""/>
                                                <label>P Group Ltd.</label>
                                                <ul class="">
                                                    <li>Place : shanghai (China)</li>
                                                    <li>Start in :<span class="blue-text"> May 2015</span></li>
                                                    <li>Capital : <span class="blue-text">$1228</span></li>
                                                    <li>Capital  : 05 Investors</li>
                                                </ul>
                                            </div>
                                            <h4 class="blue-bg">Startups</h4>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 col-xs-12 block-unit">
                                        <div class="inner">
                                            <div class="content">
                                                <img src="<?php echo $template_path;?>/images/nugget_logo.jpg" alt=""/>
                                                <label>Naugget Group</label>
                                                <ul>
                                                    <li>Place : Chongqing (China)</li>
                                                    <li>Start investment :<span class="blue-text"> May 2015</span></li>
                                                    <li>Avg. Return : <span class="blue-text">$231/per annum</span></li>
                                                    <li>Investing in : 3 Startups</li>
                                                </ul>
                                            </div>
                                            <h4 class="blue-bg">Investors</h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 block-unit">
                                        <div class="inner">
                                            <div class="content">
                                                <img src="<?php echo $template_path;?>/images/matki_logo.jpg" alt=""/>
                                                <label>Matki Chai</label>
                                                <ul>
                                                    <li>Place : shanghai (China)</li>
                                                    <li>Start in :<span class="blue-text"> May 2015</span></li>
                                                    <li>Capital :<span class="blue-text"> $1228</span></li>
                                                    <li>Capital  : 05 Investors</li>
                                                </ul>
                                            </div>
                                            <h4 class="blue-bg">Jobs</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- banner ends here -->
                        <!-- right panel starts here -->
                        <div class="right-block-outer">
                            <div class="right-block col-xs-12">
                                <a href="#" class="inner bg-l-blue">
                                    <img src="<?php echo $template_path;?>/images/img_1.jpg" alt=""/>
                                    <div class="context">
                                        Best <span class='l-blue-text'>TOP 10 </span>Startup<br/> of the (March 2015)
                                    </div>
                                </a>

                            </div>
                            <div class="right-block col-xs-12">
                                <a href="#" class="inner bg-l-blue">
                                    <img src="<?php echo $template_path;?>/images/img_2.jpg" alt=""/>
                                    <div class="context">
                                        Why need to <br/> <span class='l-blue-text'>Startup Earlier?</span>
                                    </div>
                                </a>
                            </div>

                            <div class="right-block col-xs-12">
                                <div class="inner bg-l-blue">
                                    <div class="context last">
                                        <b>Setup your profile</b><br/>
                                        and share<br/> it with investor<br/>
                                        <a href="#" class='btn btn-default'>Create an account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right panel ends here -->
                    </div>
                    <!-- banner block ends here-->

                    <!-- news section starts here -->
                    <div class="news-section-container">
                        <div class="news-section">

                            <?php print render($page['home_news']); ?>
                            
                        </div>

                        <!-- right panel starts-->
                        <div class="right-panel">

                            <!-- discussion block -->
                            <div class="list-group discussion-group">
                                <h4 class="list-group-item title blue-text">
                                    Discussion
                                </h4>
								<?php print render($page['home_discussion']); ?>
                                
                               
                                    
                                
                            </div>

                            <!-- updates block -->
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
                        <!-- right panel ends-->

                        

                    </div>
                    <!-- recent blog container starts here -->
                    <div class=" recent-blog">
                        <h4 class='blue-bg'>Recent Blog Posts</h4>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 blog-card">
                                <div class='news-card'>
                                    <a href=""><img src="<?php echo $template_path;?>/images/11.jpg" alt=""/></a>
                                    <h3><a href="#">Musicyou Raises A Seed Round For Its Private Music Sharing Platform</a></h3>
                                    <div class="post-detail">
                                        <div class='post-date'>Posted 20 min ago <span class='blue-text'>by Mike Butcher</span></div>

                                    </div>
                                    <p>
                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.
                                    </p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xs-12 blog-card">
                                <div class='news-card'>
                                    <a href=""><img src="<?php echo $template_path;?>/images/11.jpg" alt=""/></a>
                                    <h3><a href="#">Musicyou Raises A Seed Round For Its Private Music Sharing Platform</a></h3>
                                    <div class="post-detail">
                                        <div class='post-date'>Posted 20 min ago <span class='blue-text'>by Mike Butcher</span></div>

                                    </div>
                                    <p>
                                        lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- recent blog container endshere -->




                </div>

                <!-- footer grey starts here -->
                <div class='footer-level one'>
                    <div class="container">
                        <div class="row">
                            <div class='col-sm-5 colxs-12'>
                                <h3>In Trends Report 2014-2015</h3>
                                <span class='l-blue-text'><b>Funding by Industries Report</b></span>
                                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
                                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 
                                    elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <a href="#" class="l-blue-text">view full report</a> </p>
                            </div>
                            <div class='col-sm-7 colxs-12 right'>

                                <div class='col-sm-6 colxs-12 card'>
                                    <h2>6 Highest Investment Industries</h2>
                                    <h5>According to 2014-15</h5>
                                </div>
                                <div class='col-sm-6 colxs-12'>
                                    <ul class="c-ul alt">
                                        <li>Biotechnology <b>(30%)</b></li>
                                        <li>Computers and Peripherals <b>(25%)</b></li>
                                        <li>Education <b>(80%)</b></li>
                                        <li>Gaming <b>(72%)</b></li>
                                        <li>Lifestyle <b>(20%)</b></li>
                                        <li>Mobile <b>(47%)</b></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class='col-sm-5 colxs-12'>
                                <h3>In Trends Report 2014-2015</h3>
                                <span class='l-blue-text'><b>Funding by Industries Report</b></span>
                                <p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, 
                                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id 
                                    elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. <a href="#" class="l-blue-text">view full report</a> </p>
                                <ul class="c-ul alt">
                                    <li>India <b>(30%)</b></li>
                                    <li>Europe<b>(25%)</b></li>
                                    <li>Gulf Countries <b>(80%)</b></li>
                                    <li>Middle East <b>(72%)</b></li>
                                    <li>Africa <b>(20%)</b></li>
                                    <li>Island Countires <b>(47%)</b></li>
                                </ul>
                            </div>
                            <div class='col-sm-7 colxs-12 right'>

                                <div class="map col-xs-12" style="background: #333; overflow: hidden; padding: 0;">
                                    
                                    <img style="width: 100%;" src="<?php echo $template_path;?>/images/map.jpg" alt=""/>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <!-- footer grey ends here -->

                <!-- footer blue starts here -->
                <div class="footer-level blue-bg blu">
                    <div class="container">
                        <div class="col-sm-5 col-xs-12">
                            <h3>Startup Guidlines & Resources</h3>
                            <ul class="c-ul">
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <h3>Startup Guidlines & Resources</h3>
                            <ul class="c-ul">
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                                <li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- footer blue ends here -->

            </div>
            <footer>
                <div class="container">
					<?php print render($page['footer']); ?>
                </div>
            </footer>
        </div>
