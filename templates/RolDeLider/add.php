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
            <?= $this->Html->link(__('List Rol De Lider'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rolDeLider form content">
            <?= $this->Form->create($rolDeLider) ?>
            <fieldset>
                <legend><?= __('Add Rol De Lider') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
