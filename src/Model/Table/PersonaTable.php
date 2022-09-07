<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persona Model
 *
 * @property \App\Model\Table\TipoDeIdentificacionTable&\Cake\ORM\Association\BelongsTo $TipoDeIdentificacion
 * @property \App\Model\Table\RolDeLiderTable&\Cake\ORM\Association\BelongsTo $RolDeLider
 * @property \App\Model\Table\ComisionTable&\Cake\ORM\Association\BelongsTo $Comision
 * @property \App\Model\Table\UnidadAcademicaTable&\Cake\ORM\Association\BelongsTo $UnidadAcademica
 * @property \App\Model\Table\GestionDeOperacionTable&\Cake\ORM\Association\HasMany $GestionDeOperacion
 * @property \App\Model\Table\UsuarioTable&\Cake\ORM\Association\HasMany $Usuario
 *
 * @method \App\Model\Entity\Persona newEmptyEntity()
 * @method \App\Model\Entity\Persona newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PersonaTable extends Table
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

        $this->setTable('persona');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TipoDeIdentificacion', [
            'foreignKey' => 'tipo_de_identificacion_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('RolDeLider', [
            'foreignKey' => 'rol_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Comision', [
            'foreignKey' => 'comision_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('UnidadAcademica', [
            'foreignKey' => 'unidad_academica_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('GestionDeOperacion', [
            'foreignKey' => 'persona_id',
        ]);
        $this->hasMany('Usuario', [
            'foreignKey' => 'persona_id',
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
            ->integer('tipo_de_identificacion_id')
            ->requirePresence('tipo_de_identificacion_id', 'create')
            ->notEmptyString('tipo_de_identificacion_id');

        $validator
            ->scalar('numero_de_identificacion')
            ->maxLength('numero_de_identificacion', 50)
            ->requirePresence('numero_de_identificacion', 'create')
            ->notEmptyString('numero_de_identificacion');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 100)
            ->requirePresence('apellido', 'create')
            ->notEmptyString('apellido');

        $validator
            ->integer('rol_id')
            ->requirePresence('rol_id', 'create')
            ->notEmptyString('rol_id');

        $validator
            ->scalar('correo_electronico')
            ->maxLength('correo_electronico', 50)
            ->requirePresence('correo_electronico', 'create')
            ->notEmptyString('correo_electronico');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 20)
            ->allowEmptyString('telefono');

        $validator
            ->integer('comision_id')
            ->requirePresence('comision_id', 'create')
            ->notEmptyString('comision_id');

        $validator
            ->integer('numero_de_horas')
            ->requirePresence('numero_de_horas', 'create')
            ->notEmptyString('numero_de_horas');

        $validator
            ->integer('unidad_academica_id')
            ->requirePresence('unidad_academica_id', 'create')
            ->notEmptyString('unidad_academica_id');

        $validator
            ->scalar('dependencia')
            ->maxLength('dependencia', 100)
            ->requirePresence('dependencia', 'create')
            ->notEmptyString('dependencia');

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
        $rules->add($rules->existsIn('tipo_de_identificacion_id', 'TipoDeIdentificacion'), ['errorField' => 'tipo_de_identificacion_id']);
        $rules->add($rules->existsIn('rol_id', 'RolDeLider'), ['errorField' => 'rol_id']);
        $rules->add($rules->existsIn('comision_id', 'Comision'), ['errorField' => 'comision_id']);
        $rules->add($rules->existsIn('unidad_academica_id', 'UnidadAcademica'), ['errorField' => 'unidad_academica_id']);

        return $rules;
    }
}
