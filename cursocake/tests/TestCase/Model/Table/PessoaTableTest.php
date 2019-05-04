<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PessoaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PessoaTable Test Case
 */
class PessoaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PessoaTable
     */
    public $Pessoa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Pessoa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pessoa') ? [] : ['className' => PessoaTable::class];
        $this->Pessoa = TableRegistry::getTableLocator()->get('Pessoa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pessoa);

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
