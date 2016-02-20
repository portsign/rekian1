<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbAllRelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbAllRelTable Test Case
 */
class TbAllRelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbAllRelTable
     */
    public $TbAllRel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_all_rel',
        'app.sma_jrs_rels',
        'app.univ_jrs_rels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbAllRel') ? [] : ['className' => 'App\Model\Table\TbAllRelTable'];
        $this->TbAllRel = TableRegistry::get('TbAllRel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbAllRel);

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
