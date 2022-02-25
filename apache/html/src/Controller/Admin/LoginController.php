<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Login Controller
 *
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
          if ($this->request->is('post')) {
              $admin = $this->Auth->identify();
              if ($admin) {
                  $this->Auth->setUser($admin);
                  return $this->redirect($this->Auth->redirectUrl());
              }
              $this->Flash->error('管理者IDかパスワードが不正です。');
          }
    }
}
