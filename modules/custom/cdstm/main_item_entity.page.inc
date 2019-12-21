<?php

/**
 * @file
 * Contains main_item_entity.page.inc.
 *
 * Page callback for Main item entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Main item entity templates.
 *
 * Default template: main_item_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_main_item_entity(array &$variables) {
  // Fetch MainItemEntity Entity Object.
  $main_item_entity = $variables['elements']['#main_item_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
