<?php
// $Id$

/**
 * @file node.tpl.php
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

 *
 *
 *
 */
?>

<?php




?>


<?php
  define("AEN_DEBUG",false);  //selwyn AEN debug flag


	//print 'Selwyn override the world from here from node-organization.tpl.php. <br/>' ;
	//print 'This is abc:' . $my_new_var ;


  // Show ALL the content for admins
  global $user;
  if (in_array('SuperAdmin', array_values($user->roles))) {
	  print '<div class="content">' ;
      print $content ;
	  print '</div>';
	  print '<br/><br/>';
	  print $links;
	  print '<br/><br/><br/><hr>';
  }





  // org_type div wrapper for ecoCommunity vs ecoBusiness
  $org_type = $field_org_type[0]['value'];
  if ($org_type == "EcoCommunity"){
	    print '<div class="class-ecocommunity">';
	}  else {
    // Ecobusiness
    print '<div class="class-ecobusiness">';
  }


  // Wrap partner types in a div & class
  $partner_type = $field_org_partner_type[0]['value'];
  if ($partner_type == "Basic")
    print '<div class="class-basic-org">';
  elseif($partner_type == "Partner")
    print '<div class="class-partner-org">';
  elseif($partner_type= "Partner Plus")
    print '<div class="class-partner-plus-org">';
  else{
    print 'div class="class-partner-type-unspecified"';
    /*something goofy going on now */
  }


  //wrap ecoCommunity Member types in a div and class
  $ecocommunity_member_type = $field_ecm_type[0]['value'];
  if (strtoupper($ecocommunity_member_type[0])=='N')
    print '<div class="class-nonprofit">';
  elseif (strtoupper($ecocommunity_member_type[0])=='G')
    print '<div class="class-government">';
  elseif (strtoupper($ecocommunity_member_type[0])=='C')
    print '<div class="class-community-group">';
  else
    print '<div class="class-non-eco-community-member-type">';


  if ($partner_type == "Partner" || $partner_type == "Partner Plus"){
	  print '<div class="class-org-logo">';
	  print $field_org_logo_rendered;
	  print '</div>' ;
  }
  print '<h2>' . $title . '</h2>';

  // whole address
  //print $field_org_loc_rendered ;

  //indiv address components
  print '<div class="class-address">';
  print '<p>' . $field_org_loc[0]['street'] . '<br/>' ;
  print $field_org_loc[0]['city'] . ' ' .  $field_org_loc[0]['province'] .', ' ;
  print $field_org_loc[0]['postal_code'] ;
  print '</p>' ;
  print '</div>' ;



  print $field_org_phone_rendered ;

  print $field_org_website_rendered;

  print $field_org_email_rendered ;

  print $field_description_rendered ;

  print '<div class="class-greenreason">';
  print '<p>' . $field_org_greenreason_rendered . '</p>'  ;
  print '</div>' ;

  // Get snazzy with affiliations

  // this just prints them out plain
  //print $field_org_affiliations_rendered ;

  /*
  loop throught field_org_affiliations, print each member
  print $field_org_affiliations[0]['safe'] ;
  print $field_org_affiliations[1]['safe'] ;
  print $field_org_affiliations[2]['safe'] ;
  print $field_org_affiliations[3]['safe'] ;
  */

  $affiliations_count = count($field_org_affiliations) ;
  if ($affiliations_count){
	print '<div class="class-affiliations">';
	print '<p><span class="class-affiliations-field-label">';
  	print "Affiliations: " ;
  	print '</span>' ;
  	foreach ($field_org_affiliations as $key=>$my_affiliation) {
		print $my_affiliation['safe'] ;
  		if ($key < $affiliations_count-1)
			print  ', ' ;
	  	}
	print "</p>";
  	print '</div>' ;

  }

  print '<span class="class-category-field-label">Categories: </span>' ;
  print $terms;


  //print $field_org_partner_type_rendered;

  if (AEN_DEBUG===true) {
	  //type - ecobusiness or ecocommunity
	  print "<p>" ;
	  print 'DEBUG: $org_type:' . $org_type . '<br/>' ;
	  print "DEBUG: Partner Type:" . $partner_type . "<br/>" ;
	  print "DEBUG: EcoCommunity Type:" . $ecocommunity_member_type . "<br/>" ;
	  print "</p>" ;
  }

  print '<br/><br/>' ;
  print $links;



  print "</div>"; //eco community member type
  print "</div>";  //partner type
  print "</div>";  //partner type


  /*
  logo
  title
  location/address
  phone
  web
  email
  descrip

  why were green
  affiliations
  dir headings
  partner type


  image width 185
  */

?>


