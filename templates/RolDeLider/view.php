<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RolDeLider $rolDeLider
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rol De Lider'), ['action' => 'edit', $rolDeLider->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rol De Lider'), ['action' => 'delete', $rolDeLider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolDeLider->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rol De Lider'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rol De Lider'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolDeLider view content">
            <h3><?= h($rolDeLider->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($rolDeLider->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rolDeLider->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
