<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RolDeLiderTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RolDeLiderTable Test Case
 */
class RolDeLiderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RolDeLiderTable
     */
    protected $RolDeLider;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.RolDeLider',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RolDeLider') ? [] : ['className' => RolDeLiderTable::class];
        $this->RolDeLider = $this->getTableLocator()->get('RolDeLider', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RolDeLider);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RolDeLiderTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
