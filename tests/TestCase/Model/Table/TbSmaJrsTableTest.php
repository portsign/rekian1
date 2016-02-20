<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbSmaJrsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbSmaJrsTable Test Case
 */
class TbSmaJrsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbSmaJrsTable
     */
    public $TbSmaJrs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_sma_jrs',
        'app.'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbSmaJrs') ? [] : ['className' => 'App\Model\Table\TbSmaJrsTable'];
        $this->TbSmaJrs = TableRegistry::get('TbSmaJrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbSmaJrs);

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
