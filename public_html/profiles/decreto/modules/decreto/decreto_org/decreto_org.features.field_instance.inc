<?php
/**
 * @file
 * decreto_org.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function decreto_org_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'taxonomy_term-companies-field_access_request'
  $field_instances['taxonomy_term-companies-field_access_request'] = array(
    'bundle' => 'companies',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Reference to users who have requested access to the organisation.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 2,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_access_request',
    'label' => 'Access request',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'entityreference',
      'settings' => array(
        'match_operator' => 'CONTAINS',
        'path' => '',
        'size' => 60,
      ),
      'type' => 'entityreference_autocomplete',
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'taxonomy_term-companies-field_committees'
  $field_instances['taxonomy_term-companies-field_committees'] = array(
    'bundle' => 'companies',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 1,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_committees',
    'label' => 'Committees',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'entityreference',
      'settings' => array(
        'match_operator' => 'CONTAINS',
        'path' => '',
        'size' => 60,
      ),
      'type' => 'entityreference_autocomplete',
      'weight' => 2,
    ),
  );

  // Exported field_instance: 'taxonomy_term-companies-field_cvr'
  $field_instances['taxonomy_term-companies-field_cvr'] = array(
    'bundle' => 'companies',
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
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'field_cvr',
    'label' => 'CVR',
    'required' => 0,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 1,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Access request');
  t('CVR');
  t('Committees');
  t('Reference to users who have requested access to the organisation.');

  return $field_instances;
}
