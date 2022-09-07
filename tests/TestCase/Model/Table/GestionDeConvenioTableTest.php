<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GestionDeConvenioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GestionDeConvenioTable Test Case
 */
class GestionDeConvenioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GestionDeConvenioTable
     */
    protected $GestionDeConvenio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.GestionDeConvenio',
        'app.Persona',
        'app.Convenio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GestionDeConvenio') ? [] : ['className' => GestionDeConvenioTable::class];
        $this->GestionDeConvenio = $this->getTableLocator()->get('GestionDeConvenio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->GestionDeConvenio);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GestionDeConvenioTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
