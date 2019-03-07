<?php

namespace Drupal\custompage\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

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

  /**
   * Constructs a page with arguments.
   *
   * @param string $first
   *   A string to use, should be a number.
   * @param string $second
   *   Another string to use, should be a number.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
   *   If the parameters are invalid.
   *
   * @return array
   *   Renderable array.
   */
  public function params($first, $second) {
    // Make sure you don't trust the URL to be safe! Always check for exploits.
    if (!is_numeric($first) || !is_numeric($second)) {
      // We will just show a standard "access denied" page in this case.
      throw new AccessDeniedHttpException();
    }

    $list[] = $this->t("First number was @number.", ['@number' => $first]);
    $list[] = $this->t("Second number was @number.", ['@number' => $second]);
    $list[] = $this->t('The total was @number.', ['@number' => $first + $second]);

    $render_content['page_example_arguments'] = [
      // The theme function to apply to the #items.
      '#theme' => 'item_list',
      // The list itself.
      '#items' => $list,
      '#title' => $this->t('Argument Information'),
    ];
    return $render_content;
  }

}
