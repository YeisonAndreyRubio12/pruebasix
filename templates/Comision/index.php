<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comision[]|\Cake\Collection\CollectionInterface $comision
 */
?>
<div class="comision index content">
    <?= $this->Html->link(__('New Comision'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comision') ?></h3>
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
                <?php foreach ($comision as $comision): ?>
                <tr>
                    <td><?= $this->Number->format($comision->id) ?></td>
                    <td><?= h($comision->nombre) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comision->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comision->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comision->id)]) ?>
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
