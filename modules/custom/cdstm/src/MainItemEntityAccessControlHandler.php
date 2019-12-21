<?php

namespace Drupal\cdstm;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Main item entity entity.
 *
 * @see \Drupal\cdstm\Entity\MainItemEntity.
 */
class MainItemEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\cdstm\Entity\MainItemEntityInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished main item entity entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published main item entity entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit main item entity entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete main item entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add main item entity entities');
  }


}
