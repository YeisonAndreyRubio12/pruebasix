<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoDeIdentificacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoDeIdentificacionTable Test Case
 */
class TipoDeIdentificacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoDeIdentificacionTable
     */
    protected $TipoDeIdentificacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TipoDeIdentificacion',
        'app.Persona',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TipoDeIdentificacion') ? [] : ['className' => TipoDeIdentificacionTable::class];
        $this->TipoDeIdentificacion = $this->getTableLocator()->get('TipoDeIdentificacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TipoDeIdentificacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoDeIdentificacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
