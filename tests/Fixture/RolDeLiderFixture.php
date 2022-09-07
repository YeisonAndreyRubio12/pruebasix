<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolDeLiderFixture
 */
class RolDeLiderFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rol_de_lider';
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
