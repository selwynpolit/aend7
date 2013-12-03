<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */


/*
 *  fields:
 *
 * field_org_partner_type_value
 * title
 * field_org_logo_fid
 * field_description_value
 * field_org_website_url
 * field_org_greenreason_value
 * field_org_affiliations_value
 * field_certified_value
 * address
 * field_org_phone_value
 * field_org_type_value
 * tid
 * edit_node
 * sticky
 * field_ecm_type_value - ecoCommunity Type: eg non-profit, government

???
 * tid_1

  dsm($fields) ;


*/
?>




<div class="class-orgfields-selwyn">

<?php


  //$foo = "foo too" ;
  //print "DEBUG: my_foo: " . $my_foo . "<br/>";

  define("AEN_DEBUG",false);  //selwyn AEN debug flag


  if (AEN_DEBUG===true) {
    dsm(array_keys($fields));
    }


  // Wrap org type in a div & class
  // org type - bus or ecocommunity
  $org_type = $fields['field_org_type_value']->raw ;
  if ($org_type == "EcoBusiness")
    print '<div class="class-ecobusiness">';
  else {
    //($org_type == "EcoCommunity")
    print '<div class="class-ecocommunity">';
}

  // Wrap partner types in a div & class
  $partner_type = $fields['field_org_partner_type_value']->raw;
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
  $ecocommunity_member_type = $fields['field_ecm_type_value']->raw;
  if ($ecocommunity_member_type =="")
    $ecocommunity_member_type = "UNSET" ;
  if (strtoupper($ecocommunity_member_type[0])=='N')
    print '<div class="class-nonprofit">';
  elseif (strtoupper($ecocommunity_member_type[0])=='G')
    print '<div class="class-government">';
  elseif (strtoupper($ecocommunity_member_type[0])=='C')
    print '<div class="class-community-group">';
  else
    print '<div class="class-non-eco-community-member-type">';


  // Now for the actual fields to be displayed
  //******************************************

  //only show logo for partners and partner plus
  if ($partner_type == "Partner" || $partner_type == "Partner Plus"){
    print "<p>" . $fields['field_org_logo_fid']->content . "</p>" ;
  }

  //title
  print "<h2>" . $fields['title']->content . "</h2>" ;

  //print address
  if ($fields['address']->raw)
    print '<div class="class-address-container"><p>' . $fields['address']->content. '</p></div>' ;


  //print '<div class="class-phone-website"><p>' . $fields['field_org_phone_value']->content . '</p>' ;
  //if (!$field['field_org_website_url']->raw)
  //  print '<p>Website:' . $fields['field_org_website_url']->content . '</p>' ;
  //print '</div>';
  
  
  print '<div class="class-phone-website"><p>' . $fields['field_org_phone_value']->content . '</p>' ;

  if (!$field['field_org_website_url']->raw){
  print '<br/>Website: ' ;
  print $fields['field_org_website_url']->content  ;
  }
  print '</div>';

  
  

  // how to get only 1 website for a basic & partner, 3 for a partner plus?
  //dsm($fields['field_org_website_url']) ;


  //only show description, greenreason etc for partners and partner plus
  if ($partner_type == "Partner" || $partner_type == "Partner Plus"){
	if ($fields['field_description_value']->raw){
	    print "<p>" . $fields['field_description_value']->content . "</p>" ;
	    }
	if ($fields['field_org_greenreason_value']->raw){
	    //print '<p>' . $fields['field_org_greenreason_value']->content . '</p>' ;
	   }
  }




  //only show affiliations for partners
  if ($partner_type == "Partner" || $partner_type == "Partner Plus"){
	  //print "Affiliations: " ;
	 // print $fields['field_org_affiliations_value']->content ;
  }

  // next text should be below the above boxes
  print '<div class="clear-both"></div>';

  // directory headings
 // print "<p>Directory Heading:" . $fields['tid']->content . "</p>" ;


  //print "<p>$partner_type</p>" ;
  //print "<p>tid_1:" . $fields['tid_1']->content . "</p>" ;


  //View Profile link
  print '<p>' . $fields['view_node']->content . '</p>' ;


  //edit link
  print $fields[edit_node]->content;


  if (AEN_DEBUG===true) {
  //type - ecobusiness or ecocommunity
  print "<p>" ;
  print "DEBUG: Org Type:" . $fields['field_org_type_value']->raw . "<br/>" ;
  print "DEBUG: EcoCommunity Type:" . $ecocommunity_member_type . "<br/>" ;
  print "DEBUG: Partner Type:" . $partner_type . "<br/>" ;
  print "DEBUG: Sticky: " . $fields['sticky']->content . "<br/>";
  //print "DEBUG: foo: " . $foo . "<br/>";
  //print 'DEBUG: $org_type:' . $org_type . '<br/>' ;
  print "</p>" ;

}



  print "</div>"; //eco community member type
  print "</div>";  //partner type
  print "</div>";  //org type

?>

</div>

