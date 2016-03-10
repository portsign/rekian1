<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KampusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KampusTable Test Case
 */
class KampusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KampusTable
     */
    public $Kampus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kampus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Kampus') ? [] : ['className' => 'App\Model\Table\KampusTable'];
        $this->Kampus = TableRegistry::get('Kampus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kampus);

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
