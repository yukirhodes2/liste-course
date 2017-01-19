<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShoppingItem Entity
 *
 * @property int $shopping_list_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\ShoppingList $shopping_list
 * @property \App\Model\Entity\Product $product
 */
class ShoppingItem extends Entity
{

}
