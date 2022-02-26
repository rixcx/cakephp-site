<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenucategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenucategoriesTable Test Case
 */
class MenucategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MenucategoriesTable
     */
    public $Menucategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Menucategories',
        'app.Menus',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Menucategories') ? [] : ['className' => MenucategoriesTable::class];
        $this->Menucategories = TableRegistry::getTableLocator()->get('Menucategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Menucategories);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
