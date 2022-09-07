<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GestionDeConvenio Controller
 *
 * @property \App\Model\Table\GestionDeConvenioTable $GestionDeConvenio
 * @method \App\Model\Entity\GestionDeConvenio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GestionDeConvenioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Persona', 'Convenio'],
        ];
        $gestionDeConvenio = $this->paginate($this->GestionDeConvenio);

        $this->set(compact('gestionDeConvenio'));
    }

    /**
     * View method
     *
     * @param string|null $id Gestion De Convenio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gestionDeConvenio = $this->GestionDeConvenio->get($id, [
            'contain' => ['Persona', 'Convenio'],
        ]);

        $this->set(compact('gestionDeConvenio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gestionDeConvenio = $this->GestionDeConvenio->newEmptyEntity();
        if ($this->request->is('post')) {
            $gestionDeConvenio = $this->GestionDeConvenio->patchEntity($gestionDeConvenio, $this->request->getData());
            if ($this->GestionDeConvenio->save($gestionDeConvenio)) {
                $this->Flash->success(__('The gestion de convenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gestion de convenio could not be saved. Please, try again.'));
        }
        $persona = $this->GestionDeConvenio->Persona->find('list', ['limit' => 200])->all();
        $convenio = $this->GestionDeConvenio->Convenio->find('list', ['limit' => 200])->all();
        $this->set(compact('gestionDeConvenio', 'persona', 'convenio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gestion De Convenio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gestionDeConvenio = $this->GestionDeConvenio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gestionDeConvenio = $this->GestionDeConvenio->patchEntity($gestionDeConvenio, $this->request->getData());
            if ($this->GestionDeConvenio->save($gestionDeConvenio)) {
                $this->Flash->success(__('The gestion de convenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gestion de convenio could not be saved. Please, try again.'));
        }
        $persona = $this->GestionDeConvenio->Persona->find('list', ['limit' => 200])->all();
        $convenio = $this->GestionDeConvenio->Convenio->find('list', ['limit' => 200])->all();
        $this->set(compact('gestionDeConvenio', 'persona', 'convenio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gestion De Convenio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gestionDeConvenio = $this->GestionDeConvenio->get($id);
        if ($this->GestionDeConvenio->delete($gestionDeConvenio)) {
            $this->Flash->success(__('The gestion de convenio has been deleted.'));
        } else {
            $this->Flash->error(__('The gestion de convenio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
