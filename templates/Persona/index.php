<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona[]|\Cake\Collection\CollectionInterface $persona
 */
?>
<div class="persona index content">
    <?= $this->Html->link(__('New Persona'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Persona') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_de_identificacion_id') ?></th>
                    <th><?= $this->Paginator->sort('numero_de_identificacion') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellido') ?></th>
                    <th><?= $this->Paginator->sort('rol_id') ?></th>
                    <th><?= $this->Paginator->sort('correo_electronico') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('comision_id') ?></th>
                    <th><?= $this->Paginator->sort('numero_de_horas') ?></th>
                    <th><?= $this->Paginator->sort('unidad_academica_id') ?></th>
                    <th><?= $this->Paginator->sort('dependencia') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($persona as $persona): ?>
                <tr>
                    <td><?= $this->Number->format($persona->id) ?></td>
                    <td><?= $persona->has('tipo_de_identificacion') ? $this->Html->link($persona->tipo_de_identificacion->id, ['controller' => 'TipoDeIdentificacion', 'action' => 'view', $persona->tipo_de_identificacion->id]) : '' ?></td>
                    <td><?= h($persona->numero_de_identificacion) ?></td>
                    <td><?= h($persona->nombre) ?></td>
                    <td><?= h($persona->apellido) ?></td>
                    <td><?= $persona->has('rol_de_lider') ? $this->Html->link($persona->rol_de_lider->id, ['controller' => 'RolDeLider', 'action' => 'view', $persona->rol_de_lider->id]) : '' ?></td>
                    <td><?= h($persona->correo_electronico) ?></td>
                    <td><?= h($persona->telefono) ?></td>
                    <td><?= $persona->has('comision') ? $this->Html->link($persona->comision->id, ['controller' => 'Comision', 'action' => 'view', $persona->comision->id]) : '' ?></td>
                    <td><?= $this->Number->format($persona->numero_de_horas) ?></td>
                    <td><?= $persona->has('unidad_academica') ? $this->Html->link($persona->unidad_academica->id, ['controller' => 'UnidadAcademica', 'action' => 'view', $persona->unidad_academica->id]) : '' ?></td>
                    <td><?= h($persona->dependencia) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $persona->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persona->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
