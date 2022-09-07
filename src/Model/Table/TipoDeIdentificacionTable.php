<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoDeIdentificacion Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\HasMany $Persona
 *
 * @method \App\Model\Entity\TipoDeIdentificacion newEmptyEntity()
 * @method \App\Model\Entity\TipoDeIdentificacion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TipoDeIdentificacion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TipoDeIdentificacionTable extends Table
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

        $this->setTable('tipo_de_identificacion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Persona', [
            'foreignKey' => 'tipo_de_identificacion_id',
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
            ->maxLength('nombre', 25)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
