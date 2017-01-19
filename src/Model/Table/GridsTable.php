<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grids Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Grids
 *
 * @method \App\Model\Entity\Grid get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grid newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grid|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grid[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grid findOrCreate($search, callable $callback = null, $options = [])
 */
class GridsTable extends Table
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

        $this->table('grids');
        $this->displayField('grid_id');
        $this->primaryKey('grid_id');

        $this->belongsTo('Grids', [
            'foreignKey' => 'grid_id',
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
        $rules->add($rules->existsIn(['grid_id'], 'Grids'));

        return $rules;
    }
}
