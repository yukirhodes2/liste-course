<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GridsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GridsTable Test Case
 */
class GridsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GridsTable
     */
    public $Grids;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grids'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Grids') ? [] : ['className' => 'App\Model\Table\GridsTable'];
        $this->Grids = TableRegistry::get('Grids', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Grids);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
