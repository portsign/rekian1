<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SmaRelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SmaRelTable Test Case
 */
class SmaRelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SmaRelTable
     */
    public $SmaRel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sma_rel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SmaRel') ? [] : ['className' => 'App\Model\Table\SmaRelTable'];
        $this->SmaRel = TableRegistry::get('SmaRel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SmaRel);

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
