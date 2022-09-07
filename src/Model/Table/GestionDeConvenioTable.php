<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GestionDeConvenio Model
 *
 * @property \App\Model\Table\PersonaTable&\Cake\ORM\Association\BelongsTo $Persona
 * @property \App\Model\Table\ConvenioTable&\Cake\ORM\Association\BelongsTo $Convenio
 *
 * @method \App\Model\Entity\GestionDeConvenio newEmptyEntity()
 * @method \App\Model\Entity\GestionDeConvenio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GestionDeConvenio get($primaryKey, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GestionDeConvenio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GestionDeConvenio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GestionDeConvenioTable extends Table
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

        $this->setTable('gestion_de_convenio');
        $this->setDisplayField(['usuario_id', 'convenio_id']);
        $this->setPrimaryKey(['usuario_id', 'convenio_id']);

        $this->belongsTo('Persona', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Convenio', [
            'foreignKey' => 'convenio_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn('usuario_id', 'Persona'), ['errorField' => 'usuario_id']);
        $rules->add($rules->existsIn('convenio_id', 'Convenio'), ['errorField' => 'convenio_id']);

        return $rules;
    }
}
