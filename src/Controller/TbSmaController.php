<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbSma Controller
 *
 * @property \App\Model\Table\TbSmaTable $TbSma
 */
class TbSmaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbSma = $this->paginate($this->TbSma);

        $this->set(compact('tbSma'));
        $this->set('_serialize', ['tbSma']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Sma id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbSma = $this->TbSma->get($id, [
            'contain' => []
        ]);

        $this->set('tbSma', $tbSma);
        $this->set('_serialize', ['tbSma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbSma = $this->TbSma->newEntity();
        if ($this->request->is('post')) {
            $tbSma = $this->TbSma->patchEntity($tbSma, $this->request->data);
            if ($this->TbSma->save($tbSma)) {
                $this->Flash->success(__('The tb sma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSma'));
        $this->set('_serialize', ['tbSma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Sma id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbSma = $this->TbSma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbSma = $this->TbSma->patchEntity($tbSma, $this->request->data);
            if ($this->TbSma->save($tbSma)) {
                $this->Flash->success(__('The tb sma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb sma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbSma'));
        $this->set('_serialize', ['tbSma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Sma id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbSma = $this->TbSma->get($id);
        if ($this->TbSma->delete($tbSma)) {
            $this->Flash->success(__('The tb sma has been deleted.'));
        } else {
            $this->Flash->error(__('The tb sma could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
