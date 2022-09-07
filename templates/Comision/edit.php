<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comision $comision
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comision->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comision->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comision'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comision form content">
            <?= $this->Form->create($comision) ?>
            <fieldset>
                <legend><?= __('Edit Comision') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
