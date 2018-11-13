<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProfilsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProfilsController Test Case
 */
class ProfilsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profils',
        'app.users',
        'app.owners'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/profils');
    
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/profils/view/1');
    
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->get('/profils/add');
    
        $this->assertRedirect('/users/login?redirect=%2Fprofils%2Fadd');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->get('/profils/add');
    
        $this->assertRedirect('login');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
