<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbUnivJrsRel Controller
 *
 * @property \App\Model\Table\TbUnivJrsRelTable $TbUnivJrsRel
 */
class TbUnivJrsRelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbUnivJrsRel = $this->paginate($this->TbUnivJrsRel);

        $this->set(compact('tbUnivJrsRel'));
        $this->set('_serialize', ['tbUnivJrsRel']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Univ Jrs Rel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUnivJrsRel = $this->TbUnivJrsRel->get($id, [
            'contain' => []
        ]);

        $this->set('tbUnivJrsRel', $tbUnivJrsRel);
        $this->set('_serialize', ['tbUnivJrsRel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUnivJrsRel = $this->TbUnivJrsRel->newEntity();
        if ($this->request->is('post')) {
            $tbUnivJrsRel = $this->TbUnivJrsRel->patchEntity($tbUnivJrsRel, $this->request->data);
            if ($this->TbUnivJrsRel->save($tbUnivJrsRel)) {
                $this->Flash->success(__('The tb univ jrs rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ jrs rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUnivJrsRel'));
        $this->set('_serialize', ['tbUnivJrsRel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Univ Jrs Rel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUnivJrsRel = $this->TbUnivJrsRel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUnivJrsRel = $this->TbUnivJrsRel->patchEntity($tbUnivJrsRel, $this->request->data);
            if ($this->TbUnivJrsRel->save($tbUnivJrsRel)) {
                $this->Flash->success(__('The tb univ jrs rel has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ jrs rel could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUnivJrsRel'));
        $this->set('_serialize', ['tbUnivJrsRel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Univ Jrs Rel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUnivJrsRel = $this->TbUnivJrsRel->get($id);
        if ($this->TbUnivJrsRel->delete($tbUnivJrsRel)) {
            $this->Flash->success(__('The tb univ jrs rel has been deleted.'));
        } else {
            $this->Flash->error(__('The tb univ jrs rel could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
