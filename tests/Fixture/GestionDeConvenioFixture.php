<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GestionDeConvenioFixture
 */
class GestionDeConvenioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gestion_de_convenio';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'usuario_id' => 1,
                'convenio_id' => 1,
            ],
        ];
        parent::init();
    }
}
