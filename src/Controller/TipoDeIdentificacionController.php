<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TipoDeIdentificacion Controller
 *
 * @property \App\Model\Table\TipoDeIdentificacionTable $TipoDeIdentificacion
 * @method \App\Model\Entity\TipoDeIdentificacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoDeIdentificacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoDeIdentificacion = $this->paginate($this->TipoDeIdentificacion);

        $this->set(compact('tipoDeIdentificacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo De Identificacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoDeIdentificacion = $this->TipoDeIdentificacion->get($id, [
            'contain' => ['Persona'],
        ]);

        $this->set(compact('tipoDeIdentificacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoDeIdentificacion = $this->TipoDeIdentificacion->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoDeIdentificacion = $this->TipoDeIdentificacion->patchEntity($tipoDeIdentificacion, $this->request->getData());
            if ($this->TipoDeIdentificacion->save($tipoDeIdentificacion)) {
                $this->Flash->success(__('The tipo de identificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo de identificacion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoDeIdentificacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo De Identificacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoDeIdentificacion = $this->TipoDeIdentificacion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoDeIdentificacion = $this->TipoDeIdentificacion->patchEntity($tipoDeIdentificacion, $this->request->getData());
            if ($this->TipoDeIdentificacion->save($tipoDeIdentificacion)) {
                $this->Flash->success(__('The tipo de identificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo de identificacion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoDeIdentificacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo De Identificacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoDeIdentificacion = $this->TipoDeIdentificacion->get($id);
        if ($this->TipoDeIdentificacion->delete($tipoDeIdentificacion)) {
            $this->Flash->success(__('The tipo de identificacion has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo de identificacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
