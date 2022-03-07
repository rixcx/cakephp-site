<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Newscategories Controller
 *
 * @property \App\Model\Table\NewscategoriesTable $Newscategories
 *
 * @method \App\Model\Entity\Newscategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewscategoriesController extends AppController
{
    /**
     * Initialize method
     *
     */
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $newscategories = $this->paginate($this->Newscategories);

        $this->set(compact('newscategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Newscategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newscategory = $this->Newscategories->get($id, [
            'contain' => ['News'],
        ]);

        $this->set('newscategory', $newscategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newscategory = $this->Newscategories->newEntity();
        if ($this->request->is('post')) {
            $newscategory = $this->Newscategories->patchEntity($newscategory, $this->request->getData());
            if ($this->Newscategories->save($newscategory)) {
                $this->Flash->success(__('The newscategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newscategory could not be saved. Please, try again.'));
        }
        $news = $this->Newscategories->News->find('list', ['limit' => 200]);
        $this->set(compact('newscategory', 'news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Newscategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newscategory = $this->Newscategories->get($id, [
            'contain' => ['News'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newscategory = $this->Newscategories->patchEntity($newscategory, $this->request->getData());
            if ($this->Newscategories->save($newscategory)) {
                $this->Flash->success(__('The newscategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The newscategory could not be saved. Please, try again.'));
        }
        $news = $this->Newscategories->News->find('list', ['limit' => 200]);
        $this->set(compact('newscategory', 'news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Newscategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newscategory = $this->Newscategories->get($id);
        if ($this->Newscategories->delete($newscategory)) {
            $this->Flash->success(__('The newscategory has been deleted.'));
        } else {
            $this->Flash->error(__('The newscategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
