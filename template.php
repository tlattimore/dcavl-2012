<?php
/**
 * Implements template_preproces_page().
 */

function advancement_preprocess_page(&$vars) {

  // Here we define variables to use in page.tpl
  // in order to keep things clean.

  //var for main-menu
  $vars['comp_main_menu'] = theme('links__system_main_menu', array(
          'links' => $vars['main_menu'],
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        ));
  //var for secondary menu
  $vars['comp_secondary_menu'] = theme('links__system_secondary_menu', array(
          'links' => $vars['secondary_menu'],
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        ));

  //dpm($vars);

}


/**
 * Implements theme_username()
 */

function advancement_username($vars) {

  $vars['name'] = $vars['name'] . ' is awesome!';

  $vars['attributes_array']['class'][0] .= ' strong';

  if (isset($vars['link_path'])) {
    // We have a link path, so we should generate a link using l().
    // Additional classes may be added as array elements like
    // $vars['link_options']['attributes']['class'][] = 'myclass';
    $output = l($vars['name'] . $vars['extra'], $vars['link_path'], $vars['link_options']);
  }
  else {
    // Modules may have added important attributes so they must be included
    // in the output. Additional classes may be added as array elements like
    // $vars['attributes_array']['class'][] = 'myclass';
    $output = '<span' . drupal_attributes($vars['attributes_array']) . '>' . $vars['name'] . $vars['extra'] . '</span>';
  }
  dpm($vars);
  return $output;

}
