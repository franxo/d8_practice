<?php

namespace Drupal\custompage\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for custompage routes.
 */
class CustomPageController extends ControllerBase {

  /**
   * Constructs a simple page.
   */
  public function simple() {
    return [
      '#markup' => '<p>' . $this->t('Custom page: Lorem ipsum dolor.') . '</p>',
    ];
  }

  /**
   * Constructs a simple page with custom theme.
   */
  public function themeable() {
    return [
      '#theme' => 'key-themeable',
      '#page_content' => [
        'hola que pasa, esto es un texto de prueba.',
        'hola asdfas adfasdf w3e',
        'hola asdfas asdfas222',
      ],
    ];
  }

}
