<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Logout Controller
 *
 *
 * @method \App\Model\Entity\Logout[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogoutController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        return $this->redirect($this->Auth->logout());
    }
}
