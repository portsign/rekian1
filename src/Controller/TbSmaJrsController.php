<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbSmaJrs Controller
 *
 * @property \App\Model\Table\TbSmaJrsTable $TbSmaJrs
 */
class TbSmaJrsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbSmaJrs = $this->paginate($this->TbSmaJrs);

        $this->set(compact('tbSmaJrs'));
        $this->set('_serialize', ['tbSmaJrs']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Sma Jr id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbSmaJr = $this->TbSmaJrs->get($id, [
            'contain' => []
        ]);

        $this->set('tbSmaJr', $tbSmaJr);
        $this->set('_serialize', ['tbSmaJr']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbSmaJr = $this->TbSmaJrs->newEntity();
        if ($this->request->is('post')) {
            $tbSmaJr = $this->TbSmaJrs->patchEntity($tbSmaJr, $this->request->data);
            if ($this->TbSmaJrs->save($tbSmaJr)) {
                $this->Flash->success(__('The tb sma jr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma jr could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSmaJr'));
        $this->set('_serialize', ['tbSmaJr']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Sma Jr id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbSmaJr = $this->TbSmaJrs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbSmaJr = $this->TbSmaJrs->patchEntity($tbSmaJr, $this->request->data);
            if ($this->TbSmaJrs->save($tbSmaJr)) {
                $this->Flash->success(__('The tb sma jr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma jr could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSmaJr'));
        $this->set('_serialize', ['tbSmaJr']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Sma Jr id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbSmaJr = $this->TbSmaJrs->get($id);
        if ($this->TbSmaJrs->delete($tbSmaJr)) {
            $this->Flash->success(__('The tb sma jr has been deleted.'));
        } else {
            $this->Flash->error(__('The tb sma jr could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
