<?php


global $theme_path;
$aen_path = base_path() . $theme_path;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
<!--[if lte IE 6]>
	<script src="<?php print $aen_path; ?>/iewarn/warning.js"></script><script>window.onload=function(){e("<?php print $aen_path; ?>/iewarn/")}</script>
	<![endif]-->
</head>
<body class="<?php print $body_classes; ?>">

<div id="page-wrapper"><div id="top-container">
<?php if ($header) { ?><div id="header-region"><?php print $header; ?></div><?php } ?>

<!-- Header START -->
<div id="replace-header" >
	<div class="clear-both" >

    <div id="header-logo"><a href="<?php print $base_path ?>"><img style="vertical-align: bottom;" src="<?php print $aen_path; ?>/images/header_logo_9-11-09.jpg" width="857" height="143" alt="Home Page" /></a></div>
    <div id="header-nav-wrapper" >
                <div id="header-nav">
                  <ul>
                  <?php if(!$logged_in): ?>

                  		<li><?php print l('Login/Join','user'); ?>

                  <?php else:?>
                  	<li><?php print l('Logout','logout');?></li>
                  	<li><?php print l('Manage Account', 'user')?></li>
                  <?php endif;?>
                  </ul>
                </div>
    </div>
   </div>
</div>

<!-- Header END -->
<!-- Top Start -->

	<div id="main-menu"><?php print $main_menu; ?></div>
	<!-- SEARCH START -->
		<div id="search-wrapper" style=""><!-- SEARCH START -->
		 <div id="search-box" style="">
	         <?php print $search_box; ?>
	     </div>
		</div>

<!--<div class="clear-both">nothing in here</div>-->
	<!-- SEARCH END -->
</div>
<!-- Top End -->


<!-- Navigation & Content START -->
<div id="container">
 		  <div id="banner-top"><?php print $banner_top ?></div>
		  <div class="clear-both"></div>
	<div id="left-wrapper" >

	      <!-- Navigation START -->



			<?php if ($logged_in):?>

	           <div id="user-menu"><?php print $user_menu; ?></div>
	           <div class="clear-both"></div>
	         <?php endif; ?>
	      <!-- Navigation  END -->
		<div class="clear-both"></div>
		<?php if (!$is_front):?>
		<div id="content-left-wrapper">
			<?php print $content_left; ?>
		</div>
		<?php endif;?>
	    <div id="content-outer">
	         <!-- Content START -->
	         <div id="content-wrapper">
	          <?php print $task_menu_r; ?>
	          <?php if ($show_messages && $messages) { print $messages; } ?>
	          <?php print $help; ?>
	          <div id="content-region">
					<?php print $feed_icons; ?>
					<?php print $content; ?>
			  </div>
	          <?php //print $feed_icons; ?>
	        </div>
	        <!-- Content END -->
	    </div>

	</div>
	<div id="right-wrapper">



	<div id="right-content-blocks">
	            <div style="padding: 8px 0px;margin:0;"><img border="0" alt="OUR PARTNERS" src="<?php print $aen_path; ?>/images/our_partners_copy.jpg" width="175" height="20" /></div>

	            <div id="header-side-region"><?php print $header_side; ?></div>

	            <div style="padding: 8px 0px 0px 0px;"><img border="0" alt="ADVERTISE WITH US" src="<?php print $aen_path; ?>/images/advertise_with_us_copy.jpg" width="175" height="20" /></div>

	            <div id="banner-side-region"><?php print $banner_side; ?></div>
	</div>
</div>
<!-- Container End -->
	<div class="clear-both"></div>

</div>
<!-- Footer START -->


<!-- Footer END -->

</div>
<div id="footer-outer">
		    <div id="footer-inner" class="footer"><?php print $footer; ?></div>
		    <?php print $closure; ?>
</div>


</body>
</html>
