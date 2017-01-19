<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $product_id
 * @property string $product_name
 * @property int $category_id
 * @property int $brand_id
 * @property int $location_id
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Location $location
 */
class Product extends Entity
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
        'product_id' => false
    ];
}
