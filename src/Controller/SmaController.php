<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sma Controller
 *
 * @property \App\Model\Table\SmaTable $Sma
 */
class SmaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sma = $this->paginate($this->Sma);

        $this->set(compact('sma'));
        $this->set('_serialize', ['sma']);
    }

    /**
     * View method
     *
     * @param string|null $id Sma id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sma = $this->Sma->get($id, [
            'contain' => []
        ]);

        $this->set('sma', $sma);
        $this->set('_serialize', ['sma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sma = $this->Sma->newEntity();
        if ($this->request->is('post')) {
            $sma = $this->Sma->patchEntity($sma, $this->request->data);
            if ($this->Sma->save($sma)) {
                $this->Flash->success(__('The sma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sma'));
        $this->set('_serialize', ['sma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sma id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sma = $this->Sma->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sma = $this->Sma->patchEntity($sma, $this->request->data);
            if ($this->Sma->save($sma)) {
                $this->Flash->success(__('The sma has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sma'));
        $this->set('_serialize', ['sma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sma id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sma = $this->Sma->get($id);
        if ($this->Sma->delete($sma)) {
            $this->Flash->success(__('The sma has been deleted.'));
        } else {
            $this->Flash->error(__('The sma could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
