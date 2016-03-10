<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kampus Controller
 *
 * @property \App\Model\Table\KampusTable $Kampus
 */
class KampusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kampus = $this->paginate($this->Kampus);

        $this->set(compact('kampus'));
        $this->set('_serialize', ['kampus']);
    }

    /**
     * View method
     *
     * @param string|null $id Kampus id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kampus = $this->Kampus->get($id, [
            'contain' => []
        ]);

        $this->set('kampus', $kampus);
        $this->set('_serialize', ['kampus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kampus = $this->Kampus->newEntity();
        if ($this->request->is('post')) {
            $kampus = $this->Kampus->patchEntity($kampus, $this->request->data);
            if ($this->Kampus->save($kampus)) {
                $this->Flash->success(__('The kampus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampus'));
        $this->set('_serialize', ['kampus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kampus id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kampus = $this->Kampus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kampus = $this->Kampus->patchEntity($kampus, $this->request->data);
            if ($this->Kampus->save($kampus)) {
                $this->Flash->success(__('The kampus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampus'));
        $this->set('_serialize', ['kampus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kampus id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kampus = $this->Kampus->get($id);
        if ($this->Kampus->delete($kampus)) {
            $this->Flash->success(__('The kampus has been deleted.'));
        } else {
            $this->Flash->error(__('The kampus could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
