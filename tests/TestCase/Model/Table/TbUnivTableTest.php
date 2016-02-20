<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbUnivTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbUnivTable Test Case
 */
class TbUnivTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbUnivTable
     */
    public $TbUniv;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_univ',
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
        $config = TableRegistry::exists('TbUniv') ? [] : ['className' => 'App\Model\Table\TbUnivTable'];
        $this->TbUniv = TableRegistry::get('TbUniv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbUniv);

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
