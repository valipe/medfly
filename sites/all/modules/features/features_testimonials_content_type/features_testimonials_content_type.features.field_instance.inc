<?php
/**
 * @file
 * features_testimonials_content_type.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function features_testimonials_content_type_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-medfly_testimonials-field_medfly_testimonial'
  $field_instances['node-medfly_testimonials-field_medfly_testimonial'] = array(
    'bundle' => 'medfly_testimonials',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(),
        'type' => 'text_default',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_medfly_testimonial',
    'label' => 'Testimonial',
    'required' => 0,
    'settings' => array(
      'display_summary' => 0,
      'text_processing' => 1,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'rows' => 20,
        'summary_rows' => 5,
      ),
      'type' => 'text_textarea_with_summary',
      'weight' => -4,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Testimonial');

  return $field_instances;
}
