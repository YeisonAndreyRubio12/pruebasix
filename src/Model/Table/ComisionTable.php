<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comision Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\HasMany $Persona
 *
 * @method \App\Model\Entity\Comision newEmptyEntity()
 * @method \App\Model\Entity\Comision newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Comision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comision findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Comision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comision[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comision|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comision saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comision[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comision[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comision[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Comision[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ComisionTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('comision');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Persona', [
            'foreignKey' => 'comision_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
