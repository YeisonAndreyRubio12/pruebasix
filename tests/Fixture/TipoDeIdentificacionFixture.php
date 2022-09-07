<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoDeIdentificacionFixture
 */
class TipoDeIdentificacionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tipo_de_identificacion';
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
                'nombre' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
