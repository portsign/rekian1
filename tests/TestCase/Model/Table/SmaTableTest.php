<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SmaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SmaTable Test Case
 */
class SmaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SmaTable
     */
    public $Sma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sma'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sma') ? [] : ['className' => 'App\Model\Table\SmaTable'];
        $this->Sma = TableRegistry::get('Sma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sma);

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
