<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property int $tipo_de_identificacion_id
 * @property string $numero_de_identificacion
 * @property string $nombre
 * @property string $apellido
 * @property int $rol_id
 * @property string $correo_electronico
 * @property string|null $telefono
 * @property int $comision_id
 * @property int $numero_de_horas
 * @property int $unidad_academica_id
 * @property string $dependencia
 *
 * @property \App\Model\Entity\TipoDeIdentificacion $tipo_de_identificacion
 * @property \App\Model\Entity\RolDeLider $rol_de_lider
 * @property \App\Model\Entity\Comision $comision
 * @property \App\Model\Entity\UnidadAcademica $unidad_academica
 * @property \App\Model\Entity\GestionDeOperacion[] $gestion_de_operacion
 * @property \App\Model\Entity\Usuario[] $usuario
 */
class Persona extends Entity
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
        'tipo_de_identificacion_id' => true,
        'numero_de_identificacion' => true,
        'nombre' => true,
        'apellido' => true,
        'rol_id' => true,
        'correo_electronico' => true,
        'telefono' => true,
        'comision_id' => true,
        'numero_de_horas' => true,
        'unidad_academica_id' => true,
        'dependencia' => true,
        'tipo_de_identificacion' => true,
        'rol_de_lider' => true,
        'comision' => true,
        'unidad_academica' => true,
        'gestion_de_operacion' => true,
        'usuario' => true,
    ];
}
