<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UnidadAcademica Model
 *
 * @property \App\Model\Table\TipoDeUnidadAcademicaTable&\Cake\ORM\Association\BelongsTo $TipoDeUnidadAcademica
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\HasMany $Persona
 *
 * @method \App\Model\Entity\UnidadAcademica newEmptyEntity()
 * @method \App\Model\Entity\UnidadAcademica newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadAcademica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UnidadAcademica get($primaryKey, $options = [])
 * @method \App\Model\Entity\UnidadAcademica findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\UnidadAcademica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadAcademica[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\UnidadAcademica|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadAcademica saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UnidadAcademica[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadAcademica[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadAcademica[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\UnidadAcademica[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UnidadAcademicaTable extends Table
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

        $this->setTable('unidad_academica');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TipoDeUnidadAcademica', [
            'foreignKey' => 'tipo_de_unidad_academica_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Persona', [
            'foreignKey' => 'unidad_academica_id',
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
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->integer('tipo_de_unidad_academica_id')
            ->requirePresence('tipo_de_unidad_academica_id', 'create')
            ->notEmptyString('tipo_de_unidad_academica_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('tipo_de_unidad_academica_id', 'TipoDeUnidadAcademica'), ['errorField' => 'tipo_de_unidad_academica_id']);

        return $rules;
    }
}
