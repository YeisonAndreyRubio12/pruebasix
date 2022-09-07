<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Persona Controller
 *
 * @property \App\Model\Table\PersonaTable $Persona
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoDeIdentificacion', 'RolDeLider', 'Comision', 'UnidadAcademica'],
        ];
        $persona = $this->paginate($this->Persona);

        $this->set(compact('persona'));
    }

    /**
     * View method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => ['TipoDeIdentificacion', 'RolDeLider', 'Comision', 'UnidadAcademica', 'GestionDeOperacion', 'Usuario'],
        ]);

        $this->set(compact('persona'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persona = $this->Persona->newEmptyEntity();
        if ($this->request->is('post')) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $tipoDeIdentificacion = $this->Persona->TipoDeIdentificacion->find('list', ['limit' => 200])->all();
        $rolDeLider = $this->Persona->RolDeLider->find('list', ['limit' => 200])->all();
        $comision = $this->Persona->Comision->find('list', ['limit' => 200])->all();
        $unidadAcademica = $this->Persona->UnidadAcademica->find('list', ['limit' => 200])->all();
        $this->set(compact('persona', 'tipoDeIdentificacion', 'rolDeLider', 'comision', 'unidadAcademica'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $tipoDeIdentificacion = $this->Persona->TipoDeIdentificacion->find('list', ['limit' => 200])->all();
        $rolDeLider = $this->Persona->RolDeLider->find('list', ['limit' => 200])->all();
        $comision = $this->Persona->Comision->find('list', ['limit' => 200])->all();
        $unidadAcademica = $this->Persona->UnidadAcademica->find('list', ['limit' => 200])->all();
        $this->set(compact('persona', 'tipoDeIdentificacion', 'rolDeLider', 'comision', 'unidadAcademica'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persona = $this->Persona->get($id);
        if ($this->Persona->delete($persona)) {
            $this->Flash->success(__('The persona has been deleted.'));
        } else {
            $this->Flash->error(__('The persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
