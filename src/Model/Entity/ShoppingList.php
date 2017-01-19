<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShoppingList Entity
 *
 * @property int $shopping_list_id
 * @property int $customer_id
 *
 * @property \App\Model\Entity\ShoppingList $shopping_list
 * @property \App\Model\Entity\Customer $customer
 */
class ShoppingList extends Entity
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
        'shopping_list_id' => false
    ];
}
