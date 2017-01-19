<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customer_id
 * @property string $customer_pseudo
 * @property string $customer_name
 * @property string $customer_surname
 * @property string $customer_mail
 * @property string $customer_password
 *
 * @property \App\Model\Entity\Customer $customer
 */
class Customer extends Entity
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
        'customer_id' => false
    ];
}
