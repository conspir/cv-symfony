<?php
/**
 * Créer par : PhpStorm.
 * Developpeur : gabriel
 * Date : 01/07/2016
 */

namespace CvBundle\DoctrineListeners;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class EntityUpdateDatemodification {

    /**
     * Avant inserer
     * @param LifecycleEventArgs $args
     */
    public function postPersist(LifecycleEventArgs $args) {
        $entity = $args->getObject();
        self::miseajourDatecreation($entity);
        self::miseajourDatemodification($entity);
    }

    /**
     * Avant modifier
     * @param LifecycleEventArgs $args
     */
    public function postUpdate(LifecycleEventArgs $args) {
        $entity = $args->getObject();
        self::miseajourDatemodification($entity);
    }

    /**
     * Mettre à jour la date de création
     */
    private static function miseajourDatecreation($entity) {
        $entity->setDatecreation(new \DateTime());
    }

    /**
     * Mettre à jour de la date de modification
     */
    private static function miseajourDatemodification($entity) {
        $entity->setDatemodification(new \DateTime());
    }

}