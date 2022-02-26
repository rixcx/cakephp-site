<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menucategories Model
 *
 * @property \App\Model\Table\MenusTable&\Cake\ORM\Association\HasMany $Menus
 *
 * @method \App\Model\Entity\Menucategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Menucategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Menucategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Menucategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Menucategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Menucategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Menucategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Menucategory findOrCreate($search, callable $callback = null, $options = [])
 */
class MenucategoriesTable extends Table
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

        $this->setTable('menucategories');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('Menus', [
            'foreignKey' => 'menucategory_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }
}
