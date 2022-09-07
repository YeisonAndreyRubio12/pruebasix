<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComisionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComisionTable Test Case
 */
class ComisionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComisionTable
     */
    protected $Comision;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Comision',
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
        $config = $this->getTableLocator()->exists('Comision') ? [] : ['className' => ComisionTable::class];
        $this->Comision = $this->getTableLocator()->get('Comision', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comision);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ComisionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
