<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GestionDeConvenio $gestionDeConvenio
 * @var \Cake\Collection\CollectionInterface|string[] $persona
 * @var \Cake\Collection\CollectionInterface|string[] $convenio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Gestion De Convenio'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gestionDeConvenio form content">
            <?= $this->Form->create($gestionDeConvenio) ?>
            <fieldset>
                <legend><?= __('Add Gestion De Convenio') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
