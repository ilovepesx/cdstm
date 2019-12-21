<?php

namespace Drupal\cdstm\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Main item entity entities.
 *
 * @ingroup cdstm
 */
interface MainItemEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Main item entity name.
   *
   * @return string
   *   Name of the Main item entity.
   */
  public function getName();

  /**
   * Sets the Main item entity name.
   *
   * @param string $name
   *   The Main item entity name.
   *
   * @return \Drupal\cdstm\Entity\MainItemEntityInterface
   *   The called Main item entity entity.
   */
  public function setName($name);

  /**
   * Gets the Main item entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Main item entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Main item entity creation timestamp.
   *
   * @param int $timestamp
   *   The Main item entity creation timestamp.
   *
   * @return \Drupal\cdstm\Entity\MainItemEntityInterface
   *   The called Main item entity entity.
   */
  public function setCreatedTime($timestamp);

}
