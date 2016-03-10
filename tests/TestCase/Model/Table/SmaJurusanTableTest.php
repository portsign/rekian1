<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SmaJurusanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SmaJurusanTable Test Case
 */
class SmaJurusanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SmaJurusanTable
     */
    public $SmaJurusan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sma_jurusan'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SmaJurusan') ? [] : ['className' => 'App\Model\Table\SmaJurusanTable'];
        $this->SmaJurusan = TableRegistry::get('SmaJurusan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SmaJurusan);

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
