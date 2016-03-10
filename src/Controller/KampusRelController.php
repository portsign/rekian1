<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KampusRel Controller
 *
 * @property \App\Model\Table\KampusRelTable $KampusRel
 */
class KampusRelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kampusRel = $this->paginate($this->KampusRel);

        $this->set(compact('kampusRel'));
        $this->set('_serialize', ['kampusRel']);
    }

    /**
     * View method
     *
     * @param string|null $id Kampus Rel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kampusRel = $this->KampusRel->get($id, [
            'contain' => []
        ]);

        $this->set('kampusRel', $kampusRel);
        $this->set('_serialize', ['kampusRel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kampusRel = $this->KampusRel->newEntity();
        if ($this->request->is('post')) {
            $kampusRel = $this->KampusRel->patchEntity($kampusRel, $this->request->data);
            if ($this->KampusRel->save($kampusRel)) {
                $this->Flash->success(__('The kampus rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampusRel'));
        $this->set('_serialize', ['kampusRel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kampus Rel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kampusRel = $this->KampusRel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kampusRel = $this->KampusRel->patchEntity($kampusRel, $this->request->data);
            if ($this->KampusRel->save($kampusRel)) {
                $this->Flash->success(__('The kampus rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampusRel'));
        $this->set('_serialize', ['kampusRel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kampus Rel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kampusRel = $this->KampusRel->get($id);
        if ($this->KampusRel->delete($kampusRel)) {
            $this->Flash->success(__('The kampus rel has been deleted.'));
        } else {
            $this->Flash->error(__('The kampus rel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
