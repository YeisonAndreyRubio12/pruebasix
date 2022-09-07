<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GestionDeConvenio $gestionDeConvenio
 * @var string[]|\Cake\Collection\CollectionInterface $persona
 * @var string[]|\Cake\Collection\CollectionInterface $convenio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gestionDeConvenio->usuario_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gestionDeConvenio->usuario_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Gestion De Convenio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gestionDeConvenio form content">
            <?= $this->Form->create($gestionDeConvenio) ?>
            <fieldset>
                <legend><?= __('Edit Gestion De Convenio') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
