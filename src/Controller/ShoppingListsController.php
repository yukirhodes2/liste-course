<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShoppingLists Controller
 *
 * @property \App\Model\Table\ShoppingListsTable $ShoppingLists
 */
class ShoppingListsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ShoppingLists', 'Customers']
        ];
        $shoppingLists = $this->paginate($this->ShoppingLists);

        $this->set(compact('shoppingLists'));
        $this->set('_serialize', ['shoppingLists']);
    }

    /**
     * View method
     *
     * @param string|null $id Shopping List id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shoppingList = $this->ShoppingLists->get($id, [
            'contain' => ['ShoppingLists', 'Customers']
        ]);

        $this->set('shoppingList', $shoppingList);
        $this->set('_serialize', ['shoppingList']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shoppingList = $this->ShoppingLists->newEntity();
        if ($this->request->is('post')) {
            $shoppingList = $this->ShoppingLists->patchEntity($shoppingList, $this->request->data);
            if ($this->ShoppingLists->save($shoppingList)) {
                $this->Flash->success(__('The shopping list has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shopping list could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ShoppingLists->ShoppingLists->find('list', ['limit' => 200]);
        $customers = $this->ShoppingLists->Customers->find('list', ['limit' => 200]);
        $this->set(compact('shoppingList', 'shoppingLists', 'customers'));
        $this->set('_serialize', ['shoppingList']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shopping List id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shoppingList = $this->ShoppingLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shoppingList = $this->ShoppingLists->patchEntity($shoppingList, $this->request->data);
            if ($this->ShoppingLists->save($shoppingList)) {
                $this->Flash->success(__('The shopping list has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The shopping list could not be saved. Please, try again.'));
            }
        }
        $shoppingLists = $this->ShoppingLists->ShoppingLists->find('list', ['limit' => 200]);
        $customers = $this->ShoppingLists->Customers->find('list', ['limit' => 200]);
        $this->set(compact('shoppingList', 'shoppingLists', 'customers'));
        $this->set('_serialize', ['shoppingList']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shopping List id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shoppingList = $this->ShoppingLists->get($id);
        if ($this->ShoppingLists->delete($shoppingList)) {
            $this->Flash->success(__('The shopping list has been deleted.'));
        } else {
            $this->Flash->error(__('The shopping list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
