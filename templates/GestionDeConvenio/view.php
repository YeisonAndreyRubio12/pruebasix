<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GestionDeConvenio $gestionDeConvenio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gestion De Convenio'), ['action' => 'edit', $gestionDeConvenio->usuario_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gestion De Convenio'), ['action' => 'delete', $gestionDeConvenio->usuario_id], ['confirm' => __('Are you sure you want to delete # {0}?', $gestionDeConvenio->usuario_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gestion De Convenio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gestion De Convenio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gestionDeConvenio view content">
            <h3><?= h($gestionDeConvenio->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Persona') ?></th>
                    <td><?= $gestionDeConvenio->has('persona') ? $this->Html->link($gestionDeConvenio->persona->id, ['controller' => 'Persona', 'action' => 'view', $gestionDeConvenio->persona->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Convenio') ?></th>
                    <td><?= $gestionDeConvenio->has('convenio') ? $this->Html->link($gestionDeConvenio->convenio->id, ['controller' => 'Convenio', 'action' => 'view', $gestionDeConvenio->convenio->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
