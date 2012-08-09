<?php
/**
 * Implements template_preproces_page().
 */

function advancement_preprocess_page(&$vars) {


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

  dpm($vars);
}
