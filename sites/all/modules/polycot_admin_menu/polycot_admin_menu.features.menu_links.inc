<?php
/**
 * @file
 * polycot_admin_menu.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function polycot_admin_menu_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-polycot-admin:admin/appearance
  $menu_links['menu-polycot-admin:admin/appearance'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/appearance',
    'router_path' => 'admin/appearance',
    'link_title' => 'Theme',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-41',
  );
  // Exported menu link: menu-polycot-admin:admin/content2
  $menu_links['menu-polycot-admin:admin/content2'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/content2',
    'router_path' => 'admin/content2',
    'link_title' => 'content',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-48',
  );
  // Exported menu link: menu-polycot-admin:admin/index
  $menu_links['menu-polycot-admin:admin/index'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/index',
    'router_path' => 'admin/index',
    'link_title' => 'admin',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
  );
  // Exported menu link: menu-polycot-admin:admin/modules
  $menu_links['menu-polycot-admin:admin/modules'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/modules',
    'router_path' => 'admin/modules',
    'link_title' => 'Modules',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-44',
  );
  // Exported menu link: menu-polycot-admin:admin/reports/status
  $menu_links['menu-polycot-admin:admin/reports/status'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/reports/status',
    'router_path' => 'admin/reports/status',
    'link_title' => 'Status Report',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-43',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/block
  $menu_links['menu-polycot-admin:admin/structure/block'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/block',
    'router_path' => 'admin/structure/block',
    'link_title' => 'blocks',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/menu
  $menu_links['menu-polycot-admin:admin/structure/menu'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/menu',
    'router_path' => 'admin/structure/menu',
    'link_title' => 'Menus',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-46',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/mini-panels
  $menu_links['menu-polycot-admin:admin/structure/mini-panels'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/mini-panels',
    'router_path' => 'admin/structure/mini-panels',
    'link_title' => 'Mini-panels',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-45',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/taxonomy
  $menu_links['menu-polycot-admin:admin/structure/taxonomy'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/taxonomy',
    'router_path' => 'admin/structure/taxonomy',
    'link_title' => 'Taxonomy',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-42',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/types
  $menu_links['menu-polycot-admin:admin/structure/types'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/types',
    'router_path' => 'admin/structure/types',
    'link_title' => 'Content Types',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-47',
  );
  // Exported menu link: menu-polycot-admin:admin/structure/views
  $menu_links['menu-polycot-admin:admin/structure/views'] = array(
    'menu_name' => 'menu-polycot-admin',
    'link_path' => 'admin/structure/views',
    'router_path' => 'admin/structure/views',
    'link_title' => 'Views',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-40',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Content Types');
  t('Menus');
  t('Mini-panels');
  t('Modules');
  t('Status Report');
  t('Taxonomy');
  t('Theme');
  t('Views');
  t('admin');
  t('blocks');
  t('content');


  return $menu_links;
}
