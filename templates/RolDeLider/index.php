<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolDeLider[]|\Cake\Collection\CollectionInterface $rolDeLider
 */
?>
<div class="rolDeLider index content">
    <?= $this->Html->link(__('New Rol De Lider'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rol De Lider') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rolDeLider as $rolDeLider): ?>
                <tr>
                    <td><?= $this->Number->format($rolDeLider->id) ?></td>
                    <td><?= h($rolDeLider->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rolDeLider->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolDeLider->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolDeLider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolDeLider->id)]) ?>
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
