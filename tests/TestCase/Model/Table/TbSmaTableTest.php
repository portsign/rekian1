<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TbSmaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TbSmaTable Test Case
 */
class TbSmaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TbSmaTable
     */
    public $TbSma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tb_sma',
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
        $config = TableRegistry::exists('TbSma') ? [] : ['className' => 'App\Model\Table\TbSmaTable'];
        $this->TbSma = TableRegistry::get('TbSma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TbSma);

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
