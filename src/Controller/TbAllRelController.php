<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * TbAllRel Controller
 *
 * @property \App\Model\Table\TbAllRelTable $TbAllRel
 */
class TbAllRelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbAllRel = $this->paginate($this->TbAllRel);

        $this->set(compact('tbAllRel'));
        $this->set('_serialize', ['tbAllRel']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb All Rel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbAllRel = $this->TbAllRel->get($id, [
            'contain' => []
        ]);

        $this->set('tbAllRel', $tbAllRel);
        $this->set('_serialize', ['tbAllRel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbAllRel = $this->TbAllRel->newEntity();
        if ($this->request->is('post')) {
            $tbAllRel = $this->TbAllRel->patchEntity($tbAllRel, $this->request->data);
            if ($this->TbAllRel->save($tbAllRel)) {
                $this->Flash->success(__('The tb all rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb all rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbAllRel'));
        $this->set('_serialize', ['tbAllRel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb All Rel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbAllRel = $this->TbAllRel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbAllRel = $this->TbAllRel->patchEntity($tbAllRel, $this->request->data);
            if ($this->TbAllRel->save($tbAllRel)) {
                $this->Flash->success(__('The tb all rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb all rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbAllRel'));
        $this->set('_serialize', ['tbAllRel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb All Rel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbAllRel = $this->TbAllRel->get($id);
        if ($this->TbAllRel->delete($tbAllRel)) {
            $this->Flash->success(__('The tb all rel has been deleted.'));
        } else {
            $this->Flash->error(__('The tb all rel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
