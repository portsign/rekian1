<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbSmaJrsRel Controller
 *
 * @property \App\Model\Table\TbSmaJrsRelTable $TbSmaJrsRel
 */
class TbSmaJrsRelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbSmaJrsRel = $this->paginate($this->TbSmaJrsRel);

        $this->set(compact('tbSmaJrsRel'));
        $this->set('_serialize', ['tbSmaJrsRel']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Sma Jrs Rel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbSmaJrsRel = $this->TbSmaJrsRel->get($id, [
            'contain' => []
        ]);

        $this->set('tbSmaJrsRel', $tbSmaJrsRel);
        $this->set('_serialize', ['tbSmaJrsRel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbSmaJrsRel = $this->TbSmaJrsRel->newEntity();
        if ($this->request->is('post')) {
            $tbSmaJrsRel = $this->TbSmaJrsRel->patchEntity($tbSmaJrsRel, $this->request->data);
            if ($this->TbSmaJrsRel->save($tbSmaJrsRel)) {
                $this->Flash->success(__('The tb sma jrs rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma jrs rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSmaJrsRel'));
        $this->set('_serialize', ['tbSmaJrsRel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Sma Jrs Rel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbSmaJrsRel = $this->TbSmaJrsRel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbSmaJrsRel = $this->TbSmaJrsRel->patchEntity($tbSmaJrsRel, $this->request->data);
            if ($this->TbSmaJrsRel->save($tbSmaJrsRel)) {
                $this->Flash->success(__('The tb sma jrs rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma jrs rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSmaJrsRel'));
        $this->set('_serialize', ['tbSmaJrsRel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Sma Jrs Rel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbSmaJrsRel = $this->TbSmaJrsRel->get($id);
        if ($this->TbSmaJrsRel->delete($tbSmaJrsRel)) {
            $this->Flash->success(__('The tb sma jrs rel has been deleted.'));
        } else {
            $this->Flash->error(__('The tb sma jrs rel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
