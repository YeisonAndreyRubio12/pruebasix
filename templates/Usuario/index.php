<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 */
?>




<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <center><h2 class="usuario">USUARIOS ORI</h2> </center>
            <br/>
        </div>
    <?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add'], ['class' => 'btn btn-dark']) ?>
        <br/>
    <div class="table-responsive">
        <br/>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre',['Nombre']) ?></th>
                <th><?= $this->Paginator->sort('persona_id') ?></th>
                <th><?= $this->Paginator->sort('rol_id') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuario as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nombre) ?></td>
                    <td><?= $usuario->has('persona') ? $this->Html->link($usuario->persona->id, ['controller' => 'Persona', 'action' => 'view', $usuario->persona->id]) : '' ?></td>
                    <td><?= $usuario->has('rol_de_lider') ? $this->Html->link($usuario->rol_de_lider->id, ['controller' => 'RolDeLider', 'action' => 'view', $usuario->rol_de_lider->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $usuario->id],['class'=>'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id],['class'=>'btn btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $usuario->id], ['confirm' => __('¿Estas seguro de eliminar el usuario # {0}?', $usuario->id), 'class'=>'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers(['before'=>'', 'after'=>'']) ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
    </div>
</div>






