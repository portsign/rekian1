<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * KampusJurusan Controller
 *
 * @property \App\Model\Table\KampusJurusanTable $KampusJurusan
 */
class KampusJurusanController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $kampusJurusan = $this->paginate($this->KampusJurusan);

        $this->set(compact('kampusJurusan'));
        $this->set('_serialize', ['kampusJurusan']);
    }

    /**
     * View method
     *
     * @param string|null $id Kampus Jurusan id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kampusJurusan = $this->KampusJurusan->get($id, [
            'contain' => []
        ]);

        $this->set('kampusJurusan', $kampusJurusan);
        $this->set('_serialize', ['kampusJurusan']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kampusJurusan = $this->KampusJurusan->newEntity();
        if ($this->request->is('post')) {
            $kampusJurusan = $this->KampusJurusan->patchEntity($kampusJurusan, $this->request->data);
            if ($this->KampusJurusan->save($kampusJurusan)) {
                $this->Flash->success(__('The kampus jurusan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus jurusan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampusJurusan'));
        $this->set('_serialize', ['kampusJurusan']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kampus Jurusan id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kampusJurusan = $this->KampusJurusan->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kampusJurusan = $this->KampusJurusan->patchEntity($kampusJurusan, $this->request->data);
            if ($this->KampusJurusan->save($kampusJurusan)) {
                $this->Flash->success(__('The kampus jurusan has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kampus jurusan could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('kampusJurusan'));
        $this->set('_serialize', ['kampusJurusan']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kampus Jurusan id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kampusJurusan = $this->KampusJurusan->get($id);
        if ($this->KampusJurusan->delete($kampusJurusan)) {
            $this->Flash->success(__('The kampus jurusan has been deleted.'));
        } else {
            $this->Flash->error(__('The kampus jurusan could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
