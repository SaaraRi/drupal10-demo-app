<?php

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class FirstController extends ControllerBase {
  public function first() {
    return [
      '#markup' => $this->t('Welcome to our Website :)'),
    ];
  }
}
