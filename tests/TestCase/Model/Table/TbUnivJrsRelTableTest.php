<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbUnivJrsRelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbUnivJrsRelTable Test Case
 */
class TbUnivJrsRelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbUnivJrsRelTable
     */
    public $TbUnivJrsRel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_univ_jrs_rel',
        'app.',
        'app.univs',
        'app.univ_jrs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TbUnivJrsRel') ? [] : ['className' => 'App\Model\Table\TbUnivJrsRelTable'];
        $this->TbUnivJrsRel = TableRegistry::get('TbUnivJrsRel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbUnivJrsRel);

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
