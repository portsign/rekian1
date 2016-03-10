<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FinalRelasi Controller
 *
 * @property \App\Model\Table\FinalRelasiTable $FinalRelasi
 */
class FinalRelasiController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $finalRelasi = $this->paginate($this->FinalRelasi);

        $this->set(compact('finalRelasi'));
        $this->set('_serialize', ['finalRelasi']);
    }

    /**
     * View method
     *
     * @param string|null $id Final Relasi id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $finalRelasi = $this->FinalRelasi->get($id, [
            'contain' => []
        ]);

        $this->set('finalRelasi', $finalRelasi);
        $this->set('_serialize', ['finalRelasi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $finalRelasi = $this->FinalRelasi->newEntity();
        if ($this->request->is('post')) {
            $finalRelasi = $this->FinalRelasi->patchEntity($finalRelasi, $this->request->data);
            if ($this->FinalRelasi->save($finalRelasi)) {
                $this->Flash->success(__('The final relasi has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The final relasi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('finalRelasi'));
        $this->set('_serialize', ['finalRelasi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Final Relasi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $finalRelasi = $this->FinalRelasi->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $finalRelasi = $this->FinalRelasi->patchEntity($finalRelasi, $this->request->data);
            if ($this->FinalRelasi->save($finalRelasi)) {
                $this->Flash->success(__('The final relasi has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The final relasi could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('finalRelasi'));
        $this->set('_serialize', ['finalRelasi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Final Relasi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $finalRelasi = $this->FinalRelasi->get($id);
        if ($this->FinalRelasi->delete($finalRelasi)) {
            $this->Flash->success(__('The final relasi has been deleted.'));
        } else {
            $this->Flash->error(__('The final relasi could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
