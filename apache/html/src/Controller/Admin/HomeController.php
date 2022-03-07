<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Index[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    /**
     * Initialize method
     *
     */
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->deny();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      //NOP
    }
}
