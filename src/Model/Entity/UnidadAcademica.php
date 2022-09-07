<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UnidadAcademica Entity
 *
 * @property int $id
 * @property string $nombre
 * @property int $tipo_de_unidad_academica_id
 *
 * @property \App\Model\Entity\TipoDeUnidadAcademica $tipo_de_unidad_academica
 * @property \App\Model\Entity\Persona[] $persona
 */
class UnidadAcademica extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nombre' => true,
        'tipo_de_unidad_academica_id' => true,
        'tipo_de_unidad_academica' => true,
        'persona' => true,
    ];
}
