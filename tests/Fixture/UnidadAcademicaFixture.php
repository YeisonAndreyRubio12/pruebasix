<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UnidadAcademicaFixture
 */
class UnidadAcademicaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'unidad_academica';
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'tipo_de_unidad_academica_id' => 1,
            ],
        ];
        parent::init();
    }
}
