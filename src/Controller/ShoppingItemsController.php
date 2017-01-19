<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShoppingItems Controller
 *
 * @property \App\Model\Table\ShoppingItemsTable $ShoppingItems
 */
class ShoppingItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ShoppingLists', 'Products']
        ];
        $shoppingItems = $this->paginate($this->ShoppingItems);

        $this->set(compact('shoppingItems'));
        $this->set('_serialize', ['shoppingItems']);
    }

    /**
     * View method
     *
     * @param string|null $id Shopping Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shoppingItem = $this->ShoppingItems->get($id, [
            'contain' => ['ShoppingLists', 'Products']
        ]);

        $this->set('shoppingItem', $shoppingItem);
        $this->set('_serialize', ['shoppingItem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shoppingItem = $this->ShoppingItems->newEntity();
        if ($this->request->is('post')) {
            $shoppingItem = $this->ShoppingItems->patchEntity($shoppingItem, $this->request->data);
            if ($this->ShoppingItems->save($shoppingItem)) {
                $this->Flash->success(__('The shopping item has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shopping item could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ShoppingItems->ShoppingLists->find('list', ['limit' => 200]);
        $products = $this->ShoppingItems->Products->find('list', ['limit' => 200]);
        $this->set(compact('shoppingItem', 'shoppingLists', 'products'));
        $this->set('_serialize', ['shoppingItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopping Item id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shoppingItem = $this->ShoppingItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shoppingItem = $this->ShoppingItems->patchEntity($shoppingItem, $this->request->data);
            if ($this->ShoppingItems->save($shoppingItem)) {
                $this->Flash->success(__('The shopping item has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shopping item could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ShoppingItems->ShoppingLists->find('list', ['limit' => 200]);
        $products = $this->ShoppingItems->Products->find('list', ['limit' => 200]);
        $this->set(compact('shoppingItem', 'shoppingLists', 'products'));
        $this->set('_serialize', ['shoppingItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopping Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shoppingItem = $this->ShoppingItems->get($id);
        if ($this->ShoppingItems->delete($shoppingItem)) {
            $this->Flash->success(__('The shopping item has been deleted.'));
        } else {
            $this->Flash->error(__('The shopping item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
