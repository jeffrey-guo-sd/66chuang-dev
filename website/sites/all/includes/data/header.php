<?php   global $base_url,$user; ?> 

<?php  

	$getStartup = $_GET['getstarted'];
	if(isset($getStartup) and $getStartup != '') {  ?>
		
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<?php print render($page['get_started']); ?>
	</div>

<?php   }   ?>

 <header>
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
								<?php if ($logo): ?>
								  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="navbar-brand" rel="home" id="logo">
									<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
								  </a>
								<?php endif; ?>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                 <?php if ($main_menu): ?>
								  <div id="main-menu" class="navigation">
									<?php print theme('links__system_main_menu', array(
									  'links' => $main_menu,
									  'attributes' => array(
										'id' => 'main-menu-links',
										'class' => array('nav','navbar-nav'),
									  ),
									  'heading' => array(
										'text' => t('Main menu'),
										'level' => 'h2',
										'class' => array('element-invisible'),
									  ),
									)); ?>
								  </div> <!-- /#main-menu -->
								<?php endif; ?>

								<?php if ($secondary_menu): ?>
								  <div id="secondary-menu" class="navigation">
									<?php print theme('links__system_secondary_menu', array(
									  'links' => $secondary_menu,
									  'attributes' => array(
										'id' => 'secondary-menu-links',
										'class' => array('links', 'inline', 'clearfix'),
									  ),
									  'heading' => array(
										'text' => t('Secondary menu'),
										'level' => 'h2',
										'class' => array('element-invisible'),
									  ),
									)); ?>
								  </div> <!-- /#secondary-menu -->
								<?php endif; ?>
								
								<?php if($user->uid == 0) {  ?>
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#" class="dropdown-toggle"><i class="fa fa-edit"></i>Login</a><?php print($loginpopup); ?></li>
										<li><a href="#" class="dropdown-toggle"><i class="fa fa-edit"></i>Signup</a><?php print($registerpopup); ?></li>
									</ul>
								<?php   }  else {  ?>
									<ul class="nav navbar-nav navbar-right">
										<li><a href="<?php  echo $base_url;   ?>/user/logout" class="dropdown-toggle"><i class="fa fa-edit"></i>Logout</a></li>
									</ul>
								<?php   }   ?>
								
								
                                <form class="navbar-form navbar-left search-field" role="search">
                                    <div class="input-group with-icon">
                                        <i class="glyphicon glyphicon-search"></i>
                                        <input type="text" class="form-control" placeholder="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default blue-bg" type="button">Search</button>
                                        </span>
                                    </div>
                                </form>
								
								

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </header>
 
 <script type="text/javascript">
 var js = jQuery.noConflict();
	js(document).ready(function(){
		  js("body").click(function(){

				js('.navbar-nav li').removeClass('open');
			});
			js("li:first-child a.dropdown-toggle").click(function(event){
				js("li:first-child .dropdown-menu").toggle();
				js("li:last-child .dropdown-menu").hide();
				js('li:last-child').removeClass('open');
				event.stopPropagation();
			});
		js("li:last-child a.dropdown-toggle").click(function(event){
				js("li:last-child .dropdown-menu").toggle();
				js("li:first-child .dropdown-menu").hide();
				js('li:first-child').removeClass('open');
				event.stopPropagation();
			});
			js('a.dropdown-toggle').on('click', function (event) {
                js(this).parent().toggleClass("open");
            });
            js('body').on('click', function (e) {
                if (!js('.custom-dropdown li').is(e.target) && js('.custom-dropdown li').has(e.target).length === 0 && js('.open').has(e.target).length === 0) {
                    js('.custom-dropdown li').removeClass('open');
                }
            });
			js('.fundraising').change(function() {
			  if (js(this).is(':checked')) {
			  	js('div.fundraisingg').removeClass('hide');
			  } else {
				js('div.fundraisingg').addClass('hide');
			  }
			});
			js(window).load(function(){
				js('#myModal').modal('show');
			});
	});
        </script>