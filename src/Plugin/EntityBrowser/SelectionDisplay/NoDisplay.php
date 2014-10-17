<?php

/**
 * Contains \Drupal\entity_browser\Plugin\EntityBrowser\SelectionDisplay\NoDisplay.
 */

namespace Drupal\entity_browser\Plugin\EntityBrowser\SelectionDisplay;

use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\entity_browser\SelectionDisplayBase;
use Drupal\entity_browser\SelectionDisplayInterface;

/**
 * Does not show current selection and immediately delivers selected entities.
 *
 * @EntityBrowserSelectionDisplay(
 *   id = "no_display",
 *   label = @Translation("No selection display"),
 *   description = @Translation("Skips current selection display and immediately delivers selected entities.")
 * )
 */
class NoDisplay extends SelectionDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function getForm() {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function submit(array &$form, FormStateInterface $form_state) {
    $this->selectionDone();
  }

}
