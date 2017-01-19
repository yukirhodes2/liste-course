<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grids Controller
 *
 * @property \App\Model\Table\GridsTable $Grids
 */
class GridsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grids']
        ];
        $grids = $this->paginate($this->Grids);

        $this->set(compact('grids'));
        $this->set('_serialize', ['grids']);
    }

    /**
     * View method
     *
     * @param string|null $id Grid id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grid = $this->Grids->get($id, [
            'contain' => ['Grids']
        ]);

        $this->set('grid', $grid);
        $this->set('_serialize', ['grid']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grid = $this->Grids->newEntity();
        if ($this->request->is('post')) {
            $grid = $this->Grids->patchEntity($grid, $this->request->data);
            if ($this->Grids->save($grid)) {
                $this->Flash->success(__('The grid has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grid could not be saved. Please, try again.'));
            }
        }
        $grids = $this->Grids->Grids->find('list', ['limit' => 200]);
        $this->set(compact('grid', 'grids'));
        $this->set('_serialize', ['grid']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grid id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grid = $this->Grids->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grid = $this->Grids->patchEntity($grid, $this->request->data);
            if ($this->Grids->save($grid)) {
                $this->Flash->success(__('The grid has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grid could not be saved. Please, try again.'));
            }
        }
        $grids = $this->Grids->Grids->find('list', ['limit' => 200]);
        $this->set(compact('grid', 'grids'));
        $this->set('_serialize', ['grid']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grid id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grid = $this->Grids->get($id);
        if ($this->Grids->delete($grid)) {
            $this->Flash->success(__('The grid has been deleted.'));
        } else {
            $this->Flash->error(__('The grid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
