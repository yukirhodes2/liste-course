<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Level Entity
 *
 * @property int $level_id
 * @property string $level_libelle
 *
 * @property \App\Model\Entity\Level $level
 */
class Level extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'level_id' => false
    ];
}