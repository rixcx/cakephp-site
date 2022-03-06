<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry; //他テーブル情報取得

/**
 * Indexes Controller
 *
 *
 * @method \App\Model\Entity\Index[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndexesController extends AppController
{

    /**
     * another table
     *
     */
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('front');
        $this->news = TableRegistry::getTableLocator()->get("news");
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      $news = $this->news->find('all');
      $this->set(compact('news'));
    }
}
