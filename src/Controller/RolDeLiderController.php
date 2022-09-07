<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RolDeLider Controller
 *
 * @property \App\Model\Table\RolDeLiderTable $RolDeLider
 * @method \App\Model\Entity\RolDeLider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolDeLiderController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rolDeLider = $this->paginate($this->RolDeLider);

        $this->set(compact('rolDeLider'));
    }

    /**
     * View method
     *
     * @param string|null $id Rol De Lider id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolDeLider = $this->RolDeLider->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rolDeLider'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolDeLider = $this->RolDeLider->newEmptyEntity();
        if ($this->request->is('post')) {
            $rolDeLider = $this->RolDeLider->patchEntity($rolDeLider, $this->request->getData());
            if ($this->RolDeLider->save($rolDeLider)) {
                $this->Flash->success(__('The rol de lider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol de lider could not be saved. Please, try again.'));
        }
        $this->set(compact('rolDeLider'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rol De Lider id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolDeLider = $this->RolDeLider->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolDeLider = $this->RolDeLider->patchEntity($rolDeLider, $this->request->getData());
            if ($this->RolDeLider->save($rolDeLider)) {
                $this->Flash->success(__('The rol de lider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol de lider could not be saved. Please, try again.'));
        }
        $this->set(compact('rolDeLider'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rol De Lider id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolDeLider = $this->RolDeLider->get($id);
        if ($this->RolDeLider->delete($rolDeLider)) {
            $this->Flash->success(__('The rol de lider has been deleted.'));
        } else {
            $this->Flash->error(__('The rol de lider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
