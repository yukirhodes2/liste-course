<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShoppingItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShoppingItemsTable Test Case
 */
class ShoppingItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShoppingItemsTable
     */
    public $ShoppingItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shopping_items',
        'app.shopping_lists',
        'app.products',
        'app.categories',
        'app.types',
        'app.brands',
        'app.locations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShoppingItems') ? [] : ['className' => 'App\Model\Table\ShoppingItemsTable'];
        $this->ShoppingItems = TableRegistry::get('ShoppingItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShoppingItems);

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
