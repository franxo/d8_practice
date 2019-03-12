<?php

namespace Drupal\custom_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a Foo entity.
 * @ingroup custom_entity
 */
interface FooInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
