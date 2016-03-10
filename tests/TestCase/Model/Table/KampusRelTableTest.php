<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KampusRelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KampusRelTable Test Case
 */
class KampusRelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KampusRelTable
     */
    public $KampusRel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kampus_rel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KampusRel') ? [] : ['className' => 'App\Model\Table\KampusRelTable'];
        $this->KampusRel = TableRegistry::get('KampusRel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KampusRel);

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
