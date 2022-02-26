<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Menucategories Controller
 *
 * @property \App\Model\Table\MenucategoriesTable $Menucategories
 *
 * @method \App\Model\Entity\Menucategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenucategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $menucategories = $this->paginate($this->Menucategories);

        $this->set(compact('menucategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Menucategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menucategory = $this->Menucategories->get($id, [
            'contain' => ['Menus'],
        ]);

        $this->set('menucategory', $menucategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $menucategory = $this->Menucategories->newEntity();
        if ($this->request->is('post')) {
            $menucategory = $this->Menucategories->patchEntity($menucategory, $this->request->getData());
            if ($this->Menucategories->save($menucategory)) {
                $this->Flash->success(__('The menucategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menucategory could not be saved. Please, try again.'));
        }
        $this->set(compact('menucategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Menucategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menucategory = $this->Menucategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menucategory = $this->Menucategories->patchEntity($menucategory, $this->request->getData());
            if ($this->Menucategories->save($menucategory)) {
                $this->Flash->success(__('The menucategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menucategory could not be saved. Please, try again.'));
        }
        $this->set(compact('menucategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Menucategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menucategory = $this->Menucategories->get($id);
        if ($this->Menucategories->delete($menucategory)) {
            $this->Flash->success(__('The menucategory has been deleted.'));
        } else {
            $this->Flash->error(__('The menucategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
