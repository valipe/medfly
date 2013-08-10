<?php
/**
 * @file
 * features_testimonials_content_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function features_testimonials_content_type_node_info() {
  $items = array(
    'medfly_testimonials' => array(
      'name' => t('Testimonials'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
