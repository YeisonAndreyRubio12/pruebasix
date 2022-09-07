<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadAcademica $unidadAcademica
 * @var string[]|\Cake\Collection\CollectionInterface $tipoDeUnidadAcademica
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unidadAcademica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unidadAcademica->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Unidad Academica'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unidadAcademica form content">
            <?= $this->Form->create($unidadAcademica) ?>
            <fieldset>
                <legend><?= __('Edit Unidad Academica') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('tipo_de_unidad_academica_id', ['options' => $tipoDeUnidadAcademica]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
