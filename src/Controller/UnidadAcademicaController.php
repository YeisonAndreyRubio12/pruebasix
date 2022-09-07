<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UnidadAcademica Controller
 *
 * @property \App\Model\Table\UnidadAcademicaTable $UnidadAcademica
 * @method \App\Model\Entity\UnidadAcademica[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidadAcademicaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoDeUnidadAcademica'],
        ];
        $unidadAcademica = $this->paginate($this->UnidadAcademica);

        $this->set(compact('unidadAcademica'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidad Academica id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidadAcademica = $this->UnidadAcademica->get($id, [
            'contain' => ['TipoDeUnidadAcademica', 'Persona'],
        ]);

        $this->set(compact('unidadAcademica'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidadAcademica = $this->UnidadAcademica->newEmptyEntity();
        if ($this->request->is('post')) {
            $unidadAcademica = $this->UnidadAcademica->patchEntity($unidadAcademica, $this->request->getData());
            if ($this->UnidadAcademica->save($unidadAcademica)) {
                $this->Flash->success(__('The unidad academica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidad academica could not be saved. Please, try again.'));
        }
        $tipoDeUnidadAcademica = $this->UnidadAcademica->TipoDeUnidadAcademica->find('list', ['limit' => 200])->all();
        $this->set(compact('unidadAcademica', 'tipoDeUnidadAcademica'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidad Academica id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidadAcademica = $this->UnidadAcademica->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidadAcademica = $this->UnidadAcademica->patchEntity($unidadAcademica, $this->request->getData());
            if ($this->UnidadAcademica->save($unidadAcademica)) {
                $this->Flash->success(__('The unidad academica has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidad academica could not be saved. Please, try again.'));
        }
        $tipoDeUnidadAcademica = $this->UnidadAcademica->TipoDeUnidadAcademica->find('list', ['limit' => 200])->all();
        $this->set(compact('unidadAcademica', 'tipoDeUnidadAcademica'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidad Academica id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidadAcademica = $this->UnidadAcademica->get($id);
        if ($this->UnidadAcademica->delete($unidadAcademica)) {
            $this->Flash->success(__('The unidad academica has been deleted.'));
        } else {
            $this->Flash->error(__('The unidad academica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
