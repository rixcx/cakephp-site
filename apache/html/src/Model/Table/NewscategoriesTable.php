<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Newscategories Model
 *
 * @property \App\Model\Table\NewsTable&\Cake\ORM\Association\BelongsToMany $News
 *
 * @method \App\Model\Entity\Newscategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Newscategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Newscategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Newscategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newscategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Newscategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Newscategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Newscategory findOrCreate($search, callable $callback = null, $options = [])
 */
class NewscategoriesTable extends Table
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

        $this->setTable('newscategories');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsToMany('News', [
            'foreignKey' => 'newscategory_id',
            'targetForeignKey' => 'news_id',
            'joinTable' => 'newscategories_news',
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
