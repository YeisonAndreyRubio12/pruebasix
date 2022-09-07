<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidadAcademicaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidadAcademicaTable Test Case
 */
class UnidadAcademicaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidadAcademicaTable
     */
    protected $UnidadAcademica;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.UnidadAcademica',
        'app.TipoDeUnidadAcademica',
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
        $config = $this->getTableLocator()->exists('UnidadAcademica') ? [] : ['className' => UnidadAcademicaTable::class];
        $this->UnidadAcademica = $this->getTableLocator()->get('UnidadAcademica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->UnidadAcademica);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UnidadAcademicaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\UnidadAcademicaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
