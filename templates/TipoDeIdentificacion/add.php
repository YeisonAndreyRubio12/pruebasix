<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoDeIdentificacion $tipoDeIdentificacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tipo De Identificacion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoDeIdentificacion form content">
            <?= $this->Form->create($tipoDeIdentificacion) ?>
            <fieldset>
                <legend><?= __('Add Tipo De Identificacion') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
