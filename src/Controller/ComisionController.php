<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comision Controller
 *
 * @property \App\Model\Table\ComisionTable $Comision
 * @method \App\Model\Entity\Comision[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComisionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $comision = $this->paginate($this->Comision);

        $this->set(compact('comision'));
    }

    /**
     * View method
     *
     * @param string|null $id Comision id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comision = $this->Comision->get($id, [
            'contain' => ['Persona'],
        ]);

        $this->set(compact('comision'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comision = $this->Comision->newEmptyEntity();
        if ($this->request->is('post')) {
            $comision = $this->Comision->patchEntity($comision, $this->request->getData());
            if ($this->Comision->save($comision)) {
                $this->Flash->success(__('The comision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comision could not be saved. Please, try again.'));
        }
        $this->set(compact('comision'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comision id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comision = $this->Comision->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comision = $this->Comision->patchEntity($comision, $this->request->getData());
            if ($this->Comision->save($comision)) {
                $this->Flash->success(__('The comision has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comision could not be saved. Please, try again.'));
        }
        $this->set(compact('comision'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comision id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comision = $this->Comision->get($id);
        if ($this->Comision->delete($comision)) {
            $this->Flash->success(__('The comision has been deleted.'));
        } else {
            $this->Flash->error(__('The comision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
