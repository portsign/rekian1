<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbUniv Controller
 *
 * @property \App\Model\Table\TbUnivTable $TbUniv
 */
class TbUnivController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbUniv = $this->paginate($this->TbUniv);

        $this->set(compact('tbUniv'));
        $this->set('_serialize', ['tbUniv']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Univ id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUniv = $this->TbUniv->get($id, [
            'contain' => []
        ]);

        $this->set('tbUniv', $tbUniv);
        $this->set('_serialize', ['tbUniv']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUniv = $this->TbUniv->newEntity();
        if ($this->request->is('post')) {
            $tbUniv = $this->TbUniv->patchEntity($tbUniv, $this->request->data);
            if ($this->TbUniv->save($tbUniv)) {
                $this->Flash->success(__('The tb univ has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUniv'));
        $this->set('_serialize', ['tbUniv']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Univ id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUniv = $this->TbUniv->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUniv = $this->TbUniv->patchEntity($tbUniv, $this->request->data);
            if ($this->TbUniv->save($tbUniv)) {
                $this->Flash->success(__('The tb univ has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tb univ could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tbUniv'));
        $this->set('_serialize', ['tbUniv']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Univ id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUniv = $this->TbUniv->get($id);
        if ($this->TbUniv->delete($tbUniv)) {
            $this->Flash->success(__('The tb univ has been deleted.'));
        } else {
            $this->Flash->error(__('The tb univ could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
