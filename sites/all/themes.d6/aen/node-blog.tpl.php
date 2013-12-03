<?php
// $Id$

/**
 * @file node.tpl.php
 * 
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */

$author = user_load(array('uid'=>$uid));
//print_r($author);
$author_pic = $author->picture;
//print $author_pic;
$preset = 'blog_user_pic';

$node_pic = $node->field_picture[0]['filepath']; 
?>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> <?php if($teaser && ($id > 1)){ print ' node-after-first';}?>">
<?php 
  $tmp = drupal_get_path_alias($_GET['q']);
  $blog_id = explode('/', $tmp);
?>
<?php if(!$teaser): ?>
	<!-- USERNAME FEED -->
	<?php if($page): ?>
	
			<?php drupal_add_feed('/blog/rss/'.$uid.'/feed','Subscribed to all blogs by '.$author->name.' via RSS'); ?>
		
	<?php endif;?>
	<!-- USERNAME BLOG -->
	<h2 id="blog-page-title">
	<font class="float-left"><?php print l($author->name." Blog",'blog/'.$uid); ?></font>
	 <?php
		    if (($page) && (($type == 'action') || ($type == 'blog') || ($type == 'econetwork_message') || ($type == 'cal_event') || ($type == 'job') || ($type == 'story'))) {
		      $addthis_block = module_invoke('addthis', 'block', 'view', '0');
		      ?>
		      <div class="addthis-block"><?php print $addthis_block['content']?></div>
		      <?php
		    }
		  ?></h2>
	<!-- ADD THIS -->
		
	<!-- CATEGORIES -->	
		<?php if ($terms): ?>
	    	<div id="blog-node-terms" class="terms" style=""><h3 class="h3-dark">Category:</h3><?php print $terms ?></div>
	  	<?php endif;?>
	<!-- TITLE -->
		<?php if (!$page): ?>
	  		<h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	  	<?php else:?>
	  		<h2 class="blog-title"><?php print $title?></h2>
		<?php endif; ?>
		
	<!-- PICTURE -->
		<div class="author-picture">
		
		<?php if($author_pic): ?>
			<?php print theme('imagecache', $preset, $author_pic, $name, $author->name,  $attributes); ?>
		<?php else:?>
			<?php print '<img src="sites/all/themes/aen/images/aen-blogger.gif">';?>
		<?php endif;?>
		</div>
	<!-- BY LINE -->
		<div class="blog-by-line" class="meta">
	  		<?php if ($submitted): ?>
	    		<span class="submitted"><?php print $submitted ?></span>
	  		<?php endif; ?>
	  	</div>
	<!-- BLOG POST PHOTO -->
		<div id="blog-photo">
			<?php if($node_pic):?>
			  <?php print theme('imagecache', 'blog_node_pic', $node_pic, $title, $title,  $attributes); ?>
			<?php endif;?>
		</div>
	<!-- BLOG PHOTO CAPTION -->
	<!-- BLOG POST BODY -->
	  <div class="blog-content" class="content">
	    	<?php print $content; ?>
	  </div>
	<!-- COMMENTS -->
		<?php print $links; ?>
