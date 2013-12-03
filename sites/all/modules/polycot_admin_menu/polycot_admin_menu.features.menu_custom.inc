<?php
/**
 * @file
 * polycot_admin_menu.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function polycot_admin_menu_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-polycot-admin
  $menus['menu-polycot-admin'] = array(
    'menu_name' => 'menu-polycot-admin',
    'title' => 'Polycot Admin',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Polycot Admin');


  return $menus;
}
