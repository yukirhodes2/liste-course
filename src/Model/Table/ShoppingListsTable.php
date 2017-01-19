<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShoppingLists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ShoppingLists
 * @property \Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\ShoppingList get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShoppingList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ShoppingList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShoppingList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShoppingList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShoppingList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShoppingList findOrCreate($search, callable $callback = null, $options = [])
 */
class ShoppingListsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('shopping_lists');
        $this->displayField('shopping_list_id');
        $this->primaryKey('shopping_list_id');

        $this->belongsTo('ShoppingLists', [
            'foreignKey' => 'shopping_list_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['shopping_list_id'], 'ShoppingLists'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
