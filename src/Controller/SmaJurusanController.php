<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SmaJurusan Controller
 *
 * @property \App\Model\Table\SmaJurusanTable $SmaJurusan
 */
class SmaJurusanController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $smaJurusan = $this->paginate($this->SmaJurusan);

        $this->set(compact('smaJurusan'));
        $this->set('_serialize', ['smaJurusan']);
    }

    /**
     * View method
     *
     * @param string|null $id Sma Jurusan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $smaJurusan = $this->SmaJurusan->get($id, [
            'contain' => []
        ]);

        $this->set('smaJurusan', $smaJurusan);
        $this->set('_serialize', ['smaJurusan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $smaJurusan = $this->SmaJurusan->newEntity();
        if ($this->request->is('post')) {
            $smaJurusan = $this->SmaJurusan->patchEntity($smaJurusan, $this->request->data);
            if ($this->SmaJurusan->save($smaJurusan)) {
                $this->Flash->success(__('The sma jurusan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma jurusan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('smaJurusan'));
        $this->set('_serialize', ['smaJurusan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sma Jurusan id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $smaJurusan = $this->SmaJurusan->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smaJurusan = $this->SmaJurusan->patchEntity($smaJurusan, $this->request->data);
            if ($this->SmaJurusan->save($smaJurusan)) {
                $this->Flash->success(__('The sma jurusan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sma jurusan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('smaJurusan'));
        $this->set('_serialize', ['smaJurusan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sma Jurusan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smaJurusan = $this->SmaJurusan->get($id);
        if ($this->SmaJurusan->delete($smaJurusan)) {
            $this->Flash->success(__('The sma jurusan has been deleted.'));
        } else {
            $this->Flash->error(__('The sma jurusan could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
