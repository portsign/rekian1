<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbUnivJrsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbUnivJrsTable Test Case
 */
class TbUnivJrsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbUnivJrsTable
     */
    public $TbUnivJrs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_univ_jrs',
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
        $config = TableRegistry::exists('TbUnivJrs') ? [] : ['className' => 'App\Model\Table\TbUnivJrsTable'];
        $this->TbUnivJrs = TableRegistry::get('TbUnivJrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbUnivJrs);

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