<?php else:?>
	<!-- USERNAME FEED -->
	<?php if($id == 1):?>
	<?php if($page): ?>
	
			<?php drupal_add_feed('/blog/rss/'.$uid.'/feed','Subscribed to all blogs by '.$author->name.' via RSS'); ?>
		
	<?php endif;?>
	<!-- USERNAME BLOG -->
		<?php if($blog_id[1] == $uid):?>
		<h2 id="author-blog-title"><font class="float-left"><?php print $author->name."'s blog";?></font>
		<?php
		    if ( (($type == 'action') || ($type == 'blog') || ($type == 'econetwork_message') || ($type == 'cal_event') || ($type == 'job') || ($type == 'story'))) {
		      $addthis_block = module_invoke('addthis', 'block', 'view', '0');
		      ?>
		      <div class="addthis-block"><?php print $addthis_block['content']?></div>
		      <?php
		    }
		  ?>
		</h2>
	<?php else:?>
	<h2 id="blog-page-title"><font class="float-left">All Blogs</font>
	 <?php
		    if ( (($type == 'action') || ($type == 'blog') || ($type == 'econetwork_message') || ($type == 'cal_event') || ($type == 'job') || ($type == 'story'))) {
		      $addthis_block = module_invoke('addthis', 'block', 'view', '0');
		      ?>
		      <div class="addthis-block"><?php print $addthis_block['content']?></div>
		      <?php
		    }
		  ?></h2>
	<?php endif;?>
	<!-- ADD THIS -->
		
	<!-- CATEGORIES -->	
		<?php if ($terms): ?>
	    	<div id="blog-node-terms" class="terms" style=""><h3 class="h3-dark">Category:</h3><?php print $terms ?></div>
	  	<?php endif;?>
	<!-- TITLE -->
		<?php if (!$page): ?>
	  		<h2 class="blog-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	  	<?php else:?>
	  		<h2 class="blog-title"><?php print $title?></h2>
		<?php endif; ?>
		
	<!-- PICTURE -->
		<div class="author-picture">
		
		<?php if($author_pic): ?>
			<?php print theme('imagecache', $preset, $author_pic, $name, $author->name,  $attributes); ?>
		<?php else:?>
			<?php print "no picture";?>
		<?php endif;?>
		</div>
	<!-- BY LINE -->
		<div class="blog-by-line" class="meta">
	  		<?php if ($submitted): ?>
	    		<span class="submitted"><?php print $submitted ?></span>
	  		<?php endif; ?>
	  	</div>
	<div id="textwrap-float-1"></div>
	<div id="textwrap-inline-1"></div>
	<div id="blog-photo-content-container">
	<!-- BLOG POST PHOTO -->
	<div id="blog-photo-<?php print $id; ?>">
			<?php if($node_pic): ?>
			  <?php print theme('imagecache', 'blog_node_pic_small', $node_pic, $title, $title,  $attributes); ?>
			<?php endif;?>
		</div>
	<!-- BLOG PHOTO CAPTION -->
	
	<!-- BLOG POST BODY -->

	<div class="blog-content" class="content">
	  
	    <?php print $content; ?>
	  </div>
	</div><!-- END BLOG PHOTO/CONTENT CONTAINER -->
	<!-- COMMENTS -->
	<div class="clear-both">
	 
	</div>
	
	 <div style="text-align: center" ><?php print $links; ?></div>
	<?php else:?>
			<?php if($page): ?>
	
			<?php drupal_add_feed('/blog/rss/'.$uid.'/feed','Subscribed to all blogs by '.$author->name.' via RSS'); ?>
		
	<?php endif;?>
	
	<!-- ADD THIS -->
		
	<!-- CATEGORIES -->	
		<?php if ($terms): ?>
	    	<div id="blog-node-terms" class="terms" style=""><h3 class="h3-dark">Category:</h3><?php print $terms ?></div>
	  	<?php endif;?>
	<!-- TITLE -->
		<?php if (!$page): ?>
	  		<h2 class="blog-title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
	  	<?php else:?>
	  		<h2 class="blog-title"><?php print $title?></h2>
		<?php endif; ?>
		
	<!-- PICTURE -->
		<div class="author-picture">
		
		<?php if($author_pic): ?>
			<?php print theme('imagecache', $preset, $author_pic, $name, $author->name,  $attributes); ?>
		<?php else:?>
			<?php print '<img src="sites/all/themes/aen/images/aen-blogger.gif">';?>
		<?php endif;?>
		</div>
	<!-- BY LINE -->
		<div class="blog-by-line" class="meta">
	  		<?php if ($submitted): ?>
	    		<span class="submitted"><?php print $submitted ?></span>
	  		<?php endif; ?>
	  	</div>
	<div id="textwrap-float-1"></div>
	<div id="textwrap-inline-1"></div>
	<div id="blog-photo-content-container">
	<!-- BLOG POST PHOTO -->
	
	<!-- BLOG PHOTO CAPTION -->
	
	<!-- BLOG POST BODY -->

	<div class="blog-content" class="content">
	  
	    <?php print $content; ?>
	  </div>
	</div><!-- END BLOG PHOTO/CONTENT CONTAINER -->
	<!-- COMMENTS -->
	<div class="clear-both">
	 
	</div>
	
	 <div style="text-align: center" ><?php print $links; ?></div>
		
	<?php endif;?>
<?php endif;?>
</div>
