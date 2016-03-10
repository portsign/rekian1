<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SmaRel Controller
 *
 * @property \App\Model\Table\SmaRelTable $SmaRel
 */
class SmaRelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $smaRel = $this->paginate($this->SmaRel);

        $this->set(compact('smaRel'));
        $this->set('_serialize', ['smaRel']);
    }

    /**
     * View method
     *
     * @param string|null $id Sma Rel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $smaRel = $this->SmaRel->get($id, [
            'contain' => []
        ]);

        $this->set('smaRel', $smaRel);
        $this->set('_serialize', ['smaRel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $smaRel = $this->SmaRel->newEntity();
        if ($this->request->is('post')) {
            $smaRel = $this->SmaRel->patchEntity($smaRel, $this->request->data);
            if ($this->SmaRel->save($smaRel)) {
                $this->Flash->success(__('The sma rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('smaRel'));
        $this->set('_serialize', ['smaRel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sma Rel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $smaRel = $this->SmaRel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smaRel = $this->SmaRel->patchEntity($smaRel, $this->request->data);
            if ($this->SmaRel->save($smaRel)) {
                $this->Flash->success(__('The sma rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('smaRel'));
        $this->set('_serialize', ['smaRel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sma Rel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smaRel = $this->SmaRel->get($id);
        if ($this->SmaRel->delete($smaRel)) {
            $this->Flash->success(__('The sma rel has been deleted.'));
        } else {
            $this->Flash->error(__('The sma rel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
