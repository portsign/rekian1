<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbSmaJrsRelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbSmaJrsRelTable Test Case
 */
class TbSmaJrsRelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbSmaJrsRelTable
     */
    public $TbSmaJrsRel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_sma_jrs_rel',
        'app.',
        'app.smas',
        'app.jrs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbSmaJrsRel') ? [] : ['className' => 'App\Model\Table\TbSmaJrsRelTable'];
        $this->TbSmaJrsRel = TableRegistry::get('TbSmaJrsRel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbSmaJrsRel);

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
