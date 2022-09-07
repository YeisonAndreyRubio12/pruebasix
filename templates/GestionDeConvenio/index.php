<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GestionDeConvenio[]|\Cake\Collection\CollectionInterface $gestionDeConvenio
 */
?>
<div class="gestionDeConvenio index content">
    <?= $this->Html->link(__('New Gestion De Convenio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Gestion De Convenio') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('convenio_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gestionDeConvenio as $gestionDeConvenio): ?>
                <tr>
                    <td><?= $gestionDeConvenio->has('persona') ? $this->Html->link($gestionDeConvenio->persona->id, ['controller' => 'Persona', 'action' => 'view', $gestionDeConvenio->persona->id]) : '' ?></td>
                    <td><?= $gestionDeConvenio->has('convenio') ? $this->Html->link($gestionDeConvenio->convenio->id, ['controller' => 'Convenio', 'action' => 'view', $gestionDeConvenio->convenio->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gestionDeConvenio->usuario_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gestionDeConvenio->usuario_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gestionDeConvenio->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gestionDeConvenio->usuario_id)]) ?>
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
