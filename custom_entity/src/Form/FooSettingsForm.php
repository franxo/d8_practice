<?php

namespace Drupal\custom_entity\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\custom_entity\Entity\Controller\FooListBuilder;

/**
 * Class FooSettingsForm.
 *
 * @ingroup custom_entity
 */
class FooSettingsForm extends FormBase {

  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'custom_entity_foo_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['custom_entity_foo_settings']['#markup'] = 'Settings form for Custom Entity Foo. Manage field settings here.';
    return $form;
  }

}
