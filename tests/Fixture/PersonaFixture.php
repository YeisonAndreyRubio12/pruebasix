<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonaFixture
 */
class PersonaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persona';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'tipo_de_identificacion_id' => 1,
                'numero_de_identificacion' => 'Lorem ipsum dolor sit amet',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellido' => 'Lorem ipsum dolor sit amet',
                'rol_id' => 1,
                'correo_electronico' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor ',
                'comision_id' => 1,
                'numero_de_horas' => 1,
                'unidad_academica_id' => 1,
                'dependencia' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
