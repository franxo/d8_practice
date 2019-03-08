<?php

namespace Drupal\customblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a simple custom block.
 *
 * @Block(
 *   id = "customblock_simple",
 *   admin_label = @Translation("Customblock: simple block"),
 *   category = @Translation("Customblock blocks")
 * )
 */
class CustomBlockSimpleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t("Simple block."),
    ];
  }

}
