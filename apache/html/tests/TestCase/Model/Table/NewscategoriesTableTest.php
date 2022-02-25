<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewscategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewscategoriesTable Test Case
 */
class NewscategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NewscategoriesTable
     */
    public $Newscategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Newscategories',
        'app.News',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Newscategories') ? [] : ['className' => NewscategoriesTable::class];
        $this->Newscategories = TableRegistry::getTableLocator()->get('Newscategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newscategories);

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
