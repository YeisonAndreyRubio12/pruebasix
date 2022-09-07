<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 * @var \Cake\Collection\CollectionInterface|string[] $tipoDeIdentificacion
 * @var \Cake\Collection\CollectionInterface|string[] $rolDeLider
 * @var \Cake\Collection\CollectionInterface|string[] $comision
 * @var \Cake\Collection\CollectionInterface|string[] $unidadAcademica
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Persona'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="persona form content">
            <?= $this->Form->create($persona) ?>
            <fieldset>
                <legend><?= __('Add Persona') ?></legend>
                <?php
                    echo $this->Form->control('tipo_de_identificacion_id', ['options' => $tipoDeIdentificacion]);
                    echo $this->Form->control('numero_de_identificacion');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('rol_id', ['options' => $rolDeLider]);
                    echo $this->Form->control('correo_electronico');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('comision_id', ['options' => $comision]);
                    echo $this->Form->control('numero_de_horas');
                    echo $this->Form->control('unidad_academica_id', ['options' => $unidadAcademica]);
                    echo $this->Form->control('dependencia');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
