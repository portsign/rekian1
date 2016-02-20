<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbUnivJrs Controller
 *
 * @property \App\Model\Table\TbUnivJrsTable $TbUnivJrs
 */
class TbUnivJrsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbUnivJrs = $this->paginate($this->TbUnivJrs);

        $this->set(compact('tbUnivJrs'));
        $this->set('_serialize', ['tbUnivJrs']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Univ Jr id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUnivJr = $this->TbUnivJrs->get($id, [
            'contain' => []
        ]);

        $this->set('tbUnivJr', $tbUnivJr);
        $this->set('_serialize', ['tbUnivJr']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUnivJr = $this->TbUnivJrs->newEntity();
        if ($this->request->is('post')) {
            $tbUnivJr = $this->TbUnivJrs->patchEntity($tbUnivJr, $this->request->data);
            if ($this->TbUnivJrs->save($tbUnivJr)) {
                $this->Flash->success(__('The tb univ jr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ jr could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUnivJr'));
        $this->set('_serialize', ['tbUnivJr']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Univ Jr id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUnivJr = $this->TbUnivJrs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUnivJr = $this->TbUnivJrs->patchEntity($tbUnivJr, $this->request->data);
            if ($this->TbUnivJrs->save($tbUnivJr)) {
                $this->Flash->success(__('The tb univ jr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ jr could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUnivJr'));
        $this->set('_serialize', ['tbUnivJr']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Univ Jr id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUnivJr = $this->TbUnivJrs->get($id);
        if ($this->TbUnivJrs->delete($tbUnivJr)) {
            $this->Flash->success(__('The tb univ jr has been deleted.'));
        } else {
            $this->Flash->error(__('The tb univ jr could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
