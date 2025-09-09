<?php

namespace Drupal\group6_react\Controller;

use Drupal\Core\Controller\ControllerBase;

class Group6ReactController extends ControllerBase {
  public function content()
    {
        return [
            "#markup" => '<div id="group6-react"></div>',
            "#attached" => [
                "library" => ["group6_react/group6_react"],
            ],
        ];
    }

}