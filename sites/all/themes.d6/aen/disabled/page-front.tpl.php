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
<script type="text/javascript">
Drupal.behaviors.aen = function (context) {
  $('#main-menu ul').addClass('sf-menu sf-navbar').superfish({
//      pathClass: 'active-trail',
       onInit: function() {
         var cssObj = {
          'display' : 'block',
          'visibility' : 'visible'
        }
        $('#main-menu ul li.active-trail ul').css(cssObj);
      }, // callback function fires once Superfish is initialised – 'this' is the containing ul
      onHide:      function(){
        var cssObj = {
          'display' : 'block',
          'visibility' : 'visible'
        }
        $('#main-menu ul li.active-trail ul').css(cssObj);
      },  // callback function fires after a sub-menu has closed – 'this' is the ul that just closed
      autoArrows: false,
      delay: 100,
      animation: {opacity:'show'},
      speed: 'fast'
    });
<?php if ($logged_in) { ?>
    $('#user-menu ul').addClass('sf-menu').superfish({
      delay: 100,
      animation: {opacity:'show'},
      speed: 'fast'
    });
<?php } ?>
  $('select[multiple]').attr({title: 'Add a selection'});
  $('select[multiple]').asmSelect({removeLabel: 'x'});
  //$(".views-exposed-form").hide();
  $(".filter-collapse").html('<span style="display: none;"> + Show Filters</span><span> - Hide Filters</span>');
  $(".filter-collapse").click(function()
  {
    $(this).next().slideToggle(600);
    $(this).children().toggle();
  });
};
</script>
</head>
<body class="<?php print $body_classes; ?>">

<div id="page-wrapper" style="margin: auto auto; width:1000px;">
<?php if ($header) { ?><div id="header-region"><?php print $header; ?></div><?php } ?>

<!-- Header START -->
<div id="replace-header" >
  <div style="clear:both;">
    <div style="float: left; background: url(<?php print $aen_path; ?>/images/header_logo.png); width:857px;"><a href="<?php print $base_path ?>"><img style="vertical-align: bottom;" src="<?php print $aen_path; ?>/images/header_logo.png" width="857" height="143" alt="Home Page" /></a></div>
    <div style="float: left; background: url(<?php print $aen_path; ?>/images/header_topnav.png); width:143px;">
                <div id="header-nav" style="float:right; height: 143px;"><br />
                  <?php if ($logged_in) { ?><a href="<?php print $base_path . 'logout'; ?>">Log Out</a><img src="<?php print $aen_path; ?>/images/spacer.gif" height="17" width="20" /><br /><?php } else { ?><a href="<?php print $base_path . 'user'; ?>">Join/Login</a><img src="<?php print $aen_path; ?>/images/spacer.gif" height="17" width="20" /><br /><?php } ?>
                  <a href="<?php print $base_path . 'partners'; ?>">Partners/Contributors</a><img src="<?php print $aen_path; ?>/images/spacer.gif" height="17" width="20" /><br />
                </div>
              
    </div>
  </div>
</div>
<!-- Header END -->
<!-- Navigation & Content START -->


<div id="left-content-wrapper" >
      <!-- Navigation START -->
              	<div id="main-menu"><?php print $main_menu; ?></div>
              	<div id="banner-top"><?php print $banner_top ?></div>
              	<?php if ($logged_in):?>
                	<div id="user-menu"><?php print $user_menu; ?></div>
                	<div class="clear-both"></div>
            	<?php endif; ?>
            	
<!-- Navigation  END -->
<div class="clear-both"></div>
    <div>
         <!-- Content START -->
         <div id="content-wrapper">
          <?php print $task_menu_r; ?>
          <?php if ($show_messages && $messages) { print $messages; } ?>
          <?php print $help; ?>
          <div id="content-region"><?php print $content; ?></div>
          <?php print $feed_icons; ?>
        </div>
        <!-- Content END -->
        
      </div>

</div>

<div id="right-content-wrapper">
	<!-- SEARCH START -->
<div style="background: #253245; float: left;"><!-- SEARCH START -->
        <div style="width:175px;" >
                  <div style="width: 130px; height: 20px;">
                    <?php print $search_box; ?>
                  </div>
        </div> 
   </div>
    	<!-- SEARCH END -->
 <div style="width: 175px; background: #253245; float: left;">
            <div style="padding: 8px 0px;"><img border="0" alt="OUR PARTNERS" src="<?php print $aen_path; ?>/images/our_partners.png" width="175" height="20" /></div>
          
            <div id="header-side-region"><?php print $header_side; ?></div>
          
            <div style="padding: 8px 0px 0px 0px;"><img border="0" alt="ADVERTISE WITH US" src="<?php print $aen_path; ?>/images/advertise_with_us.png" width="175" height="20" /></div>
          
            <div id="banner-side-region"><?php print $banner_side; ?></div>
        </div>
</div>
<div class="clear-both"></div>
<!-- Footer START -->
<div id="footer-outer">
    <div id="footer-inner" class="footer">Put Footer Content Here</div>
</div>

</div>
<!-- Footer END -->
<?php print $footer; ?>
<?php print $closure; ?>
</body>
</html>
