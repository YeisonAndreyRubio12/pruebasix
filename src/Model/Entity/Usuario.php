<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $password
 * @property int $persona_id
 * @property int $rol_id
 *
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\RolDeLider $rol_de_lider
 * @property \App\Model\Entity\GestionDeConvenio[] $gestion_de_convenio
 */
class Usuario extends Entity
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
        'password' => true,
        'persona_id' => true,
        'rol_id' => true,
        'persona' => true,
        'rol_de_lider' => true,
        'gestion_de_convenio' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0 ){
            return (new DefaultPasswordHasher()) ->hash($password);
        }
    }


}
