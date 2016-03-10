<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KampusJurusanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KampusJurusanTable Test Case
 */
class KampusJurusanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KampusJurusanTable
     */
    public $KampusJurusan;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kampus_jurusan'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('KampusJurusan') ? [] : ['className' => 'App\Model\Table\KampusJurusanTable'];
        $this->KampusJurusan = TableRegistry::get('KampusJurusan', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->KampusJurusan);

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
